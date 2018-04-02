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
         <div class="col-md-2">&nbsp;
         </div>
           <div class="col-md-8">
             <h4 class="text-info" align="center">Team Involved</h4>
             <table class="table table-bordered">
                 <thead>
                   <tr>
                     <th>Name</th>
                     <th>Course, Department</th>
                     <th>Contact</th>
                     <th>Email</th>
                   </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <td>KATAM ANIL KUMAR</td>
                     <td>MTECH - CSE</td>
                     <td>9393767927</td>
                     <td>anilkumark232@gmail.com</td>
                   </tr>
                   <tr>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                   </tr>
                 </tbody>
               </table>
            </div>
          <div class="col-md-2">&nbsp;
          </div>
        </div>
      </div> <!-- /container -->
<?php
require('footer.php');

 ?>
