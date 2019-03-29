<?php
$db = new mysqli('localhost', 'root', 'mozal', 'college');
session_start();
    if(isset($_POST['submit']))
    {
        $search=$_POST['student_email'];
        $_SESSION['student_name']= $search;
        if(($_SESSION['student_name'])!="")
        {
        header("location:index.php");
        }
        else
        {
        echo "<script> alert('search box as been empty') </script>";
        }
    }
?>
   
    <div class="login">
    <form method="post">
    <p align="center"><img src="logos.png" /></p>
    <p><?php if(isset($_SESSION['student_name'])) { ?>
    <input name="search" type="search" list="searchkey" value="<?php echo $_SESSION['student_name'];?>" 
   class="search" />
    <?php } else { ?>
    <input name="search" type="search" list="searchkey" placeholder=""  class="search" />
    <?php } ?></p>
    <datalist id="searchkey">
    <?php
    $tile=$db->query("SELECT * FROM `students`");
    while($storetitle=mysqli_fetch_object($tile))
    {
    ?>
    <option  value="<?php echo $storetitle->student_name ?>">
    <?php } ?>
    </datalist>
    <p align="center">
    <input type="submit" name="submit" id="click" class="but" value="Mostliker search"  />
    <input type="submit" name="submit" class="but" value="I m Feeling lucky" /> </p> 
    <p class="lang">Add content: 
    <a href="add-view.php">Hindi</a>&nbsp;<a href="add-view.php"> Bengali </a>&nbsp;    
    Kannada</a>&nbsp;<a href="add-view.php"> Malayalam</a></p>

    <?php if(isset($_SESSION['student_name'])) {
    if(($_SESSION['student_email']!=""))
    {
    $data=$_SESSION['student_email'];
    $view=$db->query("select * from students where student_name like '%$data%' 
   || desp like '%$data%' limit 10 ");
    $check=mysqli_num_rows($view);
    if($check!="")
    {
    while($descri=mysqli_fetch_object($view))
    {
    ?>
    <div class="reslt">
    <h3 id="resuil-title"><?php echo $descri->title; ?></h3>
    <p class="Description">
    <?php $description = str_replace($data, '<span class="highlight">'.$data."</span>", 
    $descri->desp);
    echo $description; ?><p>
    <hr>
    </div>
    <?php } } else { ?>
    <div class="reslt">
    <h3 id="resuil-title">Searching Data not fond</h3>
    <p class="Description">
    Add new data enter and check the correct keyword
    <p><hr>
    </div>
    <?php } } } ?>
    </form>
    </div>
    </body>
    </html>
