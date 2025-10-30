<?php

namespace App\Services\Category;

use App\Models\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Support\Collection;

readonly class CategoryService
{
    public function __construct(private CategoryRepository $categoryRepository)
    {
    }

    public function getAll(): Collection
    {
        return $this->categoryRepository->getAll();
    }

    public function create(array $data): Category
    {
        return $this->categoryRepository->create($data);
    }

    public function update(int $categoryId, array $data): bool
    {
        $category = $this->categoryRepository->find($categoryId);
        return $this->categoryRepository->update($category, $data);
    }

    public function find(int $categoryId): Category
    {
        return $this->categoryRepository->find($categoryId);
    }
    /**
     * @throws \Exception
     */
    public function delete(int $categoryId): void
    {
        try {
        $category = $this->categoryRepository->find($categoryId);
        $this->categoryRepository->delete($category);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
