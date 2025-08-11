<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;    
use App\Services\CommentService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CommentController extends Controller
{
    public function __construct(private CommentService $svc) {}

    // Halaman buku tamu (Blade)
    public function index()
    {
        return view('invitation.comments.index');
    }

    // API: list komentar (JSON)
    public function list(Request $r)
    {
        $perPage = (int)($r->get('per_page', 10));
        return response()->json($this->svc->list($perPage));
    }

    // API: tambah
    public function store(Request $r)
    {
        $data = $r->validate([
            'name'       => ['required','string','max:100'],
            'attendance' => ['required', Rule::in(['hadir','tidak_hadir','ragu'])],
            'message'    => ['required','string','max:1000'],
        ]);
        $c = $this->svc->store($data);
        return response()->json($c, 201);
    }

    // API: detail (opsional)
    public function show(int $id)
    {
        return response()->json($this->svc->find($id));
    }

    // API: update
    public function update(Request $r, int $id)
    {
        $data = $r->validate([
            'name'       => ['sometimes','required','string','max:100'],
            'attendance' => ['sometimes','required', Rule::in(['hadir','tidak_hadir','ragu'])],
            'message'    => ['sometimes','required','string','max:1000'],
        ]);
        return response()->json($this->svc->update($id, $data));
    }

    // API: hapus
    public function destroy(int $id)
    {
        $this->svc->delete($id);
        return response()->json(['ok' => true]);
    }
}
