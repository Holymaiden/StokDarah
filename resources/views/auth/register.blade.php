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
                <div class="nk-block nk-block-middle nk-auth-body wide-xs">
                    <div class="brand-logo pb-4 text-center">
                        <a href="/" class="logo-link">
                            <img class="logo-light logo-img logo-img-lg" src="{{ asset('images') }}/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                            <img class="logo-dark logo-img logo-img-lg" src="{{ asset('images') }}/logo.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                        </a>
                    </div>
                    <div class="card card-bordered">
                        <div class="card-inner card-inner-lg">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h4 class="nk-block-title">Register</h4>
                                    <div class="nk-block-des">
                                        <p>Create New Account</p>
                                    </div>
                                </div>
                            </div>
                            <form method="POST" action="">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="name">Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Enter your name" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="email">Email</label>
                                    <div class="form-control-wrap">
                                        <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Enter your email address" require>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone">Phone</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="phone" class="form-control form-control-lg" id="phone" placeholder="Enter your Phone Number" require>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="password">Password</label>
                                    <div class="form-control-wrap">
                                        <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                        </a>
                                        <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Enter your password" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="password"> Confirm Password</label>
                                    <div class="form-control-wrap">
                                        <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                        </a>
                                        <input type="password" name="password_confirmation" class="form-control form-control-lg" id="password_confirmation" placeholder="Confirm your password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
                                </div>
                            </form>
                            <div class="form-note-s2 text-center pt-4"> Already have an account? <a href="{{route('login')}}"><strong>Sign in instead</strong></a>
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
