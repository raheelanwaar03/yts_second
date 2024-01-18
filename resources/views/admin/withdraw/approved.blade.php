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
                                            <h4 class="card-title">Users Approved Withdraw's Requests</h4>
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
                                                                <th>Title</th>
                                                                <th>Amount</th>
                                                                <th>Account</th>
                                                                <th>Bank</th>
                                                                <th>Team</th>
                                                                <th>Pre Withdraw</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @forelse ($withdraws as $item)
                                                                <tr>
                                                                    <td>{{ $item->title }}</td>
                                                                    <td>{{ $item->amount }}</td>
                                                                    <td>{{ $item->account }}</td>
                                                                    <td>{{ $item->bank }}</td>
                                                                    <td>{{ $item->total_team }}</td>
                                                                    <td>{{ $item->pre_withdraw }}</td>
                                                                    <td>
                                                                        <a href="{{ route('Admin.Make.Withdraw.Pending', $item->id) }}"
                                                                            class="btn btn-sm btn-primary">Pending</a>
                                                                        <a href="{{ route('Admin.Make.Withdraw.Reject', $item->id) }}"
                                                                            class="btn btn-sm btn-danger">Reject</a>
                                                                    </td>
                                                                </tr>

                                                            @empty
                                                            @endforelse
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Title</th>
                                                                <th>Amount</th>
                                                                <th>Account</th>
                                                                <th>Bank</th>
                                                                <th>Team</th>
                                                                <th>Pre Withdraw</th>
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
