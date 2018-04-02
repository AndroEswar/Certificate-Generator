<?php
@session_start();
if(!empty($_SESSION['cert_user']) && !empty($_SESSION['priv']) && $_SESSION['priv']=="generator"){

if(!empty($_POST['htno']) && !empty($_POST['stname']) && !empty($_POST['fname']) && !empty($_POST['mname']) && !empty($_POST['gender']) && ($_POST['gender']=='M' || $_POST['gender']=='F') && !empty($_POST['class']) && !empty($_POST['period']) && !empty($_POST['purpose'])){

$res = $_POST;

require("cgs.php");
$cgs_obj = new CGS;
$insres = $cgs_obj->bonafideCert($res['htno'],$res['stname'],$res['fname'],$res['gender'],$res['class'],$res['period'],$res['purpose'],$_SESSION['cert_user']);

if($res['gender']=='M'){
  $g1 = "Mr.";
  $g2 = "son";
  $g3 = "him";
  $g4 = "his";
}
else{
  $g1 = "Ms.";
  $g2 = "daughter";
  $g3 = "her";
  $g4 = "her";
}


  require('header.php');
  ?>

  <div class="container-fluid">
    <div class="row row-offcanvas row-offcanvas-left dontprint">

      <div class="col-xs-12 col-sm-3 sidebar-offcanvas dontprint" id="sidebar" role="navigation">
        <div class="list-group">
          <?php
          $menu_id = 2;
          require_once("menu.php");
          ?>
        </div>
      </div><!--/span-->

      <div class="col-xs-12 col-sm-9">

        <div class="panel panel-info dontprint">
          <div class="panel-heading">
            <h4 align='center'>Bonafide Certificate Generation</h4>
          </div>

          <div class="panel-body">
            <form class="form-horizontal" role="form" action="bonafide4.php" method="post">
                  <div class="form-group">
                    <label for="inputHtno" class="col-sm-6 control-label labelapply3">Hall Ticket Number:</label>
                    <div class="col-sm-6">
                      <?php echo $res['htno']; ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputHtno" class="col-sm-6 control-label labelapply3">Student Name:</label>
                    <div class="col-sm-6">
                      <?php echo $res['stname']; ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputHtno" class="col-sm-6 control-label labelapply3">Certificate:</label>
                    <div class="col-sm-6">
                      <?php echo "Bonafide Certificate"; ?>
                    </div>
                  </div>

                  <div class="col-sm-12" align='center'>
                    <button type="button" name="button" class="btn btn-link" onClick="window.print()" />If Certificate Not Generated automatically, click here</button>
                  </div>
                  <br/>
                  <div class="form-group">
                    <div class="col-sm-4" align='right'>
                      <a href="bonafide1.php" class="btn btn-default">&nbsp;&nbsp;Back&nbsp;&nbsp;</a>
                    </div>
                    <div class="col-sm-8">&nbsp;</div>
                  </div>
                  <?php if($insres==0){ ?>
                  <br/>
                  <div class="col-sm-12" align='center'>
                    <span style="color:red"> Please Contact Administrator with ErrorName 'BonafideNotInserted' </span>
                  </div>
                  <?php } ?>

                    </form>
                  </div><!--panel body-->
                </div><!--panel info-->

              </div>
            </div>
            <style media="print">
              .data{
                  font-weight: bold;
                  text-decoration: underline;
              }
              .datapurpose{
                  font-weight: bold;
              }
            </style>

            <div class="row doprint" STYLE=" border: 15px solid #FFFFFF;">
              <div class="col-sm-12" style="font-family:'Book Antiqua'; border: 2px solid #000000; ">
                <div align='center' style=" padding-top:12px; letter-spacing:1px; font-weight: bold;">
                  <span style="font-size:1.2em;">JAWAHARLAL NEHRU TECHNOLOGICAL UNIVERSITY ANANTAPUR</span><br/>
                  <span style="font-size:1.2em;">COLLEGE OF ENGINEERING (<i>Autonomous</i>), ANANTHAPURAMU</span><br/>
                  <span style="font-size:1em; padding-top:10px;">ANDHRA PRADESH, INDIA - 515002</span><br/>
                  <img src="images/jntuacea.png" alt="JNTUACEA" width="100px" height="100px" style="margin:10px;" /><br/>
                  <span class="data" style="font-family:'Arial'; font-size:1.4em; margin-bottom:12px; letter-spacing: 3px;">BONAFIDE CERTIFICATE</span>
                </div>
                <div style="text-align:justify;-moz-text-align:justify; line-height:2.4em;">
                  <p  style="font-family:'Book Antiqua'; font-size:1.2em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is to certify that <?php echo '<span class="data">'.$g1.' '.$res['stname'].'</span>'; ?> (Adm. No. <?php echo '<span class="data">'.$res['htno'].'</span>'; ?>) <?php echo $g2.' of <span class="data">Sri '.$res['fname'].'</span>'; ?>
                     is a bonafide student of this Institution studying <?php echo '<span class="data">'.$res['class'].'</span>'; ?> class during the period <?php echo $res['period']; ?>. This certificate is issued to <?php echo $g3; ?> on <?php echo $g4; ?> request to apply for "<?php echo '<span class="datapurpose">'.$res['purpose'].'</span>'; ?>".</p>
                </div>
                <div align='right' style="padding-right:15px; font-weight: bold; font-size:1.1em;">
                  <br><br>
                  PRINCIPAL
                </div>
              </div>
            </div>

          </div>

          <script type="text/javascript">
            window.print();
          </script>
          <?php
          require('footer.php');

}
else {
  header('Location: bonafide1.php');
}

}
else {
  header('Location: ./');
}
 ?>
