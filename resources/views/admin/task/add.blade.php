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
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="mb-0">Task Mangment</h5>
                <div class="d-flex align-items-center">
                    <a href="javascript:void(0)" class="btn btn-primary btn-sm ms-2" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">+ Add Task</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table-responsive active-projects task-table">
                                <table id="empoloyeestbl2" class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Price</th>
                                            <th>Title</th>
                                            <th>Link</th>
                                            <th>Level</th>
                                            <th>Plan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($tasks as $item)
                                            <tr>
                                                <td>
                                                    <h6>{{ $item->id }}</h6>
                                                </td>
                                                <td>
                                                    <h6>{{ $item->price }}</h6>
                                                </td>
                                                <td>
                                                    <h6>{{ $item->title }}</h6>
                                                </td>
                                                <td>
                                                    <h6>{{ $item->link }}</h6>
                                                </td>
                                                <td>
                                                    <h6>{{ $item->level }}</h6>
                                                </td>
                                                <td>
                                                    <h6>{{ $item->plan }}</h6>
                                                </td>
                                                <td>
                                                    <a href="{{ route('Admin.Delete.Task', $item->id) }}"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <div>
                                                <h6>Not Item</h6>
                                            </div>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Task</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('Admin.Store.Task') }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Title<span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="title" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Title Name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput2" class="form-label">Price<span
                                            class="text-danger">*</span></label>
                                    <input type="number" name="price" step="0.00001" class="form-control"
                                        id="exampleFormControlInput2" placeholder="0.00">
                                </div>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">Link<span class="text-danger">*</span></label>
                                <input type="text" name="link" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Link">
                            </div>
                            <div class="col-xl-12 mb-3">
                                <label class="form-label">Level<span class="text-danger">*</span></label>
                                <select name="level" class="default-select style-1 form-control">
                                    <option value="Level 0">Level 0</option>
                                    <option value="Level 1">Level 1</option>
                                    <option value="Level 2">Level 2</option>
                                    <option value="Level 3">Level 3</option>
                                    <option value="Level 4">Level 4</option>
                                    <option value="Level 5">Level 5</option>
                                    <option value="Level 6">Level 6</option>
                                    <option value="Level 7">Level 7</option>
                                    <option value="Level 8">Level 8</option>
                                    <option value="Level 9">Level 9</option>
                                    <option value="Level 10">Level 10</option>
                                </select>
                            </div>
                            <div class="col-xl-12 mb-3">
                                <label class="form-label">Plan<span class="text-danger">*</span></label>
                                <select name="plan" class="default-select style-1 form-control" required>
                                    <option value="silver">Silver</option>
                                    <option value="gold">Gold</option>
                                    <option value="dimond">Dimond</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
