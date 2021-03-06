<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DESAYUNOS FEMINISTAS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            .imgBack {
                background-image: url("../public/images/fondo1.jpg");
                background-size: cover;
            }

            html, body {            
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white !important;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .btn {
                color: white;
            }

        </style>
    </head>

    <body class="imgBack">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md"> DESAYUNOS FEMINISTAS </div>

                <p>Bienvenido a nuestra página web donde podrás jugar a la Oca, pero con un toque diferente.
                    BLABLABLABALBLABALBALABLABLABLABLA
                </p>
                
                <a href="{{url('/home')}}" class="btn btn-success">JUGAR!</a>
                
            </div>
        </div>
    </body>
</html>
