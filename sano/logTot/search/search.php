<?php
      include('logTot/log-connection.php');
      if(isset($_POST['search_keyword']))//ntikora
      {
         $search_keyword = $db->real_escape_string($_POST['search_keyword']);
         $sqldata = "SELECT student_name, student_email, student_city FROM students WHERE sid=sid";
         $resdata=$db->query($qldata);

         if($resdata === false) {
             trigger_error('Error: ' .$db->error, E_USER_ERROR);    
          }else{
              $rows_returned = $resdata->num_rows;

          }
      $bold_search_keyword = '<strong>' .$search_keyword. '</strong>';
      if($rows_returned > 0) {
               while($rowdata = $resdata->fetch_assoc())
               {
                    echo '<div class="show" align="left"><span class="country_name">' ;//.str_in
               }

       }else{ 
            echo '<div class="show" align="left">No matching record.</div>'; 
          }
      }
?>
