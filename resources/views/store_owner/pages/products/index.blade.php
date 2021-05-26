@extends('store_owner.layout.app')

@section('content')
    <div class="w-100 text-right container pt-1 mb-2">
        <a href="{{ route('owner.products.create') }}" type="button" class="btn btn-success btn-flat"><i
                class="fas fa-plus"></i> Create</a>
    </div>
    <div class="card">
        <div class="card-body p-0">
            <table class="table" id="owner-product-table">
                <thead>
                    <tr>
                        <th class="th-product-img"></th>
                        <th class="th-product-name">Name</th>
                        <th class="th-product-price">Price</th>
                        <th class="th-product-stocks">Stocks</th>
                        <th class="th-product-actions">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="td-product-img"><img src="{{asset('img/product-1.jpg')}}" alt=""></td>
                        <td class="td-product-name">Test Product</td>
                        <td class="td-product-price">100</td>
                        <td class="td-product-stocks">100</td>
                        <td class="td-product-actions">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary btn-inline-block btn-flat btn-sm"><i
                                        class="fas fa-eye"></i> View</button>
                                <a href="{{ route('owner.products.showUpdateForm', 1) }}" type="button"
                                    class="btn btn-info btn-inline-block btn-flat btn-sm"><i class="fas fa-edit"></i>
                                    Edit</a>
                                <button type="button" class="btn btn-danger btn-inline-block btn-flat btn-sm" data-toggle="modal" data-target="#deleteProductModal"><i
                                        class="fas fa-trash"></i> Delete</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

@section('modals')
    <div class="modal fade modal-danger" tabindex="-1" role="dialog" id="deleteProductModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Deletion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>You're about to delete product: Test Product</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger">Confirm</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
