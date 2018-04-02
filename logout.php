<?php
@session_start();
if(!empty($_SESSION['cert_user']) && !empty($_SESSION['priv']) && $_SESSION['priv']=="user"){
  unset($_SESSION['cert_user']);
  unset($_SESSION['priv']);
}
  header('Location: ./');

 ?>
