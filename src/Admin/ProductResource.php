<?php

namespace App\Admin;

use App\Entity\Product\Product;
use App\Repository\Product\ProductRepository;
use Infinity\Entity\AbstractResource;
use Infinity\Entity\Attribute\AsResource;
use Infinity\Navigation\Attribute\Group;
use Infinity\Navigation\Attribute\Index;
use Symfony\Component\HttpFoundation\Request;

#[Index]
#[Group('product', 'Products')]
#[AsResource(Product::class)]
class ProductResource extends AbstractResource
{
    public function __construct(
        private readonly ProductRepository $repository
    ) {
    }

    public function display(Request $request): bool
    {
        return true;
    }

    public function describers(): iterable
    {
        return [];
    }
}