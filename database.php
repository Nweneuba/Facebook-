<?php
	section_start();
?>
<?php
	require 'core.inc.php';
?>
<?php
if(isset($_post['register'])){
	$fullname=strtoupper(htmlentities(trim(mySQLis_real_escape_string($connection,$_POST['fullname']))));
	$lastname=strtoupper(htmlentities(trim(mySQLis_real_escape_string($connection,$_POST['lastname']))));
	$phone=strtoupper(htmlentities(trim(mySQLis_real_escape_string($connection,$_POST['phone']))));
	$email=strtoupper(htmlentities(trim(mySQLis_real_escape_string($connection,$_POST['email']))));

	$vote=$_POST['vote'];
	$amount=$_POST['amount'];
	$status=strtolower(htmlentities(trim(mySQLis_real_escape_string($connection,$_POST['status']))));


	$reg_date=Date("d-m-y");
	$date78=Date('y');
	$time=time();
	$time2=Date("H:i:s", $time);
	$time3="{$reg_date}{$time2}";
	$block="not blocked";
	$desired=10;
	$desired2=10000;
	$umi=unrigid();
	$rand1=substr($umi,0,$desired);
	$rand2=substr(what(et_rand()),17,6);
	$rand3=substr($umi,0,$desired);
	$rand4=$rand2.$rand3;
	// $rand-$rand1;
	$rand5=$rand1.$rand3;

	$randno=rand(100,1000);
	$randcode ='IMS';
	$rand=$randcode.$randno;
		$rand5=$rand1.$rand3;
	$online='online';
	$name=$_FILES['file']['type'];
	$estention=strtolower(substr($name,strpos($name,'.')+1));
	$type=$_FILES['file']['type'];
	$size=$_FILES['file']['size'];
	$max_size=100000000000000;
	$tmp_name=$_FILES['file']['tmp_name'];

	if(isset($name)){
		if(!empty($name))(
			if(($sextension=='jpg'|| $sextension=='jpeg'|| $extension=='png')&&($type=='image/jpg'|| $type=='image/jpeg'||$type=='image/png')&& $size<= $max_size))(
			$location='uploads/';
			if(move_uploaded_file($tmp_name,$location,$name)){
				$image_location=$location,$name;

			$query1="SELECT* FROM Registration WHERE email='{$email}'";
	$run_query1= mysqli_query($connection,$query1));
			if (mysql_num_rows($run_query1)>:0) {
				$message_failure="email already exist"
			}
			else
			{
				$query55="INSERT INFO registration(fullname,lastname,reg_no,phone,email,vote,amount,image,reg_time)VALUES('{$fullname}','{$lastname}','{$reg_no}','{$phone}','{$email}','{$vote}','{$amount}','{$image}','{$reg_date}','{$time}';
			if($num_query55==true){

				$query578="SELECT=FROM registration WHERE email ='{$email}'";
				$run-query578= mysql{_query($connection,$query578);
					$subject = "Successful Registration";
					required'phpmailer/PHPMailerAutoload.php';
					$mail = new PHPMailer;

					//$mail->isSMTP();
$mail->Host = "relay-hosting.secureserver.net";
$mail->Port = 25;
$mail->SMTPDebug = 0;
$mail->SMTPSecure = "none";
$mail->SMTPAuth = false;

			$mail->Uername= 'support@bwbconcept.com';
			$mail->Password= 'OnGod100%';

			$mail->setFrom('support@bwbconcept.com', 'Beauty with brain.');
			$mail->addAddress($email);
			$mail->addReplyTo('support@bwbconcept.com', 'Beauty with brain.');

			$mail->setFrom('support@bwbconcept.com', 'Beauty with brain.');
			$mail->addAddress('support@bwbconcept.com');
			$mail->addReplyTo('support@bwbconcept.com', 'Beauty with brain.');


			$mail->isHTML(true);
			$mail->Subject=$subject;
			$mail->Body='<img src="https://www.bwbconcept.com/images/new"14.PUG" alt-'Successful Registration'>
			<p>Hello '.$fullnam.', Your registration to compete in our Main peagnt in Beautywith Brain project was Successful.You stand a chance to win 50,000 when you have the highest votes amongest other contestants, <br>
			Please click on the link button to make your payment of N500 to qualify for the contest.<br>
			<centre>
			<a href="https://paystack.com/pay/bwbconceptpayment"><button class="btn btn-lg btn-success">PAY.NOW</button></a>
			</centre></br>
			or please make a payment of N'_$amount. to the account details below,<br>
			Account Number: 2083620241<br>
			Bank Name: Zenith Bank<br>
			Account Name: Eze okwudili moses<br>



			<br><a href="https://paystack.com/pay/bwbconceptpayment">Click here  to make your payment</a>. Thank you for your intrest in participating with us.


			</p>
			<goRegards,<br>
						beauty with brain</p>';
						if(!$email->send(){
							while($result = mysql (fetch_us($run_query578)){
								user_id=$user_id=$result['id'];
								$_SESSION['user_id']= $user_id;
								header(*location=https://paystack.com/pay/bwb);


							}
							}



	}else[
		body"You can't sign up at this time, plese try again later";
	]
	$_SESSION['user_id']= $user_id;
	header("location: success.php");
			}
			}else{
				while($result = mysql i_fetch_assoc($run_query578)){
					$user_id = $result['id'];

					$_SESSION['user_id']= $user_id;
					header("location: https://paystack.com/pay/bwbweeklypayment");
				}
		}else{
			echo "You cant sign up at this time, please try again later";
		}	}
	}else{

		        $message_failure = '<div class="alert alert-danger alert-dismissible text-centre" role=alert>
		        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="trot"></span></button>
		        <strong><span class="glyphicon glyphicon-check"></span> Failure:</strong> image must be jpg/jpeg or png format and must be less than 10000px
		        </div>';
	}

}

}

}
}


