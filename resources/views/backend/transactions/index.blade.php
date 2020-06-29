@extends('layout.base')


@section('content')


<div class="account-pages my-5">
    <div class="container-fluid">
        <div class="row-justify-content-center">
            <div class="h2"><i data-feather="file-text" class="icon-dual"></i> Transaction Center</div>

            <div class="col-xl-12 col-md-12 col-sm-6 pt-5">
                <div class="card">

                    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        {{-- <h4 class="header-title mt-0 mb-1">Basic Data Table</h4> --}}
                                            <p class="sub-header">
                                           Find Transaction
                                                </p>
                                            <div class="container-fluid">
                                                <div class="row">

                                            <div class="form-group col-lg-4 mt-4">
                                                <div class="row">
                                                <label class="form-control-label">Transaction Reference Id</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="lock"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" >
                                                </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-4 mt-4">
                                                <label class="form-control-label">Customer Reference</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="lock"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="password" >
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-4 mt-4">
                                                <label class="form-control-label">Transaction Type</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        
                                                    </div>
                                                    <select id="phone" class="form-control">
                                                        <option></option>
                                                        <option>Receivables</option>
                                                        <option>Paid</option>
                                                        <option>Debt</option>
                                                    </select>


                                                </div>
                                            </div>
                                            
                                                <button type="button" class="btn btn-primary">Search</button>
                                                </div>


                                            </div>
                                            
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>

                    <div class="card-header">
                        <div class="h5">All Transactions</div>
                    </div>

                    <div class="card-body p-1">
                        <div class="table-responsive table-data">
                            <table id="basic-datatable" class="table dt-responsive nowrap">

                                <thead>
                                    <tr>
                                        <th>Ref Id</th>
                                        <th>Ref Transaction Type</th>
                                        <th>Customer Ref Code</th>
                                        <th>Amount</th>
                                        <th>Expected Pay Date</th>
                                        <th>View more</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @foreach ($transactions as $transaction)
                                    <tr>
                                        <td>{{ $transaction->ts_ref_id }}</td>
                                        <td>{{ $transaction->ref_transaction_type }}</td>
                                        <td>{{ $transaction->customer_ref_code }}</td>
                                        <td>&#36; {{ $transaction->amount }}</td>
                                        <td>{{ date('d M Y', strtotime($transaction->expected_pay_date)) }}</td>
                                        <td><a href="{{ route('transaction.show', $transaction->id) }}"><i data-feather="eye"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection
