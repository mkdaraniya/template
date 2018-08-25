<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('connect.php');
require 'vendor/plasticbrain/php-flash-messages/src/FlashMessages.php';
require_once __DIR__ . '/vendor/autoload.php';
// A session is required
if (!session_id()) @session_start();
// Instantiate the class
$msg = new \Plasticbrain\FlashMessages\FlashMessages();

try{
	if(isset($_POST['save']))
	{ 
		$created_at = Date('Y-m-d h:i:s');
		$updated_at = Date('Y-m-d h:i:s');
	    $sql = "INSERT INTO application (lang,user,full_name,nationality,identification,residence,phone_number,email,gender,account_number,bank_name,holder_name,iban,country_of_bank,created_at,update_at)
	    VALUES ('".$_POST["lang"]."','".$_POST["user"]."','".$_POST["fullName"]."','".$_POST["nationality"]."','".$_POST["identification"]."','".$_POST["residence"]."','".$_POST["phoneNumber"]."','".$_POST["email"]."','".$_POST["gender"]."','".$_POST["accountNumber"]."','".$_POST["bankName"]."','".$_POST["holderName"]."','".$_POST["iban"]."','".$_POST["countryOfBank"]."','".$created_at."','".$updated_at."')";

	    $result = mysqli_query($conn,$sql);
	    
	    if($result){
	    	if($_POST['lang'] == 'ar'){
	    		$msg->info('شكرا لتقديمك على برنامج الواتشرز/ماينرز <br> سوف يقوم احد ممثلي البرنامج بالتواصل معك <br> نتمنى لك يوم سعيد');
	    	}else{
				$msg->info('Thank you for Applying to the (Name of program depending on their choosing) Program <br> You will be contacted soon by one of our Relationship Agents <br> In the Meantime, Enjoy your day');
	    	}
	    }else{
	    	if($_POST['lang'] == 'ar'){
	    		$msg->info('لم يتم تقديم الطلب بنجاح');
	    	}else{
	    		$msg->error('Application was not submitted successfully');
	    	}
	    }
	    if($_POST['lang'] == 'en' && $_POST['user'] == 'watcher'){
	    	header('Location: en/watcher/index.php');
	    }else{
	    	header('Location: ar/watcher/index.php');
	    }
	}
}catch(Exception $e){
	$e->getMessage();
	if($_POST['lang'] == 'ar'){
    		$msg->info('لم يتم تقديم الطلب بنجاح');
    	}else{
		$msg->error('Application was not submitted successfully');
	}
}

// generatePdf();

// function generatePdf(){
// 	$mpdf = new \Mpdf\Mpdf();
// 	$data = '<ul>
// 		<li>hello : new</li>
// 	</ul>';
// 	$mpdf->WriteHTML($data);
// 	$mpdf->Output('downloads/filename.pdf','F');
// }
?>