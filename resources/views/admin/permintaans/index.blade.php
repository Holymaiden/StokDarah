@extends('admin._layouts.index')

@push('cssScript')
@include('admin._layouts.css.css')
@endpush

@push('users')
active
@endpush

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Permintaaan Darah List</h3>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li><a href="{{ route('permintaans.print') }}" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                        </ul>
                    </div>
                </div><!-- .toggle-wrap -->
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <div class="nk-block">
        <div class="card card-bordered card-stretch">
            <div class="card-inner-group">
                <div class="card-inner position-relative card-tools-toggle">
                    <div class="card-title-group">
                        <div class="card-tools">
                            <div class="form-inline flex-nowrap gx-3">
                                <!-- <div class="card-title"> -->
                                <h6 class="title">Recent Permintaans</h6>
                            </div><!-- .form-inline -->
                        </div><!-- .card-tools -->
                        <div class="card-tools me-n1">

                            <ul class="btn-toolbar gx-1">
                                <li>
                                    <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                </li><!-- li -->
                                <li class="btn-toolbar-sep"></li><!-- li -->
                                <li>
                                    <div class="toggle-wrap">
                                        <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-menu-right"></em></a>
                                        <div class="toggle-content" data-content="cardTools">
                                            <ul class="btn-toolbar gx-1">
                                                <li class="toggle-close">
                                                    <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-arrow-left"></em></a>
                                                </li><!-- li -->
                                                <li>
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                            <div class="dot dot-primary"></div>
                                                            <em class="icon ni ni-filter-alt"></em>
                                                        </a>
                                                        <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                                            <div class="dropdown-head">
                                                                <span class="sub-title dropdown-title">Filter Customers</span>
                                                            </div>
                                                            <div class="dropdown-body dropdown-body-rg">
                                                                <div class="row gx-4 gy-3">
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label class="overline-title overline-title-alt">Status</label>
                                                                            <select class="form-select js-select2 js-select2-sm" name="status" id="statusP">
                                                                                <option value=" ">Any Status</option>
                                                                                <option value="accepted">Accepted</option>
                                                                                <option value="pending">Pending</option>
                                                                                <option value="rejected">Rejected</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .filter-wg -->
                                                    </div><!-- .dropdown -->
                                                </li><!-- li -->
                                                <li>
                                                    <div class="dropdown">
                                                        <select class="form-control form-control-sm selectric" name="" id="jumlah">
                                                            <option selected="selected" value="5">5</option>
                                                            <option value="10">10</option>
                                                            <option value="15">15</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select>
                                                    </div><!-- .dropdown -->
                                                </li><!-- li -->
                                            </ul><!-- .btn-toolbar -->
                                        </div><!-- .toggle-content -->
                                    </div><!-- .toggle-wrap -->
                                </li><!-- li -->
                            </ul><!-- .btn-toolbar -->
                        </div><!-- .card-tools -->
                    </div><!-- .card-title-group -->
                    <div class="card-search search-wrap" data-search="search">
                        <div class="card-body">
                            <div class="search-content">
                                <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                <input type="text" name="" class="form-control border-transparent form-focus-none" placeholder="Search..." id="pencarian">
                                <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                            </div>
                        </div>
                    </div><!-- .card-search -->
                </div><!-- .card-inner -->
                <div class="card-inner p-0">
                    <div class="table-responsive">
                        <div class="nk-tb-list nk-tb-ulist datatabel">


                        </div><!-- .nk-tb-list -->
                    </div>
                </div><!-- .card-inner -->
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
            </div><!-- .card-inner-group -->
        </div><!-- .card -->
    </div><!-- .nk-block -->
</div>
@include('admin.'.$title.'._form')
@endsection

@push('jsScript')
@include('admin._layouts.js.js')
<script type="text/javascript">
    $(document).ready(function() {
        let urlx = "admin/{{ $title }}";

        loadpage('', "{{config('constants.PAGINATION')}}", '');

        var $pagination = $('.twbs-pagination');
        var defaultOpts = {
            totalPages: 1,
            prev: '&#8672;',
            next: '&#8674;',
            first: '&#8676;',
            last: '&#8677;',
        };

        $pagination.twbsPagination(defaultOpts);

        function loaddata(page, cari, jml, status) {
            $.ajax({
                url: urlx + '/data',
                data: {
                    "page": page,
                    "cari": cari,
                    "jml": jml,
                    "status": status
                },
                type: "GET",
                datatype: "json",
                success: function(data) {
                    $(".datatabel").html(data.html);
                }
            });
        }

        function loadpage(cari, jml, status) {
            $.ajax({
                url: urlx + '/data',
                data: {
                    "cari": cari,
                    "jml": jml,
                    "status": status
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
                            loaddata(page, cari, jml, status);
                        }

                    }));
                }
            });
        }

        $("#pencarian, #jumlah, #statusP").on('keyup change', function(event) {
            let cari = $('#pencarian').val();
            let jml = $('#jumlah').val();
            let status = $('#statusP').val();
            loadpage(cari, jml, status);
        });

        $('body').on('click', '.approveData', function() {
            var id = $(this).data("id");
            swal.fire({
                    title: 'Are you sure?',
                    text: 'You want to Approve this data!',
                    icon: 'success',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, approve it!'
                })
                .then((willDelete) => {
                    if (willDelete.isConfirmed) {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: "PUT",
                            data: {
                                id: id,
                                status: 'accepted',
                                user_id_approve: '{{ Auth::user()->id }}'
                            },
                            url: urlx + '/' + id + '/approve',
                            success: function(data) {
                                loadpage('', "{{config('constants.PAGINATION')}}");
                                iziToast.success({
                                    title: 'Successfull.',
                                    message: 'Approve it data!',
                                    position: 'topRight',
                                    timeout: 1500
                                });
                            },
                            error: function(data) {
                                iziToast.error({
                                    title: 'Failed,',
                                    message: 'Approve it data!',
                                    position: 'topRight',
                                    timeout: 1500
                                });
                            }
                        });
                    } else {
                        swal.close();
                    }
                });
        });
        $('body').on('click', '.rejectData', function() {
            var id = $(this).data("id");
            swal.fire({
                    title: 'Are you sure?',
                    text: 'You want to Reject this data!',
                    icon: 'error',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, reject it!'
                })
                .then((willDelete) => {
                    if (willDelete.isConfirmed) {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: "PUT",
                            data: {
                                id: id,
                                status: 'rejected',
                                user_id_approve: '{{ Auth::user()->id }}'
                            },
                            url: urlx + '/' + id + '/approve',
                            success: function(data) {
                                loadpage('', "{{config('constants.PAGINATION')}}");
                                iziToast.success({
                                    title: 'Successfull.',
                                    message: 'Reject it data!',
                                    position: 'topRight',
                                    timeout: 1500
                                });
                            },
                            error: function(data) {
                                iziToast.error({
                                    title: 'Failed,',
                                    message: 'Reject it data!',
                                    position: 'topRight',
                                    timeout: 1500
                                });
                            }
                        });
                    } else {
                        swal.close();
                    }
                });
        });
    });
</script>
@endpush
