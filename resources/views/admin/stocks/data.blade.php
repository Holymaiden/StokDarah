<div class="nk-tb-item nk-tb-head">
        <div class="nk-tb-col"><span class="sub-text">No</span></div>
        <div class="nk-tb-col"><span class="sub-text">Tanggal Masuk</span></div>
        <div class="nk-tb-col"><span class="sub-text">Golongan A</span></div>
        <div class="nk-tb-col"><span class="sub-text">Golongan B</span></div>
        <div class="nk-tb-col"><span class="sub-text">Golongan AB</span></div>
        <div class="nk-tb-col"><span class="sub-text">Golongan O</span></div>
        <div class="nk-tb-col"><span class="sub-text text-center">Action</span></div>
</div><!-- .nk-tb-item -->
@foreach ($data as $key => $v)
<div class="nk-tb-item">
        <div class="nk-tb-col ">
                <span>{{++$key}}</span>
        </div>
        <div class="nk-tb-col ">
                <span class="tb-lead">{{Helper::getDateIndo($v->tanggal)}}</span>
        </div>
        <div class="nk-tb-col ">
                <span>{{$v->A}}</span>
        </div>
        <div class="nk-tb-col ">
                <span>{{$v->B}}</span>
        </div>
        <div class="nk-tb-col ">
                <span>{{$v->AB}}</span>
        </div>
        <div class="nk-tb-col ">
                <span>{{$v->O}}</span>
        </div>
        <div class="nk-tb-col nk-tb-col-tools">
                <ul class="nk-tb-actions gx-1">
                        <li class="nk-tb-action">
                                <a href="" class="btn btn-trigger btn-icon" data-bs-toggle="modal" data-bs-target="#ajaxModel" onclick="showForm('{{$v->tanggal}}')" data-bs-placement="top" title="View Details">
                                        <em class="icon ni ni-eye"></em>
                                </a>
                        </li>
                        <li class="nk-tb-action">
                                <a href="" data-bs-toggle="modal" data-bs-target="#ajaxModel" onclick="editForm('{{$v->tanggal}}')" class="btn btn-trigger btn-icon" data-bs-placement="top" title="Edit">
                                        <em class="icon ni ni-edit"></em>
                                </a>
                        </li>
                        <li class="nk-tb-action">
                                <a href="javascript:void(0)" data-id="{{$v->tanggal}}" class="btn btn-trigger btn-icon deleteData" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                        <em class="icon ni ni-delete"></em>
                                </a>
                        </li>
                </ul>
        </div>
</div><!-- .nk-tb-item -->
@endforeach