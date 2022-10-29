@extends('auth._layouts.index')

@push('cssScript')
@include('admin._layouts.css.css')
@endpush

@section('content')
<div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
                <!-- wrap @s -->
                <div class="nk-wrap nk-wrap-nosidebar">
                        <!-- content @s -->
                        <div class="nk-content ">
                                <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                                        <div class="brand-logo pb-4 text-center">
                                                <a href="/" class="logo-link">
                                                        <img class="logo-light logo-img logo-img-lg" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                                        <img class="logo-dark logo-img logo-img-lg" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                                </a>
                                        </div>
                                        <div class="card card-bordered">
                                                <div class="card-inner card-inner-lg">
                                                        <div class="nk-block-head">
                                                                <div class="nk-block-head-content">
                                                                        <h5 class="nk-block-title">Reset password</h5>
                                                                        <div class="nk-block-des">
                                                                                <p>If you forgot your password, well, then we’ll email you instructions to reset your password.</p>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <!-- Session Status -->
                                                        <x-auth-session-status style="color: red;" class="mb-4 alert h6" :status="session('status')" />

                                                        <!-- Validation Errors -->
                                                        <x-auth-validation-errors style="color: red;" class="mb-4 alert h6" :errors="$errors" />

                                                        <form method="POST" action="{{ route('password.email') }}">
                                                                @csrf
                                                                <div class="form-group">
                                                                        <div class="form-label-group">
                                                                                <label class="form-label" for="default-01">Email</label>
                                                                        </div>
                                                                        <div class="form-control-wrap">
                                                                                <input type="email" name="email" class="form-control form-control-lg" id="default-01" placeholder="Enter your email address" required autofocus>
                                                                        </div>
                                                                </div>
                                                                <div class="form-group">
                                                                        <button class="btn btn-lg btn-primary btn-block">Send Reset Link</button>
                                                                </div>
                                                        </form>
                                                        <div class="form-note-s2 text-center pt-4">
                                                                <a href="{{route('login')}}"><strong>Return to login</strong></a>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <!-- wrap @e -->
                </div>
                <!-- content @e -->
        </div>
        <!-- main @e -->
</div>
@endsection

@push('jsScript')
@include('admin._layouts.js.js')
@endpush