<?php
    date_default_timezone_set ( 'Asia/Calcutta' );
    $date1		= date("F d,Y");
    $postcode 		= $_POST['postcode'];
    $lookingfor 	= $_POST['lookingfor'];
    $liketopay 		= $_POST['liketopay'];
    $fullname 		= $_POST['fullname'];
    $email 		= $_POST['email'];
    $phone              = $_POST['phone'];
	  // $comments		= nl2br($_POST['msg']);

      $messageBody 	= "
	  <table width='600' border='1px' bordercolor='#1C365B' align='center'  cellspacing='0' cellpadding='10' style='border:1px solid #B6B6B6; border-collapse:collapse; background-color:#FFF; margin-top:15px; margin-bottom:10px;'>
             <tr><td colspan='2' style='text-align:center; background-color:#619FCE; font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#fff; font-weight:normal; padding:7px;'>Request Form:&nbsp;&nbsp;&nbsp;[&nbsp;{$date1}&nbsp;]</td>
			       </tr>
             <tr>
                 <td width='250' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000; font-weight:bold; background-color:#ECF7FF; padding:7px;'>What Postcode Are You Looking For A New Boiler In?</td>
                 <td width='300' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000; font-weight:normal; padding:7px;'>{$postcode}</td>
             </tr>
			       <tr>
                 <td width='250' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000; font-weight:bold; background-color:#ECF7FF; padding:7px;'>What Are You Looking For?</td>
                 <td width='300' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000; font-weight:normal; padding:7px;'>{$lookingfor}</td>
             </tr>
			       <tr>
                 <td width='250' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000; font-weight:bold; background-color:#ECF7FF; padding:7px;'>How Would You Like To Pay For The Boiler?</td>
                 <td width='300' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000; font-weight:normal; padding:7px;'>{$liketopay}</td>
             </tr>
			       <tr>
                 <td width='250' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000; font-weight:bold; background-color:#ECF7FF; padding:7px;'>Full Name:</td>
                 <td width='300' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000; font-weight:normal; padding:7px;'>{$fullname}</td>
             </tr>
             <tr>
                 <td width='250' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000; font-weight:bold; background-color:#ECF7FF; padding:7px;'>Email :</td>
                 <td width='300' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000; font-weight:normal; padding:7px;'>{$email}</td>
             </tr>
             <tr>
                 <td width='250' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000; font-weight:bold; background-color:#ECF7FF; padding:7px;'>Phone :</td>
                 <td width='300' align='left' valign='top' style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000; font-weight:normal; padding:7px;'>{$phone}</td>
             </tr>
             </table>";

			$subject="See If You Qualify Form";

			$to="samt@leads2trade.co.uk";


			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

			$headers .= "From: {$fullname}" . "\r\n";
			$headers .= "Reply-To: {$email}" . "\r\n";

			if(mail($to, $subject, $messageBody, $headers)){
        echo "success";
      }
      else{
        echo "error";
      }
			die();
?>
