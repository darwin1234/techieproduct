<?php 


class dsCenpos{
	
	
	private $mID;
	private $DSfield1;
	private $DSemail;
	private $DSfield3;
	private $DSfield4;
	private	$DSamount;
	private $DSinvoice;
	private $DSfield2;
	
	public function CenposExecute($merchantID){
		
		add_action('wp_footer', array($this,'cenposheader'));
		
		$this->mID = $merchantID;
	}
	
	public function cenposheader(){
		?>
			<script type="text/javascript">
					document.getElementById("mainForm").innerHTML = "<iframe src= 'https://www3.cenpos.net/webpay/v7/html5/?merchantid=<?php echo $this->mID; ?>&field1=<?php echo $this->DSfield1; ?>&email=<?php echo $this->DSemail;?>&field3=<?php echo $this->DSfield3;?>&field4=<?php echo $this->DSfield4;?>&amount=<?php echo $this->DSamount;?>&invoice=<?php echo $this->DSinvoice;?>&field2=<?php echo $this->DSfield2;?>' style='width:100%; height:480px; border:0;'></frame>";
			</script>
		
		<?php 
		
	}
	
	public function cenposparams($field1,$email,$field3,$field4,$amount,$invoice,$field2){
		//https://www3.cenpos.net/webpay/v7/html5/?merchantid=400000467&field1=Darwin Sese&email=darwinsesemusicman@gmail.com&field3=2&field4=2018-03-10&message=asdasdasdas&submit=&amount=90.00&invoice=d41d8cd98f00b204e9800998ecf8427e&field2=Half Day Tour
			$this->DSfield1 	= $field1;
			$this->DSemail 		= $email;
			$this->DSfield3 	= $field3;
			$this->DSfield4 	= $field4;
			$this->DSamount		= $amount;
			$this->DSinvoice	= $invoice;
			$this->DSfield2		= $field2;
	}
	
}					
