<?php
     require_once 'dbconnection.php';
     if(isset($_POST['register'])){
         $user_email  =  trim($dbConnection->real_escape_string($_POST['user_email']));
         $user_password = $dbConnection->real_escape_string($_POST['user_password']);
         $regular_expression = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z0-9]+)*(\.[a-z]{2,4})$/';

         if(preg_match($regular_expression, $user_email)){
             $checkEmailId = "SELECT id FROM images WHERE email_id = '" .$user_email. " ' ";
             $resEmail = $dbConnection->($checkEmailId);
             $rows_returned = $resEmail->num_rows;
             if($rows_returned > 0){
                 echo " . mysqli_error($dbConnection) . ";
                 $msg =  'The email is already taken, please try new.';
              }else{
                  $activation_key = md5($user_email.time());
                  $salt = 'randomstring';//generate random string
                  $hashed_value = md5($salt.$user_password);
                  $sqlInsertUser = $dbConnection->("INSERT INTO images (email_id, password, activation_key) VALUES ('$user_email', '$hashed_value', '$activation_key')"); 

                   // Script for send email start here 
                  $subject = 'StepBlogging ::  Email verification';
                  $body = 'Please verify your email <br/> <br/> <a href="www.sano.rw/activate_account.php?key=' .$activation_key. '">www.sano.rw/acivate_account.php?key=' .$activation_key. '</a>';echo " . mysqli_error($dbConnection) . ";
                  include 'class.phpmailer.php';
                  $mail = new PHPMailer();
                  $mail->Charset = "utf-8";
                  $mail->IsSMTP();
                  $mail->SMTPAuth = true;
                  $mail->Username = _SMTP_USER_NAME;//SMTP username
                  $mail->Password = _SMTP_PASSWORD;//SMTP Password
                  $mail->Host = _SMTP_HOST_NAME;//SMTP Hostname
                  $mail->Port = _SMTP_PORT; //SMTP Port
                  $mail->LE = "\r\n";

                  $mail->setFrom('sirleandre@gmail.com', 'Mozal');
                  $mail->AddAddress($user_email);
                  $mail->Subject = $subject;
                  $mail->IsHTML(true);
                  $mail->Body  = $body;
                  $mail->send();
                  // Script for send email end here 

                  $msg = 'Registration successful, please activate email.';echo " . mysqli_error($dbConnection) . ";
                  
            }
          }else {
               $msg = 'The email you have entered is invalid, please try again.';echo " . mysqli_error($dbConnection) . ";
              } 
         
     }
?>

<html>
<head>
      <title>PHP Email verification by PDO</title>
</head>
<body>
      <div class="web">
            <form class="myform" action="ind.php" method="post">
                   <?php if(isset($msg)) echo $msg;?>
                    <div class='input'>Email:<div><input type="email" name="user_email" /></div>
                    <div class='input'>Password: <input type="password" name="user_password" /></div>
                    <input type="submit" value="register" name="register" class="btn" />

             </form>
           </div>
</body>
</html>      
