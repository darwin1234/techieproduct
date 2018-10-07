<?php session_start();
if($_SESSION['usertoken']=="0"){
	require_once('template/header.php');
}
if($_SESSION['usertoken']=="3"){
require_once('template/clientheader.php');
}
?>
<html>
<div class="container">


<header><center><div class="container"><h1 class="Faqhead"><strong>FAQ's </strong></h1></center></header>
  	<center><a class="btn btn-default" href="formFaqs.php">Did not get the answer?</a></center></br>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="panel-title expand">
           <div class="right-arrow pull-right">+</div>
          <a href="#">How do i register my hotel ?</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">You can contact us at our email: grab-hotel.yahoo.ph. We would first ask if the website is already made, if not , we can provide an assistance in making your website inside our system.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="panel-title expand">
            <div class="right-arrow pull-right">+</div>
          <a href="#">Can I book a room without Registering?</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Yes,you can. We respect people if they want to remain anonymous, but not being able to log-in prevents you from additional options such as using a credit card. You can always book and use the cash-on-delivery process. We have thought that maybe if
        the user wants to search for the most nearby hotel on emergency due to natural calamities such as rain , we assure that our website (Grab hotel) is the best option!</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="panel-title expand">
            <div class="right-arrow pull-right">+</div>
          <a href="#">Do you accept Lodge, Resorts , and other venue aside from hotels?</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">Yes we currently accept Lodge and Resorts, but for other options such as inns, we are planning to add them in the near future as well as apartments and boarding houses and every other options. For now we are just planning to sort out all the hotels
        first before we can dream bigger.</div>
      </div>
    </div>
	 <div class="panel panel-default">
      <div class="panel-heading">
        <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="panel-title expand">
            <div class="right-arrow pull-right">+</div>
          <a href="#">How can i benefit from Grab Hotel as Hotel Manager?</a>
        </h4>
      </div>
	  </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">To be succesful, there are three key areas of the hotel profile that need to be managed: Hotel Information, reputation and Rates.</div>
     </div>
	 	 <div class="panel panel-default">
      <div class="panel-heading">
        <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="panel-title expand">
            <div class="right-arrow pull-right">+</div>
          <a href="#">I have booked a room anonymously and forgot to go to the hotel to pay what will happen now?</a>
        </h4>
      </div>
	  </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">We advise the hotels to have an expiry time for each anonymous booking, as far as time goes the minimum expiry time is half a day, it all depends on the individual hotels.</div>
     </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="panel-title expand">
            <div class="right-arrow pull-right">+</div>
          <a href="#">How can I Change or Cancel reservation</a>
        </h4>
      </div>
	  </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body">Bookings made on the website can be both changed or cancelled here, click on ‘View booking/Cancellation’.</div>
     </div>
    
	
 </div> 
</div>
</html>