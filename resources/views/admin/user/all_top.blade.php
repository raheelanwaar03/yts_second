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
                                    <div class="card-header">
                                        <div class="d-flex justify-content-around align-items-center">
                                            <h4 class="card-title">All Top Users</h4>
                                            <a href="{{ route('Admin.Add.Top.Users') }}" class="btn btn-sm btn-primary">Add
                                                New</a>
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
                                                                <th>User Name</th>
                                                                <th>Points</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @forelse ($users as $item)
                                                                <tr>
                                                                    <td>{{ $item->user_name }}</td>
                                                                    <td>{{ $item->points }}</td>
                                                                    <td>
                                                                        <a href="{{ route('Admin.Delete.Top.User', $item->id) }}"
                                                                            class="btn btn-sm btn-danger">Delete</a>
                                                                    </td>
                                                                </tr>
                                                            @empty
                                                            @endforelse
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>User Name</th>
                                                                <th>Points</th>
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
