<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Support\Collection;

class CategoryRepository
{
    public function getAll(): Collection
    {
        return Category::query()->get();
    }

    public function create(array $data): Category
    {
        return Category::query()->create($data);
    }

    public function update(Category $category, array $data): bool
    {
        return $category->update($data);
    }

    public function delete(Category $category): void
    {
        $category->delete();
    }

    public function find(int $id): Category
    {
        return Category::query()->findOrFail($id);
    }
}
