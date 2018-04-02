<?php
@session_start();
if(!empty($_SESSION['cert_user']) && !empty($_SESSION['priv']) && $_SESSION['priv']=="generator"){

require('header.php');
 ?>

<div class="container-fluid">
    <div class="row row-offcanvas row-offcanvas-left">

              <div class="col-xs-12 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
                <div class="list-group">
                  <?php
                    $menu_id = 2;
                    require_once("menu.php");
                  ?>
                </div>
              </div><!--/span-->

              <div class="col-xs-12 col-sm-9">

                <div class="panel panel-info">
          				<div class="panel-heading">
          					<h4 align='center'>Bonafide Certificate Generation</h4>
          				</div>

          				<div class="panel-body">
          					<form class="form-horizontal" role="form" action="bonafide2.php" method="post">
          					<div class="form-group">
          						<label for="inputHtno" class="col-sm-4 control-label">Enter Roll Number:</label>
          						<div class="col-sm-4">
          							<input type="text" class="form-control" name="sthtno" id="inputHtno" placeholder="Hall Ticket No." pattern="[a-zA-Z0-9]{7,10}" required="required" title="Only Alphabets, digits are allowed with a maximum of 10 characters" maxlength="10" />
          						</div>
          						<div class="col-sm-4">&nbsp;
          						</div>
          					</div>
          					<div class="form-group">
          						<div class="col-sm-offset-7 col-sm-5">
          							<button type="submit" class="btn btn-default">Get Details</button>
          						</div>
          					</div>

          					<?php
          					if(!empty($_GET['res'])){
          						if($_GET['res']=="invhtno"){
          						 ?>
          						<div class="row">
          							<div class="col-sm-4">&nbsp;</div>
          							<div class="col-xs-12 col-sm-4">
          								<br/><span class='text-danger'> <strong>Invalid Hall Ticket Number </strong> </span>
          							</div>
          							<div class="col-sm-4">&nbsp;</div>
          						</div>
          						<?php }
          						elseif($_GET['res']=="nohtno"){
          						?>
          						<div class="row">
          							<div class="col-sm-4">&nbsp;</div>
          							<div class="col-xs-12 col-sm-4">
          								<br/><span class='text-danger'> <strong>Details not found. Please try again </strong> </span>
          							</div>
          							<div class="col-sm-4">&nbsp;</div>
          						</div>
          						<?php }
          						elseif($_GET['res']=="err"){
          						?>
          						<div class="row">
          							<div class="col-sm-4">&nbsp;</div>
          							<div class="col-xs-12 col-sm-4">
          								<br/><span class='text-danger'> <strong>Problem occured. Please contact Administrator.</strong> </span>
          							</div>
          							<div class="col-sm-4">&nbsp;</div>
          						</div>
          						<?php }
          						elseif($_GET['res']=="succ"){
          						?>
          						<div class="row">
          							<div class="col-sm-4">&nbsp;</div>
          							<div class="col-xs-12 col-sm-4">
          								<br/><span class='text-danger'> <strong>Successful</strong> </span>
          							</div>
          							<div class="col-sm-4">&nbsp;</div>
          						</div>
          						<?php }
          						else{
          							/***/
          						}
          					}//if !empty

          					?>
          					</form>
          				</div><!--panel body-->
          			</div><!--panel info-->

              </div>
    </div>

</div>
<?php
require('footer.php');
}
else {
  header('Location: ./');
}
 ?>
