<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="../../public/css/materialize.css">
        <style>
            html, body {
                background-color: #704214;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                color: white;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


            .center-screen {
                position: absolute;
                right: 8%;
                left: 8%;
                top: 30%;
            }

            .animated {

                -webkit-animation-duration: 10s;
                animation-duration: 10s;
                -webkit-animation-fill-mode: both;
                animation-fill-mode: both;
            }

            @-webkit-keyframes fadeIn {
                0% {opacity: 0;}
                100% {opacity: 1;}
            }

            @keyframes fadeIn {
                0% {opacity: 0;}
                100% {opacity: 1;}
            }

            .fadeIn {
                -webkit-animation-name: fadeIn;
                animation-name: fadeIn;
            }

            @-webkit-keyframes FadeIn {
                0% {opacity: 0;}
                100% {opacity: 1;}
                {animation-delay: 2s;}
            }

            @keyframes FadeIn {
                0% {opacity: 0;}
                100% {opacity: 1;}
            }

            .FadeIn {
                -webkit-animation-name: FadeIn;
                animation-name: FadeIn;
            }

        </style>
    </head>
    <body
        <div class="content center-screen animated fadeIn">
            <div class="title m-b-md">
                Gamache Web Designs
            </div>

            <div class="links animated FadeIn">
                <a href="about">About</a>
                <a href="services">Services</a>
                <a href="contact">Contact</a>
                <a href="https://github.com/scotch115/Website">GitHub</a>
            </div>
        </div>
    </body>
</html>
