<?php
class Workoutdisplay extends View
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
        <title>plan</title>
        <meta name="generator" content="Nicepage 4.5.4, nicepage.com">
        
        
        
        
        <script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "Site1",
        "logo": "images/Layer1.png",
        "sameAs": []
    }</script>
        <meta name="theme-color" content="#478ac9">
        <meta property="og:title" content="plan">
        <meta property="og:description" content="">
        <meta property="og:type" content="website">
      </head>
      <body class="u-body u-xl-mode">
        <section class="u-align-center u-clearfix u-image u-shading u-section-13" id="carousel_dbf3" data-image-width="1600" data-image-height="1067">
          <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-custom-font u-font-source-sans-pro u-text u-text-1">Workout Program</h2>
            <p class="u-text u-text-2">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
            <div class="u-expanded-width u-table u-table-responsive u-table-1">
              <table class="u-table-entity">
                <colgroup>
                  <col width="20%">
                  <col width="20%">
                  <col width="20%">
                  <col width="20%">
                  <col width="20%">
                  <col width="20%">
                  <col width="20%">
                  <col width="20%">
                </colgroup>
                <thead class="u-palette-5-dark-3 u-table-header u-table-header-1">
                <tr style="height: 50px;">
                <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-2">Day No.</th>
                </tr>
                  <tr style="height: 50px;">
                    <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-2">Training Name</th>
                    <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-3">Muscle</th>
                    <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-4">Sets</th>
                    <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-5">Reps-> From</th>
                    <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-2">Reps-> To</th>                    
                    <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-3">Type Of Resistance</th>
                    <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-3">Video</th>

                  </tr>
                </thead>
                <tbody class="u-black u-table-body u-table-body-1">
                  <tr style="height: 50px;">
                  <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-17">                    
                  <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-17">             
                  <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-17">                 
                  <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-17">              
                  <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-17">                   
                  <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-17">
                  <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-17">
                  <center><a href="/MVC/public/pages/video" class="u-btn u-btn-rectangle u-button-style u-palette-1-base u-btn-3">See Video</a></center>
                  </td>
                                
                  </tr>
                  <tr style="height: 50px;">
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-17">                    
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-17">             
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-17">              
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-17">                     
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-17">                   
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-17">  
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-17">
                    <center><a href="/MVC/public/pages/video" class="u-btn u-btn-rectangle u-button-style u-palette-1-base u-btn-3">See Video</a></center>
                  </td>

                  </tr>
                  <tr style="height: 50px;">
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-17"> 
                    </td>
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-17">             
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-17">                 
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-17">              
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-17">                     
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-17"> 
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-17">
                    <center><a href="/MVC/public/pages/video" class="u-btn u-btn-rectangle u-button-style u-palette-1-base u-btn-3">See Video</a></center>
                  </td>
                                     
                  </tr>
                 
                 

                </tbody>
              </table>
            </div>
            <p>
            </p>
          </div>
        </section>
       
       
        
        


      </body>
    </html>
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
