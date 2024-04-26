<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .active {
            border-bottom: 2px solid orange
        }

        .alerte {
            width: 50%;
            margin: 10% auto;
            border: 5px solid red;
            animation: bord 2s infinite
        }

        @keyframes bord {


            10%,
            45% {
                border: 3px solid red;
            }

            50% {
                border: 15px solid yellow;
            }

            80% {
                border: 25px solid yellow;
            }
        }
        h5 {
            font-weight: bold;
            text-align: center;
            font-size: 64px;
        }

        :root {
            --main-color: #ecf0f1;
            --point-color: #555;
            --size: 5px;
        }

        .loader {
            background-color: var(--main-color);
            overflow: hidden;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            align-content: center;
            justify-content: center;

        }

        .loader__element {
            border-radius: 100%;
            border: var(--size) solid var(--point-color);
            margin: calc(var(--size)*2);
        }

        .loader__element:nth-child(1) {
            animation: preloader .6s ease-in-out alternate infinite;
        }

        .loader__element:nth-child(2) {
            animation: preloader .6s ease-in-out alternate .2s infinite;
        }

        .loader__element:nth-child(3) {
            animation: preloader .6s ease-in-out alternate .4s infinite;
        }

        @keyframes preloader {
            100% {
                transform: scale(2);
            }
        }

        h5 {
            animation: shake 0.82s cubic-bezier(.36, .07, .19, .97) infinite;
            transform: translate3d(0, 0, 0);
        }

        @keyframes shake {

            10%,
            90% {
                transform: translate3d(-1px, 0, 0);
            }

            20%,
            80% {
                transform: translate3d(2px, 0, 0);
            }

            30%,
            50%,
            70% {
                transform: translate3d(-4px, 0, 0);
            }

            40%,
            60% {
                transform: translate3d(4px, 0, 0);
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="categories.php">Catégories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="hotel.php">Hôtels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="room.php">Chambres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="service.php">Services</a>
                </li>
            </ul>
        </div>
    </nav>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link <" href="../insertion/Categories.php">insertion>Categories </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link <" href="/src/insertion/Hotel.php">insertion>Hotel </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link <" href="/src/insertion/Room.php">insertion>Room </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link <" href="/src/insertion/services.php">insertion>Services </a>
                </li>


            </ul>
        </div>
    </nav>

    <div class="alerte">
        <div class="loader">
            <span class="loader__element"></span>
            <span class="loader__element"></span>
            <span class="loader__element"></span>
        </div>
        <h5>C'est quoi ce bouzin?</h5>
        <div class="loader">
            <span class="loader__element"></span>
            <span class="loader__element"></span>
            <span class="loader__element"></span>
        </div>

    </div>