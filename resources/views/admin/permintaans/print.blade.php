<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="icon" type="image/png" href="{{url('images')}}/PMI-logo.png">
    <!-- Page Title  -->
    <title>Daftar Permintaan Stok Darah</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ url('css') }}/dashlite.css?ver=3.0.0">
    <link id="skin-default" rel="stylesheet" href="{{ url('css') }}/theme.css?ver=3.0.0">
</head>

<body class="bg-white" onload="printPromot()">
    <div class="nk-block">
        <div class="invoice invoice-print">
            <div class="invoice-wrap">
                <div class="invoice-brand text-center">
                    <img src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="">
                </div>
                <div class="invoice-head">
                    <div class="invoice-contact">
                        <div class="invoice-contact-info">
                            <h4 class="title">{{ ucwords(auth()->user()->name) }}</h4>
                            <ul class="list-plain">
                                <li><em class="icon ni ni-mail-fill fs-18px"></em><span>{{ auth()->user()->email }}</span></li>
                                <li><em class="icon ni ni-call-fill fs-14px"></em><span>{{ auth()->user()->phone }}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="invoice-desc">
                        <h3 class="title">Daftar Permintaan Stok Darah</h3>
                        <ul class="list-plain">
                            <li class="invoice-date"><span>Date</span>:<span>{{Helper::getDateIndo(date('Y-m-d'))}}</span></li>
                        </ul>
                    </div>
                </div><!-- .invoice-head -->
                <div class="invoice-bills">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="w-10px">No</th>
                                    <th>Tanggal Permintaan</th>
                                    <th class="w-15">Nama Pendonor</th>
                                    <th>Golongan Darah</th>
                                    <th>Nomor Kantong</th>
                                    <th>Nama Pasien</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Petugas</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $v)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{Helper::getDateIndo($v->request_date)}}</td>
                                    <td>{{$v->sisa->donor}}</td>
                                    <td>{{$v->sisa->blood}}</td>
                                    <td>{{$v->sisa->pouch_number}}</td>
                                    <td>{{$v->user->name}}</td>
                                    <td>{{$v->total}}</td>
                                    <td>{{$v->status}}</td>
                                    <td>{{$v->user_id_approve ? $v->user_approve->name : ''}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!-- .invoice-bills -->
            </div><!-- .invoice-wrap -->
        </div><!-- .invoice -->
    </div><!-- .nk-block -->
    <script>
        function printPromot() {
            window.print();
        }
    </script>
</body>

</html>
