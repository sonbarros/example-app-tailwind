<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Import Tailwind CSS -->
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <!-- NAVBAR -->
    <header>
        <div class="fixed flex w-full px-3 py-4 bg-black md:px-20">
            <div>
                <a href="#">
                    <img class="w-20 md:w-125px" src="img/spotify-logo.png" alt="spotify">
                </a>
            </div>

            <div class="flex justify-end flex-1 text-3xl text-white md:hidden">
                <i class="fas fa-bars"></i>
            </div>

            <div class="flex items-end flex-1 hidden font-bold text-white md:block">
                <nav>
                    <ul>
                        <li>
                            <a href="#">Premium</a>
                        </li>
                        <li>
                            <a href="#">Ajuda</a>
                        </li>
                        <li>
                            <a href="#">Baixar</a>
                        </li>
                        <li><span></span></li>
                        <li>
                            <a href="#">Inscrever-se</a>
                        </li>
                        <li><a href="#">Log In</a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </header>

</body>
</html>
