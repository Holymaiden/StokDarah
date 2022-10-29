<div class="nk-tb-item nk-tb-head">
    <div class="nk-tb-col"><span class="sub-text">No</span></div>
    <div class="nk-tb-col"><span class="sub-text">Username</span></div>
    <div class="nk-tb-col"><span class="sub-text">Golongan Darah</span></div>
    <div class="nk-tb-col"><span class="sub-text">Total</span></div>
    <div class="nk-tb-col"><span class="sub-text">Tanggal Permintaan</span></div>
    <div class="nk-tb-col"><span class="sub-text">Status</span></div>
</div><!-- .nk-tb-item -->

@forelse ($data as $key => $v)
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
                <span class="tb-lead">{{$v->user->name}} <span class="dot dot-success d-md-none ms-1"></span></span>
            </div>
        </div>
    </div>
    <div class="nk-tb-col ">
        <span>{{$v->sisa->blood}}</span>
    </div>
    <div class="nk-tb-col ">
        <span>{{$v->total}}</span>
    </div>
    <div class="nk-tb-col ">
        <span>{{Helper::getDateIndo($v->request_date)}}</span>
    </div>
    <div class="nk-tb-col ">
        <span class="tb-status @php if($v->status=='pending') echo 'text-info'; else if($v->status=='rejected') echo 'text-danger'; else echo 'text-success' @endphp">{{$v->status}}</span>
    </div>
</div><!-- .nk-tb-item -->
@empty
<div class="nk-tb-item">
    <div class="nk-tb-col">
        <span>No Data</span>
    </div>
</div><!-- .nk-tb-item -->
@endforelse
