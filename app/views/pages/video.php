<?php
class Video extends View
{
  public function output()
  {

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
    <title>Video</title>
  
    <meta name="generator" content="Nicepage 4.5.4, nicepage.com">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1",
		"logo": "images/Layer1.png",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Video">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode">
    <section class="u-align-center u-black u-clearfix u-section-19090" id="carousel_83c8">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-text u-text-1">Workout video</h2>
        <p class="u-text u-text-2">Over the years, THE INTERIOR WORKSHOP has become synonymous with exquisite taste, unparalleled service, and unmatched quality. Operating with the utmost in business ethics, we are known for our reliability and attention to detail on every
                project making your experience with us authentically different.</p>
        <div class="u-video u-video-1">
          <div class="embed-responsive embed-responsive-1">
            <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="https://www.youtube.com/embed/fssZtofUn2o?mute=0&amp;showinfo=0&amp;controls=0&amp;start=0" frameborder="0" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-2ETNEN" id="sec-3ba7">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-text u-text-default u-text-1"> Workout Timer</h2>
        <p class="u-large-text u-text u-text-variant u-text-2">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
        <div class="u-countdown u-countdown-1" data-target-date="Sun, 10 Apr 2022 08:40:44 GMT" data-type="to-date" data-for="per-visitor" data-time-left="15m" data-timer-id="dfea" data-target-number="100" data-direction="down" data-start-time="Sat, 02 Apr 2022 20:10:55 GMT" data-frequency="10s" data-after-count="none" data-redirect-url="https://">
          <div class="u-countdown-wrapper u-spacing-40">
            <div class="u-countdown-item u-countdown-years u-hidden u-spacing-15 u-countdown-item-1">
              <div class="u-countdown-counter u-spacing-2 u-countdown-counter-1"><div class="u-countdown-number">0</div><div class="u-countdown-number u-hidden">0</div></div>
              <div class="u-countdown-label u-text-grey-50 u-countdown-label-1">Years</div>
            </div>
            <div class="u-countdown-separator u-hidden u-countdown-separator-1"></div>
            <div class="u-countdown-days u-countdown-item u-hidden u-spacing-15 u-countdown-item-2">
              <div class="u-countdown-counter u-spacing-2 u-countdown-counter-2"><div class="u-countdown-number">0</div><div class="u-countdown-number u-hidden">9</div><div class="u-countdown-number u-hidden">0</div></div>
              <div class="u-countdown-label u-text-grey-50 u-countdown-label-2">Days</div>
            </div>
            <div class="u-countdown-separator u-hidden u-countdown-separator-2"></div>
            <div class="u-countdown-hours u-countdown-item u-spacing-15 u-countdown-item-3">
              <div class="u-countdown-counter u-spacing-2 u-countdown-counter-3"><div class="u-countdown-number">0</div><div class="u-countdown-number">0</div></div>
              <div class="u-countdown-label u-text-grey-50 u-countdown-label-3">Hours</div>
            </div>
            <div class="u-countdown-separator u-countdown-separator-3"></div>
            <div class="u-countdown-item u-countdown-minutes u-spacing-15 u-countdown-item-4">
              <div class="u-countdown-counter u-spacing-2 u-countdown-counter-4"><div class="u-countdown-number">1</div><div class="u-countdown-number">5</div></div>
              <div class="u-countdown-label u-text-grey-50 u-countdown-label-4">Minutes</div>
            </div>
            <div class="u-countdown-separator u-countdown-separator-4"></div>
            <div class="u-countdown-item u-countdown-seconds u-spacing-15 u-countdown-item-5">
              <div class="u-countdown-counter u-spacing-2 u-countdown-counter-5"><div class="u-countdown-number">0</div><div class="u-countdown-number">0</div></div>
              <div class="u-countdown-label u-text-grey-50 u-countdown-label-5">Seconds</div>
            </div>
            <div class="u-countdown-separator u-hidden u-countdown-separator-5"></div>
            <div class="u-countdown-item u-countdown-numbers u-hidden u-spacing-15 u-countdown-item-6">
              <div class="u-countdown-counter u-spacing-2 u-countdown-counter-6"><div class="u-countdown-number">0</div><div class="u-countdown-number">0</div><div class="u-countdown-number">1</div><div class="u-countdown-number">0</div><div class="u-countdown-number">0</div></div>
              <div class="u-countdown-label u-text-grey-50 u-countdown-label-6">Items</div>
            </div>
          </div>
          <div class="u-countdown-message u-hidden">
            <p>Sorry, the time is up.</p>
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
