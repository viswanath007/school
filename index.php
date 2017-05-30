
    <?php 
        require 'modules/head_tag.php';
        require 'modules/form_handler.php';
        require 'modules/nav.php'; 
    
      echo "<div class='container'>";
          require 'modules/carousel.php';
          require 'modules/about.php';
          require 'modules/contact.php';
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
    <script src="modules/location.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwVEjKz1fmBG9ej4lLiau-7w90McB0VqI&callback=myMap"></script>
</body>
</html>