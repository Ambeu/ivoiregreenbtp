
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminLTE 3 | Log in</title>

        <link rel="stylesheet" href="{{mix("css/app.css")}}">

    </head>
    <body class="hold-transition login-page bg-dark" style="transform: translateY(-50px)">
        <div class="login-box " style="width: 700px;">
            <div class="login-logo">
                <a href="#" style="color: #b3b6b9; font-size: 1.8em;"><b style="font-weight:bold;">YBLT</b>CORPORATE v.1</a>
                <hr/>
              </div>

           @yield('form')
        </div>

        <script src="{{"js/app.js"}}"></script>
 </body>
</html>
