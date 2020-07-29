<?php include"config.php";?>
<!DOCTYPE html>
<html lang="en">
<?php include"head.php";?>
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/style.css">
<body>

<?php
	 include"top_nav.php";
?>
	
    <!-- Page Content -->
    <div class="container" style="margin-top:160px;">


<!--Start Social Media -->
        

<div class="middle">
      <a class="btn" href="#">
        <i class='fa fa-facebook'></i>
      </a>
      <a class="btn" href="#">
        <i class='fa fa-twitter'></i>
      </a>
      <a class="btn" href="#">
        <i class='fa fa-google'></i>
      </a>
      <a class="btn" href="#">
    <i class='fa fa-instagram'></i>
      </a>
      <a class="btn" href="#">
        <i class='fa fa-youtube'></i>
      </a>
        </div>
        
        <!--End Social Media -->
                
        

                 <h3 class='contact-us'>Contact US</h3>
                <p class='Whether'> Whether you want some help or just to ask us a question, you are welcome to do it using the form below.</p>

			<div class="row">
				<div class="col-md-6">
				<?php
					if(isset($_POST["submit"]))
					{
					 $sql="INSERT INTO messages (NAME, CONTACT, EMAIL, MESSAGE, STATUS,LOGS) VALUES ('{$_POST["name"]}', '{$_POST["phone"]}', '{$_POST["email"]}', '{$_POST["message"]}', 1,NOW());";
						if($con->query($sql))
				{
					echo '
					<div class="alert alert-success">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Success!</strong> Your message has been Successfully sent.
					</div>
					
					
					';
				}
					}
				?>
		
				<h3 class='text-primary'>Send us a Message</h3>
                <form method="post" action="contact.php" role="form" >
                    <div class="control-group form-group">
                        <div class="controls">
                            <!--<label>Full Name:</label>-->
                            <input type="text" class="form-control" placeholder="Full Name:" name="name" required>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <!--<label>Phone Number:</label>-->
                            <input type="tel" class="form-control" placeholder="Phone Number:" name="phone" required>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <!--<label>Email Address:</label> -->
                            <input type="email" class="form-control" placeholder="Email Address:" name="email"  >
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                           <!--<label>Message:</label>-->
                            <textarea rows="5" cols="100" class="form-control" placeholder="Message:" name="message" required maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="send" name="submit"><i class='fa fa-send'></i> Send Message</button>
                </form>
				
			    </div>



        <div class="col-md-6">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.1885911245076!2d31.246799885586373!3d30.060128224787952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145841113ee7f91f%3A0xc08f4b350de919b5!2z2KfZhNmH2YTYp9mEINin2YTYo9it2YXYsSDYp9mE2YXYtdix2YkgLSDYqNmG2YMg2KfZhNiv2YUg2KfZhNmF2LHZg9iy2Yk!5e0!3m2!1sar!2seg!4v1584636186211!5m2!1sar!2seg" width="600" height="430" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
               </div>
			
            
</div>
        



        <div class="col-md-6">

            <div class="Details">
                <h3 class='contact'>Contact Details</h3><hr>
                <p>
                    Blood Bank &amp; <br>Blood Bank  <br>
                    Ramsis Street<br>
                    masr station<br>
                    
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">Ph</abbr>:015478547521</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="#" >bloodbank.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: 24*7</p>
                <p><i class="fa fa-globe"></i> 
                    <abbr title="Website">W</abbr>: <a href="index.php">www.bloodbank.com</a></p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
                </div>
            </div>


        


        <div class="col-md-6">
        <img src="images/contact.jpg">
               </div>
       
               
</div>

		<?php include"footer.php"; ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

   

</body>

</html>
