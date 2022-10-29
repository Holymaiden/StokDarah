<div class="nk-tb-item nk-tb-head">
    <div class="nk-tb-col"><span class="sub-text">No</span></div>
    <div class="nk-tb-col"><span class="sub-text">Tanggal Permintaan</span></div>
    <div class="nk-tb-col"><span class="sub-text">Nama Pasien</span></div>
    <div class="nk-tb-col"><span class="sub-text">Golongan Darah</span></div>
    <div class="nk-tb-col"><span class="sub-text">Total</span></div>
    <div class="nk-tb-col"><span class="sub-text">Status</span></div>
    <div class="nk-tb-col"><span class="sub-text">Rekaman Medis</span></div>
    <div class="nk-tb-col"><span class="sub-text text-center">Action</span></div>
</div><!-- .nk-tb-item -->

@forelse ($data as $key => $v)
<div class="nk-tb-item">
    <div class="nk-tb-col ">
        <span>{{++$key}}</span>
    </div>
    <div class="nk-tb-col ">
        <span>{{Helper::getDateIndo($v->request_date)}}</span>
    </div>
    <div class="nk-tb-col">
        <div class="user-info">
            <span class="tb-lead">{{$v->user->name}} <span class="dot dot-success d-md-none ms-1"></span></span>
        </div>
    </div>
    <div class="nk-tb-col ">
        <span>{{$v->sisa->blood}}</span>
    </div>
    <div class="nk-tb-col ">
        <span>{{$v->totals}}</span>
    </div>
    <div class="nk-tb-col ">
        <span class="tb-status @php if($v->status=='pending') echo 'text-info'; else if($v->status=='rejected') echo 'text-danger'; else echo 'text-success' @endphp">{{$v->status}}</span>
    </div>
    <div class="nk-tb-col ">
        <a href="{{url('uploads/document/')}}/{{$v->medis}}" class="btn btn-trigger btn-icon" title="Rekaman Medis">
            <em class="icon ni ni-eye"></em>
        </a>
    </div>
    <div class="nk-tb-col nk-tb-col-tools">
        <ul class="nk-tb-actions gx-1">
            <li class="nk-tb-action">
                <a href="" class="btn btn-trigger btn-icon" data-bs-toggle="modal" data-bs-target="#ajaxModel" onclick="showForm('{{$v->id}}','{{$v->user->name}}','{{$v->sisa->donor}}','{{$v->sisa->blood}}','{{$v->sisa->pouch_number}}','{{$v->user_id_approve ? $v->user_approve->name : null}}','{{$v->sisa->code}}')" data-bs-placement="top" title="View Details">
                    <em class="icon ni ni-eye"></em>
                </a>
            </li>
            <li class="nk-tb-action">
                <a href="javascript:void(0)" data-bs-toggle="tooltip" data-id="{{$v->id}}" class="btn btn-trigger btn-icon approveData" data-bs-placement="top" title="Approve">
                    <em class="icon ni ni-check-circle"></em>
                </a>
            </li>
            <li class="nk-tb-action">
                <a href="javascript:void(0)" data-id="{{$v->id}}" class="btn btn-trigger btn-icon rejectData" data-bs-toggle="tooltip" data-bs-placement="top" title="Reject">
                    <em class="icon ni ni-cross-circle"></em>
                </a>
            </li>
        </ul>
    </div>
</div><!-- .nk-tb-item -->
@empty
<div class="nk-tb-item">
    <div class="nk-tb-col">
        <span>No Data</span>
    </div>
</div><!-- .nk-tb-item -->
@endforelse
