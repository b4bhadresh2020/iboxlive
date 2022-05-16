<!DOCTYPE html>
<html lang="en">
<?php 
    $domaindata = explode(".",$_SERVER['HTTP_HOST']);
    $sitename = ucwords($domaindata[1]);
    ?>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $sitename;?> - Improve your game!</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('website/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- fonts [start] -->
  <link rel="stylesheet" href="<?php echo base_url('website/'); ?>fonts/SourceSansPro/SourceSansPro-Regular/SourceSansPro-Regular.css" />
  <link rel="stylesheet" href="<?php echo base_url('website/'); ?>fonts/SourceSansPro/SourceSansPro-Bold/SourceSansPro-Bold.css" />
  <link rel="stylesheet" herf="<?php echo base_url('website/'); ?>fonts/SourceSansPro/SourceSansPro-Semibold/SourceSansPro-Semibold.css" />
  <link rel="stylesheet" href="<?php echo base_url('website/'); ?>fonts/bootstrap-glyphicons.css" />
  <!-- fonts [end] -->

  <!-- custom CSS [start] -->
  <link rel="stylesheet" href="<?php echo base_url('website/'); ?>css/style.css">
  <!-- custom CSS [end] -->

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="#"><h3><?php echo $sitename;?></h3></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url(); ?>">Home
              <span class="sr-only">(current)</span>
          </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Priser</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Annoncører</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Registrer</a>
    </li> -->
</ul>
</div>
</div>
</nav>

<!-- orange background line -->
<div class="orange-bg"></div>

<div style="padding: 25px;">
    
    <h1 style="font-family: 'Helvetica','sans-serif'; color: black; text-align: center;">Cookies and Privacy Policy</h1>
    
    <p>
        <strong>
            <span style="font-family: 'Helvetica','sans-serif'; color: black;">&nbsp;</span>
        </strong>
    </p>
    <p>
        <strong>
            <h3 style="font-family: 'Helvetica','sans-serif'; color: black;">Conditions</h3>
        </strong>
        <span style="font-family: 'Helvetica','sans-serif'; color: black;"><br />By accepting the terms you confirm that you are at least 18 years of age. </span>
        <span style="font-family: 'Helvetica','sans-serif'; color: #353535;"><?php echo $sitename;?>.com</span> 
        <span style="font-family: 'Helvetica','sans-serif'; color: black;">attaches great importance to the fact that you are comfortable using our digital offering and other services. We therefore have a clear policy that we process the information that you provide us responsibly, as well as with respect for your privacy and of course in accordance with the legislation governing this area.</span>
    </p>
    
    <p>
        <span style="font-family: 'Helvetica','sans-serif'; color: black;">We use cookies to improve your experience of our website, to assess the use of the individual elements of the website and to support the marketing of our services on the site and the Internet in general. We want to provide full and complete information about our use of cookies.&nbsp;The information is used for example to perform use-based individual targeting of advertising, to supply your desired service/product, and to follow-up on orders, competitions and statistics etc.</span>
    </p>
    
    <p>
        <span style="font-family: 'Arial','sans-serif'; color: black;">If you do not want that such information is collected, you should delete your cookies and not use the website further.</span> 
        <span style="font-family: 'Helvetica','sans-serif';">See instructions on how to delete cookies here: https://www.aboutcookies.org/how-to-delete-cookies/ eller </span>
        <a target="_blank" href="https://www.wikihow.com/Clear-Your-Browser's-Cookies">
            <span style="font-family: 'Helvetica','sans-serif';">https://www.wikihow.com/Clear-Your-Browser%27s-Cookies</span>
        </a>
    </p>
    <p>
        <span style="font-family: 'Helvetica','sans-serif'; color: black;">&nbsp;</span>
    </p>
    <p>
        <strong>
            <h3 style="font-family: 'Arial','sans-serif'; color: black;">But wait &ndash; perhaps you should not delete your cookies?</h3>
        </strong>
        <span style="font-family: 'Arial','sans-serif'; color: black;"><br />When you delete your cookies, you will lose valuable information and make your activities on the Internet unnecessarily cumbersome. Many delete cookies to clear their search history or hide which pages they have visited, but in this case it is actually easier to simply switch to <em>Private Browsing </em>and keep the cookie benefits which ensure that your preference will be remembered every time you return.</span>
    </p>
    
    <p>
        <span style="font-family: 'Helvetica','sans-serif'; color: black;">By accepting the terms you also confirm that you understand that the information you make available to </span>
        <span style="font-family: 'Helvetica','sans-serif'; color: #353535;"><?php echo $sitename;?>.com</span> 
        <span style="font-family: 'Helvetica','sans-serif'; color: black;">may be used by us and our collaborating partners to send offers to you, and that this may be done via text, email and by phone. </span>
    </p>
    <p>
        <span style="font-family: 'Helvetica','sans-serif'; color: black;">When you sign up, you also accept that you will receive free newsletters and text offers from CME Network that include offers and advertising from our collaborating partners.&nbsp;Newsletters with offers and ads may occur several times a week.&nbsp;</span>
    </p>
    <p>
        <span style="font-family: 'Helvetica','sans-serif'; color: black;"><br />You also give your consent that you may be contacted even if you are registered in any Robinson list.</span>
    </p>
    <p style="margin-bottom: 12.0pt;">
        <h3 style="font-family: 'Helvetica','sans-serif'; color: black;"><br />
            <strong>Protection of personal information</strong>
        </h3>
    </p>
    <p style="margin-bottom: 12.0pt;">
        <span style="font-family: 'Helvetica','sans-serif'; color: black;">CME Network endeavours at all the times to be at the forefront of GDPR (General Data Protection Regulation) (The Personal Data Regulation) (EU regulation 2016/679) in its handling and processing of personal information. CME Network will not disclose personal information to other partners. Your personal information will only be passed on to other companies provided you accept their specific offers, including their terms and conditions.</span>
    </p>
    <p>
        <span style="font-family: 'Helvetica','sans-serif'; color: black;">As a registered customer with </span>
        <span style="font-family: 'Helvetica','sans-serif'; color: #353535;"><?php echo $sitename;?>.com,</span> 
        <span style="font-family: 'Helvetica','sans-serif'; color: black;">you have in accordance with the Act on Processing of Personal Data the right to access information that is registered about you.</span>
    </p>
    <p>
        <span style="font-family: 'Helvetica','sans-serif'; color: black;">Your accept in accordance with these terms is not limited in time and thereby valid until you opt out or CME Network decides to terminate the membership. </span>
    </p>
    <p>
        <span style="font-family: 'Helvetica','sans-serif'; color: black;">If you have created a profile, you have the option to update your information or delete your profile and revoke your personal data consent. In case of a vacation period, a holiday as well as weekends you must expect a longer processing time.</span>
    </p>
    <p>
        <span style="font-family: 'Helvetica','sans-serif'; color: black;">&nbsp;</span>
    </p>
    <p>
        <strong>
            <h3 style="font-family: 'Helvetica','sans-serif'; color: black;">Unsubscribe</h3>
        </strong>
        <span style="font-family: 'Helvetica','sans-serif'; color: black;"> You can unsubscribe from </span>
        <span style="font-family: 'Helvetica','sans-serif'; color: #353535;"><?php echo $sitename;?>.com at any time </span>
        <span style="font-family: 'Helvetica','sans-serif'; color: black;">by typing "unsubscribe" to <a href="mailto:unsubscribe@cmenetwork.dk">unsubscribe@cmenetwork.dk</a> from the mail address that you would like to unsubscribe. If you want to unsubscribe a telephone number, you must mention this and provide your phone number.</span>
    </p>

</div>
<!-- footer -->
<div class="footer-div">


  <div class="container footer-container">

    <div class="row">
      <div class="col-md-3">
        Copyright 2018 <?php echo $sitename;?>
    </div>
    <div class="col-md-9 footer-link">
        <a href="<?php echo base_url('web/privacy-policy'); ?>">Privacy policy</a> &nbsp;|&nbsp;
        <a href="javascript:;">Cookies and Advertising</a> &nbsp;|&nbsp;
        <a href="javascript:;">Terms and conditions</a> &nbsp;|&nbsp;
        <a href="mailto:info@<?php echo $sitename;?>.com">Contact: info@<?php echo $sitename;?>.com</a>
    </div>
</div>
</div>
</div>
</div>


<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url('website/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('website/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
