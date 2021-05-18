<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    private $pageData;
    private $breadcrumbItems = [
        'dashboard' => ['link' => '/admin', 'title' => 'Dashboard'],
        'stores_index' => ['link' => '/admin/stores', 'title' => 'Stores'],
        'products_index' => ['link' => '/admin/products', 'title' => 'Products'],
        'products_create' => ['link' => '/admin/products/create', 'title' => 'Create'],
    ];
    public function __construct()
    {
        $this->pageData = [
            'pageTitle'     => 'Dashboard',
            'breadcrumbs'   => []
        ];
    }

    public function admin() {
        $this->pageData['breadcrumbs'] = [$this->breadcrumbItems['dashboard']];
        return view('admin.pages.dashboard', $this->pageData);
    }

    public function storesIndex() {
        $this->pageData['breadcrumbs'] = [
            $this->breadcrumbItems['dashboard'],
            $this->breadcrumbItems['stores_index']
        ];
        $this->pageData['pageTitle'] = 'Stores'; 
        return view('admin.pages.stores.index', $this->pageData);
    }

    public function productsIndex() {
        $this->pageData['breadcrumbs'] = [
            $this->breadcrumbItems['dashboard'],
            $this->breadcrumbItems['products_index']
        ];
        $this->pageData['pageTitle'] = 'Products'; 
        return view('admin.pages.products.index', $this->pageData);
    }

    public function productsCreate() {
        $this->pageData['breadcrumbs'] = [
            $this->breadcrumbItems['dashboard'],
            $this->breadcrumbItems['products_index'],
            $this->breadcrumbItems['products_create'],
        ];
        $this->pageData['pageTitle'] = 'New Product'; 
        return view('admin.pages.products.create', $this->pageData);
    }
}
