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
                            <img class="logo-light logo-img logo-img-lg" src="{{url('images')}}/PMI-logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                            <img class="logo-dark logo-img logo-img-lg" src="{{url('images')}}/PMI-logo.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                        </a>
                    </div>
                    @if(session('errors'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Whoops!</strong> Ada kesalahan dalam inputan anda.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="card card-bordered">
                        <div class="card-inner card-inner-lg">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h4 class="nk-block-title">Sign-In</h4>
                                    <div class="nk-block-des">
                                        <p>Masukan Email dan Password Anda.</p>
                                    </div>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="default-01">Email</label>
                                    </div>
                                    <div class="form-control-wrap">
                                        <input type="email" name="email" class="form-control form-control-lg" id="default-01" placeholder="Enter your email address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="password">Password</label>
                                        @if (Route::has('password.request'))
                                        <a class="link link-primary link-sm" href="{{ route('password.request') }}">Forgot Password?</a>
                                        @endif
                                    </div>
                                    <div class="form-control-wrap">
                                        <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                        </a>
                                        <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Enter your password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                                </div>
                            </form>
                            <div class="form-note-s2 text-center pt-4"> <a href="{{route('register')}}">Create an account</a>
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
