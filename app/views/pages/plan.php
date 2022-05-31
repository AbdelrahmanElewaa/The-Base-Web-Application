<?php
class Plan extends View
{




 public function printBreakfast()
  {
    $r=$_SESSION['array_to_saveB'] ;
    $DATE=$_SESSION['DATE'] ;
    // print_r($DATE);
    $output_arrayB=array();
    for($x=0;$x<7;$x++)
    $output_arrayB[$x]=" ";
    $y=0;
    for($x=0;$x<count($r);$x++)
    {

      if(count($DATE) == $y)
      {
        $output_arrayB[6]= " ";
      }
      else if(date("D", strtotime(  $DATE[$y] ))=='Sun')
      {
            $SunBreakfast= $r[$x];
            $x++;
            $output_arrayB[0]= $SunBreakfast;
            $y++;
      }
      if(count($DATE) == $y)
      {
        $output_arrayB[6]= " ";
      }
      else if(date("D", strtotime( $DATE[$y] ))=='Mon')
      {
            $MonBreakfast= $r[$x];
            $x++;
            $output_arrayB[1]= $MonBreakfast;
            $y++;

      }
      if(count($DATE) == $y)
      {
        $output_arrayB[6]= " ";
      }
      else if(date("D", strtotime($DATE[$y]  ))=='Tue')
      {
          $TueBreakfast= $r[$x];
          $output_arrayB[2]= $TueBreakfast;
          $x++;
          $y++;

      }
      if(count($DATE) == $y)
      {
        $output_arrayB[6]= " ";
      }
      else if(date("D", strtotime(  $DATE[$y]  ))=='Wed')
      {
            $WedBreakfast= $r[$x];
            $output_arrayB[3]= $WedBreakfast;
            $x++;
            $y++;

      }
      if(count($DATE) == $y)
      {
        $output_arrayB[6]= " ";
      }
      else if(date("D", strtotime( $DATE[$y]  ))=='Thu')
      {
            $ThuBreakfast= $r[$y];
            $output_arrayB[4]= $ThuBreakfast;
            $x++;
            $y++;

      }
      if(count($DATE) == $y)
      {
        $output_arrayB[6]= " ";
      }
      else if(date("D", strtotime( $DATE[$y]  ))=='Fri')
      {
            $FriBreakfast= $r[$x];
            $output_arrayB[5]= $FriBreakfast;
            $y++;
            $x++;

      }
      if(count($DATE) == $y)
      {
        $output_arrayB[6]= " ";

      }
      else if(date("D", strtotime( $DATE[$y] ))=='Sat')
      {
              $SatBreakfast=$r[$x];
              $output_arrayB[6]= $SatBreakfast;
              $y++;
              $x++;

      }


      return $output_arrayB;
                             // default:
                                // $sundayBreakfast="none";




      }
    }


    public function printLunch()
    {


      $r=$_SESSION['array_to_saveL'] ;
      $DATE=$_SESSION['DATE'] ;

      $output_arrayB=array();
      for($x=0;$x<7;$x++)
      $output_arrayB[$x]=" ";
      $y=0;
      for($x=0;$x<count($r);$x++)
      {

        if($y>count($DATE))
        $y=0;
        if(count($DATE) == $y)
        {
          $output_arrayB[6]= " ";
        }
        else if(date("D", strtotime( $DATE[$y]  ))=='Sun')
        {
              $SunBreakfast= $r[$x];
              $output_arrayB[0]= $SunBreakfast;
              $y++;
              $x++;

        }
        if(count($DATE) == $y)
        {
          $output_arrayB[6]= " ";
        }
        else if(date("D", strtotime( $DATE[$y] ))=='Mon')
        {
              $MonBreakfast= $r[$x];
              $output_arrayB[1]= $MonBreakfast;
              $y++;
              $x++;



        }
        if(count($DATE) == $y)
        {
          $output_arrayB[6]= " ";
        }
        else if(date("D", strtotime(  $DATE[$y] ))=='Tue')
        {
            $TueBreakfast= $r[$x];
            $output_arrayB[2]= $TueBreakfast;
            $y++;
            $x++;



        }
        if(count($DATE) == $y)
        {
          $output_arrayB[6]= " ";
        }
        else if(date("D", strtotime( $DATE[$y]  ))=='Wed')
        {
              $WedBreakfast= $r[$x];
              $output_arrayB[3]= $WedBreakfast;
              $y++;
              $x++;



        }
        if(count($DATE) == $y)
        {
          $output_arrayB[6]= " ";
        }
        else if(date("D", strtotime( $DATE[$y]  ))=='Thu')
        {
              $ThuBreakfast= $r[$x];
              $output_arrayB[4]= $ThuBreakfast;
              $y++;
              $x++;



        }
        if(count($DATE) == $y)
        {
          $output_arrayB[6]= " ";
        }
        else if(date("D", strtotime( $DATE[$y]  ))=='Fri')
        {
              $FriBreakfast= $r[$x];
              $output_arrayB[5]= $FriBreakfast;
              $y++;
              $x++;



        }
        if(count($DATE) == $y)
        {
          $output_arrayB[6]= " ";
        }
        else if(date("D", strtotime( $DATE[$y] ))=='Sat')
        {
                $SatBreakfast=$r[$x];
                $output_arrayB[6]= $SatBreakfast;
                $y++;
                $x++;



        }
        return $output_arrayB;
                                  // default:
                                  // $sundayBreakfast="none";




        }
      }


      public function printDinner()
      {


        $r=$_SESSION['array_to_saveD'] ;
        $DATE=$_SESSION['DATE'] ;

        $output_arrayB=array();
        for($x=0;$x<7;$x++)
        $output_arrayB[$x]=" ";
        $y=0;
        for($x=0;$x<count($r);$x++)
        {
          if(count($DATE) == $y)
          {
            $output_arrayB[6]= " ";
          }
          else if(date("D", strtotime($DATE[$y] ))=='Sun')
          {
                $SunBreakfast= $r[$x];
                $output_arrayB[0]= $SunBreakfast;
                $y++;
                $x++;


          }
          if(count($DATE) == $y)
          {
            $output_arrayB[6]= " ";
          }
          else if(date("D", strtotime(  $DATE[$y]  ))=='Mon')
          {
                $MonBreakfast= $r[$x];
                $output_arrayB[1]= $MonBreakfast;
                $y++;
                $x++;



          }
          if(count($DATE) == $y)
          {
            $output_arrayB[6]= " ";
          }
          else if(date("D", strtotime( $DATE[$y]  ))=='Tue')
          {
              $TueBreakfast= $r[$x];
              $output_arrayB[2]= $TueBreakfast;
              $y++;
              $x++;



          }
          if(count($DATE) == $y)
          {
            $output_arrayB[6]= " ";
          }
          else if(date("D", strtotime(  $DATE[$y] ))=='Wed')
          {
                $WedBreakfast= $r[$x];
                $output_arrayB[3]= $WedBreakfast;
                $y++;
                $x++;



          }
          if(count($DATE) == $y)
          {
            $output_arrayB[6]= " ";
          }
          else if(date("D", strtotime( $DATE[$y]  ))=='Thu')
          {
                $ThuBreakfast= $r[$x];
                $output_arrayB[4]= $ThuBreakfast;
                $y++;
                $x++;



          }
          if(count($DATE) == $y)
          {
            $output_arrayB[6]= " ";
          }
          else if(date("D", strtotime(  $DATE[$y] ))=='Fri')
          {
                $FriBreakfast= $r[$x];
                $output_arrayB[5]= $FriBreakfast;
                $y++;
                $x++;




          }
          if(count($DATE) == $y)
          {
            $output_arrayB[6]= " ";

          }
          else if(date("D", strtotime(  $DATE[$y] ))=='Sat'  )
          {
                  $SatBreakfast=$r[$x];
                  $output_arrayB[6]= $SatBreakfast;
                  $y++;
                  $x++;


          }
          return $output_arrayB;
                                    // default:
                                    // $sundayBreakfast="none";




          }
        }



  public function output()
  {

    require APPROOT . '/views/inc/header.php';

    if(isset($_SESSION['array_to_saveB']))
    {
    $breakfast_result=$this->printBreakfast();
    }
    if(isset($_SESSION['array_to_saveL']))
    {
      $lunch_result=$this->printLunch();

    }
    if(isset($_SESSION['array_to_saveD']))
    {
      $dinner_result=$this->printDinner();

    }



// $h=$this->model->getbname();

    // $q = $this->model->plan();
    // print($q[0]->date);
    // print($this->model->getdate());

// $ff=$this->model->getdate();

// =$this->printBreakfast();

// print(date("D", strtotime(  $this->model->getdate() )));
// print($r);


// $help=date("D", strtotime($this->model->getdate()));
// $this->model->setdate(date("D", strtotime($this->model->getdate())));
// $result =  $this->model->plan();
$g=$this->model->getdate();

// $hg=$this->model->getdate();
// print_r($g);




// print_r($hg);
// print($help);
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
            <h2 class="u-custom-font u-font-source-sans-pro u-text u-text-1">Nutrition Plan</h2>
            <p class="u-text u-text-2">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
            <div class="u-expanded-width u-table u-table-responsive u-table-1">
              <table class="u-table-entity">
                <colgroup>
                  <col width="20%">
                  <col width="20%">
                  <col width="20%">
                  <col width="20%">
                  <col width="20%">
                </colgroup>
                <thead class="u-palette-5-dark-3 u-table-header u-table-header-1">
                  <tr style="height: 70px;">
                    <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-1">meal</th>
                    <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-2">Sunday</th>
                    <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-3">Monday</th>
                    <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-4">TUESDAY</th>
                    <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-5">WEDNESDAY</th>
                  </tr>
                </thead>
                <tbody class="u-black u-table-body u-table-body-1">
                  <tr style="height: 66px;">
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-6">Breakfast</td>
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-7">
EOT;
                    if(isset($breakfast_result[0])){ $text=$text.$breakfast_result[0];}
                    $text=$text.<<<EOT
                    <br>
                    </td>
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-8"> 
EOT;
                    if(isset($breakfast_result[1])){ $text=$text.$breakfast_result[1];}
                    $text=$text.<<<EOT
                    <br>
                    </td>
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-9">
EOT;
                    if(isset($breakfast_result[2])){ $text=$text.$breakfast_result[2];}
                    $text=$text.<<<EOT
                    <br>
                    </td>
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-10">
EOT;
                    if(isset($breakfast_result[3])){ $text=$text.$breakfast_result[3];}
                    $text=$text.<<<EOT
                    <br>
                    </td>
                  </tr>
                  <tr style="height: 46px;">
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-11">Lunch (Pre-Workout meal)</td>
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-12">
EOT;
                    if(isset($lunch_result[0])){ $text=$text.$lunch_result[0];}
                    $text=$text.<<<EOT
                    <br>
                    </td>
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-13">
EOT;
                    if(isset($lunch_result[1])){ $text=$text.$lunch_result[1];}
                    $text=$text.<<<EOT
                    <br>
                    </td>
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-14"> 
EOT;
                    if(isset($lunch_result[2])){ $text=$text.$lunch_result[2];}
                    $text=$text.<<<EOT
                    <br>
                    </td>
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-15">
EOT;
                    if(isset($lunch_result[3])){ $text=$text.$lunch_result[3];}
                    $text=$text.<<<EOT
                    <br>
                    </td>
                  </tr>

                  <tr style="height: 46px;">
                  <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-17">Dinner</td>
                  <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-18">
EOT;
                    if(isset($dinner_result[0])){ $text=$text.$dinner_result[0];}
                    $text=$text.<<<EOT
                    <br>
                  </td>
                  <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-19">
EOT;
                  if(isset( $dinner_result[1])){ $text=$text.$dinner_result[1];}
                  $text=$text.<<<EOT
                  <br>
                  </td>
                  <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-20">
EOT;
                  if(isset($dinner_result[2])){ $text=$text.$dinner_result[2];}
                  $text=$text.<<<EOT
                  <br>
                  </td>
                  <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-20"> 
EOT;
                  if(isset($dinner_result[3])){ $text=$text.$dinner_result[2];}
                  $text=$text.<<<EOT
                  <br>
                  </td>
                </tr>
                  <tr style="height: 60px;">


                </tr>

                </tbody>
              </table>
            </div>
            <p>
            </p>
          </div>
        </section>
        <section class="u-align-center u-clearfix u-image u-shading u-section-13" id="sec-fa67" data-image-width="1600" data-image-height="1067">
          <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-expanded-width u-table u-table-responsive u-table-1">
              <table class="u-table-entity">
                <colgroup>
                  <col width="19.3%">
                  <col width="27%">
                  <col width="28.7%">
                  <col width="25%">
                </colgroup>
                <thead class="u-palette-5-dark-3 u-table-header u-table-header-1">
                  <tr style="height: 70px;">
                    <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-1">meal</th>
                    <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-2">THURESDAY</th>
                    <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-3">FRIDAY</th>
                    <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-4">SATURDAY</th>
                  </tr>
                </thead>
                <tbody class="u-black u-table-body u-table-body-1">
                  <tr style="height: 66px;">
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-5">Breakfast</td>
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-6">
EOT;
                    if(isset($breakfast_result[4])){$text=$text.$breakfast_result[4];}
                    $text=$text.<<<EOT
                    <br>
                    </td>
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-7">
EOT;
                    if(isset($breakfast_result[5])){$text=$text.$breakfast_result[5];}
                    $text=$text.<<<EOT
                    <br>
                    </td>
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-8"> 
EOT;
                    if(isset($breakfast_result[6])){$text=$text.$breakfast_result[6];}
                    $text=$text.<<<EOT
                    <br>
                    </td>
                  </tr>
                  <tr style="height: 46px;">
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-9">Lunch (Pre-Workout meal)</td>
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-10">
EOT;
                    if(isset($lunch_result[4])){$text=$text.$lunch_result[4];}
                    $text=$text.<<<EOT
                    <br>
                    </td>
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-11">
EOT;
                    if(isset($lunch_result[5])){$text=$text.$lunch_result[5];}
                    $text=$text.<<<EOT
                    <br>
                    </td>
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-12"> 
EOT;
                    if(isset($lunch_result[6])){$text=$text.$lunch_result[6];}
                    $text=$text.<<<EOT
                    <br>
                    </td>
                  </tr>

                  <tr style="height: 46px;">
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-17">Dinner</td>
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-18">
EOT;
                    if(isset($dinner_result[4])){$text=$text.$dinner_result[4];}
                    $text=$text.<<<EOT
                    <br>
                    </td>
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-19">
EOT;
                    if(isset( $dinner_result[5])){$text=$text. $dinner_result[5];}
                    $text=$text.<<<EOT
                    <br>
                    </td>
                    <td class="u-border-1 u-border-palette-5-dark-1 u-table-cell u-table-cell-20">
EOT;
                    if(isset(  $dinner_result[6])){$text=$text.  $dinner_result[6];}
                    $text=$text.<<<EOT
                    <br>
                    </td>
                  </tr>





                </tbody>
              </table>
            </div>
          </div>
        </section>
        <section class="u-clearfix u-section-33" id="sec-d570">
          <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-list u-list-1">
              <div class="u-repeater u-repeater-1">
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 515.556 515.556" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3aeb"></use></svg><svg class="u-svg-content" viewBox="0 0 515.556 515.556" id="svg-3aeb"><path d="m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z"></path></svg>


              </span>
                    <p class="u-text u-text-1">Sample text. Click to select the text box. Click again or double click to start editing the text.&nbsp;Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                  </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 515.556 515.556" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6b12"></use></svg><svg class="u-svg-content" viewBox="0 0 515.556 515.556" id="svg-6b12"><path d="m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z"></path></svg>


              </span>
                    <p class="u-text u-text-3">Sample text. Click to select the text box. Click again or double click to start editing the text.&nbsp;Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                  </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 515.556 515.556" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-75c2"></use></svg><svg class="u-svg-content" viewBox="0 0 515.556 515.556" id="svg-75c2"><path d="m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z"></path></svg>


              </span>
                    <p class="u-text u-text-3">Sample text. Click to select the text box. Click again or double click to start editing the text.&nbsp;Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
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
