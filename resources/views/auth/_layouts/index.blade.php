<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
        <base href="../">
        <meta charset="utf-8">
        <meta name="author" content="Fihaa">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- Fav Icon  -->
        <link rel="shortcut icon" href="{{url('images')}}/PMI-logo.png">
        <!-- Page Title  -->
        <title>Login</title>
        <!-- StyleSheets  -->
        @stack('cssScript')
</head>

<body>

        <body class="nk-body bg-white npc-general pg-auth" style="background-image: url('{{asset('images')}}/bg.jpg')">
                <div class="nk-app-root">
                        <!-- main @s -->
                        <div class="nk-main ">
                                <!-- wrap @s -->
                                <div class="nk-wrap nk-wrap-nosidebar">
                                        <!-- content @s -->
                                        @yield('content')

                                </div>
                                <!-- content @e -->
                        </div>
                        <!-- main @e -->
                </div>
                <!-- app-root @e -->
                @stack('jsScript')
                @stack('jsScriptAjax')
        </body>

</html>