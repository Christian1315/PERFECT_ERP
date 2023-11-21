<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{asset('style_badge.css')}}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <title>BADGE</title>

    <style>
        * {
            /* font-family: "Poppins"; */
        }

        #card {
            border: #000 solid 2px;
            border-radius: 10px;
            background-image: url("bg-croisade1.png");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            padding-top: 150px;
        }


        #header {
            align-items: center;
            margin-block: 10px;
        }

        #card-body {
            padding-block: 70px;
        }


        p.title {
            font-size: 22px;
            margin-bottom: 10px !important;
            font-size: bold;
            color: #043311;
            text-transform: uppercase;
            font-weight: bold;
            /* margin-top: -150px; */
        }

        p.theme {
            font-size: 20px;
        }


        .reference {
            background-color: #f9cf00;
            color: #043311 !important;
            text-align: center;
            color: #fff;
            width: 100%;
        }

        .fullname {
            font-size: 30px;
        }

        .ministry {
            font-size: 25px;
        }

        .phone {
            background-color: #000;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
        }

        #card-body .avatar {
            width: 100% !important;
            /* border-radius: 10px; */
            border: solid 10px #043311;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="row" id="card">
                    <div class="col-md-12">

                        <!-- BODY -->
                        <div class="row" id="card-body">
                            <!-- HEADER -->
                            <div class="row px-0" id="header">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-8 text-center">
                                            <p class="title">La grande conférence d'impact pour le perfectionnement des leaders chrétiens(GCIPLC)</p>
                                            <span class="">avec </span> <br>
                                            <span>EVG Clément S. <strong>VIKPODIGNI</strong></span>
                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12 text-center">
                                <p class="theme">
                                    <em>Thème:</em>
                                    <strong> <em>La Révolution Spirituelle pour un ministère pluséfficace et éternellement profitable</em> </strong>
                                </p>
                                <br>
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <h2 class="reference">Participant.e</h2>
                                        <img src="{{$repertory->qr_code}}" class="avatar w-100 shadow-lg" alt="avatar" srcset="">
                                        <br><br>
                                        <p class="fullname">
                                            <span class="fullname">{{$repertory->firstname}} <strong>{{$repertory->lastname}}</strong> </span>
                                        </p>
                                        <p class="ministry text-center"> <strong><em> {{$repertory->ministry}}</em></strong> </p>
                                        <span>
                                            <strong class="phone"> <em>+229 {{$repertory->contact}}</em> </strong>
                                        </span>
                                        <div class="row bg-white">
                                            <div class="col-6">
                                            </div>
                                            <div class="col-6">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>

                            </div>
                            <div class="col-md-8">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>

</html>