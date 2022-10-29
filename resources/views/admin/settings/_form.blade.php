<!-- @@ Profile Edit Modal @e -->
<div class="modal fade" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                        <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                        <div class="modal-body modal-body-lg">
                                <h5 class="title">Update Profile</h5>
                                <ul class="nk-nav nav nav-tabs">
                                        <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#personal">Personal</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#address">Address</a>
                                        </li>
                                </ul><!-- .nav-tabs -->
                                <form id="formInput" name="formInput" action="">
                                        @csrf
                                        <div class="tab-content">
                                                <div class="tab-pane active" id="personal">
                                                        <input type="hidden" name="password" class="form-control form-control-lg" id="password" placeholder="Enter Full name">

                                                        <div class="row gy-4">
                                                                <div class="col-md-6">
                                                                        <div class="form-group">
                                                                                <label class="form-label" for="full-name">Nama Lengkap</label>
                                                                                <input type="text" name="name" class="form-control form-control-lg" id="name" value="{{ $user->name }}" placeholder="Enter Full name">
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                        <div class="form-group">
                                                                                <label class="form-label" for="email">Email</label>
                                                                                <input type="email" name="email" class="form-control form-control-lg" id="email" value="{{ $user->email }}" placeholder="Enter Email">
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                        <div class="form-group">
                                                                                <label class="form-label" for="phone-no">Phone Number</label>
                                                                                <input type="text" class="form-control form-control-lg" id="phone-no" value="+880" placeholder="Phone Number">
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                        <div class="form-group">
                                                                                <label class="form-label" for="birth-day">Date of Birth</label>
                                                                                <input type="text" class="form-control form-control-lg date-picker" id="birth-day" placeholder="Enter your birth date">
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                        <div class="form-group">
                                                                                <label class="form-label" for="role">Role</label>
                                                                                <select class="form-select js-select2" name="role" id="role" data-ui="lg">
                                                                                        <option value="admin" @if($user->role=='admin') selected @endif>Admin</option>
                                                                                        <option value="user" @if($user->role=='user') selected @endif>User</option>
                                                                                </select>
                                                                        </div>
                                                                </div>
                                                                <div class="col-12">
                                                                        <div class="custom-control custom-switch">
                                                                                <input type="checkbox" class="custom-control-input" id="latest-sale">
                                                                                <label class="custom-control-label" for="latest-sale">Use full name to display </label>
                                                                        </div>
                                                                </div>
                                                                <div class="col-12">
                                                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                                                <li>
                                                                                        <button value="update" type="submit" id="updateBtn" class="btn btn-lg btn-primary">Update Profile</button>
                                                                                </li>
                                                                                <li>
                                                                                        <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                                                                </li>
                                                                        </ul>
                                                                </div>
                                                        </div>
                                                </div><!-- .tab-pane -->
                                                <div class="tab-pane" id="address">
                                                        <div class="row gy-4">
                                                                <div class="col-md-6">
                                                                        <div class="form-group">
                                                                                <label class="form-label" for="address-l1">Address Line 1</label>
                                                                                <input type="text" class="form-control form-control-lg" id="address-l1" value="2337 Kildeer Drive">
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                        <div class="form-group">
                                                                                <label class="form-label" for="address-l2">Address Line 2</label>
                                                                                <input type="text" class="form-control form-control-lg" id="address-l2" value="">
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                        <div class="form-group">
                                                                                <label class="form-label" for="address-st">State</label>
                                                                                <input type="text" class="form-control form-control-lg" id="address-st" value="Kentucky">
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                        <div class="form-group">
                                                                                <label class="form-label" for="address-county">Country</label>
                                                                                <select class="form-select js-select2" id="address-county" data-ui="lg">
                                                                                        <option>Canada</option>
                                                                                        <option>United State</option>
                                                                                        <option>United Kindom</option>
                                                                                        <option>Australia</option>
                                                                                        <option>India</option>
                                                                                        <option>Bangladesh</option>
                                                                                </select>
                                                                        </div>
                                                                </div>
                                                                <div class="col-12">
                                                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                                                <li>
                                                                                        <a href="#" class="btn btn-lg btn-primary" data-bs-dismiss="modal">Update Address</a>
                                                                                </li>
                                                                                <li>
                                                                                        <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                                                                </li>
                                                                        </ul>
                                                                </div>
                                                        </div>
                                                </div><!-- .tab-pane -->
                                        </div><!-- .tab-content -->
                                </form>
                        </div><!-- .modal-body -->
                </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
</div><!-- .modal -->

<!-- @@ Profile Password Modal @e -->
<div class="modal fade" role="dialog" id="profile-password">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                        <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                        <div class="modal-body modal-body-lg">
                                <h5 class="title">Update Password</h5>
                                <form id="formPassword" name="formPassword" action="">
                                        @csrf
                                        <div class="tab-content">
                                                <div class="row gy-4">
                                                        <div class="col-md-12">
                                                                <div class="form-group">
                                                                        <label class="form-label" for="password2">Password Lama</label>
                                                                        <div class="form-control-wrap">
                                                                                <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password2">
                                                                                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                                                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                                                                </a>
                                                                                <input type="password" name="password2" class="form-control form-control-lg" id="password2" placeholder="Enter your password" required autocomplete="new-password">
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                                <div class="form-group">
                                                                        <label class="form-label" for="password3">Password Baru</label>
                                                                        <div class="form-control-wrap">
                                                                                <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password3">
                                                                                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                                                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                                                                </a>
                                                                                <input type="password" name="password" class="form-control form-control-lg" id="password3" placeholder="Confirm your password" required>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-12">
                                                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                                        <li>
                                                                                <button value="update" type="submit" id="updatePassBtn" class="btn btn-lg btn-primary">Update Password</button>
                                                                        </li>
                                                                        <li>
                                                                                <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                                                        </li>
                                                                </ul>
                                                        </div>
                                                </div><!-- .tab-pane -->
                                        </div><!-- .tab-content -->
                                </form>
                        </div><!-- .modal-body -->
                </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
</div><!-- .modal -->