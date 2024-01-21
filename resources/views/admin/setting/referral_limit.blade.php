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
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Commission Setting</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="basic-form">
                                            <form action="{{ route('Admin.Update.Referral.Setting', $limit->id) }}"
                                                method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Minmum Withdraw</label>
                                                        <input type="text" name="min_amount" class="form-control"
                                                            value="{{ $limit->min_amount }}">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Maximum Withdraw</label>
                                                        <input type="text" name="max_amount" class="form-control"
                                                            value="{{ $limit->max_amount }}">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Silver</label>
                                                        <input type="text" name="silver" class="form-control"
                                                            value="{{ $limit->silver }}">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Gold</label>
                                                        <input type="text" name="gold" class="form-control"
                                                            value="{{ $limit->gold }}">
                                                    </div>
                                                    <div class="mb-3 col-md-12">
                                                        <label class="form-label">Dimond</label>
                                                        <input type="text" name="dimond" class="form-control"
                                                            value="{{ $limit->dimond }}">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Save</button>
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
@endsection
