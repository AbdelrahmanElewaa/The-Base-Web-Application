<?php
class Login extends View
{
  public function output()
  {
    // $title = $this->model->title;
    // $subtitle = $this->model->subtitle;
    // $user_id = $_SESSION['user_id'];
    // $user_name = $_SESSION['user_name'];

    require APPROOT . '/views/inc/header.php';
    $action = URLROOT . 'pages/login';
    $text = <<<EOT
 
    <!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Login</title>

    <meta name="generator" content="Nicepage 4.5.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1",
		"logo": "images/Layer1.png",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Login">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode">
  <form action="$action" method="post">
    <section class="Login u-align-center u-clearfix u-palette-5-light-2 u-section-1" id="sec-3fb4">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-text u-text-custom-color-1 u-text-default u-text-1">Login&nbsp;</h1>
        <div class="u-form u-form-1">
          <form action="#" method="POST" class="u-clearfix u-form-spacing-20 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form">
            <div class="u-form-group u-form-name u-label-none">
              <label for="name-3b9a" class="u-label u-text-custom-color-1">Email</label>
              <input type="email" placeholder="Enter a valid email address" id="name-3b9a" name="email" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-input u-input-rectangle " required="required">
            </div>
            <div class="u-form-email u-form-group u-label-none">
              <label for="email-3b9a" class="u-label u-text-custom-color-1">Password</label>
              <input type="password" placeholder="Password" id="email-3b9a" name="password" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-input u-input-rectangle " required="">
            </div>
            <div class="u-align-center u-form-group u-form-submit">
              <a href="#" class="u-border-2 u-border-custom-color-1 u-border-hover-black u-btn u-btn-round u-btn-submit u-button-style u-none u-radius-17 u-btn-1">Submit</a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
      </div>
    </section>
    
    </form>

  </body>
</html>
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
