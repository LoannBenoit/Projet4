<?php
$id = $_GET['id'];
$password = $_GET['password'];
$cryptedPassword = md5($password);
if ($id == 'JeanFRTR' and $cryptedPassword == 'a26842200d51b077726a01dc3d587d2a') {
  echo $id . ' / ' . $password;
  header("Location: ../admin"); 
} else if ($id != 'JeanFRTR') { ?>
  Erreur, id incorrect.
<?php } else if ($cryptedPassword != 'a26842200d51b077726a01dc3d587d2a') { ?>
  Erreur, MDP incorrect.
<?php } 