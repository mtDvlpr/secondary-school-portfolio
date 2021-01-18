<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact - 149895.csgja.com</title>
    <meta charset="utf-8"/>
    <meta name="author" content="Manoah T"/>
    <meta http-equiv="cache-control" content="no-cache"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/images/logos/favicon.ico">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/menu.css">
    <link rel="stylesheet" type="text/css" href="/css/preloader.css">
    <link rel="stylesheet" type="text/css" href="/css/form.css">
  </head>
  <body onload="preloader()">

    <!-- Preloader -->
    <div id="loader"></div>
    <img id="loader-img" src="/images/logos/logo-256.png"/>

    <!-- Page content -->
    <div style="display:none;" id="page" class="animate-bottom">

      <!-- Menu -->
      <span title="Menu" class="openbtn" onclick="openNav()"><img src="/images/menu.svg"/></span>
      <div id="myNav" class="overlay">
<?php session_start();if(isset($_SESSION["login"])){echo'        <a href="/logout" class="logout">Log out</a>
';}?>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
          <h2 class="nav-title">Menu</h2>
          <a href="/">Home</a>
<?php if(isset($_SESSION["login"])){echo'          <a href="/account">Your account</a>
';}?>
          <a href="/vwo-4">VWO 4 projects</a>
          <a href="/vwo-6">VWO 6 projects</a>
          <a href="/mysql">MySQL projects</a>
<?php if(isset($_SESSION["login"])){echo'          <a href="/games">Games</a>
';}?>
          <a href="/about">About me</a>
          <a href="/contact">Contact</a>
        </div>
      </div>

      <br>
      <img src="/images/scrollBack.svg" id="scrollbtn" onclick="topFunction()"/>
      <a href="/" title="Home"><img id="logo" src="/images/logos/logo-256.png"/></a>
<?php if(isset($_SESSION["login"])){$username=$_SESSION["username"];echo"      <div style='margin-left:20px;margin-top:-20px;'><p style='font-size:20px;'>Logged in as: <span class='notranslate'>$username</span></p></div>
";}?>
      <center>
        <h2>Contact</h2>
        <br>
        <div class="form-container">
          <form method="post" autocomplete="off">
            <div class="row">
              <a href="https://www.instagram.com/mt.dvlpr/" target="_blank" title="https://www.instagram.com/mt.dvlpr/"><img style="width:50px;margin-right:5px;float:center;" src="/images/logos/instagram.png"/></a>
              <a href="https://www.facebook.com/149895csgjacom-258722034800166/" target="_blank" title="https://www.facebook.com/149895csgjacom-258722034800166/"><img style="width:50px;float:center;" src="/images/logos/facebook.png"/></a>
              <div class="col-20">
                <label for="fname">First name <span style="font-size:10px;">(required)</span></label>
              </div>
              <div class="col-60">
                <input type="text" id="fname" name="firstname" placeholder="Francesco" required>
              </div>
            </div>
            <div class="row">
              <div class="col-20">
                <label for="mname">Middle name</label>
              </div>
              <div class="col-60">
                <input type="text" id="mname" name="middlename" placeholder="de">
              </div>
            </div>
            <div class="row">
              <div class="col-20">
                <label for="lname">Last name <span style="font-size:10px;">(required)</span></label>
              </div>
              <div class="col-60">
                <input type="text" id="lname" name="lastname" placeholder="Bernardo" required>
              </div>
            </div>
            <div class="row">
              <div class="col-20">
                <label for="subject">Subject <span style="font-size:10px;">(required)</span></label>
              </div>
              <div class="col-60">
                <input type="text" id="subject" name="subject" placeholder="Homepage layout" required>
              </div>
            </div>
            <div class="row">
              <div class="col-20">
                <label for="message">Message <span style="font-size:10px;">(required)</span></label>
              </div>
              <div class="col-60">
                <textarea id="message" name="message" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit." required></textarea>
              </div>
            </div>
            <div class="row">
              <input type="text" name="antispam"style="display:none;">
            </div>
            <?php
              if(!empty($_POST['antispam'])) die();
              if(isset($_POST["submit"]))
              {
                $firstname = ucfirst($_POST["firstname"]);
                $middlename = lcfirst($_POST["middlename"]);
                $lastname = ucfirst($_POST["lastname"]);
                $msg = ucfirst($_POST["message"]);
                $subject = ucfirst($_POST["subject"]);
                $msg = wordwrap($msg,70);
                if (($firstname == trim($firstname) && strpos($firstname, ' ') !== false) or 1 === preg_match('~[0-9]~', $firstname)) {
                  echo 'Please fill in a valid first name!';
                }
                elseif (1 === preg_match('~[0-9]~', $middlename)) {
                  echo 'Please fill in a valid middlename!';
                }
                elseif (($lastname == trim($lastname) && strpos($lastname, ' ') !== false) or 1 === preg_match('~[0-9]~', $lastname)) {
                  echo 'Please fill in a valid last name!';
                }
                else
                {
                  mail("manoaht.dvlpr@gmail.com","$subject","$msg\n\nKind regards,\n\n\n$firstname $middlename $lastname");
                  echo 'Your message was succesfully sent!';
                }
              }
            ?>
            <div class="row">
              <input type="submit" name="submit" value="Send">
            </div>
          </form>
        </div>
      </center>

      <!-- Googe Translate -->
      <div id="google_translate_element"></div>
    </div>

    <!-- JavaScript -->
    <script type="text/javascript" src="/js/scripts.js"></script>
    <script type="text/javascript" src="/js/cookieinfo.min.js" id="cookieinfo" ></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  </body>
</html>
