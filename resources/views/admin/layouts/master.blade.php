<html lang="en" style="height: auto;"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>
        @stack('css')
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    @livewireStyles
    <body class="sidebar-mini" style="height: auto;">
        <div class="wrapper">


        @include('admin.include.topBar')


        @include('admin.include.navbar')

        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                  @yield("content")
                </div>
            </div>
        </div>


        @include('admin.include.sidebar')


        <footer class="main-footer">

            <div class="float-right d-none d-sm-inline">
            Anything you want
            </div>

            <strong>Copyright © 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
        <div id="sidebar-overlay"></div></div>



        <script src="{{mix('js/app.js')}}"></script>
        @stack('scrpts')


        @livewireScripts
    </body>
</html>
