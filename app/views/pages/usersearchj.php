<?php
class Usersearchj extends view
{

  public function output()
  {
    // $title = $this->model->title;
    // $data = $this->model->data;


    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT

    <html>
    <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <title>Search Client</title>
      <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
  
   
     <script type="text/javascript">
   $(document).ready(function(){
   $('[data-toggle="tooltip"]').tooltip();   
   });
   </script>
    </head>
    <body>
       <div class="main">
     <div class="container">
      <br>
      <h2 align="center">Search Client</h2><br>
      <div class="form-group">
       <div class="input-group">
        
        <input type="text" align="center" name="search_text" id="search_text" placeholder="Search.." class="search">
        <button class="button">Search</button>
       </div>
      </div>
      <br>
      <div id="result"></div>
     </div>
    </body>
   </html>
   
   
   <script>
   $(document).ready(function(){
   
    load_data();
   
    function load_data(query)
    {
     $.ajax({
      url:"usersearch",
      method:"POST",
      data:{query:query},
      success:function(data)
      {
       $('#result').html(data);
      }
     });
    }
    $('#search_text').keyup(function(){
     var search = $(this).val();
     if(search != '')
     {
      load_data(search);
     }
     else
     {
      load_data();
     }
    });
   });
   </script>

EOT;
    echo $text;


    require APPROOT . '/views/inc/footer.php';
  }
}
