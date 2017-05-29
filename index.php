<!DOCTYPE HTML>  
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <meta name="keywords" content="">
    <meta name="Description" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="myStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
        <!--<span class="sr-only">Toggle navigation</span>-->
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-education"></span>Akshara School</a>
    </div>

    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Staff</a></li>
        <li><a href="#">Admissions</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
          aria-expanded="false">Facilities<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Library</a></li>
            <li><a href="#">Separate Hostels</a></li>
            <li><a href="#">NSS</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Playground</a></li>
          </ul>
        </li>
        <li><a href="#">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
            <button type="button" class="btn btn-default navbar-btn"><span class="glyphicon glyphicon-log-in">
            </span> Log In</button>
            <button type="button" class="btn btn-default navbar-btn"><span class="glyphicon glyphicon-log-out">
            </span> Log Out</button>
        </u>
    </div><!-- .navbar-collapse -->
  </div><!-- .container -->
</nav>

<div id="carousel" class="carousel slide container" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/502.jpg" alt="Students Image1">
      <div class="carousel-caption">
        <h3>Teach Students How to Learn</h3>
      </div>
    </div>
    <div class="item">
      <img src="images/538.jpg" alt="Students Image2">
      <div class="carousel-caption">
        <h3>Our goal is to Transform them</h3>
      </div>
    </div>
    <div class="item">
      <img src="images/645.jpg" alt="School Image">
      <div class="carousel-caption">
        <h3>For Idea Village Project</h3>
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
    <div class="jumbotron container">
      <h1>Hello, Students!</h1>
      <p>...</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">More</a></p>
    </div>
    <div class="page-header">
      <h1>Akshara School <small>Subtext for header</small></h1>
    </div>
    <div class="container">
      <div class="row">
          <div class="col-md-6">
              <p class="lead">...</p>
              <p class="text-left">Left aligned text.</p>
              <abbr title="attribute">attr</abbr>
              <blockquote>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                  <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
          </div>
          <div class="col-md-6">
              <address>
                  <strong>Akshara School</strong><br>
                  1355 Singireddypalli, Hindupur<br>
                  AndhraPradesh, 515201<br>
                  <abbr title="Phone"><span class="glyphicon glyphicon-phone"></span></abbr>+91 8008599092
            </address>
                
            <address>
                  <strong>Email <span class="glyphicon glyphicon-envelope"></span></strong><br>
                  <a href="mailto:#">aksharaschool@gmail.com</a>
                  <p><a href="#"><strong>
                    <i class="fa fa-facebook-official" aria-hidden="true"></i>Facebook
                  </strong></a></p>
            </address>
          </div>
        </div>
        <footer>
            &copy; <?php echo date("Y");?>
            &nbsp; <a href="#">Terms</a>
            &nbsp; Created by <a href="#">viswa</a>
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</body>
</html>