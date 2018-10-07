<?php require_once('header.php'); ?>

<style>
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

</style>
		 <!--Profile Section-->
	<form>
	
	<?php if(sizeof($_SESSION) >0){ ?>
					<div class="login-card"><img src="images.php" class="profile-img-card">
				 
	<?php } else {?>
 	
		<div class="login-card"><img src="../assets/img/monica.jpg" class="profile-img-card">
	<?php } ?>
		<div>
        <h3 class="profilename" style="text-align:center;"><?php echo $Firstname . '  '  .$Lastname;?></h3></div>
		<span class="btn btn-default btn-file">
		Change Picture <input type="file">
</span>
        <button class="btn btn-default" type="button"></button><i class="glyphicon glyphicon-edit"></i><a class="text-primary" href="#" data-toggle="modal" data-target="#myModal">Edit </a>
        <div><i class="glyphicon glyphicon-phone"></i><small class="cellphonenumber">&nbsp<?php echo $Contact?></small>
			<div>
				<div><i class="glyphicon glyphicon-user"></i><small>&nbsp<?php echo $Email?> </small>
				<div><i class="glyphicon glyphicon-home"></i><small>&nbsp<?php echo $Address?></small></div>
				</div>
			</div>
        </div>
        <div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="sociallinks"><img src="../css/Hadouken/img/fblogo.png" width="25px" height="25px" class="fblogo"><img src="../css/Hadouken/img/gmail.png" width="25px" height="25px" class="gmailicon"><img src="../css/Hadouken/img/twitter.png" width="25px" height="25px" class="twittericon"><img src="../css/Hadouken/img/discordicon.png"
                width="25px" height="25px"></div>
        </div>
		 <!--End of Profile Section-->
        <div>
		 <!--Confirm Button-->
            <button class="btn btn-default" type="button">Confirm </button>
        </div>
    </div>
	</form>
	<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<?php require_once('footer.php'); ?>