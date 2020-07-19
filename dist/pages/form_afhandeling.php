<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Michiel Van Eynde en Willy Van Eynde">
    <title>Dank u!</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">
    <div id="top" class="rounded">
        <a href="#">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>

    <section class="text-center mt-3">
        <nav class="navbar navbar-expand-md mb-4">

            <p class="d-md-none navbar-brand pt-3">Navigatie</p>
            <button class="navbar-toggler second-button p-2" type="button" data-toggle="collapse"
                    data-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <div class="animated-icon2 mr-0">
                    <span></span><span></span><span></span><span></span></div>
            </button>

            <div class="collapse navbar-collapse pt-2" id="navbar">
                <ul class="navbar-nav d-flex w-100">
                    <li class="d-flex">
                        <a href="../../index.html">Startpagina</a>
                    </li>
                    <li class="d-flex">
                        <a href="../pages/foto.html">Foto's</a>
                    </li>
                    <li class="d-flex">
                        <a class="active" href="../pages/gebeurtenissen.html">Gebeurtenissen</a>
                    </li>
                    <li class="d-flex">
                        <a href="../pages/geschiedenis.html">Geschiedenis</a>
                    </li>
                    <li class="d-flex">
                        <a href="../pages/hobby.html">Hobby's</a>
                    </li>
                    <li class="d-flex">
                        <a href="../pages/contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <h1 class="text-center">Dank u voor uw hulp</h1>

    <div class="foto7"></div>

    <div class="php_afhandeling">
        <?php
        $voornaam = $_POST["vooraam"];
        $achternaam = $_POST["achternaam"];
        $email = $_POST["email"];
        $bericht = $_POST["bericht"];
        $bestand = $_POST["bestand"];
        $akkoord = $_POST["akkoord"];

        $honeypot = $_POST["Honey"];

        if (isset($honeypot) == "") {

            if (isset($voornaam) && isset($achternaam) !== "") {
                echo "<p>Bedankt, <span class='text-capitalize'>$voornaam $achternaam</span> voor je bericht.</p>";
            } else {
                echo "<p>Gelieve opnieuw te beginnen via volgende link <a href='../pages/contact.html'>Contact</a></p>";
            }

            if (isset($email) !== ""){
                echo "<p>We zullen je indien nodig contacteren op volgend e&dash;mailadres: $email";
            }

        } else {
            echo "<h2 class='text-center'>Deze upload is niet geldig</h2>";
            echo "<p>Gelieve opnieuw te beginnen via volgende link <a href='../pages/contact.html'>Contact</a></p>";
        }

        ?>
    </div>

    <section class="mt-2">
        <footer class="text-center pt-2">
            <div class="row">
                <h6 class="col-12">&copy; Van Eynde</h6>
                <p class="col-12">&dash;2020&dash;</p>
            </div>
        </footer>
    </section>
</div>
</body>
</html>
