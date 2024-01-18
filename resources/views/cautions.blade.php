<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Gestion de scautions</title>

    <style>
        /* thead {
            background-color: #000 !important;
            color: #FFF !important;
            padding: 5px !important;
        }

        tbody tr {
            margin-block: 10px !important;
            border-top: solid 1px #fff;
            padding-block: 20px !important;
        } */
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Inventaires des cautions</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table  table-dark">
                    <thead class="">
                        <tr>
                            <th scope="col" class="text-center">N°</th>
                            <th scope="col" class="text-center">Maison</th>
                            <th scope="col" class="text-center">Chambre</th>
                            <th scope="col" class="text-center">Locataire</th>
                            <th scope="col" class="text-center">Caution Electrique</th>
                            <th scope="col" class="text-center">Caution Loyer</th>
                            <th scope="col" class="text-center">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($locations as $location)
                        <tr>
                            <th scope="row">{{$loop->index + 1}}</th>
                            <td class="text-center">{{$location->House->name}}</td>
                            <td class="text-center">{{$location->Room->number}}</td>
                            <td class="text-center">{{$location->Locataire->name}} {{$location->Locataire->prenom}}</td>
                            <td class="text-center">{{$location->caution_electric}}</td>
                            <td class="text-center">{{$location->caution_number*$location->loyer}} ({{$location->caution_number}}X{{$location->loyer}})</td>
                            <td class="text-center">{{$location->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>

</html>