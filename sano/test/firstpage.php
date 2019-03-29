<?php
  
  session_start();
  $_SESSION['favorite_start'] = 'Tori Amos';


?>
Currently, my favorite artist is Tori Amos. It may also interest you to know that my identifier for this browser session, as allocated by PHP, is
<?=session_id()?>.
<BR><BR>
<a href="secondpage.php">Go to the second page</a>
