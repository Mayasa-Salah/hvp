<!DOCTYPE html>
<html>
<head>
  <title>Projects</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

           <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



    <!-- Custom Style -->
    <link rel="stylesheet" type="text/css" href="/assests/css/style.css">


    <!-- Custom fonts -->

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">


    <!-- Latest compiled and minified JavaScript -->
    <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>
<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top"><img class="nav-logo" src="/assests/imgs/sds.jpg"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="/">Home</a>
                    </li>
                    <li class="page-scroll">
                        <a href="about">Over Ons</a>
                    </li>
                    <li class="page-scroll">
                        <a href="projects">Projecten</a>
                    </li>
                    <li class="page-scroll">
                        <a href="events">Events</a>
                    </li>
                    <li class="page-scroll">
                        <a href="join">Doe mee</a>
                    </li>
                    <li class="page-scroll">
                        <a href="contact">Contact</a>
                    </li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

 <!-- Page Content -->
    <div class="container box1" d="maincontent" tabindex="-1">
        <script>
            $(document).ready(function(){
              // Add smooth scrolling to all links
              $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                  // Prevent default anchor click behavior
                  event.preventDefault();

                  // Store hash
                  var hash = this.hash;

                  // Using jQuery's animate() method to add smooth page scroll
                  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                  $('html, body').animate({
                    scrollTop: $(hash).offset().top
                  }, 800, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                  });
                } // End if
              });
            });
        </script>
        <div class="row">
            <div class="col-md-8">
                <img class="img-responsive img-rounded project1-image" src="/assests/imgs/2.jpg" alt="">
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                <h1>Maatjes</h1>
                <p>Om je thuis te voelen in een nieuw land en een nieuwe stad, is het niet alleen belangrijk om de taal te leren, maar vooral ook om bezig te zijn met je talenten, mensen te ontmoeten en je dromen en toekomstdoelen te verwezenlijken.....</p>
                <a class="btn btn-primary btn-lg btn-outline p1" href="#project1">Lees meer!</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

       <hr>
        <!-- Call to Action Well -->
        <br>
        </div>
        <!-- /.row -->
        <!-- Page Features -->
        <div class="container text-center" d="maincontent" tabindex="-1">

            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img class="project-image" src="/assests/imgs/1-small.jpg" alt="">
                    <div class="caption">
                        <h3>Workshops</h3>
                        <p>SamenDoorSamen kent een groot scala aan cursussen, workshops en activiteiten waarbij
                            specifieke levensvaardigheden worden ontwikkeld.....</p>
                        <p>
                            <a href="#project2" class="btn btn-primary btn-outline">Lees Meer</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img class="project-image" src="/assests/imgs/4-small.jpg" alt="">
                    <div class="caption">
                        <h3>Toeleiding (vrijwilligers)werk en/of studie</h3>
                        <p>Om je nuttig te voelen, bij te kunnen dragen aan de samenleving, bezig te zijn met je talenten en structuur.....</p>
                        <p>
                            <a href="#project3" class="btn btn-primary btn-outline">Lees Meer</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img class="project-image" src="/assests/imgs/3-small.jpg" alt="">
                    <div class="caption">
                        <h3>Evenementen</h3>
                        <p>SamenDoorSamen organiseert meerdere activiteiten die specifiek gericht zijn op ontmoeting, verbinding, ontspanning en het vergroten van draagvlak.....</p>
                        <p>
                           <a href="#project4" class="btn btn-primary btn-outline">Lees Meer</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>

<!-- /.row -->
<br>
    <!-- Content -->
    <div class="container">
            <hr class="star-primary">
        <!-- First Featurette -->

        <div class="featurette p1" id="project1">
            <img class="featurette-image img-circle project-image img-responsive pull-right" src="/assests/imgs/2-small.jpg">
            <h2 class="featurette-heading">
                <span class="text-muted">Maatjes</span>
            </h2>
            <p>
            Om je thuis te voelen in een nieuw land en een nieuwe stad, is het niet alleen belangrijk om de taal te leren, maar vooral ook om bezig te zijn met je talenten, mensen te ontmoeten en je dromen en toekomstdoelen te verwezenlijken. In het maatjesproject van SamenDoorSamen koppelen we een vrijwilliger aan een statushouder, en zij ontmoeten elkaar wekelijks. Tijdens deze ontmoeting staat hulp bij de integratie en het thuis voelen in Rotterdam centraal; zowel op formeel gebied (taal en toeleiding naar opleiding en/of werk) als op het gebied van deelname aan sociale en culturele leuke activiteiten.

            De vrijwilliger spreekt ongeveer 1 dagdeel per week met de statushouder. Het is maatwerk, voor iedereen is weer iets anders passend en belangrijk. Waar het maatjestraject uit bestaan kan dus variëren van samen administratie doen, leuke dingen in de wijk ondernemen, Nederlands oefenen, ga zo maar door!

            Wij hebben altijd nieuwe maatjes nodig! Meld je nu aan via: <a>daphne@stichtinghoedjevanpapier.nl</a>
            </p>
        </div>

        <hr class="star-primary">

         <!-- Second Featurette -->
         <div class="green">
        <div class="featurette" id="project2">
            <img class="featurette-image img-circle project-image img-responsive pull-left" src="/assests/imgs/1-small.jpg">
            <h2 class="featurette-heading">
                <span class="text-muted">Workshops</span>
            </h2>
            <p class="lead">
            SamenDoorSamen kent een groot scala aan cursussen, workshops en activiteiten waarbij
            specifieke levensvaardigheden worden ontwikkeld. In de cursussen leren wij je bijvoorbeeld hoe om te gaan met de computer, hoe je de (financiële) administratie bijhoudt of hoe je beter in het Nederlands kan converseren. Ook bieden wij workshops gericht op het vormgeven van een leven hier zoals de Toekomsttraining en Cv maken & solliciteren.

            In zoveel mogelijk gevallen is het zo dat statushouders samen met andere wijkbewoners aan de activiteiten deelnemen. Elkaar ontmoeten, op weg naar duurzame verbindingen en het vergroten van je netwerk, daar gaat het om! Hiermee hopen we ook direct te werken aan het vergroten van het draagvlak in de wijken.
             </p>
        </div>
        </div>
        <hr class="star-primary">

        <!-- Third Featurette -->

        <div class="featurette" id="project3">
            <img class="featurette-image img-circle project-image img-responsive pull-right" src="/assests/imgs/4-small.jpg">
            <h2 class="featurette-heading">
                <span class="text-muted">Toeleiding (vrijwilligers)werk en/of studie</span>
            </h2>
            <p class="lead">
                Om je nuttig te voelen, bij te kunnen dragen aan de samenleving, bezig te zijn met je talenten en structuur in je leven te hebben, geeft het overgrote deel van de statushouders bij ons aan behoefte te hebben aan (vrijwilligers)werk en/of studie. Richting. Een doel. Wij erkennen dit en maken middels maatwerk, een-op-een begeleiding en kennis van de mogelijkheden in Rotterdam, een stappenplan met de statushouder om de te maken stappen daadwerkelijk te gaan zetten. Op deze manier hebben wij behoorlijk wat statushouders kunnen begeleiden naar vrijwilligerswerk en een aantal zelfs naar structureel betaald werk.

                Wij bieden workshops gericht op het vinden van werk en hebben joboach trajecten waar wij statushouders met ambitie in een bepaalde richting, koppelen aan iemand met verstand en netwerk in die sector. Met dit integrale aanbod waarin we ons richten op maatwerk, hopen we de juiste persoon op de juist plek te krijgen.
            </p>
        </div>

        <hr class="star-primary">

         <!-- Fourth Featurette -->
         <div class="green">
        <div class="featurette" id="project4">
            <img class="featurette-image img-circle project-image img-responsive pull-left" src="/assests/imgs/3-small.jpg">
            <h2 class="featurette-heading">
                <span class="text-muted">Evenementen</span>
            </h2>
            <p class="lead project4">
                SamenDoorSamen organiseert meerdere activiteiten die specifiek gericht zijn op ontmoeting, verbinding, ontspanning en het vergroten van draagvlak. Door het organiseren van verschillende evenementen waar zowel statushouders als wijkbewoners en andere Rotterdammers aan deelnemen, faciliteren we op een positieve manier een ontmoeting. Hou onze agenda goed in de gaten om te kijken welke leuke evenementen de komende tijd op de planning staan!
            </p>
        </div>
        </div>

        <hr class="star-primary">
    </div>
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Locatie</h3>
                        <p> Admiraliteitskade 85 c 01 <br>
                            3063 EG Rotterdam</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/stichtinghoedjevanpapier/" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://slack.com/" class="btn-social btn-outline"><span class="sr-only">Slack</span><i class="fa fa-hashtag"></i></a>
                            </li>

                        </ul>
                    </div>
              <div class="footer-col col-md-4">
                        <h3>SamenDoorSamen is onderdeel van Hoedje van Papier</h3>
                        <p>
                        <a href="/about/#about">SamenDoorSamen werkt samen met </a>
                        </p>
                        <a href="https://www.stichtinghoedjevanpapier.nl/"><img class="footer-logo" src="/assests/imgs/hvp.png"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; SamedDoorSamen 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>


     <!-- Custom Jquery -->

    <script type="text/javascript" src="/assests/js/js.js"></script>



</body>
</html>
