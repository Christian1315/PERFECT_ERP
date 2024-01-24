<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Card</title>
  <link rel="stylesheet" href="{{asset('card_style.css')}}" />
  <link
    href="https://fonts.googleapis.com/css2?family=Acme&family=Alfa+Slab+One&family=Edu+QLD+Beginner&family=Fugaz+One&family=Kolker+Brush&family=Koulen&family=Pacifico&family=Poppins:wght@400;500;600;700&family=Righteous&family=Rubik+Distressed&family=Sriracha&display=swap"
    rel="stylesheet">
</head>

<body>
  <div class="wrapper">
    <!-- Carte recto -->
    <section class="card-recto">
      <!-- header-->
      <div class="card-header" style="line-height: 19px;">
        <!-- logo armoirie 1 -->
        <div class="ccib">
          <img src="{{asset('d.png')}}" alt="logo-armoirie" />
        </div>
        <!-- middle typography -->
        <div class="republic">
          <p>republique du bénin</p>

          <h3 class="card-big">carte consulaire</h3>
          <p class="">Mandature 2023 - 2024</p>
        </div>

        <!-- logo armoirie 2-->
        <div class="armoirie">
          <img src="{{asset('b.jpg')}}" alt="logo-armoirie" />
        </div>
      </div>

      <!-- Card Number 
      A modifier
      -->


      <!-- Card details -->
      <div class="card-details">
        <!-- second part -->
        <div class="second">
          <!-- photo d'identité-->
          <!-- A modifier -->
          <p class="card-number">N° {{$card->reference}}</p>
          <div class="photo" style="display:flex;justify-content: center;align-items: center;">
            <img src="{{asset('photo2.jpg')}}" alt="identity-image" />
          </div>
        </div>
        <!-- first-part -->
        <div class="first" style="display:flex;justify-content: space-between;flex-direction: column;font-weight: bold;">
          <div>
            <p style="font-weight: bold;">Nom/Name :</p>
            <p>{{$consular->firstname}}</p>
          </div>
          <div>
            <p style="font-weight: bold;">Prénom/Surname :</p>
            <p>{{$consular->lastname}}</p>
          </div>
          <div>
            <p style="font-weight: bold;">Téléphone/Phone :</p>
            <p>{{$consular->phone}}</p>
          </div>
          <div>
            <p style="font-weight: bold;">Email/Email : </p>
            <p style="word-wrap: break-word;">{{$consular->email}}</p>
          </div>
          <div>
            <p style="font-weight: bold;">Titre/Title :</p>
            <p>{{$poste->label}}</p>
          </div>
          <div>
            <p style="font-weight: bold;">Forme juridique/Status :</p>
            <p>{{$card_company->form_juridique}}</p>
          </div>
          <div>
            <p style="font-weight: bold;">Secteur d'activité :</p>
            <p>{{$card_company->activity_area}}</p>
          </div>
          <div>
            <p style="font-weight: bold;">Dénomination :</p>
            <p>{{$card_company->denomination}}</p>
          </div>

        </div>


      </div>

      <!--Bottom  -->
      <div class="card-bottom">
        <!-- A modifier -->

        <p class="validity-date">
          Validité: <?php echo date("d/m/Y", strtotime($card_mandate->start_date)) ?> </em> au <em class=""> <?php echo date("d/m/Y", strtotime($card_mandate->end_date)) ?></em>
        </p>
        <!-- A modifier -->


      </div>
    </section>

    <!-- carte verso -->
    <section class="card-verso">

      <div>
        <div class="" >
          <img src="d.png" alt="identity-image" style="height:80px;width:100%" />
        </div>
        <!-- Armoirie -->

        <div class="armoirie">
          <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Qrcode_wikipedia_fr_v2clean.png"
            alt="identity-image" />
        </div>
        <!--  Nota Benin-->
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
        <!-- Signature -->

        <div class="codeQr"></div>

        <div class="signature"></div>

        <!--  Nom du propriétaire-->
        <!-- A modifier -->
        <!-- <div class="card-bottom" style="height: width:430px;">
          

          <p class="validity-date">
            Validité: 26/10/2022 au 25/10/2025
          </p>
          


        </div> -->

      </div>

    </section>
  </div>
</body>

</html>