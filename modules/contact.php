<div class="well"  id="contact">
    <h3 class="text-center">Contact US</h3>
    <div class="row">
        <div class="col-md-1"></div>
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
        <div class="col-md-1"></div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-horizontal col-md-5 well">
          <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name:</label>
            <div class="col-sm-10"><span class="error"> <?php echo $nameErr;?></span> 
              <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" maxlength="15"
                title="letters min 8 and max 15 chars only" pattern="[a-zA-Z]{8}" value="<?php echo $name; ?>" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10"><span class="error"> <?php echo $emailErr;?></span>
              <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="<?php echo $email; ?>" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="msg">Message:</label>
            <div class="col-sm-10">
              <textarea class="form-control" name="msg" id="msg" placeholder="Enter Message" cols="30" rows="5">
                <?php echo $msg; ?>
              </textarea>
            </div>
          </div>
          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Send Message</button>
            </div>
          </div>
        </form>
    </div>
</div>

<div id="googleMap" style="width:100%;height:450px;"></div>