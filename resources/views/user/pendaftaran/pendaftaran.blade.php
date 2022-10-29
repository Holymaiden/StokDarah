<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../" />
    <meta charset="utf-8" />
    <title>Pendaftaran Pengambilan Darah</title>
    <meta name="description" content="PPDB-SPTTM" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{ asset('css') }}/pages/login/login-1.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css') }}/pages/wizard/wizard-6.css" rel="stylesheet" type="text/css" />

    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('plugins') }}/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins') }}/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css') }}/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{ asset('css') }}/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css') }}/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css') }}/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css') }}/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="icon" type="image/png" href="{{url('images')}}/PMI-logo.png">
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class=" login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
            <!--begin::Aside-->
            <!--begin::Aside-->
            <!--begin::Content-->
            <!-- login-content -->
            <div class="flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
                <!--begin::Content body-->
                <div class="d-flex flex-column-fluid flex-center">
                    <!--begin::Forgot-->
                    <div class="login-form login-signin">

                        <!--begin::Wizard 6-->
                        <div class="wizard wizard-6 d-flex flex-column flex-lg-row flex-column-fluid" id="kt_wizard">
                            <!--begin::Container-->
                            <div class="wizard-content d-flex flex-column">
                                <!--begin::Nav-->
                                <div class="d-flex flex-column-auto flex-column px-10">
                                    <!--begin: Wizard Nav-->
                                    <div class="wizard-nav pb-lg-10 pb-3 d-flex flex-column align-items-center align-self-center align-items-md-start">
                                        <!--begin::Wizard Steps-->
                                        <div class="wizard-steps d-flex flex-column flex-md-row">
                                            <!--begin::Wizard Step 1 Nav-->
                                            <div class="wizard-step flex-grow-1 flex-basis-0" data-wizard-type="step" data-wizard-state="current">
                                                <div class="wizard-wrapper pr-lg-5 pr-3">
                                                    <div class="wizard-icon">
                                                        <i class="wizard-check ki ki-check"></i>
                                                        <span class="wizard-number">1</span>
                                                    </div>
                                                    <div class="wizard-label mr-3">
                                                        <h3 class="wizard-title">Data Calon Pendaftar</h3>
                                                        <div class="wizard-desc">Data details</div>
                                                    </div>
                                                    <span class="svg-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
                                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <!--end::Wizard Step 1 Nav-->
                                            <!--begin::Wizard Step 3 Nav-->
                                            <div class="wizard-step flex-grow-1 flex-basis-0" data-wizard-type="step">
                                                <div class="wizard-wrapper">
                                                    <div class="wizard-icon">
                                                        <i class="wizard-check ki ki-check"></i>
                                                        <span class="wizard-number">2</span>
                                                    </div>
                                                    <div class="wizard-label">
                                                        <h3 class="wizard-title">Selesai</h3>
                                                        <div class="wizard-desc">Complete
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Wizard Step 3 Nav-->
                                        </div>
                                        <!--end::Wizard Steps-->
                                    </div>
                                    <!--end: Wizard Nav-->
                                </div>
                                <!--end::Nav-->
                                <!--begin::Form-->
                                <form class="px-10" novalidate="novalidate" id="kt_form" action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <!--begin: Wizard Step 1-->
                                    <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                        <!--begin::Form Group-->
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label class="font-size-h6 font-weight-bolder text-dark">Nama</label>
                                                <input type="text" class="form-control form-control-solid h-auto p-7 px-12 border-0 rounded-lg font-size-h6" name="nama" readonly value="{{Auth()->user()->name}}" />
                                            </div>
                                            <div class="col-md-6">
                                                <label class="font-size-h6 font-weight-bolder text-dark">Phone</label>
                                                <input type="text" class="form-control form-control-solid h-auto p-7 px-12 border-0 rounded-lg font-size-h6" name="phone" readonly value="{{Auth()->user()->phone}}" />
                                            </div>
                                        </div>
                                        <!--begin::Form Group-->
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label class="font-size-h6 font-weight-bolder text-dark">Jenis
                                                    Kelamin</label>
                                                <select name="jenis_kelamin" class="form-control form-control-solid h-auto p-7 px-12 border-0 rounded-lg font-size-h6">
                                                    <option value="">Select</option>
                                                    <option value="laki-laki">Laki-Laki</option>
                                                    <option value="perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="font-size-h6 font-weight-bolder text-dark">Alamat</label>
                                                <input type="text" class="form-control form-control-solid h-auto p-7 px-12 border-0 rounded-lg font-size-h6" name="alamat" placeholder="Alamat" value="" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label class="font-size-h6 font-weight-bolder text-dark">Tanggal
                                                    Pengambilan</label>
                                                <input type="date" class="form-control form-control-solid h-auto p-7 px-12 border-0 rounded-lg font-size-h6" name="request_date" placeholder="Tanggal Pengambilan" value="" />
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="font-size-h6 font-weight-bolder text-dark">Golongan Darah</label>
                                                <select name="blood" class="form-control form-control-solid h-auto p-7 px-12 border-0 rounded-lg font-size-h6">
                                                    <option value="{{$id}}" selected>{{$id}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label class="font-size-h6 font-weight-bolder text-dark">Surat Rekaman Medis Dari Rumah Sakit</label>
                                                <input type="file" class="form-control h-auto p-7 px-12 border-0 rounded-lg font-size-h6" name="medis" placeholder="No. Rekaman Medis" value="" />
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="font-size-h6 font-weight-bolder text-dark">Total Darah Yang Diperlukan</label>
                                                <input type="number" class="form-control form-control-solid h-auto p-7 px-12 border-0 rounded-lg font-size-h6" name="total" placeholder="Volume" value="" />
                                            </div>
                                        </div>
                                        <!--end::Form Group-->
                                    </div>
                                    <!--end: Wizard Step 1-->
                                    <!--begin: Wizard Step 3-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <!--begin::Section-->
                                        <h4 class="font-weight-bolder mb-3 text-center">Apakah Anda Yakin Untuk Melakukan Pendaftaran Open Class</h4>
                                        <div class="text-dark-50 font-weight-bold line-height-lg mb-8 text-center">
                                            <div>Jika Yakin Maka Tekan Submit</div>
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end: Wizard Step 3-->
                                    <!--begin: Wizard Actions-->
                                    <div class="d-flex justify-content-between">
                                        <div class="mr-2">
                                            <button type="button" class="btn btn-light-primary font-weight-bolder font-size-h6 pr-8 pl-6 py-4 my-3 mr-3" data-wizard-type="action-prev">
                                                <span class="svg-icon svg-icon-md mr-2">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Left-2.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)" x="14" y="7" width="2" height="10" rx="1" />
                                                            <path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>Previous</button>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3" data-wizard-type="action-submit">Submit
                                                <span class="svg-icon svg-icon-md ml-2">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
                                                            <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span></button>
                                            <button type="button" class="btn btn-danger font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3" data-wizard-type="action-next">Next
                                                <span class="svg-icon svg-icon-md ml-2">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
                                                            <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span></button>
                                        </div>
                                    </div>
                                    <!--end: Wizard Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Wizard 6-->
                        <!--end::Wizard-->

                        <!--end::Form-->
                    </div>

                </div>
                <!--end::Content body-->
                <!--begin::Content footer-->
                <div class="
              d-flex
              justify-content-lg-start justify-content-center
              align-items-end
              py-7 py-lg-0
            ">
                    <div class="text-dark-50 font-size-lg font-weight-bolder mr-10">
                        <span class="mr-1">2022©</span>
                        <a href="#" target="_blank" class="text-dark-75 text-hover-primary">Fihaa</a>
                    </div>
                    <a href="#" class="text-danger font-weight-bolder font-size-lg">Terms</a>
                    <a href="#" class="text-danger ml-5 font-weight-bolder font-size-lg">Plans</a>
                    <a href="#" class="text-danger ml-5 font-weight-bolder font-size-lg">Contact Us</a>
                </div>
                <!--end::Content footer-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->
    <script>
        var HOST_URL =
            "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            breakpoints: {
                sm: 576,
                md: 768,
                lg: 992,
                xl: 1200,
                xxl: 1400
            },
            colors: {
                theme: {
                    base: {
                        white: "#ffffff",
                        primary: "#3699FF",
                        secondary: "#E5EAEE",
                        success: "#1BC5BD",
                        info: "#8950FC",
                        warning: "#FFA800",
                        danger: "#F64E60",
                        light: "#E4E6EF",
                        dark: "#181C32",
                    },
                    light: {
                        white: "#ffffff",
                        primary: "#E1F0FF",
                        secondary: "#EBEDF3",
                        success: "#C9F7F5",
                        info: "#EEE5FF",
                        warning: "#FFF4DE",
                        danger: "#FFE2E5",
                        light: "#F3F6F9",
                        dark: "#D6D6E0",
                    },
                    inverse: {
                        white: "#ffffff",
                        primary: "#ffffff",
                        secondary: "#3F4254",
                        success: "#ffffff",
                        info: "#ffffff",
                        warning: "#ffffff",
                        danger: "#ffffff",
                        light: "#464E5F",
                        dark: "#ffffff",
                    },
                },
                gray: {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32",
                },
            },
            "font-family": "Poppins",
        };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('plugins') }}/global/plugins.bundle.js"></script>
    <script src="{{ asset('plugins') }}/custom/prismjs/prismjs.bundle.js"></script>
    <script src="{{ asset('js') }}/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('js') }}/pages/custom/login/login-general.js"></script>
    <script src="{{ asset('js') }}/pages/custom/wizard/wizard-6.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // proses cetak formulir
            $('#cetakFormulir1').click(function(e) {
                e.preventDefault();
                $.ajax({
                    data: $('#kt_login_signup_form').serialize(),
                    url: "{{ url('/cetak-formulir') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {
                        alert(data.status);
                        load('/cetak')
                    },
                    error: function(data) {
                        $('#formInput').trigger("reset");
                        $('#ajaxModel').modal('hide');
                        toastr.danger("Failed to update data!");
                    }
                });
            });

            materis = (materi) => {
                console.log(materi)
                let media;
                switch (materi) {
                    case 'laravel':
                        media = '<option value="" selected>Select</option> <option value="15000">Rp. 15000</option>';
                        break;
                    case 'react':
                        media = '<option value="" selected>Select</option> <option value="20000">Rp. 20000</option>';
                        break;
                    default:
                        media = '<option value="">Select</option>';
                }
                document.getElementById('harga').innerHTML = media;
            };
        })
    </script>
    <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>