<div class="modal fade" id="modal_add_flower" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-600px">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <h5 class="modal-title">Tambah Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="form_add_flower">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label required">Nama Produk</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label required">Stok</label>
                        <input type="number" name="stock" class="form-control" value="0" min="0"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label required">Harga Dasar</label>
                        <input type="number" name="base_price" class="form-control" step="0.01" min="0"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label required">Status</label>
                        <select name="status" class="form-select" required>
                            <option value="Tersedia">Tersedia</option>
                            <option value="PO">PO</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
        $('#form_add_flower').on('submit', function(e) {
            e.preventDefault();
            const formData = $(this).serialize();
            $.ajax({
                url: "{{ route('flower.store') }}",
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    toastr.success(data.message, 'Sukses!');
                    $('#modal_add_flower').modal('hide');
                    $('#form_add_flower')[0].reset();
                    flowerTable.draw();
                },
                error: function(xhr) {
                    const res = xhr.responseJSON;
                    toastr.error(res?.message || 'Terjadi kesalahan', 'Gagal');
                }
            });
        });
    });
</script>
