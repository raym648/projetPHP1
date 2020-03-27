<!DOCTYPE html>
<html>

<?php 
  require './contact_form/head_contact_form.php';
?>

<body>

<h3>Contact Form</h3>

<div class="container">
  <form action="response_contact.php" method="post" >

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your name.." >

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Your last name.." >

    <label for="emailAddress">E-mail</label>
    <input type="text" id="emailAddress" name="emailAddress" placeholder="@ Email.." >

    <label for="phoneNumber">Phone Number</label>
    <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Your phone number..">

    <label for="subject">Subject</label>
    <select id="subject" name="subject">
      <option value="webdesign">Web Design</option>
      <option value="webdevelopment">Web Development</option>
      <option value="railsdevelopement">Rails Development</option>
      <option value="phpdevelopment">PHP Development</option>
      <option value="iosdevelopment">iOS Development</option>
      <option value="androiddevelopment">Android Development</option>
      <option value="startingbusiness">Starting a Business</option>
    </select>

    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Write your message..." style="height:200px"></textarea>

    <input type="submit" name="submit" value="Submit" >
  </form>
</div>

</body>
</html>

