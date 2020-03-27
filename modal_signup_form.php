<!DOCTYPE html>
<html>

<?php 
  require './modal_signup_form/head_modal_signup_form.php';
?>

<body>

<h2>Click 2 Signup Form</h2>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>

<div id="id01" class="modal">

  <form class="modal-content" action="response_signup.php" method="post" >
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

      <hr>
      
      <label for="fname"><b>First name</b></label>
      <input type="text" placeholder="Your first name" id="fname" name="fname" required>

      <label for="lname"><b>First name</b></label>
      <input type="text" placeholder="Your last name" id="lname" name="lname" required>
      
      <label for="emailAddress"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" id="emailAddress" name="emailAddress" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" id="psw" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" id="psw-repeat" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">

         <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
         <button type="submit" name="submit" class="signupbtn">Sign Up</button>
        
      </div>

    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<!-- SOCIAL SHARE CONTACT SIDEBAR START -->

<div class="jquery-script-ads">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";

/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>

<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/jquery.contact-buttons.js"></script>
<script src="js/demo.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- END OF SOCIAL SHARE CONTACT SIDEBAR -->


</body>
</html>

