@extends('user.layout.app')

@section('content')
    <div class="inner-banner overflow-hidden">
    </div>
    <!-- Banner Section Ends Here -->


    <!-- Dashboard Section Starts Here -->
    <div class="dashbaord-section padding-top padding-bottom" style="margin-top: -200px">
        <div class="container">
            <div class="row sm">
                <div class="col-lg-12 col-xl-12 col-xxl-12">
                    <div class="dashboard__wrapper">
                        <div class="row pt-5 gy-4">
                            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                                <div class="dashboard__card">
                                    <div class="dashboard__card-content">
                                        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                                        </div>

                                        <!-- Session Status -->
                                        <x-auth-session-status class="mb-4" :status="session('status')" />
                                        <form method="POST" action="{{ route('password.email') }}">
                                            @csrf
                                            <div>
                                                <x-input-label for="email" :value="__('Email')" />
                                                <x-text-input id="email" class="block mt-1 w-full" type="email"
                                                    name="email" :value="old('email')" required autofocus />
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>

                                            <div class="flex items-center justify-end mt-4">
                                                <x-primary-button class="btn btn-dark">
                                                    {{ __('send') }}
                                                </x-primary-button>
                                            </div>
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
@endsection












{{-- <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
</div>

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <!-- Email Address -->
    <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
        <x-primary-button>
            {{ __('Email Password Reset Link') }}
        </x-primary-button>
    </div>
</form> --}}
