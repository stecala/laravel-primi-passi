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
            *{
                box-sizing: border-box;
                padding: 0;
                margin: 0;
            }
            @keyframes starPulse {
                from    { opacity: 1; }
                to      { opacity: .4; }
            }
            @keyframes sunFire {
                from    { 
                    -webkit-box-shadow: 0 0 30px #f5c91a;
                    -moz-box-shadow: 0 0 30px #f5c91a;
                    box-shadow: 0 0 30px #f5c91a;
                }
                to    { 
                    -webkit-box-shadow: 0 0 100px #f5c91a;
                    -moz-box-shadow: 0 0 100px #f5c91a;
                    box-shadow: 0 0 100px #f5c91a;
                }
            }
            @keyframes spin {
                from    { transform: rotate(0); }
                to      { transform: rotate(360deg);  }
            }
            html, body {
                height: 100%;
                width: 100%;
                overflow: hidden;
            }
            #universe {
                background: black;
                background: -webkit-radial-gradient(#555, #000);
                background:    -moz-radial-gradient(#555, #000);
                background:      -o-radial-gradient(#555, #000);
                background:         radial-gradient(#555, #000);
            }
            #stars {
                position: absolute;
                z-index: 2;
                width: 100%;
                height: 100%;
                background: url('https://user-images.githubusercontent.com/69651552/171965174-f10f6960-81ca-4596-bc1b-cca70b5d2997.png');
                -webkit-animation: starPulse 4s infinite alternate;
                -moz-animation: starPulse 4s infinite alternate;
                -o-animation: starPulse 4s infinite alternate;
                animation: starPulse 4s infinite alternate;
            }
            #sun {
                position: absolute;
                top: 50%;
                left: 50%;
                margin-left: -100px;
                margin-top: -100px;
                z-index: 4;
                height: 200px;
                width: 200px;
                border: solid 2px #ec7e08;
                -webkit-border-radius: 200px;
                -moz-border-radius: 200px;
                border-radius: 200px;
                background: orange;
                background: -webkit-radial-gradient(#f5c313, #ec7e08);
                background: -moz-radial-gradient(#f5c313, #ec7e08);
                background: radial-gradient(#f5c313, #ec7e08);
                -webkit-box-shadow: 0 0 50px #f5c91a;
                -moz-box-shadow: 0 0 50px #f5c91a;
                box-shadow: 0 0 50px #f5c91a;
                -webkit-animation: sunFire 4s infinite alternate;
                -moz-animation: sunFire 4s infinite alternate;
                -o-animation: sunFire 4s linear infinite;
                animation: sunFire 4s infinite alternate;
            }
            #earthOrbit {
                width: 600px;
                height: 700px;
                position: absolute;
                z-index: 4;
                top: 50%;
                left: 50%;
                margin-left: -300px;
                margin-top: -300px;
                -webkit-border-radius: 100%;
                -moz-border-radius: 100%;
                border-radius: 100%;
                -webkit-animation: spin 30s linear infinite;
                -moz-animation: spin 30s linear infinite;
                -o-animation: spin 30s linear infinite;
                animation: spin 30s linear infinite;
            }
            #earth {
                width: 70px;
                height: 70px;
                border-radius: 50%;
                position: absolute;
                top: 50%;
                left: 0;
                margin-top: -40px;
                -webkit-animation: spin 30s linear infinite;
                -moz-animation: spin 30s linear infinite;
                -o-animation: spin 30s linear infinite;
                animation: spin 30s linear infinite;
            }
            #moonOrbit {
                height: 120px;
                width: 120px;
                position: absolute;
                z-index: 4;
                top: 50%;
                left: -20px;
                margin-top: -60px;
                -webkit-border-radius: 100%;
                -moz-border-radius: 100%;
                border-radius: 100%;
                -webkit-animation: spin 4s linear infinite reverse;
                -moz-animation: spin 4s linear infinite reverse;
                -o-animation: spin 4s linear infinite reverse;
                animation: spin 4s linear infinite reverse;
            }
            #moon {
                height: 20px;
                width: 20px;
                background: gray;
                background: -webkit-radial-gradient(#ddd, #888);
                background: -moz-radial-gradient(#ddd, #888);
                background: radial-gradient(#ddd, #888);
                -webkit-border-radius: 100%;
                -moz-border-radius: 100%;
                border-radius: 100%;
            }
        </style>
    </head>
    <body>
    <div id="stars"></div>
        <div id="sun"></div>
        <div id="earthOrbit">
            <img src="https://user-images.githubusercontent.com/69651552/171965179-3318265a-7ed2-4369-9a17-5fa1382231a1.jpg" alt="Earth" id="earth">
            <div id="moonOrbit">
                <div id="moon"></div>
            </div>
        </div>
    </body>
</html>
