<?php
@session_start();
if(!empty($_SESSION['cert_user']) && !empty($_SESSION['priv']) && $_SESSION['priv']=="generator"){

require('header.php');
 ?>

<div class="container-fluid">
    <div class="row row-offcanvas row-offcanvas-left">

      <script type="text/javascript">
        function chdate(){
          document.getElementById('resid').style.display = "none";
        }
      </script>
              <div class="col-xs-12 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
                <div class="list-group">
                  <?php
                    $menu_id = 3;
                    require_once("menu.php");
                  ?>
                </div>
              </div><!--/span-->

              <div class="col-xs-12 col-sm-9">

                <div class="panel panel-info">
                  <div class="panel-heading">
                    <h4>Generate Report on Specified Date</h4>
                  </div>
                  <div class="panel-body">
                    <br>
                    <form class="form-horizontal" role="form" action="conformgetreport.php" method="post">

                      <div class="form-group">
                        <label for="inputTrans" class="col-sm-5 control-label">Select Date:</label>
                        <div class="col-sm-3">
                          <input type="date" name="printdate" value="" class="form-control" onchange="chdate()" />
                        </div>
                        <div class="col-sm-4">&nbsp;</div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-6 col-sm-6">
                          <button type="submit" class="btn btn-default">Generate Report</button>
                        </div>
                      </div>

                    </form>

                    <div class="form-group">
                      <div class="col-sm-12" align="center" id="resid">
                        <?php
                          if(!empty($_GET['id'])){
                            if($_GET['id']=="empty"){
                                echo "<br><span class='text-danger'><strong>No Certificate Issued on specified date</strong></span>";
                            }
                            elseif($_GET['id']=="networkerror"){
                                  echo "<br><span class='text-danger'><strong>Network Error. Please try again</strong></span>";
                            }
                            elseif($_GET['id']=="dateerror"){
                                  echo "<br><span class='text-danger'><strong>Network Error. Please try again.</strong></span>";
                            }
                            elseif($_GET['id']=="networkdberror"){
                                  echo "<br><span class='text-danger'><strong>Network Error. Please try again..</strong></span>";
                            }
                            else{
                              /**/
                            }
                          }
                         ?>
                      </div>
                    </div>

                  </div>
                </div> <!-- panel info -->

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
