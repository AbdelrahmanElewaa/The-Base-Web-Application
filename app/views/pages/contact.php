<?php
class Contact extends View
{
  public function output()
  {
    // $title = $this->model->title;
    // $subtitle = $this->model->subtitle;
    // $user_id = $_SESSION['user_id'];
    // $user_name = $_SESSION['user_name'];

    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    <!DOCTYPE html>
    <html style="font-size: 16px;">
      <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="page_type" content="np-template-header-footer-from-plugin">
        <title>Contact</title>
 
        
        
        
        <script type="application/ld+json">{
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Site1",
            "logo": "MVC/public/images/Layer1.png",
            "sameAs": []
    }</script>
        <meta name="theme-color" content="#478ac9">
        <meta property="og:title" content="Contact">
        <meta property="og:description" content="">
        <meta property="og:type" content="website">
      </head>
      <body class="u-body u-xl-mode">
        <section class="u-align-center u-clearfix u-palette-5-light-3 u-section-ONE" id="sec-a8fb">
          <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
              <div class="u-gutter-0 u-layout">
                <div class="u-layout-row">
                  <div class="u-container-style u-layout-cell u-left-cell u-size-21-xl u-size-23-lg u-size-25-md u-size-25-sm u-size-25-xs u-layout-cell-1">
                    <div class="u-container-layout u-container-layout-1">
                      <h1 class="u-text u-text-custom-color-1 u-text-ONE">Learn more about our <br>Fitn​ess Program
                      </h1>
                      <div class="u-social-icons u-spacing-10 u-social-icons-1">
                        <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-aeed"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-aeed"><path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
                        </a>
                        <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0be9"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-0be9"><path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span>
                        </a>
                        <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6432"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-6432"><path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span>
                        </a>
                        <a class="u-social-url" target="_blank" href="#"><span class="u-icon u-icon-circle u-social-icon u-social-pinterest u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b54f"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-b54f"><path d="M61.9,79.8c-5.5-0.3-7.8-3.1-12-5.8c-2.3,12.4-5.4,24.3-13.8,30.5c-2.6-18.7,3.8-32.8,6.9-47.7 c-5.1-8.7,0.7-26.2,11.5-21.9c13.5,5.4-11.6,32.3,5.1,35.7c17.6,3.5,24.7-30.5,13.8-41.4c-15.7-16.1-45.7-0.5-42,22.3 c0.9,5.6,6.7,7.2,2.3,15c-10.1-2.2-13-10.2-12.7-20.7c0.6-17.3,15.5-29.3,30.5-31.1c19-2.2,36.8,6.9,39.2,24.7 C93.4,59.5,82.3,81.3,61.9,79.8z"></path></svg></span>
                        </a>
                        <a class="u-social-url" target="_blank" href="#"><span class="u-icon u-icon-circle u-social-behance u-social-icon u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-abc5"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-abc5"><rect x="70.3" y="32" width="23" height="6.9"></rect><path d="M48.3,54c0,0,8.5-0.6,8.5-10.5s-6.9-14.8-15.7-14.8H12v55.9h29.1c0,0,17.8,0.6,17.8-16.5 C58.7,68.1,59.5,54.2,48.3,54z M24.8,38.5h16.3c0,0,4,0,4,5.8s-2.4,6.6-5,6.6H24.8V38.5z M40.3,74.5H24.8V59.6h16.3c0,0,6,0,6,7.7 C46.9,73.7,42.5,74.5,40.3,74.5z"></path><path d="M82.3,43C61,43,61,64.2,61,64.3c0,0-1.5,21.3,21.3,21.3c0,0,19.1,1.2,19.1-14.8h-9.7c0,0,0.2,6-8.9,6 c0,0-9.7,0.7-9.7-9.6h29C101.8,67.2,105,42.8,82.3,43z M72.8,59.6c0,0,1.2-8.6,9.7-8.6s8.5,8.6,8.6,8.6H72.8z"></path></svg></span>
                        </a>
                        <a class="u-social-url" target="_blank" href="#"><span class="u-icon u-icon-circle u-social-dribbble u-social-icon u-icon-6"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f423"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-f423"><path d="M56.1,11.1c-24.8,0-45,20.2-45,45s20.2,45,45,45s45-20.2,45-45C101.1,31.3,80.9,11.1,56.1,11.1z M56.1,18.1 c9.6,0,18.3,3.7,25.1,9.5c-1.2,1.5-6.8,8.7-19.7,13.5C55.6,30.2,49,21.2,47.5,19C50.3,18.4,53.2,18.1,56.1,18.1z M39.9,21.7 c1.3,1.9,7.8,11,13.9,21.7c-16.4,4.3-31,4.7-34.3,4.5h-0.3C21.5,36.3,29.3,26.8,39.9,21.7z M18.2,56.1c0-0.2,0-0.6,0-0.9 c0.2,0,0.6,0,1,0c4.6,0,21.1-0.3,37.9-5.5c1,2,2,4.1,2.9,6c-0.3,0.1-0.9,0.2-1.3,0.3c-19,6.3-29.6,22.7-31.1,25.1 C21.8,74.6,18.2,65.8,18.2,56.1z M56.1,94.4c-8.7,0-16.8-3-23.2-8c1.2-2.1,8.9-16.4,29.8-23.6l0,0l0,0c5.3,13.6,7.5,25,8.1,28.7 C66.3,93.3,61.3,94.4,56.1,94.4z M77.7,87.5c-0.5-2.9-2.7-13.6-7.3-26.7c2.7-0.3,5.2-0.6,7.7-0.6c8,0,14.3,1.6,15.7,2.1 C91.9,72.7,86,81.8,77.7,87.5z M76.5,53.7c-2.8,0-5.8,0.1-8.7,0.5c-0.2-0.5-0.5-1.2-0.8-1.7c-0.8-1.7-1.5-3.5-2.4-5.3 c13.2-5.5,19.7-13,21-15c5.2,6.4,8.4,14.5,8.5,23.3C92.4,55.1,85.2,53.7,76.5,53.7z"></path></svg></span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="u-container-style u-hidden-sm u-hidden-xs u-image u-layout-cell u-size-14-lg u-size-16-xl u-size-5-md u-size-5-sm u-size-5-xs u-image-11" data-image-width="1067" data-image-height="1600">
                    <div class="u-container-layout u-container-layout-2"></div>
                  </div>
                  <div class="u-container-style u-layout-cell u-right-cell u-size-23-lg u-size-23-xl u-size-30-md u-size-30-sm u-size-30-xs u-white u-layout-cell-3">
                    <div class="u-container-layout u-valign-middle u-container-layout-3">
                      <h3 class="u-align-center u-text u-text-custom-color-1 u-text-TWO">Contact Us</h3>
                      <div class="u-expanded-width u-form u-form-1">
                        <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form">
                          <div class="u-form-group u-form-name u-form-group-1">
                            <label for="name-5a14" class="u-form-control-hidden u-label" wfd-invisible="true">Name</label>
                            <input type="text" placeholder="Enter your Name" id="name-5a14" name="name" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-base u-input u-input-rectangle u-white" required="">
                          </div>
                          <div class="u-form-email u-form-group u-form-group-2">
                            <label for="email-5a14" class="u-form-control-hidden u-label" wfd-invisible="true">Email</label>
                            <input type="email" placeholder="Enter a valid email address" id="email-5a14" name="email" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-base u-input u-input-rectangle u-white" required="">
                          </div>
                          <div class="u-form-group u-form-message u-form-group-3">
                            <label for="message-5a14" class="u-form-control-hidden u-label" wfd-invisible="true">Message</label>
                            <textarea placeholder="Enter your message" rows="4" cols="50" id="message-5a14" name="message" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-base u-input u-input-rectangle u-white" required=""></textarea>
                          </div>
                          <div class="u-align-center u-form-group u-form-submit u-form-group-4">
                            <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">Submit</a>
                            <input type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true">
                          </div>
                          <div class="u-form-send-message u-form-send-success" wfd-invisible="true"> Thank you! Your message has been sent. </div>
                          <div class="u-form-send-error u-form-send-message" wfd-invisible="true"> Unable to send your message. Please fix errors then try again. </div>
                          <input type="hidden" value="" name="recaptchaResponse" wfd-invisible="true">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        
        


      </body>
    </html> 
  
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
