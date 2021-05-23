<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreOwnerController extends Controller
{
    private $pageData;
    private $breadcrumbItems = [
        'dashboard' => ['link' => '/store-owner', 'title' => 'Dashboard'],
        'stores_index' => ['link' => '/store-owner/stores', 'title' => 'Stores'],
        'products_index' => ['link' => '/store-owner/products', 'title' => 'Products'],
        'products_create' => ['link' => '/store-owner/products/create', 'title' => 'Create'],
        'products_update' => ['link' => '/store-owner/products/update', 'title' => 'Update'],
    ];
    public function __construct()
    {
        $this->pageData = [
            'pageTitle'     => 'Dashboard',
            'breadcrumbs'   => []
        ];
    }

    public function index() {
        $this->pageData['breadcrumbs'] = [$this->breadcrumbItems['dashboard']];
        return view('store_owner.pages.dashboard', $this->pageData);
    }

    public function productsIndex() {
        $this->pageData['breadcrumbs'] = [
            $this->breadcrumbItems['dashboard'],
            $this->breadcrumbItems['products_index']
        ];
        $this->pageData['pageTitle'] = 'Products'; 
        return view('store_owner.pages.products.index', $this->pageData);
    }

    public function showProductCreateForm() {
        $this->pageData['breadcrumbs'] = [
            $this->breadcrumbItems['dashboard'],
            $this->breadcrumbItems['products_index'],
            $this->breadcrumbItems['products_create'],
        ];
        $this->pageData['pageTitle'] = 'New Product'; 
        return view('store_owner.pages.products.create', $this->pageData);
    }

    public function showProductUpdateForm() {
        $this->pageData['breadcrumbs'] = [
            $this->breadcrumbItems['dashboard'],
            $this->breadcrumbItems['products_index'],
            $this->breadcrumbItems['products_update'],
        ];
        $this->pageData['pageTitle'] = 'New Product'; 
        return view('store_owner.pages.products.update', $this->pageData);
    }
}
