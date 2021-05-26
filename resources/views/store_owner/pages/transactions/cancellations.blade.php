@extends('store_owner.layout.app')

@section('content')
    <div class="card">
        <div class="card-body p-0">
            <table class="table" id="owner-cancellations-table">
                <thead>
                    <tr>
                        <th class="th-cancellation-img"></th>
                        <th class="th-cancellation-customer">Customer</th>
                        <th class="th-cancellation-total">Total</th>
                        <th class="th-cancellation-status">Status</th>
                        <th class="th-cancellation-reason">Reason</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="td-cancellation-img"><img src="{{asset('img/product-1.jpg')}}" alt=""></td>
                        <td class="td-cancellation-customer">Diether Llenares</td>
                        <td class="td-cancellation-total">P1,234</td>
                        <td class="td-cancellation-status"><span class="trans-stat cancelled">Cancelled</span></td>
                        <td class="td-cancellation-reason">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque, rerum.</td>
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
