<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Liste des Chargement</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="background-color: #6b00e4;">
            <div class="col-md-12">
                <p class="text-light text-center mt-2" style="text-align:center!important"> <strong>SOCIETE << JEHOVA NISSI PETROLIUM>> S.A</strong></p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <table class="table table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col"><small>Emetteur </small> </th>
                            <th scope="col"><small>Produit </small> </th>
                            <th scope="col"><small> Quantité </small></th>
                            <th scope="col"><small>Immatriculation </small> </th>
                            <th scope="col"><small>Chauffeur </small> </th>
                            <th scope="col"><small>Destination </small> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($chargementLists as $chargementList)
                        <tr>
                            <th scope="row">{{$loop->index + 1}}</th>
                            <td class="text-center">{{$chargementList->emetteur}}</td>
                            <td class="text-center">{{Get_Product_Name($chargementList->product)}}</td>
                            <td class="text-danger">{{$chargementList->qty}}</td>
                            <td class="text-center">{{$chargementList->immatriculation}}</td>
                            <td class="text-center">{{$chargementList->driver_identification}}</td>
                            <td class="text-center">{{$chargementList->destination}}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <th scope="row"></th>
                            <td class="text-center" colspan="2" style="font-style: italic;">La chargée des suivis stocks et Chargements aux dépots</td>
                            <td class="text-center text-danger"> <strong style="background-color: #000;color:#fff;padding:5px;">{{$qty_somm}}</strong></td>
                            <td class="text-danger text-center"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <img width="100px" src="https://res.cloudinary.com/duk6hzmju/image/upload/v1698775065/logo1_em8acy.jpg" alt="" srcset="">
            </div>
        </div>
        <br><br>
        <div class="row bottom-fixed" style="background-color: #6b00e4;">
            <div class="col-md-12">
                <p class="text-light text-center mt-2">© Copyright - <?php echo date("Y"); ?></p>
            </div>
        </div>
    </div>
</body>

</html>