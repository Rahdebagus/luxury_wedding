<?php

namespace App\Services;

use App\Models\Comment;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

/**
 * Class ProductService.
 */
class CommentService
{
    public function list(int $perPage = 10): LengthAwarePaginator
    {
        return Comment::latest()->paginate($perPage);
    }

    public function find(int $id): Comment
    {
        return Comment::findOrFail($id);
    }

    public function store(array $data): Comment
    {
        return Comment::create($data);
    }

    public function update(int $id, array $data): Comment
    {
        $comment = $this->find($id);
        $comment->update($data);
        return $comment;
    }

    public function delete(int $id): void
    {
        $this->find($id)->delete();
    }
}