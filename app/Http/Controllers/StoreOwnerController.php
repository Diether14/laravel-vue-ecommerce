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
        'transactions_index' => ['link' => '/store-owner/transactions', 'title' => 'Transactions'],
        'cancellations_index' => ['link' => '/store-owner/cancellations', 'title' => 'Cancellations'],
        'orders_index' => ['link' => '/store-owner/orders', 'title' => 'Orders'],
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

    public function transactionsIndex() {
        $this->pageData['breadcrumbs'] = [
            $this->breadcrumbItems['dashboard'],
            $this->breadcrumbItems['transactions_index']
        ];
        $this->pageData['pageTitle'] = 'Transactions'; 
        return view('store_owner.pages.transactions.index', $this->pageData);
    }

    public function cancellationsIndex() {
        $this->pageData['breadcrumbs'] = [
            $this->breadcrumbItems['dashboard'],
            $this->breadcrumbItems['cancellations_index']
        ];
        $this->pageData['pageTitle'] = 'Cancellations'; 
        return view('store_owner.pages.transactions.cancellations', $this->pageData);
    }

    public function ordersIndex() {
        $this->pageData['breadcrumbs'] = [
            $this->breadcrumbItems['dashboard'],
            $this->breadcrumbItems['orders_index']
        ];
        $this->pageData['pageTitle'] = 'Orders'; 
        return view('store_owner.pages.transactions.orders', $this->pageData);
    }
}
