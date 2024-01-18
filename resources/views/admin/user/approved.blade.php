@extends('admin.layout.app')
@section('content')
    <div class="content-body">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li>
                    <h5 class="bc-title">{{ env('APP_NAME') }}</h5>
                </li>
                <li class="breadcrumb-item active">{{ auth()->user()->name }} Welcome to Admin Dashboard!</li>
            </ol>
        </div>
        <div class="container-fluid">
            <div class="element-area">
                <div class="demo-view">
                    <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card dz-card" id="accordion-one">
                                    <div class="card-header flex-wrap">
                                        <div>
                                            <h4 class="card-title">Approved Users</h4>
                                        </div>
                                    </div>
                                    <!--tab-content-->
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="card-body pt-0">
                                                <div class="table-responsive">
                                                    <table id="example" class="display table">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Email</th>
                                                                <th>Balance</th>
                                                                <th>Referral</th>
                                                                <th>Plan</th>
                                                                <th>Sender Name</th>
                                                                <th>Sender Number</th>
                                                                <th>Trx Id</th>
                                                                <th>Screen Shot</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @forelse ($users as $item)
                                                                <tr>
                                                                    <td>{{ $item->name }}</td>
                                                                    <td>{{ $item->email }}</td>
                                                                    <td>{{ $item->balance }}</td>
                                                                    <td>{{ $item->referral }}</td>
                                                                    <td>{{ $item->trxIds->plan ?? 'UnPaid' }}</td>
                                                                    <td>{{ $item->trxIds->sender_name ?? 'UnPaid' }}
                                                                    </td>
                                                                    <td>{{ $item->trxIds->sender_number ?? 'UnPaid' }}
                                                                    </td>
                                                                    <td>{{ $item->trxIds->trx_id ?? 'UnPaid' }}</td>
                                                                    <td>
                                                                        @if ($item->profile && $item->trxIds->screen_shot)
                                                                            <img src="{{ asset('images/' . $item->trxIds->screen_shot ?? 'UnPaid') }}"
                                                                                class="img-fluid" height="100px"
                                                                                width="100px" alt="UnPaid">
                                                                        @else
                                                                            <p>NO Image</p>
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <a href="{{ route('Admin.Make.Withdraw.Approve', $item->id) }}"
                                                                            class="btn btn-sm btn-success">Approve</a>
                                                                        <a href="{{ route('Admin.Make.Withdraw.Reject', $item->id) }}"
                                                                            class="btn btn-sm btn-danger">Reject</a>
                                                                    </td>
                                                                </tr>

                                                            @empty
                                                            @endforelse
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Email</th>
                                                                <th>Balance</th>
                                                                <th>Referral</th>
                                                                <th>Plan</th>
                                                                <th>Sender Name</th>
                                                                <th>Sender Number</th>
                                                                <th>Trx Id</th>
                                                                <th>Screen Shot</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
