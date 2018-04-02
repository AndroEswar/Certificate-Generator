<a href="home.php"  <?php if(!empty($menu_id) && $menu_id==1){ echo "class='list-group-item active'"; } else{ echo "class='list-group-item'"; } ?> >Home</a>
<a href="bonafide1.php"  <?php if(!empty($menu_id) && $menu_id==2){ echo "class='list-group-item active'"; } else{ echo "class='list-group-item'"; } ?> >Bonafide Certificate Generation</a>
<a href="getreport.php"  <?php if(!empty($menu_id) && $menu_id==3){ echo "class='list-group-item active'"; } else{ echo "class='list-group-item'"; } ?> >Daily Report</a>
<a href="logout.php" class="list-group-item" >Logout</a>
