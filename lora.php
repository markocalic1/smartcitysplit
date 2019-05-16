<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">
    
    <?php 
      include('header.php');
    ?>
    <link rel="stylesheet" href="style.css">
    


</head>


<body id="page-top">



  <!-- Navigation -->
  <nav class="navbar navbar-header navbar-expand-lg bg-dark static-top text-white" id="mainNav">
    <div class="container">
      
      <a class="navbar-brand js-scroll-trigger text-white" href="index.php"><span><img src="img/airq-bijeli.png" class="img-responsive" style="height: 45px;"?></span>
        AirQuality Split
      </a>


      
  </nav>



  <section class="text-dark mb-0 " id="why" style="background-color:#dbdbdb;">
    <div class="container">
      <h1 class="text-center text-uppercase text-black pt-4">LoRa</h1>
      <hr class="star-light mb-5">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <p class="text">LoRa (Long Range) je protokol za modulaciju podataka koji se prenose bežičnim putem. Omogućava veliki domet i malu potrošnju energije. Osim LoRa-e primjenjuje se i modulacija FSK, a koriste se u industrijskim, znanstvenim i medicinskim (ISM) frekvencijskim pojasima. Za Europu se preporuča korištenje frekvencije od 868MHz koja je dio besplatnog ISM pojasa.
             <p class="text">LoRaWAN (Long Range Wireless Area Network) je mrežni protokol male potrošnje energije, širokog područja (LPWA - Low Power Wide Area) dizajniran za bežično povezivanje "stvari" napajanih baterijama na internet u regionalnim, nacionalnim ili globalnim mrežama. Zadovoljava ključne zahtjeve Internet of Things (IoT) uređaja kao što je usluga dvosmjerne komunikacije, sigurnost, mobilnost i lokalizacija. 
             <p class="text">LoRaWAN mrežna arhitektura je postavljena u topologiji star-of-stars u kojoj bazne stanice prenose poruke između krajnjih uređaja i središnjeg mrežnog poslužitelja. Pristupnici su povezani na mrežni poslužitelj putem standardnih IP veza i djeluju kao transparentni most, jednostavno pretvarajući RF pakete u IP pakete i obrnuto.
             <p class="text">Moguća je primjena LoRaWAN mreže u primjenama koje ne zahtijevaju stalnu komunikaciju. Razlog tomu je što se LoRaWAN mreža temelji na „fair-use policy“ pravilima koji predlažu korištenje mreže u određenim intervalima. To je najčešće do 1%. Konkretno to znači da ukoliko 1s traje komunikacija (zauzeće frekvencijskog kanala), sljedećih 99s uređaj ne smije komunicirati (zauzimati frekvencijski kanal). LoRaWAN mreža se koristi u praćenju: kvalitete zraka i vode, vremenskih uvjeta, zauzeća parking mjesta, lokacije stvari, napunjenosti kanta za smeće, rada ulične rasvjete i dr.
             <p class="text">Bazna stanica postavljena u sklopu ovog projekta je dio The Things Network (TTN) mreže. To je mreža čije korištenje je besplatno. Svatko od korisnika se registrira, te registrira korištenje uređaja koji za komunikaciju koristi LoRa mrežu. Od TTN-a dobije ključeve za enkripciju poruka koje koristi. TTN mreža sadrži preko 6000 baznih stanica u svijetu koje su dio sustava. Kada korisnik sa svog uređaja šalje podatke na baznu stanicu, bazna stanica iz poruke pogleda ključeve, usporedi ih sa ključevima koje je dodijelila i podatke prosljeđuje korisniku koji je vlasnik istih. Na taj način je osigurana povjerljivost i integritet podataka. Korisnik sa svojim uređajem može bilo gdje u svijetu slati podatke prema baznoj stanici koja je dio ove mreže i dobit će ih unutar web aplikacije. Dakle, bazna stanica postavljena u Splitu je dio svjetske mreže i uvezanog sustava LoRaWAN baznih stanica. Domet komunikacije između krajnjeg uređaja (korisnik) i bazne stanice je do 10km, ovisno o smetnjama u komunikaciji. Područje koje pokriva naša mreža je unutar radijusa od 4km od bazne stanice koja se nalazi na Fakultetu elektrotehnike, strojarstva  i brodogradnje. Za sve aktivne LoRa bazne stanice u svijetu koje su dio TTN sustava pogledajte kartu: https://www.thethingsnetwork.org/map

            

             <p class="text">Za detaljno objašnjenje o načinu povezivanja samog uređaja na TTN mrežu pogledajte:
            <li>https://www.thethingsnetwork.org/docs/devices/</li>
             <p class="text">
    
             <p class="text">Za detaljno objašnjenje o načinu postavljanja vlastite bazne stanice kao dio TTN sustava pogledajte: 
            <li>https://www.thethingsnetwork.org/docs/gateways/</li>
            <li>https://github.com/ttn-zh/ic880a-gateway/wiki</li>

              <p class="text">
             <p class="text">Dodatni linkovi za informiranje o LoRa protokolu i LoRaWAN mreži:
            <li>https://en.wikipedia.org/wiki/LoRa</li>
            <li>https://www.thethingsnetwork.org/docs/lorawan/</li>
            <li>https://lora-alliance.org/about-lorawan</li>
            <li>https://www.thethingsnetwork.org/forum/t/limitations-data-rate-packet-size-30-seconds-uplink-and-10-messages-downlink-per-day-fair-access-policy/1300?fbclid=IwAR0NUX0nCXJtLhsPmVVPO2nXpyuAjdFbbyWPJ9MLRumElU0skYL8c_4z3DA</li>
            <li>https://www.disk91.com/2017/technology/internet-of-things-technology/all-what-you-need-to-know-about-regulation-on-rf-868mhz-for-lpwan/?fbclid=IwAR3Xn5Q09x6NrOyMgFhFVNnCizrgx8juK5G6baXkpp3-8E4aCTaLqnI-n78</li>


</p>
        </div>
        
      </div>
      
    </div>
  </section>

</body>