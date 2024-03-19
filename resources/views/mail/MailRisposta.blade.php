<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Progetto Presto</title>
    <!-- CUSTOM FONTS -->

    <!--BOOTSTRAP + BSICONS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="bg-black">


    <div class="container-fluid bg-dark">
        <div class="row justify-content-between">
            <div class="col-6">
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.clipartmax.com%2Fmiddle%2Fm2H7d3H7m2d3Z5K9_the-gathering-magic-the-gathering-arena-icon%2F&psig=AOvVaw2PD1Hz7q-Yf8TTXUQFuxkz&ust=1710950482714000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCKDH96_ZgIUDFQAAAAAdAAAAABAE" alt="Logo Magic">
            </div>
            <div class="col-6 d-flex justify-content-end">
                <i class="bi bi-twitter text-light fs-4 px-2"></i>
                <i class="bi bi-facebook text-light fs-4 px-2"></i>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-black my-5">
        <div class="row justify-content-center">
            <div class="col-12 ">
                <h1 class="text-center text-light fw-bold">Risposta di Conferma</h1>
                <h2 class="text-center text-danger fw-semibold">E-mail di prova</h2>
                <h4 class="text-light mt-3"> Salve gentile {{$dati['name']}} riceverai presto una risposta sull'indirizzo {{$dati['email']}}</h4>
                <p class="text-light"> La segnalazione del tuo problema è: {{$dati['message']}}</p>
                <p class="text-light"> Questa è un'E-mail di prova, per l'esercitazione n4, del giorno 19/03/2024, del corso Hackademy 141-B, l'ispirazione di questa pagina E-mail è stata una Mail di publicità, ricevuta in giornata, da Magic the Gathering Arena, e niente, mi piaceva e ho deciso di trarne spunto per crearne una di mia mano</p>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-black my-4">
        <div class="row">
            <div class="col-12 d-flex flex-column align-items-center">
                <a href="{{route('homePage')}}" class="btn btn-danger">Esplora altro Sulla HomePage </a>
                <p class="text-white-50">Continua ad esplorare i nostri ultimi <a href="{{route('paginaArticoliPage')}}">Prodotti</a>, se intendi inviare altre richieste di assistenza, clicca <a href="{{route('chiSiamoPage')}}">Quì!</a></p>
            </div>
        </div>
    </div>




    <!-- BOOTSTRAP JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- JAVASCRIPT -->
    <script src="/js/script.js"></script>
</body>
</html>