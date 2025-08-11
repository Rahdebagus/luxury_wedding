function onReady(fn) {
    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", fn, { once: true });
    } else {
        fn();
    }
}

// --- SLIDESHOW BG FADE ---
onReady(() => {
    const bgA = document.querySelector(".hero-bg.bg-a");
    const bgB = document.querySelector(".hero-bg.bg-b");
    if (!bgA || !bgB) return;

    const photos = ["../img/Bersama_1.jpg", "../img/Bersama_3.jpg"];

    photos.forEach((src) => {
        const i = new Image();
        i.src = src;
    });

    let current = 0,
        topIsA = true;
    const swap = () => {
        const next = (current + 1) % photos.length;
        const top = topIsA ? bgA : bgB;
        const back = topIsA ? bgB : bgA;

        back.src = photos[next];
        back.classList.remove("hidden");
        top.classList.add("hidden");

        current = next;
        topIsA = !topIsA;
        if (window.AOS) AOS.refresh();
    };

    bgA.classList.remove("hidden");
    bgB.classList.add("hidden");
    setInterval(swap, 5000);
});

(function () {
    const header = document.getElementById("siteHeader");
    if (!header) return;

    let lastY = window.scrollY;
    let ticking = false;

    function onScroll() {
        const y = window.scrollY;

        // tambahkan shadow state ketika mulai scroll
        if (y > 4) header.classList.add("scrolled");
        else header.classList.remove("scrolled");

        // sembunyi kalau scroll ke bawah, tampil lagi kalau scroll ke atas
        if (y > lastY + 5) {
            // scroll down (dengan threshold 5px)
            header.classList.add("hide");
        } else if (y < lastY - 5) {
            // scroll up
            header.classList.remove("hide");
        }
        lastY = y;
        ticking = false;
    }

    window.addEventListener(
        "scroll",
        () => {
            if (!ticking) {
                requestAnimationFrame(onScroll);
                ticking = true;
            }
        },
        { passive: true }
    );
})();

document
    .getElementById("open-invitation-btn")
    ?.addEventListener("click", function (e) {
        e.preventDefault();

        const hero = document.getElementById("hero");
        if (hero) {
            hero.classList.add("fade-out");
            setTimeout(() => {
                window.location.href = "invitation";
            }, 700); // sesuai durasi animasi fadeOut
        } else {
            // fallback langsung pindah
            window.location.href = "invitation";
        }
    });

document.addEventListener("DOMContentLoaded", () => {
    document.documentElement.style.scrollBehavior = "smooth";

    // Motion Blur
    let lastY = window.scrollY;
    let blurTimeout;
    let ticking = false;

    function updateBlur() {
        const currentY = window.scrollY;
        const delta = Math.abs(currentY - lastY);
        const blurPx = Math.min(delta / 30, 8);

        document.querySelectorAll("section").forEach((sec) => {
            if (sec.classList.contains("no-blur")) return; // ⟵ jangan blur form
            sec.style.filter = `blur(${blurPx}px)`;
        });

        lastY = currentY;
        ticking = false;

        clearTimeout(blurTimeout);
        blurTimeout = setTimeout(() => {
            document.querySelectorAll("section").forEach((sec) => {
                if (sec.classList.contains("no-blur")) return;
                sec.style.filter = "";
            });
        }, 200);
    }
    window.addEventListener("scroll", () => {
        if (!ticking) {
            window.requestAnimationFrame(updateBlur);
            ticking = true;
        }
    });

    // Smooth scroll for internal links
    document.querySelectorAll('a[href^="#"]').forEach((link) => {
        link.addEventListener("click", (e) => {
            const id = link.getAttribute("href").slice(1);
            const target = document.getElementById(id);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: "smooth" });
            }
        });
    });

    // Countdown Timer
    const targetDate = new Date(2025, 7, 20, 0, 0, 0); // August 6, 2025 at 00:00:00
    let intervalId;

    function updateCountdown() {
        const now = new Date();
        const diff = targetDate - now;

        if (diff <= 0) {
            clearInterval(intervalId);
            ["days", "hours", "minutes", "seconds"].forEach((id) => {
                const el = document.getElementById(id);
                if (el) el.textContent = "0";
            });
            return;
        }

        const days = Math.floor(diff / (1000 * 60 * 60 * 24));
        const hours = Math.floor(
            (diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((diff % (1000 * 60)) / 1000);

        const mappings = { days, hours, minutes, seconds };
        Object.entries(mappings).forEach(([id, value]) => {
            const el = document.getElementById(id);
            if (el) el.textContent = value;
        });
    }

    updateCountdown();
    intervalId = setInterval(updateCountdown, 1000);

    // Dark Mode Toggle
    const toggle = document.getElementById("theme-toggle");
    const body = document.body;
    const icon = toggle?.querySelector("i");

    if (localStorage.getItem("theme") === "dark") {
        body.setAttribute("data-theme", "dark");
        icon?.classList.replace("fa-moon", "fa-sun");
    }

    toggle?.addEventListener("click", () => {
        const isDark = body.getAttribute("data-theme") === "dark";
        body.setAttribute("data-theme", isDark ? "light" : "dark");
        icon?.classList.toggle("fa-moon");
        icon?.classList.toggle("fa-sun");
        localStorage.setItem("theme", isDark ? "light" : "dark");
    });

    // Music Player
    const musicElem = document.getElementById("bg-music");
    const btnMusic = document.getElementById("music-toggle");
    const iconMusic = btnMusic?.querySelector("i");

    if (musicElem && btnMusic && iconMusic) {
        musicElem.muted = false;
        musicElem
            .play()
            .then(() => {
                iconMusic.classList.replace("fa-volume-mute", "fa-volume-up");
            })
            .catch(() => {
                musicElem.muted = true;
                iconMusic.classList.replace("fa-volume-up", "fa-volume-mute");
            });

        btnMusic.addEventListener("click", (e) => {
            e.preventDefault();
            if (musicElem.paused) {
                musicElem.muted = false;
                musicElem.play();
                iconMusic.classList.replace("fa-volume-mute", "fa-volume-up");
            } else {
                musicElem.pause();
                iconMusic.classList.replace("fa-volume-up", "fa-volume-mute");
            }
        });
    }

    // GLightbox — sudah ada tombol X & navigasi slide
    if (typeof GLightbox !== "undefined") {
        GLightbox({
            selector: ".glightbox",
            touchNavigation: true,
            loop: true,
            openEffect: "zoom",
            closeEffect: "fade",
            slideEffect: "slide",
            moreText: "Selanjutnya",
        });
    }
});

document.addEventListener("DOMContentLoaded", () => {
    new Typed("#typed-text", {
        strings: [
            "Atas Asung Kertha Wara Nugraha Ida Sang Hyang Widhi Wasa/Tuhan Yang Maha Esa, kami bermaksud melaksanakan upacara Mesangih (Potong Gigi) putra dan putri kami.",
            // Baris kedua: ajakan hadir
        ],
        typeSpeed: 40,
        backSpeed: 0,
        startDelay: 500,
        showCursor: false,
        smartBackspace: true,
    });
});

// scrollRestoration
// Mengatur scrollRestoration untuk mencegah scroll otomatis saat navigasi
if ("scrollRestoration" in history) {
    history.scrollRestoration = "manual";
}

// Begitu halaman selesai load, scroll ke invitation-section
window.addEventListener("load", () => {
    const inv = document.querySelector(".invitation-section");
    if (inv) {
        // Kalau kamu mau smooth scroll, ganti behavior jadi 'smooth'
        inv.scrollIntoView({ behavior: "auto", block: "start" });
    }
});

document.addEventListener("DOMContentLoaded", () => {
    const navLinks = document.querySelectorAll(".bottom-nav .nav-item");
    const sections = Array.from(navLinks).map((link) => {
        const id = link.getAttribute("href").slice(1);
        return document.getElementById(id);
    });

    function onScroll() {
        const scrollY = window.pageYOffset;
        sections.forEach((sec, i) => {
            if (!sec) return;
            const top = sec.offsetTop - 80; // offset agar aktif sedikit lebih awal
            const bottom = top + sec.offsetHeight;
            if (scrollY >= top && scrollY < bottom) {
                navLinks[i].classList.add("active");
            } else {
                navLinks[i].classList.remove("active");
            }
        });
    }

    window.addEventListener("scroll", onScroll, { passive: true });
    // trigger sekali supaya set awal
    onScroll();
});

// Swiper hero
const heroSwiper = new Swiper(".hero-swiper", {
    loop: true,
    speed: 700,
    autoplay: { delay: 3000, disableOnInteraction: false },
    pagination: { el: ".swiper-pagination", clickable: true },
    // navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' }, // kalau dipakai
    effect: "slide", // bisa 'fade' juga
    on: {
        init() {
            // Pastikan AOS menghitung posisi elemen slide
            if (window.AOS) AOS.refreshHard();
        },
        slideChangeTransitionEnd() {
            // retrigger animasi AOS ketika slide aktif berubah
            if (window.AOS) AOS.refreshHard();
        },
    },
});
