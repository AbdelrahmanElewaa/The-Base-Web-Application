<?php
class w extends View
{
  
  public function sun(){
   
    $r=$this->model->getname();
    $Date=$this->model->getdate();
    $user_id=$this->model->gettraininguserid();

// print_r($r);
    $output_sun=array();
    
   
      $y=0;
      $sun_count=0;


      for($x=0;$x<3;$x++)  //loop 3la el names
      $output_sun[$x]=" ";


      $sun=0;   //loop 3la elday
      for($x=0;$x<count($r);$x++)
      {
        
         if(date("D", strtotime(  $Date[$x] ))=='Sun')
        {
          if(date('Y-m-d', strtotime('sunday this week')) == $Date[$x]){

          $output_sun[$sun]= $r[$x];
          $sun++;

        }
        else{
          $sun++;
        }
      } 
    }
      

      return $output_sun;
  }
  public function Mon(){
   
    $r=$this->model->getname();
    $Date=$this->model->getdate();

    $output_Mon=array();

    for($x=0;$x<3;$x++)  //loop 3la el names
      $output_Mon[$x]=" ";

      $Mon=0;   //loop 3la elday
      for($x=0;$x<count($r);$x++)
      {

        if(date("D", strtotime(  $Date[$x] ))=='Mon')
        {
          
          if(date('Y-m-d', strtotime('monday this week')) == $Date[$x]){

            $output_Mon[$Mon]= $r[$x];
            $Mon++;
            // $y++;
  
          }
          else{
            $Mon++;
          }
        }         

      }  
    

      
      return $output_Mon;
  }
  public function Tue(){
   
    $r=$this->model->getname();
    $Date=$this->model->getdate();

    $output_Tue=array();
    //print_r($r);

    for($x=0;$x<3;$x++)  //loop 3la el names
      $output_Tue[$x]=" ";

      $Tue=0;   //loop 3la elday
      for($x=0;$x<count($r);$x++)
      {

        if(date("D", strtotime(  $Date[$x] ))=='Tue')
        {
          
          if(date('Y-m-d', strtotime('tuesday this week')) == $Date[$x]){
            $output_Tue[$Tue]= $r[$x];
          $Tue++;
        }  
        else {
          $Tue;
        }    
      }
      }  
    

      return $output_Tue;
  }
  public function Wed(){
   
    $r=$this->model->getname();
    $Date=$this->model->getdate();

    $output_Wed=array();

    for($x=0;$x<3;$x++)  //loop 3la el names
      $output_Wed[$x]=" ";

      $Wed=0;   //loop 3la elday
      for($x=0;$x<count($r);$x++)
      {

        if(date("D", strtotime(  $Date[$x] ))=='Wed')
        {
          
          if(date('Y-m-d', strtotime('wednesday this week')) == $Date[$x]){
            $output_Wed[$Wed]= $r[$x];
          $Wed++;
        }  
        else {
          $Wed;
        }  
        }      

      }


      return $output_Wed;
  }
  public function Thu(){
   
    $r=$this->model->getname();
    $Date=$this->model->getdate();

    $output_Thu=array();
   // print_r($r);

    for($x=0;$x<3;$x++)  //loop 3la el names
      $output_Thu[$x]=" ";

      $Thu=0;   //loop 3la elday
      for($x=0;$x<count($r);$x++)
      {

        if(date('Y-m-d', strtotime('thursday this week')) == $Date[$x]){
          $output_Thu[$Thu]= $r[$x];
        $Thu++;
      }  
      else {
        $Thu;
      }        

      } 
    
 
      return $output_Thu;
  }
  public function Fri(){
   
    $r=$this->model->getname();
    $Date=$this->model->getdate();

    $output_Fri=array();

    for($x=0;$x<3;$x++)  //loop 3la el names
      $output_Fri[$x]=" ";

      $Fri=0;   //loop 3la elday
      for($x=0;$x<count($r);$x++)
      {

        if(date("D", strtotime(  $Date[$x] ))=='Fri')
        {
          
          if(date('Y-m-d', strtotime('friday this week')) == $Date[$x]){
            $output_Fri[$Fri]= $r[$x];
          $Fri++;
        }  
        else {
          $Fri;
        } 
        }     

      }  
   

      return $output_Fri;
  }
  public function Sat(){
   
    $r=$this->model->getname();
    $Date=$this->model->getdate();

    $output_Sat=array();

    for($x=0;$x<3;$x++)  //loop 3la el names
      $output_Sat[$x]=" ";

      $Sat=0;   //loop 3la elday
      for($x=0;$x<count($r);$x++)
      {

        if(date('Y-m-d', strtotime('saturday this week')) == $Date[$x]){
          $output_Sat[$Sat]= $r[$x];
        $Sat++;
      }  
      else {
        $Sat;
      }      

      }  
 

      return  $output_Sat;
  }






  public function output()
  {
  
    require APPROOT . '/views/inc/headerclient.php';

    
    $r=$this->model->getname();
    $Date=$this->model->getdate();

    $workout_sun=$this->sun();
    $workout_Mon=$this->Mon();
    $workout_Tue=$this->Tue();
    $workout_Wed=$this->Wed();
    $workout_Thu=$this->Thu();
    $workout_Fri=$this->Fri();
    $workout_Sat=$this->Sat();

    $day_sun=date('Y-m-d', strtotime('sunday this week')) ;
    $day_Mon=date('Y-m-d', strtotime('monday this week')) ;
    $day_Tue=date('Y-m-d', strtotime('tuesday this week')) ;
    $day_Wed=date('Y-m-d', strtotime('wednesday	this week')) ;
    $day_Thu=date('Y-m-d', strtotime('thursday this week')) ;
    $day_Fri=date('Y-m-d', strtotime('friday this week')) ;
    $day_Sat=date('Y-m-d', strtotime('saturday this week')) ;

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
              
                <tbody class="u-black u-table-body u-table-body-1">
                <tr style="height: 50px;">
                    
                      <th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-2">Sunday</th>
                  
                  
    EOT;
    //ToDO: try to remove the array that appear before the word
      $items;
      for($i=0 ; $i< count($workout_sun); $i++){
        $items=<<<EOT
          <td class='u-border-1 u-border-paltte-5-dark-1 u-table-cell u-table-cell-17'>$workout_sun[$i]</td>
      EOT;
    $text =$text. $items;  

      }
    // $items=$items .$work[$x]->content; //ToDO: 
    $text=$text.<<<EOT
    <td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-18">
    <center><a href="/MVC/public/pages/workoutdisplay?date=$day_sun" class="u-btn u-btn-rectangle u-button-style u-palette-1-base u-btn-3">Details</a></center>
    </td>            
</tr>
<tr style="height: 50px;">
                    
<th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-2">Monday</th>
EOT;
$items1 ;
for($i=0 ; $i< count($workout_Mon); $i++){
$items1=<<<EOT
<td class='u-border-1 u-border-paltte-5-dark-1 u-table-cell u-table-cell-17'>$workout_Mon[$i]</td>
EOT;
$text =$text. $items1;  

}
$text=$text.<<<EOT
<td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-18">
<center><a href="/MVC/public/pages/workoutdisplay?date=$day_Mon" class="u-btn u-btn-rectangle u-button-style u-palette-1-base u-btn-3">Details</a></center>
</td>            
</tr>
<tr style="height: 50px;">
                    
<th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-2">Tuesday</th>
EOT;
$items2 ;
for($i=0 ; $i< count($workout_Tue); $i++){
$items2=<<<EOT
<td class='u-border-1 u-border-paltte-5-dark-1 u-table-cell u-table-cell-17'>$workout_Tue[$i]</td>
EOT;
$text =$text. $items2;  

}
$text=$text.<<<EOT
<td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-18">
<center><a href="/MVC/public/pages/workoutdisplay?date=$day_Tue" class="u-btn u-btn-rectangle u-button-style u-palette-1-base u-btn-3">Details</a></center>
</td>            
</tr>
<tr style="height: 50px;">
                    
<th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-2">Wednesday</th>
EOT;
$items3;
for($i=0 ; $i< count($workout_Wed); $i++){
$items3=<<<EOT
<td class='u-border-1 u-border-paltte-5-dark-1 u-table-cell u-table-cell-17'>$workout_Wed[$i]</td>
EOT;
$text =$text. $items3;  

}
$text=$text.<<<EOT
<td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-18">
<center><a href="/MVC/public/pages/workoutdisplay?date=$day_Wed" class="u-btn u-btn-rectangle u-button-style u-palette-1-base u-btn-3">Details</a></center>
</td>            
</tr>
<tr style="height: 50px;">
                    
<th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-2">Thursday</th>
EOT;
$items5;
for($i=0 ; $i< count($workout_Thu); $i++){
$items5=<<<EOT
<td class='u-border-1 u-border-paltte-5-dark-1 u-table-cell u-table-cell-17'>$workout_Thu[$i]</td>
EOT;
$text =$text. $items5;  

}
$text=$text.<<<EOT
<td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-18">
<center><a href="/MVC/public/pages/workoutdisplay?date=$day_Thu" class="u-btn u-btn-rectangle u-button-style u-palette-1-base u-btn-3">Details</a></center>
</td>            
</tr>
<tr style="height: 50px;">
                    
<th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-2">Friday</th>
EOT;
$items6 ;
for($i=0 ; $i< count($workout_Fri); $i++){
$items6=<<<EOT
<td class='u-border-1 u-border-paltte-5-dark-1 u-table-cell u-table-cell-17'>$workout_Fri[$i]</td>
EOT;
$text =$text. $items6;  

}
$text=$text.<<<EOT
<td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-18">
<center><a href="/MVC/public/pages/workoutdisplay?date=$day_Fri" class="u-btn u-btn-rectangle u-button-style u-palette-1-base u-btn-3">Details</a></center>
</td>            
</tr>
<tr style="height: 50px;">
                    
<th class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-5-dark-1 u-table-cell u-table-cell-2">Saturday</th>
EOT;
$items7;
for($i=0 ; $i< count($workout_Sat); $i++){
$items7=<<<EOT
<td class='u-border-1 u-border-paltte-5-dark-1 u-table-cell u-table-cell-17'>$workout_Sat[$i]</td>
EOT;
$text =$text. $items7;  

}
$text=$text.<<<EOT
<td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-18"> 
<center><a href="/MVC/public/pages/workoutdisplay?date=$day_Sat" class="u-btn u-btn-rectangle u-button-style u-palette-1-base u-btn-3">Details</a></center>
</td>            
</tr>
</tbody>
</table>
</div>
<p>
</p>
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
require APPROOT . '/views/inc/footerclient.php';
}
}