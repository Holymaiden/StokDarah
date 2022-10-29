<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
        <base href="../">
        <meta charset="utf-8">
        <meta name="author" content="Fihaa">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- Fav Icon  -->
        <link rel="icon" type="image/png" href="{{url('images')}}/PMI-logo.png">
        <!-- Page Title  -->
        <title>Dashboard &mdash; Admin </title>
        <!-- StyleSheets  -->
        @stack('cssScript')
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
        <div class="nk-app-root">
                <!-- main @s -->
                <div class="nk-main ">
                        @include('admin._layouts.sidebar')
                        <!-- wrap @s -->
                        <div class="nk-wrap ">
                                @include('admin._layouts.header')
                                <!-- main @s -->
                                <div class="nk-content ">
                                        <div class="container-fluid">
                                                <div class="nk-content-inner">
                                                        @yield('content')
                                                </div>
                                        </div>
                                </div>
                                <!-- main end -->
                                @include('admin._layouts.footer')
                        </div>
                        <!-- wrap @e -->
                </div>
                <!-- main @e -->
        </div>
        <!-- app-root @e -->
        @stack('jsScript')
        @stack('jsScriptAjax')
</body>

</html>