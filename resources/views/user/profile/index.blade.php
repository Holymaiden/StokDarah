@extends('layouts.home')
@section('content')

<!-- Start Pricing Area -->
<section class="pricing-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Profile</h2>
            <div class="bar"></div>
        </div>

        <div class="tab pricing-list-tab">
            <ul class="tabs">
                <li>
                    <a href="#">
                        Settings
                    </a>
                </li>
                <li>
                    <a href="#">
                        Historys
                    </a>
                </li>
            </ul>

            <div class="tab_content">
                <div class="tabs_item">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single-pricing-table">
                                <div class="pricing-header">
                                    <h3>Account Settings</h3>
                                </div>
                                <ul class="pricing-features">
                                    <div class="contact-form">
                                        <form action="" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" value="{{ Auth()->user()->name }}" placeholder="Your Name">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" value="{{ Auth()->user()->email }}" placeholder="Your Email">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="phone" id="phone_number" required data-error="Please enter your number" class="form-control" value="{{ Auth()->user()->phone }}" placeholder="Your Phone">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="password" id="msg_subject" class="form-control" placeholder="Your Password">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12">
                                                    <div class="send-btn">
                                                        <button type="submit" class="default-btn">
                                                            Update
                                                            <span></span>
                                                        </button>
                                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tabs_item">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="single-pricing-table">
                                <div class="pricing-header">
                                    <h3>Riwayat Ambil Darah</h3>
                                </div>

                                <ul class="pricing-features">
                                    <table class="table table-bordered table-responsive">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Jenis Darah</th>
                                                <th>Tanggal Permintaan</th>
                                                <th>Tanggal Diambil</th>
                                                <th>Jumlah</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($data as $i => $v)
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{$v->stock->donor}}</td>
                                                <td>{{$v->stock->blood}}</td>
                                                <td>{{$v->request_date}}</td>
                                                <td>{{$v->out_date}}</td>
                                                <td>{{$v->total}}</td>
                                                <td>{{$v->status}}</td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="7">
                                                    <center>
                                                        <h3>Tidak ada data</h3>
                                                    </center>
                                                </td>
                                            </tr>
                                            @endforelse
                                        <tfoot>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jenis Darah</th>
                                            <th>Tanggal Permintaan</th>
                                            <th>Tanggal Diambil</th>
                                            <th>Jumlah</th>
                                            <th>Status</th>
                                        </tfoot>
                                    </table>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Pricing Area -->


@endsection