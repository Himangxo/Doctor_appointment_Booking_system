<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $username = $_POST['username'];
  $userid = $_POST['userid'];
  $useremail = $_POST['useremail'];
  $useraddress = $_POST['useraddress'];


  header('Location: success.php');
  exit;
}
?>
