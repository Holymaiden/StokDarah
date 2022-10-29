@extends('admin._layouts.index')

@push('cssScript')
@include('admin._layouts.css.css')
@endpush

@push('dashboard')
active
@endpush

@section('content')
<div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                        <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Dashboard</h3>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                        <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                        <div class="toggle-expand-content" data-content="pageMenu">

                                        </div>
                                </div>
                        </div><!-- .nk-block-head-content -->
                </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        <div class="nk-block">
                <div class="row g-gs">
                        <div class="col-xxl-3 col-sm-3">
                                <div class="card">
                                        <div class="nk-ecwg nk-ecwg6">
                                                <div class="card-inner">
                                                        <div class="card-title-group">
                                                                <div class="card-title">
                                                                        <h6 class="title">Users</h6>
                                                                </div>
                                                        </div>
                                                        <div class="data">
                                                                <div class="data-group">
                                                                        <div class="amount">{{ Helper::get_data_count('users') }}</div>
                                                                        <div class="nk-ecwg6-ck">
                                                                                <canvas class="ecommerce-line-chart-s3" id="todayOrders"></canvas>
                                                                        </div>
                                                                </div>
                                                                <!-- <div class="info"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>4.63%</span><span> vs. last week</span></div> -->
                                                        </div>
                                                </div><!-- .card-inner -->
                                        </div><!-- .nk-ecwg -->
                                </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-xxl-3 col-sm-3">
                                <div class="card">
                                        <div class="nk-ecwg nk-ecwg6">
                                                <div class="card-inner">
                                                        <div class="card-title-group">
                                                                <div class="card-title">
                                                                        <h6 class="title">Darah Masuk</h6>
                                                                </div>
                                                        </div>
                                                        <div class="data">
                                                                <div class="data-group">
                                                                        <div class="amount">{{ Helper::get_data_count_blood('stocks','id','<>',NULL) }}</div>
                                                                        <div class="nk-ecwg6-ck">
                                                                                <canvas class="ecommerce-line-chart-s3" id="todayRevenue"></canvas>
                                                                        </div>
                                                                </div>
                                                                <!-- <div class="info"><span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>2.34%</span><span> vs. last week</span></div> -->
                                                        </div>
                                                </div><!-- .card-inner -->
                                        </div><!-- .nk-ecwg -->
                                </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-xxl-3 col-sm-3">
                                <div class="card">
                                        <div class="nk-ecwg nk-ecwg6">
                                                <div class="card-inner">
                                                        <div class="card-title-group">
                                                                <div class="card-title">
                                                                        <h6 class="title">Darah Keluar</h6>
                                                                </div>
                                                        </div>
                                                        <div class="data">
                                                                <div class="data-group">
                                                                        <div class="amount">{{ Helper::get_data_count_blood('transactions', 'status','=','accepted') }}</div>
                                                                        <div class="nk-ecwg6-ck">
                                                                                <canvas class="ecommerce-line-chart-s3" id="todayCustomers"></canvas>
                                                                        </div>
                                                                </div>
                                                                <!-- <div class="info"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>4.63%</span><span> vs. last week</span></div> -->
                                                        </div>
                                                </div><!-- .card-inner -->
                                        </div><!-- .nk-ecwg -->
                                </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-xxl-3 col-sm-3">
                                <div class="card">
                                        <div class="nk-ecwg nk-ecwg6">
                                                <div class="card-inner">
                                                        <div class="card-title-group">
                                                                <div class="card-title">
                                                                        <h6 class="title">Darah Tunggu</h6>
                                                                </div>
                                                        </div>
                                                        <div class="data">
                                                                <div class="data-group">
                                                                        <div class="amount">{{ Helper::get_data_count_blood('transactions','status','=','pending') }}</div>
                                                                        <div class="nk-ecwg6-ck">
                                                                                <canvas class="ecommerce-line-chart-s3" id="todayVisitors"></canvas>
                                                                        </div>
                                                                </div>
                                                                <!-- <div class="info"><span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>2.34%</span><span> vs. last week</span></div> -->
                                                        </div>
                                                </div><!-- .card-inner -->
                                        </div><!-- .nk-ecwg -->
                                </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-xxl-8">
                                <div class="card card-full">
                                        <div class="card-inner">
                                                <div class="card-title-group">
                                                        <div class="card-title">
                                                                <h6 class="title">Permintaan Darah</h6>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="card-inner p-0">
                                                <div class="table-responsive">
                                                        <div class="nk-tb-list nk-tb-ulist datatabel">
                                                        </div><!-- .nk-tb-list -->
                                                </div>
                                        </div>
                                        <div class="card-inner">
                                                <div class="nk-block-between-md g-3">
                                                        <div class="g">
                                                                <div id="contentx"></div>
                                                        </div>
                                                        <div class="g">
                                                                <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                                        <ul class="pagination twbs-pagination">
                                                                        </ul>
                                                                </div>
                                                        </div><!-- .pagination-goto -->
                                                </div><!-- .nk-block-between -->
                                        </div><!-- .card-inner -->
                                </div>
                        </div>
                </div><!-- .row -->
        </div><!-- .nk-block -->
</div>

@endsection

@push('jsScript')
@include('admin._layouts.js.js')
<script type="text/javascript">
        $(document).ready(function() {
                let urlx = "admin";

                $("#pilihan").on('change', function(event) {
                        let pilih = $('#pilihan').val();
                        if (pilih == '0') {
                                $('#option').show();
                        } else {
                                $('#option').hide();
                        }
                });

                loadpage('', "{{config('constants.PAGINATION')}}");

                var $pagination = $('.twbs-pagination');
                var defaultOpts = {
                        totalPages: 1,
                        prev: '&#8672;',
                        next: '&#8674;',
                        first: '&#8676;',
                        last: '&#8677;',
                };
                $pagination.twbsPagination(defaultOpts);

                function loaddata(page, cari, jml) {
                        $.ajax({
                                url: urlx + '/data',
                                data: {
                                        "page": page,
                                        "cari": cari,
                                        "jml": jml
                                },
                                type: "GET",
                                datatype: "json",
                                success: function(data) {
                                        $(".datatabel").html(data.html);
                                }
                        });
                }

                function loadpage(cari, jml) {
                        $.ajax({
                                url: urlx + '/data',
                                data: {
                                        "cari": cari,
                                        "jml": jml
                                },
                                type: "GET",
                                datatype: "json",
                                success: function(response) {
                                        console.log(response);
                                        if ($pagination.data("twbs-pagination")) {
                                                $pagination.twbsPagination('destroy');
                                                $(".datatabel").html('<div class="nk-tb-col tb-col-lg text-center"><span>Data Not Found</span></div>');
                                        }
                                        $pagination.twbsPagination($.extend({}, defaultOpts, {
                                                startPage: 1,
                                                totalPages: response.total_page,
                                                visiblePages: 8,
                                                prev: '&#8672;',
                                                next: '&#8674;',
                                                first: '&#8676;',
                                                last: '&#8677;',
                                                onPageClick: function(event, page) {
                                                        if (page == 1) {
                                                                var to = 1;
                                                        } else {
                                                                var to = page * jml - (jml - 1);
                                                        }
                                                        if (page == response.total_page) {
                                                                var end = response.total_data;
                                                        } else {
                                                                var end = page * jml;
                                                        }
                                                        $('#contentx').text('Showing ' + to + ' to ' + end + ' of ' + response.total_data + ' entries');
                                                        loaddata(page, cari, jml);
                                                }

                                        }));
                                }
                        });
                }

                $("#pencarian, #jumlah").on('keyup change', function(event) {
                        let cari = $('#pencarian').val();
                        let jml = $('#jumlah').val();
                        loadpage(cari, jml);
                });
        });
</script>
<script>
        "use strict";

        !(function(NioApp, $) {
                "use strict";
                var todayOrders = {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                        dataUnit: "Users",
                        lineTension: 0.3,
                        datasets: [{
                                label: "Users",
                                color: "#854fff",
                                background: "transparent",
                                data: ("{{ \Helper::get_data_month('users','updated_at','!=',0) }}").split(","),
                        }, ],
                };


                var todayRevenue = {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                        dataUnit: 'Masuk',
                        lineTension: .3,
                        datasets: [{
                                label: "Revenue",
                                color: "#33d895",
                                background: "transparent",
                                data: ("{{ \Helper::get_data_month('stocks','id','<>',null) }}").split(","),
                        }]
                };

                var todayCustomers = {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                        dataUnit: 'Keluar',
                        lineTension: .3,
                        datasets: [{
                                label: "Customers",
                                color: "#ff63a5",
                                background: "transparent",
                                data: ("{{ \Helper::get_data_month('transactions','status','=','accepted') }}").split(",")
                        }]
                };

                var todayVisitors = {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                        dataUnit: 'Pending',
                        lineTension: .3,
                        datasets: [{
                                label: "Visitors",
                                color: "#559bfb",
                                background: "transparent",
                                data: ("{{ \Helper::get_data_month('transactions','status','=','pending') }}").split(",")
                        }]
                };

                console.log(todayRevenue.datasets);

                function ecommerceLineS3(selector, set_data) {
                        var $selector = selector ? $(selector) : $(".ecommerce-line-chart-s3");
                        $selector.each(function() {
                                var $self = $(this),
                                        _self_id = $self.attr("id"),
                                        _get_data =
                                        typeof set_data === "undefined" ? eval(_self_id) : set_data;

                                var selectCanvas = document
                                        .getElementById(_self_id)
                                        .getContext("2d");
                                var chart_data = [];

                                for (var i = 0; i < _get_data.datasets.length; i++) {
                                        chart_data.push({
                                                label: _get_data.datasets[i].label,
                                                tension: _get_data.lineTension,
                                                backgroundColor: _get_data.datasets[i].background,
                                                borderWidth: 2,
                                                borderColor: _get_data.datasets[i].color,
                                                pointBorderColor: "transparent",
                                                pointBackgroundColor: "transparent",
                                                pointHoverBackgroundColor: "#fff",
                                                pointHoverBorderColor: _get_data.datasets[i].color,
                                                pointBorderWidth: 2,
                                                pointHoverRadius: 4,
                                                pointHoverBorderWidth: 2,
                                                pointRadius: 4,
                                                pointHitRadius: 4,
                                                data: _get_data.datasets[i].data,
                                        });
                                }

                                var chart = new Chart(selectCanvas, {
                                        type: "line",
                                        data: {
                                                labels: _get_data.labels,
                                                datasets: chart_data,
                                        },
                                        options: {
                                                legend: {
                                                        display: _get_data.legend ? _get_data.legend : false,
                                                        rtl: NioApp.State.isRTL,
                                                        labels: {
                                                                boxWidth: 12,
                                                                padding: 20,
                                                                fontColor: "#6783b8",
                                                        },
                                                },
                                                maintainAspectRatio: false,
                                                tooltips: {
                                                        enabled: true,
                                                        rtl: NioApp.State.isRTL,
                                                        callbacks: {
                                                                title: function title(tooltipItem, data) {
                                                                        return false;
                                                                },
                                                                label: function label(tooltipItem, data) {
                                                                        return (
                                                                                data.datasets[tooltipItem.datasetIndex][
                                                                                        "data"
                                                                                ][tooltipItem["index"]] +
                                                                                " " +
                                                                                _get_data.dataUnit
                                                                        );
                                                                },
                                                        },
                                                        backgroundColor: "#1c2b46",
                                                        titleFontSize: 8,
                                                        titleFontColor: "#fff",
                                                        titleMarginBottom: 4,
                                                        bodyFontColor: "#fff",
                                                        bodyFontSize: 8,
                                                        bodySpacing: 4,
                                                        yPadding: 6,
                                                        xPadding: 6,
                                                        footerMarginTop: 0,
                                                        displayColors: false,
                                                },
                                                scales: {
                                                        yAxes: [{
                                                                display: false,
                                                                ticks: {
                                                                        beginAtZero: false,
                                                                        fontSize: 12,
                                                                        fontColor: "#9eaecf",
                                                                        padding: 0,
                                                                },
                                                                gridLines: {
                                                                        color: NioApp.hexRGB("#526484", 0.2),
                                                                        tickMarkLength: 0,
                                                                        zeroLineColor: NioApp.hexRGB(
                                                                                "#526484",
                                                                                0.2
                                                                        ),
                                                                },
                                                        }, ],
                                                        xAxes: [{
                                                                display: false,
                                                                ticks: {
                                                                        fontSize: 12,
                                                                        fontColor: "#9eaecf",
                                                                        source: "auto",
                                                                        padding: 0,
                                                                        reverse: NioApp.State.isRTL,
                                                                },
                                                                gridLines: {
                                                                        color: "transparent",
                                                                        tickMarkLength: 0,
                                                                        zeroLineColor: NioApp.hexRGB(
                                                                                "#526484",
                                                                                0.2
                                                                        ),
                                                                        offsetGridLines: true,
                                                                },
                                                        }, ],
                                                },
                                        },
                                });
                        });
                } // init chart

                NioApp.coms.docReady.push(function() {
                        ecommerceLineS3();
                });

        })(NioApp, jQuery);
</script>
@endpush