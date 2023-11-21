<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="{{asset('style_badge.css')}}"> -->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <title>BADGE</title>

    <style>
        * {
            font-family: "Poppins";
        }


        p.mandate-title {
            margin-top: 10px;
            font-weight: bold;
            font-size: 20px;
        }

        #header {
            align-items: center;
            margin-block: 10px;
        }

        #card-bady,
        #card-bady2 {
            padding-top: 100px;
        }

        #card-bady .reference {
            background-color: #fbcc0c;
            text-align: center;
            color: #fff;
            width: 100%;
        }

        #card-bady .avatar {
            width: 100%;
            border-radius: 10px;
            border: solid 5px #000;
        }

        ul.first li::marker {
            color: #e4540c;
            font-size: 20px;
        }

        ul.second li {
            list-style-type: none;
            font-size: 16px;
            margin-block: 5px;
            /* color: #fff !important; */
        }

        #footer {
            background-color: rgb(24, 95, 44) !important;
            color: #fff !important;
            margin-top: 100px;
        }

        #card {
            border: #000 solid 2px;
            border-radius: 10px;
            background-image: url("bg-img.png");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6" id="card">
                <div class="row" id="body">
                    <div class="col-12">
                        <div class="row px-0" id="header">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-2">
                                        <!-- <img src="logo-card.png" class="logo" alt=""> -->
                                    </div>
                                    <div class="col-8 text-center">
                                        <p class="sub-title text-white"></p>
                                        <span class="title"></span> <br>
                                        <p class="mandate-title"></p>
                                    </div>
                                    <div class="col-2">
                                        <!-- <img src="{{asset('drapeau.png')}}" class="logo" alt=""> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="card-body">
                            <div class="col-4">
                                <h4 class="reference">Participant.e</h4>
                                <img src="{{$repertory->qr_code}}" class="avatar shadow-lg" alt="avatar" srcset="">

                                <div class="row bg-white">
                                    <div class="col-6">
                                        <ul class="first">
                                            <li>Nom</li>
                                            <strong>{{$repertory->firstname}} </strong>
                                            <li>Prénom</li>
                                            <strong>{{$repertory->lastname}} </strong>
                                            <li>Télephone</li>
                                            <strong>{{$repertory->contact}} </strong>
                                            <li>Ministère</li>
                                            <strong>{{$repertory->ministry}} </strong>
                                        </ul>
                                    </div>
                                    <div class="col-6">

                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
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