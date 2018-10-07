<div id="video-background">
	<div class="intro-content">
	<form  action="FindHotel.php" method="POST">
		<img src="images/grabhotel.png" style="width:300px; height:100px;margin:50px auto; display:block; ">
			<div class="form-group">
				<div id="locationField">
					<input id="autocomplete" class="form-control" name="HotelAddress" placeholder="Search Near Hotel" onFocus="geolocate()" type="text" style="float:left; width:92%;"><input type="submit" name="searchhotel" class="btn btn-primary" value="Search">
				</div>
			</div>

			<div class="form-group">
				<input type='hidden' class="field" id="street_number"  name="street_number"  disabled="true">
				<input type='hidden' class="field" id="route" name="route"  disabled="true">
				<input type='hidden' class="field" id="locality" name="locality"disabled="true">
				<input type='hidden' class="field" id="administrative_area_level_1" name="administrative_area_level_1" disabled="true">
				<input type='hidden' class="field" id="postal_code" name="postal_code" disabled="true">
				<input type='hidden'  class=field" id="country" name="country" disabled="true">
			</div>
	</form>
	</div>
		<video autoplay="" loop=""preload="auto"><source src="template/banner.mp4" style="height:100%; width:100%;" type="video/mp4"></video>
</div>

