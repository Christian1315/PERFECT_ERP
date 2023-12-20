<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('logo.jpeg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <title>CCIB</title>

    <style>
        * {
            font-family: "Poppins";
        }

        /* .first>li {
            font-weight: 900px !important;
        } */

        .info_block {
            padding-top: 40px;
        }

        .logo {
            height: 80px;
            width: auto;
            margin-top: 20px;
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
            background-repeat: repeat;
        }


        p.mandate-title {
            margin-top: 10px;
            font-weight: bold;
            font-size: 20px;
        }

        p.mandate-title em {
            color: #e4540c !important;
        }

        #header {
            border-bottom: solid 1px #000;
            align-items: center;
            margin-block: 10px;
        }

        #card-body,
        #card-body2 {
            height: 350px !important;
        }

        #card-body2 p {
            font-size: 25px;
            font-weight: 500;
        }

        #card-body .reference {
            background-color: rgb(24, 95, 44);
            text-align: center;
            color: #fff;
            width: 100%;
        }

        #card-body .avatar {
            width: 100%;
            height: 260px;
            border-radius: 10px;
            border: solid 5px rgb(24, 95, 44);
        }

        ul li {
            list-style-type: none;
            font-size: 18px;
            margin-block: 1px;
        }

        #footer {
            background-color: #e4540c !important;
            color: #fff !important;
            margin-top: 20px;
            /* border-radius: 0px 0px 10px 10px; */
        }

        #card {
            /* border: #000 solid 2px; */
            /* border-radius: 10px; */
            background-image: url("{{asset('bg-card.png')}}");
        }

        .block-title span {
            color: #fff;
            padding: 5px 15px;
            display: none !important;
        }

        .block-title .span2 {
            background-color: #e4540c;
        }

        .block-title .span1 {
            background-color: rgb(24, 95, 44);
        }

        .block-title {
            /* margin-bottom: -10px !important; */
        }

        .qr_code {
            width: 80px;
            margin-block: 10px;
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
                                <img src="{{asset('logo-card.png')}}" class="logo img-fluid" alt="">
                            </div>
                            <div class="col-8 text-center">
                                <p class="sub-title">République du Bénin</p>
                                <span class="title">CARTE D'IDENTITE CONSULAIRE</span> <br>
                                <p class="mandate-title">Mandature <em class=""> <?php echo date("Y", strtotime($card_mandate->start_date)) ?> </em> - <em class=""> <?php echo date("Y", strtotime($card_mandate->end_date)) ?></em></p>
                            </div>
                            <div class="col-2">
                                <img src="{{asset('drapeau.png')}}" class="logo img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row px-5" id="card-body">
                    <div class="col-4" style="align-items: center;">
                        <h4 class="reference mt-3">N° {{$card->reference}} </h4>
                        <img src="{{$consular->photo}}" class="avatar shadow-lg" alt="avatar" srcset="">
                    </div>
                    <div class="col-8">
                        <div class="row info_block" id="consular_info">
                            <div class="col-6">
                                <ul class="first">
                                    <li style="font-weight: 900px">Nom /Name</li>
                                    <li style="font-weight: 900px">Prénom(s) /Surname</li>
                                    <li style="font-weight: 900px">Télephone /Phone</li>
                                    <li style="font-weight: 900px">Email /Email</li>
                                    <li style="font-weight: 900px">Titre /Title :</li>
                                    <li style="font-weight: 900px">Forme Juridique /Status</li>
                                    <li style="font-weight: 900px">Secteur d'activité /Area</li>
                                    <!-- <li>Fonction /Function</li> -->
                                    <li style="font-weight: 900px">Dénomination</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="second">
                                    <li> <strong>{{$consular->firstname}} </strong></li>
                                    <li> <strong>{{$consular->lastname}} </strong></li>
                                    <li> <strong>{{$consular->phone}} </strong></li>
                                    <li> <strong>{{$consular->email}}</strong></li>
                                    <li> <strong>{{$poste->label}} </strong></li>
                                    <li> <strong>{{$card_company->form_juridique}} </strong></li>
                                    <li> <strong>{{$card_company->activity_area}} </strong></li>
                                    <li> <strong>{{$card_company->denomination}} </strong></li>
                                    <!-- <li> <strong>{{$fonction->label}} </strong></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="footer">
                    <div class="col-md-12">
                        <h4 class="text-center">Validité: <em class=""> <?php echo date("d/m/Y", strtotime($card_mandate->start_date)) ?> </em> - <em class=""> <?php echo date("d/m/Y", strtotime($card_mandate->end_date)) ?></em></h4>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>

        <br>
        <br>

        <!-- <br><br><br><br>
        <br><br><br><br><br>
        <br><br><br><br><br>
        <br><br><br><br><br>
        <br><br><br><br><br>
        <br><br><br><br><br>
        <br><br><br><br><br>
        <br><br><br><br><br>
        <br><br><br><br><br>
        <br><br><br><br><br>
        <br><br><br><br><br>
        <br><br><br><br><br>
        <br><br><br><br><br>
        <br><br><br><br><br> -->

        <!-- LE DERRIERE DE LA CARTE -->
        <div class="row" id="body">
            <div class="col-2"></div>
            <div class="col-8" id="card">
                <div class="row px-0" id="header">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 text-center mb-2">
                                <img src="{{asset('logo-card.png')}}" style="width: 100px; height: auto;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="card-body2">
                    <div class="col-12 text-center">
                        <img src="{{$card->qr_code}}" class="qr_code shadow-lg" alt="CODE QR" srcset="">

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
                        <h4 class="text-center">Validité: <em class=""> <?php echo date("d/m/Y", strtotime($card_mandate->start_date)) ?> </em> - <em class=""> <?php echo date("d/m/Y", strtotime($card_mandate->end_date)) ?></em></h4>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>

</html>