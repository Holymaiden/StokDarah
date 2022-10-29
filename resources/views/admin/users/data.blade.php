<div class="nk-tb-item nk-tb-head">
        <div class="nk-tb-col"><span class="sub-text">No</span></div>
        <div class="nk-tb-col"><span class="sub-text">Username</span></div>
        <div class="nk-tb-col"><span class="sub-text">Email</span></div>
        <div class="nk-tb-col"><span class="sub-text">Phone</span></div>
        <div class="nk-tb-col"><span class="sub-text">Role</span></div>
        <div class="nk-tb-col"><span class="sub-text">Status</span></div>
        <div class="nk-tb-col"><span class="sub-text text-center">Action</span></div>
</div><!-- .nk-tb-item -->

@foreach ($data as $key => $v)
<div class="nk-tb-item">
        <div class="nk-tb-col ">
                <span>{{++$key}}</span>
        </div>
        <div class="nk-tb-col">
                <div class="user-card">
                        <div class="user-avatar bg-primary">
                                <span>FH</span>
                        </div>
                        <div class="user-info">
                                <span class="tb-lead">{{$v->name}} <span class="dot dot-success d-md-none ms-1"></span></span>
                        </div>
                </div>
        </div>
        <div class="nk-tb-col ">
                <span>{{$v->email}}</span>
        </div>
        <div class="nk-tb-col ">
                <span>{{$v->phone}}</span>
        </div>
        <div class="nk-tb-col ">
                <span>{{$v->role}}</span>
        </div>
        <div class="nk-tb-col ">
                <span class="tb-status text-info">Inactive</span>
        </div>
        <div class="nk-tb-col nk-tb-col-tools">
                <ul class="nk-tb-actions gx-1">
                        <li class="nk-tb-action-hidden">
                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                        <em class="icon ni ni-mail-fill"></em>
                                </a>
                        </li>
                        <li class="nk-tb-action-hidden">
                                <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                        <em class="icon ni ni-user-cross-fill"></em>
                                </a>
                        </li>
                        <li class="nk-tb-action">
                                <a href="" class="btn btn-trigger btn-icon" data-bs-toggle="modal" data-bs-target="#ajaxModel" onclick="showForm('{{$v->id}}')" data-bs-placement="top" title="View Details">
                                        <em class="icon ni ni-eye"></em>
                                </a>
                        </li>
                        <li class="nk-tb-action">
                                <a href="" data-bs-toggle="modal" data-bs-target="#ajaxModel" onclick="editForm('{{$v->id}}')" class="btn btn-trigger btn-icon" data-bs-placement="top" title="Edit">
                                        <em class="icon ni ni-edit"></em>
                                </a>
                        </li>
                        <li class="nk-tb-action">
                                <a href="javascript:void(0)" data-id="{{$v->id}}" class="btn btn-trigger btn-icon deleteData" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                        <em class="icon ni ni-delete"></em>
                                </a>
                        </li>
                </ul>
        </div>
</div><!-- .nk-tb-item -->
@endforeach