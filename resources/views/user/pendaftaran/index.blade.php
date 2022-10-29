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
                                        <!--begin::Signin-->
                                        <div class="login-form login-signin">
                                                <!--begin::Form-->
                                                <form class="form" novalidate="novalidate" id="kt_login_signin_form">
                                                        <!--begin::Title-->
                                                        <div class="pb-13 pt-lg-0 pt-5">
                                                                <h3 class=" font-weight-bolder text-dark mb-lg-25 font-size-h4 font-size-h1-lg text-center">
                                                                        PEMILIHAN PENGAMBILAN DARAH
                                                                </h3>
                                                                <div class="row" style="place-content: center;text-align: center;">
                                                                        <div class="pb-lg-0 pb-5 mb-5 mx-5">
                                                                                <img src="{{ asset('images/blood-a.png') }}" alt="" width="160" height="244">
                                                                                <a href="{{ route('pendaftaran.darah', 'A') }}" class=" btn  btn-lg btn-block text-light font-weight-bolder font-size-h6" style="background: linear-gradient(to right, #DC1C13, #F07470)">Golongan Darah A</a>
                                                                        </div>
                                                                        <div class="pb-lg-0 pb-5 mb-5 mx-5">
                                                                                <img src="{{ asset('images/blood-b.png') }}" alt="" width="160" height="244">
                                                                                <a href="{{ route('pendaftaran.darah', 'B') }}" class=" btn  btn-lg btn-block text-light font-weight-bolder font-size-h6" style="background: linear-gradient(to right, #DC1C13, #F07470)">Golongan Darah B</a>
                                                                        </div>
                                                                        <div class="pb-lg-0 pb-5 mb-5 mx-5">
                                                                                <img src="{{ asset('images/blood-ab.png') }}" alt="" width="160" height="244">
                                                                                <a href="{{ route('pendaftaran.darah', 'AB') }}" class=" btn  btn-lg btn-block text-light font-weight-bolder font-size-h6" style="background: linear-gradient(to right, #DC1C13, #F07470)">Golongan Darah AB</a>
                                                                        </div>
                                                                        <div class="pb-lg-0 pb-5 mb-5 mx-5">
                                                                                <img src="{{ asset('images/blood-o.png') }}" alt="" width="160" height="244">
                                                                                <a href="{{ route('pendaftaran.darah', 'O') }}" class=" btn  btn-lg btn-block text-light font-weight-bolder font-size-h6" style="background: linear-gradient(to right, #DC1C13, #F07470)">Golongan Darah O</a>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <!--begin::Title-->
                                                        <!--begin::Form group-->

                                                        <!--end::Form group-->
                                                        <!--begin::Form group-->

                                                        <!--end::Form group-->
                                                        <!--begin::Action-->

                                                        <!--end::Action-->
                                                </form>
                                                <!--end::Form-->
                                        </div>
                                        <!--end::Signin-->
                                        <!--end::Container-->
                                </div>
                                <!--end::Wizard 6-->
                                <!--end::Wizard-->

                                <!--end::Form-->
                        </div>

                </div>
                <!--end::Content body-->
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
        <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>