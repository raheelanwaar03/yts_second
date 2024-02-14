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
                                                                <tr id="tr_{{ $item->trxIds->user_id }}">
                                                                    <td>{{ $item->name }}</td>
                                                                    <td>{{ $item->email }}</td>
                                                                    <td>{{ $item->balance }}</td>
                                                                    <td>{{ $item->referral }}</td>
                                                                    <td>{{ $item->trxIds->plan }}</td>
                                                                    <td>{{ $item->trxIds->sender_name }}
                                                                    </td>
                                                                    <td>{{ $item->trxIds->sender_number }}
                                                                    </td>
                                                                    <td>{{ $item->trxIds->trx_id }}</td>
                                                                    <td>
                                                                        <img src="{{ asset('images/' . $item->trxIds->screen_shot) }}"
                                                                            class="img-fluid" height="100px" width="100px">
                                                                    </td>
                                                                    <td>
                                                                        <button class="pendingButton"
                                                                            data-user-id="{{ $item->trxIds->user_id }}"
                                                                            style="background-color:blue;color:white;border:none;border-radius:5px;padding:6px;">Pending</button>
                                                                        <button class="rejectButton"
                                                                            data-user-id="{{ $item->trxIds->user_id }}"
                                                                            style="background-color:red;color:white;border:none;border-radius:5px;padding:6px;">Rejected</button>
                                                                        <a href="{{ route('Admin.Edit.User', $item->id) }}"
                                                                            class="btn btn-sm btn-warning">Edit</a>
                                                                        <a href="{{ route('Admin.Change.Password', $item->id) }}"
                                                                            class="btn btn-sm btn-info">Change
                                                                            Password</a>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.rejectButton').click(function() {
                var userId = $(this).data('user-id');
                $.ajax({
                    url: "{{ route('reject.status') }}",
                    method: "GET",
                    data: {
                        user_id: userId
                    },
                    success: function(response) {
                        $("#" + response['tr']).hide();
                        alert(response.message);
                    },
                });
            });
        });

        // make user approved

        $(document).ready(function() {
            $('.pendingButton').click(function() {
                var userId = $(this).data('user-id');
                $.ajax({
                    url: "{{ route('pending.status') }}",
                    method: "GET",
                    data: {
                        user_id: userId
                    },
                    success: function(response) {
                        $("#" + response['tr']).slideUp("slow");
                        alert(response.message);
                    },
                });
            });
        });
    </script>
@endsection
