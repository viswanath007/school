<!DOCTYPE HTML>  
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akshara School</title>
    <meta name="author" content="wishu">
    <meta name="Description" content="Akshara Schoolis a public primary school having separate Hostel facility for girls in Hindupur">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u">
    <link rel="stylesheet" href="myStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  
    <?php 
        require 'form_handler.php';
        require 'nav.php'; 
    
      echo "<div class='container'>";
          require 'carousel.php';
          require 'about.php';
          require 'contact.php';
      echo "</div>";
    ?>

    <footer>
        <div id="copyright" class="text-center">
          <span>Copyright <?php echo date("Y");?>. All Rights Reserved.</span>
          <span id="float">Designed by <a href="#">viswa &nbsp;&nbsp;&nbsp;&nbsp;</a></span>
        </div>
    </footer>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"></script>
    <script src="location.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwVEjKz1fmBG9ej4lLiau-7w90McB0VqI&callback=myMap"></script>
</body>
</html>