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
    <title>Surat Permohonan Pengambilan Stok Darah</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ url('css') }}/dashlite.css?ver=3.0.0">
    <link id="skin-default" rel="stylesheet" href="{{ url('css') }}/theme.css?ver=3.0.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
</head>

<body id="wow" class="bg-white" onload="printPromot()">
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
                        <h3 class="title">Stok Darah</h3>
                        <ul class="list-plain">
                            <li class="invoice-date"><span>Date </span>:<span>{{Helper::getDateIndo(date('Y-m-d'))}}</span></li>
                        </ul>
                    </div>
                </div><!-- .invoice-head -->
                <div class="invoice-bills">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="w-150px">ID Darah</th>
                                    <th class="w-60">Pendonor</th>
                                    <th>Type</th>
                                    <th>Qty</th>
                                    <th class="w-30">Tanggal Masuk Darah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $total=0 @endphp
                                @foreach ($data as $v)
                                @php $total += $v['total'] @endphp
                                <tr>
                                    <td>{{ $v->sisa['pouch_number'] }}</td>
                                    <td>{{ $v->sisa['donor'] }}</td>
                                    <td>{{ $v['blood'] }}</td>
                                    <td>{{ $v['total'] }}</td>
                                    <td>{{ $v->sisa['date_of_entry'] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2"></td>
                                    <td>Total</td>
                                    <td>{{ $total }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div><!-- .invoice-bills -->
            </div><!-- .invoice-wrap -->
        </div><!-- .invoice -->
    </div><!-- .nk-block -->
    <script>
        function printPromot() {
            const wow = document.getElementById('wow');
            var opt = {
                margin: 1,
                filename: 'darahku.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2
                },
                jsPDF: {
                    unit: 'in',
                    format: 'letter',
                    orientation: 'portrait'
                }
            };
            html2pdf().from(wow).set(opt).save();
            window.print();
        }
    </script>
</body>

</html>
