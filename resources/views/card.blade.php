<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="style.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <title>CCIB</title>

    <style>
        * {
            font-family: "Poppins";
        }

        .logo {
            /* width: 150px; */
            height: 100px;
            width: 100%;
        }

        p.sub-title {
            font-size: 20px;
            margin-bottom: 10px !important;
            font-size: bold;
        }

        .title {
            font-size: 25px;
            background-color: #e4540c;
            color: #fff;
            padding: 6px;
        }

        #body {
            background-repeat: no-repeat;
            background-position: center;
            background-image: url("card-logo-crocked.png");
        }


        p.mandate-title {
            margin-top: 10px;
            font-weight: bold;
            font-size: 20px;
        }

        #header {
            border-bottom: solid 2px #000;
            align-items: center;
            margin-block: 10px;
        }

        #card-bady,
        #card-bady2 {
            padding-top: 100px;
        }

        #card-bady2 p {
            font-size: 25px;
            font-weight: 500;
        }

        #card-bady .reference {
            background-color: rgb(24, 95, 44);
            text-align: center;
            color: #fff;
            width: 100%;
        }

        #card-bady .avatar {
            width: 100%;
            border-radius: 10px;
            border: solid 5px rgb(24, 95, 44);
        }

        ul.first li::marker {
            color: #e4540c;
            font-size: 20px;
        }

        ul.second li {
            list-style-type: none;
            font-size: 16px;
            margin-block: 5px;
        }

        #footer {
            background-color: rgb(24, 95, 44) !important;
            color: #fff !important;
            margin-top: 20px;
        }

        #card {
            border: #000 solid 2px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="row" id="body">
            <div class="col-2"></div>
            <div class="col-8" id="card">
                <div class="row px-0" id="header">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <img src="logo-card.png" class="logo" alt="">
                            </div>
                            <div class="col-8 text-center">
                                <p class="sub-title">République du Bénin</p>
                                <span class="title">CARTE D'IDENTITE CONSULAIRE</span> <br>
                                <p class="mandate-title">Mandature 2020-2025</p>
                            </div>
                            <div class="col-2">
                                <img src="drapeau.png" class="logo" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="card-bady">
                    <div class="col-4">
                        <h4 class="reference">N° XXXXXXX</h4>
                        <img src="avatar.png" class="avatar shadow-lg" alt="avatar" srcset="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-6">
                                <ul class="first">
                                    <li>Nom /Name</li>
                                    <li>Prénom(s) /Surname</li>
                                    <li>Télephone /Phone</li>
                                    <li>Email /Email</li>
                                    <li>Dénomination /Denomination</li>
                                    <li>Forme Juridique /Legal status</li>
                                    <li>Secteur d'activité /Activity area</li>
                                    <li>Activité Principale /Main Activity</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="second">
                                    <li> <strong>GOGO </strong></li>
                                    <li> <strong>Christian </strong></li>
                                    <li> <strong>+22961765590 </strong></li>
                                    <li> <strong>gogochristian009@gmail.com </strong></li>
                                    <li> <strong>Finanfa </strong></li>
                                    <li> <strong>Sarl </strong></li>
                                    <li> <strong>Informatique </strong></li>
                                    <li> <strong>Développement Web </strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="footer">
                    <div class="col-md-12">
                        <h4 class="text-center">Validité: 10/05/25</h4>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>

        <br><br><br><br><br>
        <!-- LE DERRIERE DE LA CARTE -->
        <div class="row" id="body">
            <div class="col-2"></div>
            <div class="col-8" id="card">
                <div class="row px-0" id="header">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-4">
                            </div>
                            <div class="col-2 text-center">
                                <img src="logo-card.png" style="width: 100; height: 100px;" alt="">
                            </div>
                            <div class="col-4">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="card-bady2">
                    <div class="col-12">
                        <p class="text-center">
                            <strong>NB:</strong>
                            Cette Carte est strictement personnelle. En cas de perte,
                            Veuillez vous rapprochez du bureau de la CCIB.
                        </p>
                        <p class="text-center">
                            <strong>Contact </strong> +22991434343/21312081 <br>
                            <strong>Email: </strong> info@ccib.bj
                        </p>
                        <p class="">
                        <h3 class="text-center">Le président de la CCIB</h3>
                        <h4 class="text-center reference"><strong>Arnauld AKAKPO</strong></h4>
                        </p>
                    </div>
                </div>
                <div class="row" id="footer">
                    <div class="col-md-12">
                        <h4 class="text-center">Validité: 10/05/25</h4>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>

</html>