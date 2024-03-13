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
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">User Details</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="basic-form">
                                            <form action="{{ route('Admin.Update.User', $user->id) }}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">User Name</label>
                                                        <input type="text" name="name" class="form-control"
                                                            value="{{ $user->name }}" readonly>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Email</label>
                                                        <input type="text" name="Email" class="form-control"
                                                            value="{{ $user->email }}" readonly>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Balance</label>
                                                        <input type="text" name="balance" class="form-control"
                                                            value="{{ $user->balance }}">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Level</label>
                                                        <input type="text" name="level" class="form-control"
                                                            value="{{ $user->level }}">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Package</label>
                                                        <input type="text" name="plan" class="form-control"
                                                            value="{{ $user->trxIds->plan }}">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                                <button class="approveButton" data-user-id="{{ $user->id }}"
                                                    style="background-color:rgb(122, 222, 122);color:white;border:none;border-radius:7px;padding:5px;">Approved</button>
                                            </form>
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
        // make user approve
        $(document).ready(function() {
            $('.approveButton').click(function() {
                var userId = $(this).data('user-id');
                $.ajax({
                    url: "{{ route('Admin.Make.User.Approve') }}",
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
    </script>
@endsection
