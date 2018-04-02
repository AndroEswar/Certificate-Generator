<?php
@session_start();
if(!empty($_SESSION['cert_user']) && !empty($_SESSION['priv']) && $_SESSION['priv']=="user"){
  unset($_SESSION['cert_user']);
  unset($_SESSION['priv']);
}

require('header.php');
 ?>
     <div class="container">
       <div class="row">
         <div class="col-md-6" style="padding:0px;">
					<div class="panel panel-info" style="padding:0px;">
          				<div class="panel-heading">
          					<input type="button" class="btn btn-sm btn-success" value="Run" />
          					<input type="button" class="btn btn-sm btn-success" value="Publish" />
          				</div>

          				<div class="panel-body" style="padding:0px;">
							<textarea rows="25" cols="50" class="form-control" required="required" style="background-color:#010101; color:#ffffff;" /></textarea>
						</div>
					</div>
         </div>
         <div class="col-md-6" style="padding:0px;">
					<div class="panel panel-info" style="padding:0px;">
          				<div class="panel-heading"> 
						<input type="button" class="btn btn-sm btn-link" value="Output" />
          				</div>

          				<div class="panel-body" style="padding:0px;">
							<textarea rows="25" cols="50" class="form-control" required="required" style="background-color:#010101; color:#ffffff;" /></textarea>
						</div>
					</div>
         </div>
		</div>
      </div> <!-- /container -->
<?php
require('footer.php');

 ?>
