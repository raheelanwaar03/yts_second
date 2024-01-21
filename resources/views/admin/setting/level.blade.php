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
                                        <h4 class="card-title">Level Settings</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="basic-form">
                                            <form action="{{ route('Admin.Update.Level', $level->id) }}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Level 1</label>
                                                        <input type="text" name="level1" value="{{ $level->level1 }}"
                                                            class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Level 2</label>
                                                        <input type="text" name="level2" value="{{ $level->level2 }}"
                                                            class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Level 3</label>
                                                        <input type="text" name="level3" value="{{ $level->level3 }}"
                                                            class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Level 4</label>
                                                        <input type="text" name="level4" value="{{ $level->level4 }}"
                                                            class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Level 5</label>
                                                        <input type="text" name="level5" value="{{ $level->level5 }}"
                                                            class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Level 6</label>
                                                        <input type="text" name="level6" value="{{ $level->level6 }}"
                                                            class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Level 7</label>
                                                        <input type="text" name="level7" value="{{ $level->level7 }}"
                                                            class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Level 8</label>
                                                        <input type="text" name="level8" value="{{ $level->level8 }}"
                                                            class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Level 9</label>
                                                        <input type="text" name="level9" value="{{ $level->level9 }}"
                                                            class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Level 10</label>
                                                        <input type="text" name="level10" value="{{ $level->level10 }}"
                                                            class="form-control">
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
