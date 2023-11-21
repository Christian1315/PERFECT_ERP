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
                                    <strong> <em>La Révolution Spirituelle pour un ministère plus éfficace et éternellement profitable</em> </strong>
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