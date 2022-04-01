<?php
class Work extends View
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
        <title>Workout</title>
        <meta name="generator" content="Nicepage 4.5.4, nicepage.com">
        
        
        
        <script type="application/ld+json">{
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Site1",
            "logo": "images/Layer1.png",
            "sameAs": []
    }</script>
        <meta name="theme-color" content="#478ac9">
        <meta property="og:title" content="Workout">
        <meta property="og:description" content="">
        <meta property="og:type" content="website">
      </head>
      <body class="u-body u-xl-mode">
        <section class="u-align-center u-clearfix u-image u-shading u-section-1555work" id="carousel_0431" data-image-width="1280" data-image-height="930">
          <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-text-1">Training Program</h1>
            <p class="u-text u-text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            <div class="u-table u-table-responsive u-table-1">
              <table class="u-table-entity u-table-entity-1">
                <colgroup>
                  <col width="33.01%">
                  <col width="33.01%">
                  <col width="33.98%">
                </colgroup>
                <thead class="u-align-center u-grey-10 u-table-header u-table-header-1">
                  <tr style="height: 66px;">
                    <th class="u-border-2 u-border-palette-1-light-1 u-palette-2-light-1 u-table-cell u-table-cell-1">Plan 1</th>
                    <th class="u-border-2 u-border-palette-1-light-1 u-palette-2-base u-table-cell u-table-cell-2">Plan 2</th>
                    <th class="u-border-2 u-border-palette-1-light-1 u-palette-1-base u-table-cell u-table-cell-3">Plan 3</th>
                  </tr>
                </thead>
                <tbody class="u-align-center u-grey-90 u-table-alt-grey-80 u-table-body u-table-body-1">
                  <tr style="height: 52px;">
                    <td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-4">10 Gb</td>
                    <td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-5">15 Gb</td>
                    <td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-6">20 Gb</td>
                  </tr>
                  <tr style="height: 52px;">
                    <td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-7">2</td>
                    <td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-8">5</td>
                    <td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-9">Unlimited</td>
                  </tr>
                  <tr style="height: 52px;">
                    <td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-10">Free Trial</td>
                    <td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-11">Free Trial</td>
                    <td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-12">Free Trial</td>
                  </tr>
                  <tr style="height: 52px;">
                    <td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-13">9.99$</td>
                    <td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-14">19.99$</td>
                    <td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-15">39.99$</td>
                  </tr>
                  <tr style="height: 60px;">
                    <td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-16">
                      <a href="https://nicepage.com/c/industrial-website-templates" class="u-btn u-btn-rectangle u-button-style u-palette-2-light-1 u-btn-1">Details<br>
                      </a>
                    </td>
                    <td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-17">
                      <a href="https://nicepage.com/k/hacker-html-templates" class="u-btn u-btn-rectangle u-button-style u-palette-2-base u-btn-2">Details</a>
                    </td>
                    <td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-18">
                      <a href="https://nicepage.com/wysiwyg-html-editor" class="u-btn u-btn-rectangle u-button-style u-palette-1-base u-btn-3">Details</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p ></p>
          </div>
        </section>

        
        
        


      </body>
    </html>
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
