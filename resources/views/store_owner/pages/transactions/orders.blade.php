@extends('store_owner.layout.app')

@section('content')
    <div class="card">
        <div class="card-body p-0">
            <table class="table" id="owner-transactions-table">
                <thead>
                    <tr>
                        <th class="th-transaction-img"></th>
                        <th class="th-transaction-customer">Customer</th>
                        <th class="th-transaction-total">Total</th>
                        <th class="th-transaction-status">Status</th>
                        <th class="th-transaction-actions">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="td-transaction-img"><img src="{{asset('img/product-1.jpg')}}" alt=""></td>
                        <td class="td-transaction-customer">Diether Llenares</td>
                        <td class="td-transaction-total">P1,234</td>
                        <td class="td-transaction-status"><span class="trans-stat to-pack">To Pack</span></td>
                        <td class="td-transaction-actions">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-danger btn-inline-block btn-flat btn-sm" data-toggle="modal" data-target="#rejectTransactionModal"><i
                                        class="fas fa-trash"></i> Reject</button>
                                <button type="button" class="btn btn-success btn-inline-block btn-flat btn-sm"><i
                                    class="fas fa-box"></i> Packed</button>
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
    <div class="modal fade modal-danger" tabindex="-1" role="dialog" id="rejectTransactionModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Rejection</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>You're about to Reject Transaction #12345</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger">Confirm</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
