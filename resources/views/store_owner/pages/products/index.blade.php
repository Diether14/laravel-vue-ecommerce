@extends('store_owner.layout.app')

@section('content')
    <div class="w-100 text-right container-fluid pt-1 mb-2">
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
                    {{-- <tr>
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
                    </tr> --}}
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

@section('modals')
    <div class="modal fade modal-danger" tabindex="-1" role="dialog" id="deleteProductModal" data-id="">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Deletion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>You're about to delete product</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger confirm-delete">Confirm</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    $(document).ready(() => {
        const Product = {
            get: () => {
                return new Promise((resolve, reject) => {
                    $.ajax({
                        url: '/owner/api/products',
                        method: 'GET',
                        success: (res) => {
                            resolve(res);
                        }
                    });
                });
            },
            showAll: async () => {
                const product = JSON.parse(await Product.get());
                console.log(product);
                if (product.data.length > 0) {
                    for (let i = 0; i < product.data.length; i++) {
                        const data = `<tr>
                                        <td class="td-product-img"><img src="/storage/${product.data[i].product_photos[0].photo}" style="height: 100px; width: 100px; object-fit: cover;" alt=""></td>
                                        <td class="td-product-name font-weight-bold">${product.data[i].name}</td>
                                        <td class="td-product-price font-weight-bold">PHP ${product.data[i].price}</td>
                                        <td class="td-product-stocks">${product.data[i].stocks}</td>
                                        <td class="td-product-actions">
                                            <div class="col-md-6">
                                                <button type="button" class="btn btn-primary btn-inline-block btn-flat btn-sm"><i
                                                        class="fas fa-eye"></i> View</button>
                                                <a href="/owner/products/update/${product.data[i].id}" type="button"
                                                    class="btn btn-info btn-inline-block btn-flat btn-sm"><i class="fas fa-edit"></i>
                                                    Edit</a>
                                                <button type="button" data-id="${product.data[i].id}" class="btn btn-danger btn-inline-block btn-flat btn-sm product-delete"><i
                                                        class="fas fa-trash"></i> Delete</button>
                                            </div>
                                        </td>
                                    </tr>`;
                        $('#owner-product-table tbody').append(data);
                    }
                }
            },
            confirmDelete: (e) => {
                const id = $(e.currentTarget).attr('data-id');
                $('#deleteProductModal').attr('data-id', id);
                $('#deleteProductModal').modal('show');
            },
            delete: (e) => {
                const id = $('#deleteProductModal').attr('data-id');
                $.ajax({
                    url: '/owner/api/products/'+id,
                    method: 'DELETE',
                    success: (res) => {
                        location.reload();
                    }
                });
            }
        };

        Product.showAll();
        $(document).on('click', '.product-delete', (e) => Product.confirmDelete(e));
        $(document).on('click', '.confirm-delete', (e) => Product.delete(e));

    });
</script>
@endsection


