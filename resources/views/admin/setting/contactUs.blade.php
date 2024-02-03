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
                                        <h4 class="card-title">Contact Us Settings</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="basic-form">
                                            <form action="{{ route('Admin.Update.Contact.Us', $contact->id) }}"
                                                method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="mb-3 col-md-12">
                                                        <label class="form-label">Email</label>
                                                        <input type="text" name="email" value="{{ $contact->email }}"
                                                            class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Link</label>
                                                        <input type="text" name="link" value="{{ $contact->link }}"
                                                            class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Number</label>
                                                        <input type="text" name="number" value="{{ $contact->number }}"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Update</button>
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
