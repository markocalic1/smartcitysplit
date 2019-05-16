<?php
// First we execute our common code to connection to the database and start the session
require("connection.php");

?>
<!DOCTYPE html>
<html lang="hr">

<head>
    <!-- Required meta tags -->
    
    <title>AirQuality Split - Prva javna LoRaWAN bazna stanica u Hrvatskoj!</title>





    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">
    
    <?php 
      include('header.php');
    ?>
    
  <link rel="stylesheet" href="css/cardstyle.css">

</head>

<body id="page-top">
<?php 
  include('last_measure.php');


?>



  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-dark fixed-top text-white" id="mainNav" >
    <div class="container">
      
      <a class="navbar-brand js-scroll-trigger text-white" href="#page-top"><span><img src="img/airq-bijeli.png" class="img-responsive" style="height: 45px;" alt="logo"></span>
        AirQuality Split
      </a>


      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-dark text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse " id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded text-white js-scroll-trigger" href="#why">O projektu</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded text-white js-scroll-trigger" href="#team">Tim</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded text-white js-scroll-trigger" href="#contact">Kontakt</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead text-white text-center text-dark" >
    <div class="overlay"></div>
    <div class="container">
      <!-- Icon Cards-->
		<div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
								<i class="fas fa-fw fa-thermometer-half"></i>
						</div>
						<div class="mr-5">Temperatura zraka:<?php echo $last_temp?>°C</div>
					</div>
					<a class="card-footer text-white clearfix small z-1" href="#">
						<span class="float-center"><?php echo $last_date?></span>
					</a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
								<i class="fas fa-fw fa-tint"></i>
								</div>
								<div class="mr-5">Vlažnost zraka: <?php echo $last_hum?>%</div>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="#">
								<span class="float-center"><?php echo $last_date?></span>
							</a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div  id="PM25" class="card text-white  o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
								<i class="fas fa-fw fa-cloud-download"></i>
									</div>
									<div class="mr-5" id="PM25-value" data-value="<?php echo $last_pm25?>">Čestice manje od 2,5 µm (PM2,5):<?php echo $last_pm25?> µg/m3</div>
								</div>
								<a class="card-footer text-white clearfix small z-1" href="#">
									<span class="float-center"><?php echo $last_date?></span>
								</a>
            </div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
            <div id="NO2" class="card text-white  o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
								<i class="fas fa-fw fa-globe"></i>
									</div>
									<div class="mr-5" id="NO2-value" data-value="<?php echo $last_no2?>">Dušikov dioksid (NO2): <?php echo $last_no2?> µg/m3</div>
								</div>
								<a class="card-footer text-white clearfix small z-1" href="#">
									<span class="float-center"><?php echo $last_date?></span>
								</a>
            </div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
            <div id="NH3" class="card text-white  o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
								<i class="fas fa-fw "></i>
									</div>
									<div class="mr-5" id="NH3-value" data-value="<?php echo $last_nh3?>">Amonijak (NH3): <?php echo $last_nh3?> µg/m3</div>
								</div>
								<a class="card-footer text-white clearfix small z-1" href="#">
									<span class="float-center"><?php echo $last_date?></span>
								</a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div id="CO2" class="card text-white  o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
								<i class="fas fa-fw "></i>
									</div>
									<div class="mr-5"  id="CO2-value" data-value="<?php echo $last_co2?>">Ugljikov dioksid(CO2): <?php echo $last_co2?> µg/m3</div>
								</div>
								<a class="card-footer text-white clearfix small z-1" href="#">
									<span class="float-center"><?php echo $last_date?></span>
								</a>
            </div>
          </div>
        </div>
      <div class="row">
        <div class="col-xl-9 mx-auto">
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item" style="background-color:rgba(80,240,230, 0.8)">Good</li>
          <li class="list-group-item" style="background-color:rgba(80,204,170, 0.8)" >Fair</li>
          <li class="list-group-item" style="background-color:rgba(240,230,65, 0.80)">Moderate</li>
          <li class="list-group-item" style="background-color:rgba(255, 80, 80,0.80)">Poor</li>
          <li class="list-group-item" style="background-color:rgba(150,0,50, 0.80)">Very poor</li>


        </ul>

          </div>
              </div>
              <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
              <h3 class="my-3 d-flex justify-content-center text-white ">Prva javna LoRaWAN bazna stanica u vlasništvu nekog sveučilišta u Hrvatskoj!</h3>
                  <a href="lora.php" class="btn btn-success btn-user ">
                      Više o tome
                    </a>
                
              </div>
            </div>
      </header>



  <section class="text-white mb-0 pb-5 " id="why" style="background-color:#193c61;">
    <div class="container">
      <h2 class="text-center text-uppercase text-white pt-4">O projektu</h2>
      <hr class="star-light mb-5">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <p class="text">Zagađenje zraka se očituje kada se u atmosferu Zemlje unesu štetne ili prekomjerne količine tvari, uključujući plinove, čestice i biološke molekule. Može uzrokovati bolesti, alergije i čak smrt ljudi, a također može štetiti drugim živim organizmima, kao što su životinje i usjevi hrane, te može oštetiti prirodni ili izgrađeni okoliš. I ljudska aktivnost i prirodni procesi mogu generirati zagađenje zraka.
              Koliko je zrak neophodan čovjeku, najbolje govori podatak da čovjek može živjeti bez hrane oko 40 dana, bez vode 5 dana, a bez zraka samo 5 minuta. Onečišćujuće tvari u zraku su sve tvari koje uzrokuju štetu ljudima i okolišu, a u zraku se mogu nalaziti u krutom, tekućem ili plinovitom stanju. Iako postoje i prirodni izvori onečišćenja zraka, koji čak mogu imati jači utjecaj od onih prouzročenih ljudskom djelatnošću, posebni problem predstavljaju umjetni izvori onečišćenja koji su posljedica ljudske djelatnosti, a posebno su izraženi u velikim gradovima i industrijskim zonama. Koncentracije onečišćivača zraka su još uvijek prevelike i problem kvalitete zraka postoji, iako se proteklih desetljeća u Europi radi na rješavanju tih problema. Značajan udio europskog stanovništva živi na područjima gdje se prekoračuju standardi kvalitete zraka. Onečišćenje ozonom (O3), dušičnim dioksidom (NO2), amonijakom (NH3), ugljikovim monoksidom (CO) i lebdećim česticama (PM2.5) ozbiljne su prijetnje zdravlju.
              Prekomjerna onečišćenja iz zraka mogu dovesti do razvoja mnogih ozbiljnih zdravstvenih problema – astme, kronične opstruktivne plućne bolesti (KOPB), akutne respiratorne bolesti, kardiovaskularnih bolesti i karcinoma. Procjenjuje se da tri milijuna ljudi u svijetu umire od posljedica zagađenja zraka, što predstavlja 5 % od ukupne smrtnosti godišnje. Također je poznato da je 30-40 % slučajeva astme i 20-30 % ostalih dišnih bolesti povezano sa zagađenjem.
              Čist zrak je neophodan svim živim bićima, ali i ljudskom okolišu i prirodi.
          </p>
        </div>
        
      </div>
      
    </div>
  </section>

  <section class="text-white mb-0 pb-5 " id="team" style="background-color:#298681;">
    <div class="container">
      <h2 class="text-center text-uppercase text-white pt-4">Tim</h2>
      <hr class="star-light mb-5">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <p class="text">Nositelji cijelog projekta su studenti Sveučilišta u Splitu. 
            Najveća zahvala ide Sveučilištu u Splitu i Studentskom zboru Sveučilišta u Splitu koji su prepoznali važnost ovog problema i logistički, mentorski i financijski pomogli u realizaciji ovog projekta. 
            Zahvala Fakultetu elektrotehnike, strojarstva i brodogradnje koji je omogućio korištenje mjerne opreme i laboratorija, te omogućio postavljanje LoRaWAN bazne stanice na krov kako bi LoRaWAN mreža imala što bolje karakteristike.
            <p class="text">Zahvala dr. sc. Toniju Perkoviću i dr. sc. Mariju Čaglju na mentorstvu, podršci i pomoći u realizaciji projekta.
             <p class="text">Hvala i timu iz startup-a eAgrar (Slaven Damjanović, Martin Pervan, Marko Čalić, Marin Vukosav) na odličnoj suradnji i nesebičnoj pomoći u razvoju uređaja. (www.eAgrar.eu)
          </p>
        </div>
        
      </div>
      
    </div>
  </section>


  <section class="call-to-action text-white bg-dark text-center" id="contact">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-4">Imaš pitanja? </h2>
          <h2 class="mb-4">Trebaš pomoć u korištenju LoRaWAN mreže?</h2>
          <h2 class="mb-4">Javi se!</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form method="POST" name="contactform" action="contact-form-handler.php">
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter your email..." required>
              </div>
              <div class="col-12 col-md-9 mb-2 mb-md-0 mt-1">
                <input type="text" name="message" class="form-control form-control-lg" placeholder="Message">
              </div>
              
              <div class="col-12 col-md-3 mt-1">
                <button type="submit" value="Submit" class="btn btn-block btn-lg btn-primary">Pošalji!</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>



  <footer class="page-footer  bg-dark pt-4">

      <!-- Footer Elements -->
      <div class="container">
        <div class="row mx-auto d-block">
          <h5 class="text text-center text-light text-uppercase">Projekt podržavaju</h5>
          <div class="row justify-content-center pt-4">
            <a class="logo px-4" href="http://www.scst.hr">
              <img class="img-responsive" style="height:80px;" src="img/scst1.png" alt="SCST logo">
            </a>
            <a class="logo px-4" href="http://www.szst.unist.hr">
            <img class="img-responsive" style="height:80px;" src="img/szst.png" alt="SZST logo">
            </a>
          </div>
        </div>
      <hr>
        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center text-light">
          <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1">
              <i class="fab fa-facebook-f"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-1">
              <i class="fab fa-twitter"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-gplus mx-1">
              <i class="fab fa-instagram"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-li mx-1">
              <i class="fab fa-linkedin-in"> </i>
            </a>
          </li>
          
        </ul>
        <!-- Social buttons -->
    
      </div>
      <!-- Footer Elements -->
    
      <!-- Copyright -->
      <div class="footer-copyright text-center bg-dark py-3 text-light">© 2019 Copyright:
        <a href=""> AirQuality Split</a>
      </div>
      <!-- Copyright -->

      <!-- Scroll to Top Button-->
   
        
    </footer>
    <a class="scroll-to-top rounded" href="#page-top" id="scroll-to-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("scroll-to-top").style.display = "block";
          } else {
            document.getElementById("scroll-to-top").style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0; // For Safari
          document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }

        function backgroundcolorChangePM25(){
          if(document.getElementById("PM25-value").getAttribute("data-value") <= 10 ){
            document.getElementById("PM25").style.backgroundColor="#50f0e6"
          }
          else if(document.getElementById("PM25-value").getAttribute("data-value") > 10 && document.getElementById("PM25-value").getAttribute("data-value") <= 20){
            document.getElementById("PM25").style.backgroundColor="#50ccaa"

          }
          else if(document.getElementById("PM25-value").getAttribute("data-value") > 20 && document.getElementById("PM25-value").getAttribute("data-value") <= 25){
            document.getElementById("PM25").style.backgroundColor="rgba(240,230,65, 0.80)"

          }
          else if(document.getElementById("PM25-value").getAttribute("data-value") >25 && document.getElementById("PM25-value").getAttribute("data-value") <= 50){
            document.getElementById("PM25").style.backgroundColor="rgb(255, 80, 80,0.80)"

          }
          else if(document.getElementById("PM25-value").getAttribute("data-value") > 50 ){ 
            document.getElementById("PM25").style.backgroundColor="rgba(150,0,50, 0.80)"

          }

        }

        function backgroundcolorChangeNO2(){
          if(document.getElementById("NO2-value").getAttribute("data-value") <= 40 ){
            document.getElementById("NO2").style.backgroundColor="rgba(80,240,230, 0.8)"
          }
          else if(document.getElementById("NO2-value").getAttribute("data-value") > 40 && document.getElementById("NO2-value").getAttribute("data-value") <= 100){
            document.getElementById("NO2").style.backgroundColor="rgba(80,204,170, 0.8)"

          }
          else if(document.getElementById("NO2-value").getAttribute("data-value") > 100 && document.getElementById("NO2-value").getAttribute("data-value") <= 200){
            document.getElementById("NO2").style.backgroundColor="rgba(240,230,65, 0.80)"

          }
          else if(document.getElementById("NO2-value").getAttribute("data-value") > 200 && document.getElementById("NO2-value").getAttribute("data-value") <= 400){
            document.getElementById("NO2").style.backgroundColor="rgba(255, 80, 80,0.80)"

          }
          else if(document.getElementById("NO2-value").getAttribute("data-value") > 400 ) {
            document.getElementById("NO2").style.backgroundColor="rgba(150,0,50, 0.80)"

          }

        }

        function backgroundcolorChangeNH3(){
          if(document.getElementById("NH3-value").getAttribute("data-value") <= 40 ){
            document.getElementById("NH3").style.backgroundColor="rgba(80,240,230, 0.8)"
          }
          else if(document.getElementById("NH3-value").getAttribute("data-value") > 40 && document.getElementById("NH3-value").getAttribute("data-value") <= 100){
            document.getElementById("NH3").style.backgroundColor="rgba(80,204,170, 0.8)"

          }
          else if(document.getElementById("NH3-value").getAttribute("data-value") > 100 && document.getElementById("NH3-value").getAttribute("data-value") <= 200){
            document.getElementById("NH3").style.backgroundColor="rgba(240,230,65, 0.80)"

          }
          else if(document.getElementById("NH3-value").getAttribute("data-value") > 200 && document.getElementById("NH3-value").getAttribute("data-value") <= 400){
            document.getElementById("NH3").style.backgroundColor="rgb(255, 80, 80,0.80)"

          }
          else if(document.getElementById("NH3-value").getAttribute("data-value") > 400 ) {
            document.getElementById("NH3").style.backgroundColor="rgba(150,0,50, 0.80)"

          }

        }

        function backgroundcolorChangeCO2(){
          if(document.getElementById("CO2-value").getAttribute("data-value") <= 40 ){
            document.getElementById("CO2").style.backgroundColor="rgba(80,240,230, 0.8)"
          }
          else if(document.getElementById("CO2-value").getAttribute("data-value") > 40 && document.getElementById("CO2-value").getAttribute("data-value") <= 100){
            document.getElementById("CO2").style.backgroundColor="rgba(80,204,170, 0.8)"

          }
          else if(document.getElementById("CO2-value").getAttribute("data-value") > 100 && document.getElementById("CO2-value").getAttribute("data-value") <= 200){
            document.getElementById("CO2").style.backgroundColor="rgba(240,230,65, 0.80)"

          }
          else if(document.getElementById("CO2-value").getAttribute("data-value") > 200 && document.getElementById("CO2-value").getAttribute("data-value") <= 400){
            document.getElementById("CO2").style.backgroundColor="rgb(255, 80, 80,0.80)"

          }
          else if(document.getElementById("CO2-value").getAttribute("data-value") > 400 ) {
            document.getElementById("CO2").style.backgroundColor="rgba(150,0,50, 0.80)"

          }

        }




    </script>
  <script>        
  backgroundcolorChangePM25();
          backgroundcolorChangeNO2();
          backgroundcolorChangeNH3();
          backgroundcolorChangeCO2();



</script>


</body>

</html>