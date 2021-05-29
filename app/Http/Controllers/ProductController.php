<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\ProductInterface;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    private $repo;

    public function __construct(ProductInterface $repo)
    {
        $this->repo = $repo;
    }

    public function create(CreateProductRequest $request) {
        $validated = $request->validated();
        $res = $this->repo->create($validated);
        return response(json_encode($res), $res['code']);
    }

    public function update($id, UpdateProductRequest $request) {
        $validated = $request->validated();
        $res = $this->repo->update($id, $validated);
        return response(json_encode($res), $res['code']);
    }

    public function showProductDetails()
    {
        echo view('pages.products.details');
    }

    public function getAll() {
        $res = $this->repo->getAll(['assoc' => ['productPhotos']]);
        return response(json_encode($res), $res['code']);
    }

    public function getByID($id) {
        $res = $this->repo->getByID($id, ['assoc' => ['productPhotos']]);
        return response(json_encode($res), $res['code']);
    }

    public function destroy($id) {
        $res = $this->repo->destroy($id);
        return response(json_encode($res), $res['code']);
    }
}
