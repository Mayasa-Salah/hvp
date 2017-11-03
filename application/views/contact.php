<!DOCTYPE html>
<html>
<head>
<title>Contact Ons</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

           <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="/assests/css/contact.css"/>
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


 <!-- Content -->


<div class="container1" id="maincontent" tabindex="-1">

  <div class="row1 header1">

  </div>
  <div class="row1 body1">
   <h3><span class="text-muted">Vul het onderstaande formulier in</span></h3>
   <hr class="star-primary">
    <form action="https://formspree.io/mayasa-89@hotmail.com"
      method="POST">
      <ul>
        <li>
          <p class="left">
            <label for="first_name">Voor naam:</label>
            <input type="text" name="first_name" placeholder="Voor naam" />
          </p>
          <span style="color: red"><?php echo form_error('first_name');?></span>

          <p class="left">
            <label for="last_name">Achter naam:</label>
            <input type="text" name="last_name" placeholder="Achternaam" />
          </p>
          <span style="color: red"><?php echo form_error('last_name');?></span>
        </li>
        <li>
          <p>
            <label for="email">Email: <span class="req">*</span></label>
            <input type="email" name="email" placeholder="Example@example.com" />
          </p>
          <span style="color: red"><?php echo form_error('email');?></span>
        </li>
        <li><div class="divider"></div></li>
        <li>
          <label for="comments">Uw Bericht:</label>
          <textarea cols="46" rows="3" name="comments"></textarea>
          <span style="color: red"><?php echo form_error('comments');?></span>
        </li>
        <li>
          <input class="btn btn-submit" type="submit" value="Submit" />
          <small>or press <strong>enter</strong></small>
        </li>
      </ul>
    </form>
  </div>
  <div class="msg">
    <p><span style="color: red;"><?php if (isset($error)) { echo $error; }?></span></p>
    <p><span style="color: green;"><?php if (isset($success)) { echo $success; }?></span></p>
    </div>

</div>
<br>


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
