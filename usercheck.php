<?php
@session_start();

if(!empty($_POST['user']) && !empty($_POST['pwd'])){

  $act_user = $_POST['user'];
  $act_pwd = $_POST['pwd'];
  /* */

  require_once("logins.php");

  $login = new Logins();
  $res = $login->checkLogin($act_user,$act_pwd);

  if(!empty($res['status']) && $res['status']==1 && !empty($res['priv'])){
    $_SESSION['cert_user'] = $act_user;
    $_SESSION['priv'] = $res['priv'];
    header('Location: home.php');
  }
  else{
    header('Location: loginerror.php');
  }

}
else{
  header('Location: ./');
}
 ?>
