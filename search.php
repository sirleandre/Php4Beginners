
<?php // session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
    //header('Location: log-connect.php');
}
?>
<html>
<head>
  <title>Search </title>
</head>
<meta charset="utf-8">
 <link rel="stylesheet" href=""/>
    <script type="text/javascript" src="" charset="UTF-8"></script>
    <script src=""></script>
    <script src=""></script>
    <script src=""></script>
    <style>
      @media screen and (max-width:480px){
        #search{width:80%;}
        #search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
      }
      /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:150px;
  }
  test.jumbotron { min-height: 50px; }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
    </style>
  </head>
<body>
 <!--<div class="jumbotron text-center">
  <h1>SUPERTECH LTD</h1>
  <p>We are specialize in sales in electronics products </p>
  <form class="form-inline">
    <div class="input-group">
      <input type="email" class="form-control" size="30" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>
</div>-->
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid"> 
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
          <span class="sr-only">navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand">SAFE CHILD</a>
      </div>
   <!-- <div class="collapse navbar-collapse" id="collapse">
      <ul class="nav navbar-nav">
        <li><a href="class.php"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
<span class="sr-only">Loading...</span>  VIEW RECORDS BY Names</a></li>
        <li><a href="add.html"><span class="glyphicon glyphicon-pencil"></span> ADD NEW STUDENT</a></li>
       <li> <a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
       <li> <a href="search.php"><span class="glyphicon glyphicon-search"></span>  SEARCH STUDENT</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span>  <?php echo $_SESSION['name']?><i class="fa fa-camera-retro fa-1g"></i></a></li>
       
        </ul>
        </div>
        </div>
        </div>   -->
        <p><br></p>
        <p><br></p>
        
        <form action="search.php" method="GET"  class="form-group" align="center">
        <label for search>ENTER THE Name:</label>
         <input type="text" name="query" />
        <input type="submit" value="Search" class="btn btn-primary" />
        </form>
        <P><br><P>
<P><br><P>
       
         <h1 style="color:blue" align="center">DATABASE SEARCH RESULT TABLE </h1>
          <table width="100%" border="2" cellspacing ="4" cellpadding ="5" align="center" class="table">;
          <tr bgcolor="#CCCCCC;" >
               <!--<td class="btn-primary"><b>CARD ID</b></td>  --> 
               <td class="btn-primary"><b>FIRSTNAME</b></</td>
               <td class="btn-primary"><b>LAST NAME</b></</td>
               <td class="btn-primary"><b>E-mail</b></</td>
               <!--<td class="btn-primary"><b>OPTION ID</b></</td>
               <td class="btn-primary"><b>CLASS ID</b></</td>
               <td class="btn-primary"><b>SEX</b></td>
               <td class="btn-primary"><b>DATE OF BIRTH </b></</td>
               <td class="btn-primary"><b>PARENT NAME</b></</td>
               <td class="btn-primary"><b>PARENT ADRESS</b></</td>
               <td class="btn-primary"><b>PARENT PHONE</b></</td>
               <td class="btn-primary"><b>ACTION</b></</td> -->
             </tr>

<?php
include "connect.php";
    if (isset($_GET['query'])){
     $query = $_GET['query']; 
     // gets value sent over search form
     
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysql_query("SELECT * FROM students
            WHERE (`sid` LIKE '%".$query."%') OR (`student_name` LIKE '%".$query."%')OR (`student_email` LIKE '%".$query."%')") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysql_fetch_array($raw_results)){

           
                  
        echo '<tr>';
             echo '<td>'.$results["sid"].'</td>';
             echo '<td>'.$results["student_name"].'</td>';
             echo '<td>'.$results["student_email"].'</td>';
              /*echo '<td>'.$results["school_id"].'</td>';
             echo '<td>'.$results["option_id"].'</td>';
             echo '<td>'.$results["class_id"].'</td>';
             echo '<td>'.$results["sex"].'</td>';
             echo '<td>'.$results["D_BIRTH"].'</td>';
             echo '<td>'.$results["PARENT_NAME"].'</td>';
             echo '<td>'.$results["PARENT_ADRESS"].'</td>';
             echo '<td>'.$results["PARENT_PHONE"].'</td>'; */
              echo "<td><a href=\"edit.php?id=$results[user_id]\">UPDATE</a> | <a href=\"delete.php?id=$results[user_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">DELETE</a></td>";

        //echo '</tr>';

    

            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                // echo "<p><h3>".$results['sensor1']."</h3>".$results['sensor2'].$results['sensor2']."</p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
           // echo "NO RESULTS FOUND FOR YOUR SEARCH";
            echo "<div class='alert alert-danger'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>NO RESULT FOUND FOR YOUR SEARCH QUERY </b>

</div>

    ";
        }
         
   }
    else{ // if query length is less than minimum
        //echo "Minimum search charactors should be ".$min_length;
        echo "<div class='alert alert-danger'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>MINIMUM search query must be 3 charactors </b>

</div>

    ";
    }
    }
    
?>

</table>
    </body>
    </html>
