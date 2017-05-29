<!DOCTYPE HTML>  
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akshara School</title>
    <meta name="author" content="wishu">
    <meta name="Description" content="Akshara Schoolis a public primary school having separate Hostel facility for girls in Hindupur">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="myStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <nav class="navbar navbar-default">
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
        <li><a href="#about">About</a></li>
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
        <li><a href="#contact">Contact Us</a></li>
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
      <div class="carousel-caption hidden-xs">
        <h3>Teach Students How to Learn</h3>
      </div>
    </div>
    <div class="item">
      <img src="images/538.jpg" alt="Students Image2">
      <div class="carousel-caption hidden-xs">
        <h3>Our goal is to Transform them</h3>
      </div>
    </div>
    <div class="item">
      <img src="images/645.jpg" alt="School Image">
      <div class="carousel-caption hidden-xs">
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

    <div class="jumbotron container" id="about">
      <div class="row">
        <div class="col-xs-1"></div>
        <div class="col-xs-10 text-justify">
          <h2 class="text-center">About US</h2>
        <p>At Akshara School, learning is personalized. We encourage independent thinkers who take responsibility for their own learning, with our full professional support. We work with them to build deep conceptual understanding, high levels of competency and a positive, moral character: the tools for success in navigating a complex, challenging world.</p>
        <p>At Akshara School, learning is personalized. We encourage independent thinkers who take responsibility for their own learning, with our full professional support. We work with them to build deep conceptual understanding, high levels of competency and a positive, moral character: the tools for success in navigating a complex, challenging world.
        At Akshara School, learning is personalized. We encourage independent thinkers who take responsibility for their own learning, with our full professional support. We work with them to build deep conceptual understanding, high levels of competency and a positive, moral character: the tools for success in navigating a complex, challenging world.</p>
        <p>At Akshara School, learning is personalized. We encourage independent thinkers who take responsibility for their own learning, with our full professional support. We work with them to build deep conceptual understanding, high levels of competency and a positive, moral character: the tools for success in navigating a complex, challenging world.
        At Akshara School, learning is personalized. We encourage independent thinkers who take responsibility for their own learning, with our full professional support. We work with them to build deep conceptual understanding, high levels of competency and a positive, moral character: the tools for success in navigating a complex, challenging world.</p>
        </div>
      </div>
    </div>
        <div class="container well"  id="contact">
          <h3 class="text-center">Contact US</h3>
        <div class="row">
        <div class="col-md-4 well">
          <address>
              <strong>Akshara School</strong><br>
              1355 Singireddypalli,<br>
              Hindupur, 515201,<br>
              AndhraPradesh.<br>
              <span class="glyphicon glyphicon-phone"></span> +91 8008599092<br>
              <span class="glyphicon glyphicon-envelope"></span><strong> Email:</strong><a href="mailto:#">aksharaschool@gmail.com</a>
        </address>
      </div>
      </div>
<p id="demo">Click the button to get your position.</p>
<button onclick="getLocation()">Try It</button>
<div id="mapholder"></div>
    <form class="form-horizontal col-md-5 well">
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="Enter email">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Password:</label>
        <div class="col-sm-10"> 
          <input type="password" class="form-control" id="pwd" placeholder="Enter password">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="msg">Message:</label>
        <div class="col-sm-10">
          <textarea class="form-control" id="msg" placeholder="Enter Message" cols="30" rows="5"></textarea>
        </div>
      </div>
      <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Send Message</button>
        </div>
      </div>
    </form>
    </div>
    <footer>
        <div id="copyright" class="text-center"><span>Copyright <?php echo date("Y");?>. All Rights Reserved.</span>
        <!--&nbsp; <a href="#">FAQ's</a>-->
        <span id="float">Designed by <a href="#">viswa &nbsp;&nbsp;&nbsp;&nbsp;</a></span></div>
    </footer>
    <script src="location.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</body>
</html>