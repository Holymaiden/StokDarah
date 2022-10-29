@extends('admin._layouts.index')

@push('cssScript')
@include('admin._layouts.css.css')
@endpush

@push('settings')
active
@endpush

@section('content')
<div class="nk-content-body">
        <div class="nk-block">
                <div class="card card-bordered">
                        <div class="card-aside-wrap">
                                <div class="card-inner card-inner-lg">
                                        <div class="nk-block-head nk-block-head-lg">
                                                <div class="nk-block-between">
                                                        <div class="nk-block-head-content">
                                                                <h4 class="nk-block-title">Informasi Diri</h4>
                                                                <div class="nk-block-des">
                                                                        <p>Data Diri Anda</p>
                                                                </div>
                                                        </div>
                                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                                                <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                                        </div>
                                                </div>
                                        </div><!-- .nk-block-head -->
                                        <div class="nk-block">
                                                <div class="nk-data data-list">
                                                        <div class="data-head">
                                                                <h6 class="overline-title">Basics</h6>
                                                        </div>
                                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                                                <div class="data-col">
                                                                        <span class="data-label">Nama Lengkap</span>
                                                                        <span class="data-value">{{ $user->name }}</span>
                                                                </div>
                                                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item">
                                                                <div class="data-col">
                                                                        <span class="data-label">Email</span>
                                                                        <span class="data-value">{{ $user->email }}</span>
                                                                </div>
                                                                <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                                                <div class="data-col">
                                                                        <span class="data-label">Phone Number</span>
                                                                        <span class="data-value text-soft">Not add yet</span>
                                                                </div>
                                                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                                                <div class="data-col">
                                                                        <span class="data-label">Date of Birth</span>
                                                                        <span class="data-value">29 Feb, 1986</span>
                                                                </div>
                                                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit" data-tab-target="#address">
                                                                <div class="data-col">
                                                                        <span class="data-label">Address</span>
                                                                        <span class="data-value">2337 Kildeer Drive,<br>Kentucky, Canada</span>
                                                                </div>
                                                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit" data-tab-target="#role">
                                                                <div class="data-col">
                                                                        <span class="data-label">Role</span>
                                                                        <span class="data-value">{{ $user->role }}</span>
                                                                </div>
                                                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-head">
                                                                <h6 class="overline-title">Security Setting</h6>
                                                        </div>
                                                        <div class="card-inner">
                                                                <div class="between-center flex-wrap g-3">
                                                                        <div class="nk-block-text">
                                                                                <h6>Change Password</h6>
                                                                                <p>Set a unique password to protect your account.</p>
                                                                        </div>
                                                                        <div class="nk-block-actions flex-shrink-sm-0">
                                                                                <ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                                                                        <li class="order-md-last">
                                                                                                <a data-bs-toggle="modal" data-bs-target="#profile-password" class="btn btn-primary">Change Password</a>
                                                                                        </li>
                                                                                        <li>
                                                                                                <em class="text-soft text-date fs-12px">Last changed: <span>Oct 2, 2019</span></em>
                                                                                        </li>
                                                                                </ul>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <! -- .card-inner -->
                                                </div><!-- data-list -->
                                        </div><!-- .nk-block -->
                                </div>
                        </div><!-- .card-aside-wrap -->
                </div><!-- .card -->
        </div><!-- .nk-block -->
</div>
@include('admin.'.$title.'._form')
@endsection

@push('jsScript')
@include('admin._layouts.js.js')
<script>
        $(document).ready(function() {
                let urlx = "admin/{{ $title }}";
                $('#updateBtn').click(function(e) {
                        e.preventDefault();
                        $.ajax({
                                data: $('#formInput').serialize(),
                                url: urlx + '/',
                                type: "PUT",
                                dataType: 'json',
                                success: function(data) {
                                        console.log(data);
                                        $('#ajaxModel').modal('hide');

                                        iziToast.success({
                                                title: 'Successfull,',
                                                message: 'Update it data!',
                                                position: 'topRight',
                                                timeout: 1500
                                        });

                                        setTimeout(function() {
                                                location.reload();
                                        }, 1500);
                                },
                                error: function(data) {
                                        console.log(data);
                                        $('#ajaxModel').modal('hide');
                                        iziToast.error({
                                                title: 'Failed.',
                                                message: 'Update it data!',
                                                position: 'topRight',
                                                timeout: 1500
                                        });
                                }
                        });
                });
                $('#updatePassBtn').click(function(e) {
                        e.preventDefault();
                        $.ajax({
                                data: $('#formPassword').serialize(),
                                url: urlx + '/pass',
                                type: "PUT",
                                dataType: 'json',
                                success: function(data) {
                                        console.log(data);
                                        $('#ajaxModel').modal('hide');

                                        iziToast.success({
                                                title: 'Successfull,',
                                                message: 'Update it data!',
                                                position: 'topRight',
                                                timeout: 1500
                                        });

                                        setTimeout(function() {
                                                location.reload();
                                        }, 1500);
                                },
                                error: function(data) {
                                        console.log(data);
                                        $('#ajaxModel').modal('hide');
                                        iziToast.error({
                                                title: 'Failed.',
                                                message: 'Update it data!',
                                                position: 'topRight',
                                                timeout: 1500
                                        });
                                }
                        });
                });
        })
</script>
@endpush