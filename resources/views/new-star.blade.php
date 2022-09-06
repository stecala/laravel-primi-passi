<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            }

            body {
            display: flex;
            justify-content: center;
            align-items: center;
            background: #1a191d;
            min-height: 100vh;
            }

            .loader {
            position: relative;
            width: 200px;
            height: 200px;
            }

            .loader span {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            }

            .loader span:nth-child(1) {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            border-top: 0.25px solid rgba(255, 255, 255, 0.1);
            border-left: 0.25px solid rgba(255, 255, 255, 0.1);
            animation: MoveUpDown 4s linear infinite;
            box-shadow: 1px 1px 40px 10px #ffffff;
            z-index: 2;
            }

            .loader span:nth-child(2) {
            background: linear-gradient(40deg, #4361ee 10%, #2d6a4f 90%);
            animation: animate 4s ease-in-out infinite;
            }

            .loader span:nth-child(3) {
            background: radial-gradient(#fca311, #ffb703);
            animation: animate 4s ease-in-out infinite;
            box-shadow: 0px 0px 60px 7px #ffb703;
            animation-delay: -0.9s;
            }

            @keyframes MoveUpDown {
            0%,
            100% {
                bottom: 0;
            }
            50% {
                bottom: 10px;
            }
            }

            @keyframes animate {
            0% {
                transform: translate(-150px, 50px) scale(0.2);
                z-index: 1;
            }
            50% {
                transform: translate(150px, -50px) scale(0.3) rotate(360deg);
                z-index: 1;
            }
            50.00001% {
                transform: translate(150px, -50px) scale(0.3);
                z-index: 3;
            }
            100% {
                transform: translate(-150px, 50px) scale(0.2);
                z-index: 3;
            }
            }
            
            header{
               position: fixed;
               z-index: 99;
               padding: 5px 20px;
            }
            a{
                text-decoration: none;
                color: white;
                font-size: 2rem;
            }
        </style>
    </head>
    <body>
       
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </body>
</html>
