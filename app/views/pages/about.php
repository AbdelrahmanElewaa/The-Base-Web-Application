<?php
class About extends view
{

  public function output()
  {
    $title = $this->model->title;
    $data = $this->model->data;

    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    <!DOCTYPE html>
    <html style="font-size: 16px;">
      <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <title>About</title>
 
       
        <meta name="generator" content="Nicepage 4.5.4, nicepage.com">
      

        
        
        
        
        <script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "Site1",
        "logo": "/MVC/public/images/Layer1.png",
        "sameAs": []
    }</script>
        <meta name="theme-color" content="#478ac9">
        <meta property="og:title" content="About">
        <meta property="og:description" content="">
        <meta property="og:type" content="website">
      </head>
      <body class="u-body u-xl-mode">
  <section class="u-clearfix u-section-10000" id="sec-1cf6">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-23 u-layout-cell-1">
              <div class="u-container-layout u-valign-middle u-container-layout-1">
                <div alt="" class="u-image u-image-circle u-image-1" src="" data-image-width="1600" data-image-height="1200"></div>
              </div>
            </div>
            <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-37 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <h2 class="u-text u-text-palette-1-dark-2 u-text-1">About Us</h2>
                <p class="u-text u-text-grey-50 u-text-22">The Base is a fitness entity.

                We provide customised workout programs that help you reach your body shape goal, gain muscles, lose fats, enhance your strength and doing our calisthenics super moves.</p>

                <a href="https://nicepage.best" class="u-btn u-button-style u-grey-15 u-btn-2">learn more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-section-2PL" id="sec-d2d4">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h1 class="u-text u-text-palette-1-dark-2 u-text-1">How We Help</h1>
      <p class="u-text u-text-22">Experience the power of the pack. We offer signature classes that can only be found at Equinox—plus classes across 11 categories, including HIIT, Long + Lean, Cycling, Yoga, Running, Dance, and more.</p>
      <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-left u-container-style u-list-item u-repeater-item u-white u-list-item-1">
            <div class="u-container-layout u-similar-container u-container-layout-1">
              <h4 class="u-text u-text-default u-text-5">Sample Headline</h4>
              <p class="u-text u-text-default u-text-6">Sample text. Click to select the text box. Click again or double click to start editing the text.&nbsp;Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
          <div class="u-align-left u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-2">
            <div class="u-container-layout u-similar-container u-container-layout-2">
              <h4 class="u-text u-text-default u-text-5">Sample Headline</h4>
              <p class="u-text u-text-default u-text-6">Sample text. Click to select the text box. Click again or double click to start editing the text.&nbsp;Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
          <div class="u-align-left u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-3">
            <div class="u-container-layout u-similar-container u-container-layout-3">
              <h4 class="u-text u-text-default u-text-7">Sample Headline</h4>
              <p class="u-text u-text-default u-text-8">Sample text. Click to select the text box. Click again or double click to start editing the text.&nbsp;Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
          <div class="u-align-left u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-4">
            <div class="u-container-layout u-similar-container u-container-layout-4">
              <h4 class="u-text u-text-default u-text-9">Sample Headline</h4>
              <p class="u-text u-text-default u-text-10">Sample text. Click to select the text box. Click again or double click to start editing the text.&nbsp;Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-section-3" id="carousel_ffdb">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-expanded-width u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-container-style u-list-item u-repeater-item" data-animation-name="flipIn" data-animation-duration="2000" data-animation-direction="X">
            <div class="u-container-layout u-similar-container u-container-layout-1">
              <img alt="" class="u-image u-image-default u-image-1" src="/MVC/public/images/pexels-photo-11347811.jpeg" data-image-width="864" data-image-height="1080">
              <div class="u-container-style u-custom-item u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-grey-5 u-group u-group-1">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <h4 class="u-custom-font u-font-montserrat u-text u-text-5">Nina Scavo</h4>
                  <p class="u-text u-text-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p><span class="u-file-icon u-icon u-text-black u-icon-1"><img src="/MVC/public/images/14.png" alt=""></span>
                </div>
              </div>
            </div>
          </div>
          <div class="u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-container-style u-list-item u-repeater-item" data-animation-name="flipIn" data-animation-duration="2000" data-animation-direction="X">
            <div class="u-container-layout u-similar-container u-container-layout-3">
              <img alt="" class="u-image u-image-default u-image-2" src="/MVC/public/images/pexels-photo-10064636.jpeg" data-image-width="563" data-image-height="750">
              <div class="u-container-style u-custom-item u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-palette-3-base u-group-2">
                <div class="u-container-layout u-valign-middle u-container-layout-4">
                  <h4 class="u-custom-font u-font-montserrat u-text u-text-5">Linda Kim</h4>
                  <p class="u-text u-text-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p><span class="u-file-icon u-icon u-text-black u-icon-2"><img src="/MVC/public/images/14.png" alt=""></span>
                </div>
              </div>
            </div>
          </div>
          <div class="u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-container-style u-list-item u-repeater-item" data-animation-name="flipIn" data-animation-duration="2000" data-animation-direction="X">
            <div class="u-container-layout u-similar-container u-container-layout-5">
              <img alt="" class="u-image u-image-default u-image-3" src="/MVC/public/images/pexels-photo-9852577.jpeg" data-image-width="1001" data-image-height="1500">
              <div class="u-container-style u-custom-item u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-palette-3-base u-group-3">
                <div class="u-container-layout u-valign-middle u-container-layout-6">
                  <h4 class="u-custom-font u-font-montserrat u-text u-text-5">Di Dowson</h4>
                  <p class="u-text u-text-6">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p><span class="u-file-icon u-icon u-text-black u-icon-3"><img src="/MVC/public/images/14.png" alt=""></span>
                </div>
              </div>
            </div>
          </div>
          <div class="u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-container-style u-list-item u-repeater-item" data-animation-name="flipIn" data-animation-duration="2000" data-animation-direction="X">
            <div class="u-container-layout u-similar-container u-container-layout-7">
              <img alt="" class="u-image u-image-default u-image-4" src="/MVC/public/images/pexels-photo-9890198.jpg" data-image-width="1642" data-image-height="1080">
              <div class="u-container-style u-custom-item u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-grey-5 u-group u-group-4">
                <div class="u-container-layout u-valign-middle u-container-layout-8">
                  <h4 class="u-custom-font u-font-montserrat u-text u-text-7">Sofa Brown</h4>
                  <p class="u-text u-text-8">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p><span class="u-file-icon u-icon u-text-black u-icon-4"><img src="/MVC/public/images/14.png" alt=""></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-clearfix u-section-4" id="sec-36aa">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <h2 class="u-align-center u-text u-text-default u-text-1">Key Features</h2>
      <p class="u-align-center u-text u-text-22">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
      <div class="u-expanded-width u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span class="u-icon u-icon-circle u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 128 128" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7567"></use></svg><svg class="u-svg-content" viewBox="0 0 128 128" id="svg-7567"><path d="m26.4 108.7c-1.2 0-2.2-1-2.2-2.2s1-2.2 4.7-2.2h48.7v-7.4h-31.2v-9.9h31.2v-8.4h-58.7c-7.7 0-10.6-3-10.6-6.6v-57.1c0-3.7 3-6.6 6.6-6.6h81.2c3.7 0 6.6 3 6.6 6.6v27h8.3v-27c0-8.2-6.7-14.9-14.9-14.9h-81.2c-8.2 0-14.9 6.7-14.9 14.9v57.1c0 8.2 6.7 14.9 14.9 14.9h23.2v10.1h-13.8c-4.3 0-8.5 3.7-8.5 9.5v0.2c0 4.6 3.7 9.3 8.3 9.3h53.5v-7.3h-51.2z"></path><path d="m118 41.9h-30c-5.8 0-10.5 4.7-10.5 10.6 0 0 0.1 66.3 0.1 66.4 0 4.3 5.1 9 10.4 9h30c5.6 0 10.2-4.4 10.5-10.1v-65.3c0-5.9-4.7-10.6-10.5-10.6zm2.4 75.5c-0.1 1.3-1.1 2.3-2.4 2.3h-30c-1 0-1.9-0.7-2.2-1.6l-0.2-65.6c0-1.3 1.1-2.4 2.4-2.4h30c1.3 0 2.4 1.1 2.4 2.4v64.9z"></path></svg>
          
          
        </span>
              <h3 class="u-text u-text-default u-text-5">Responsive</h3>
              <p class="u-text u-text-default u-text-4">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-icon u-icon-circle u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 128 128" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-407b"></use></svg><svg class="u-svg-content" viewBox="0 0 128 128" id="svg-407b"><path d="m92.7 22c2.4 0 4.4 2 4.4 4.5v4.2h-89.1v-4.2c0-2.5 2-4.5 4.4-4.5h80.3m4.4 14.6v7.8h-61.8-0.6-26.7v-7.8h89.1m18.5 13.7c2.4 0 4.4 2 4.4 4.5v46.7c0 2.5-2 4.5-4.4 4.5h-80.3c-2.4 0-4.4-2-4.4-4.5v-46.7c0-2.3 1.8-4.3 4.1-4.4l80.6-0.1m-91.6 0.1c-0.6 1.3-1 2.9-1 4.4v22.9h-10.6c-2.4 0-4.4-2-4.4-4.5v-22.8h18m66.7-36.4h-80.3c-6.8 0-12.4 5.6-12.4 12.5v46.8c0 6.9 5.6 12.5 12.4 12.5h10.6v15.9c0 6.9 5.6 12.5 12.4 12.5h80.3c6.8 0 12.4-5.6 12.4-12.5v-46.7c0-6.9-5.6-12.5-12.4-12.5h-10.6v-15.9c-0.1-7-5.6-12.6-12.4-12.6z"></path><path d="m67.6 69.9c2 0 3.8 0.7 5.3 1.8-1.1 2-1.7 4.3-1.7 6.8 0 2.4 0.6 4.7 1.7 6.8-1.5 1.2-3.4 1.8-5.3 1.8-4.7 0-8.6-3.9-8.6-8.6s3.8-8.6 8.6-8.6m18.4 0c4.7 0 8.6 3.9 8.6 8.6s-3.9 8.6-8.6 8.6-8.6-3.9-8.6-8.6 3.8-8.6 8.6-8.6m-18.4-8c-9.2 0-16.6 7.5-16.6 16.6 0 9.2 7.5 16.6 16.6 16.6 3.3 0 6.5-1 9.2-2.8 2.6 1.8 5.8 2.8 9.2 2.8 9.2 0 16.6-7.5 16.6-16.6 0-9.2-7.5-16.6-16.6-16.6-3.4 0-6.6 1-9.2 2.8-2.7-1.8-6-2.8-9.2-2.8z"></path></svg>
          
          
        </span>
              <h3 class="u-text u-text-default u-text-5">Pricing</h3>
              <p class="u-text u-text-default u-text-6">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-icon u-icon-circle u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 128 128" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1c6a"></use></svg><svg class="u-svg-content" viewBox="0 0 128 128" id="svg-1c6a"><path d="m40.6 11c2.3 0 4.4 0.9 6.1 2.5 5.4 5.4 10.8 19.2 8.9 21.2 0 0-0.3 0.3-1.5 0.3-5.5 0-16.1-5.7-19.5-9.2-3.4-3.4-3.4-8.9 0-12.2 1.5-1.7 3.7-2.6 6-2.6m46.8 0.1c2.2 0 4.4 0.8 6.1 2.4 3.4 3.4 3.4 8.9 0 12.2-3.4 3.5-14 9.2-19.5 9.2-1.1 0-1.5-0.3-1.5-0.3-1.9-1.9 3.5-15.7 8.9-21.2 1.6-1.5 3.8-2.3 6-2.3m32.6 32.1v16h-52v-16h52m-60 0v16h-52v-16h52m52 23.9v47.9h-44v-47.9h44m-52 0v47.9h-44v-47.9h44m-19.4-64.1c-4.4 0-8.6 1.7-11.7 4.9-6.5 6.5-6.5 17 0 23.5 1.2 1.2 2.8 2.5 4.7 3.8h-25.6c-4.4 0-8 3.6-8 8v24h8v55.8h112v-55.9h8v-24c0-4.4-3.6-8-8-8h-25.6c1.9-1.3 3.6-2.6 4.7-3.8 6.5-6.5 6.5-17 0-23.5-3-3-7.3-4.8-11.7-4.8s-8.7 1.7-11.7 4.8c-4.6 4.6-7.8 11.7-8.9 14.5-2.2 5.4-3 9.5-2.5 12.8h-0.5c0.5-3.2-0.4-7.4-2.5-12.8-1.2-2.8-4.3-9.9-8.9-14.5-3.2-3.1-7.4-4.8-11.8-4.8z"></path></svg>
          
          
        </span>
              <h3 class="u-text u-text-default u-text-7">Gifts</h3>
              <p class="u-text u-text-default u-text-8">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
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