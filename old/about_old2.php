<?php require_once( 'cove/cms.php' ); ?>
<cms:template title='About Us' />
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Gypsy Cove Treasure Trove</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/custom.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<!--  Header -->
    <header>
      <a href="index.html" id="logo">
        <h1>Gypsy Cove</h1>
        <h2>A Treasure Trove</h2>
      </a>
      <div class="header-info">
        <h6>(501) 819-6416 | 3170 E. Kiehl Ave.</h6>
      </div>
      <nav>
          <ul>
            <li><a href="index.html">Home</a></li>  
            <li><a href="blog.html">Blog</a></li>
            <li><a href="about.php" class="selected">About</a></li>
            <li><a href="events.html">Events</a></li>
          </ul>
        </nav>  
    </header>
  
  
<!-- Page Content -->
  <!-- DIV TEST  -->
  <div class='container content'>
    <div class='row'>
      <div class=''
        come see us, hours

<!--  HOURS -->
<div class='container content'>
   <cms:editable name='hours' type='richtext'>
   <div class='row'>
   <h4>Come see us!</h4>
        <h4>Hours of Operation</h4>
        <table>
          <tbody>
            <tr>
              <th>Monday - Thursday</th>
              <td>11:00 am - 7:00 pm</td>
            </tr>
            <tr>
              <th>Friday - Saturday</th>
              <td>10:00 am - 6:00 pm</td>
            </tr>
            <tr>
              <th>Sunday</th>
              <td>12:00 pm - 6:00 pm</td>
            </tr>
          </tbody>
        </table>
      </cms:editable>
      <!-- </div> -->
      <!-- <div class='row'> -->
      <cms:editable name='contact' type='richtext'>
        <h4>Contact us</h4>
        <ul class="contact-info">
          <li class="phone"><a href="tel:501-819-6416">(501) 819-6416</a></li>
          <li class="mail"><a href="mailto:gypsycove33@hotmail.com">gypsycove33@hotmail.com</a></li>
        </ul>
        </div>
  </cms:editable>
  
  
        <h3>Location</h3>
        <p>We are located at 3170 East Kiehl Avenue in Sherwood, AR.</p>
        <h3>About Us</h3>
        <p>In operation since December 2014.</p>

  
<!--  SERVICES  -->
        <h4>Services</h4>
        <dl>
          <li><dt>30-60 day layaway available</dt></li>
          <li><dt>Custom furniture</dt></li>
          <dd>Do you have a specific piece of furniture in mind that you just can't find anywhere? Well, we just may be able to help you get what you need! We can paint any piece of furniture any color you want. We can also do funky designs, patterns, or anything you want!</dd>
          <li><dt>Custom art pieces</dt></li>
          <dd>We are quite crafty! Give us a project and we'll try our best to create it for you!</dd>
          <li><dt>Requests</dt></li>
          <dd>Looking for something in specific but can't find it anywhere?? Well, we do an awful lot of treasure hunting and traveling and we may just stumble upon what you're looking for! Give us a call and let us know what you are looking for, if we don't already have it, we'll put you in our very special Request Book and we'll give you a call once we've found it!</dd>
          <li><dt>Donate your old stuff</dt></li>
          <dd>And receive a 33% off coupon to use whenever you please! </dd>
        </dl>
  </div>
    

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>

<!--
  <div class="container">
    <div class="row">
      <div class="twelve columns">
      
      </div>
    </div>
</div>
-->

<?php COUCH::invoke(); ?>