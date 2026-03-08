<?php
if (isset($_GET['info'])) {

$info=$_GET['info'];

if (isset($_GET['t'])) {
$type=$_GET['t'];

switch ($type) {
	case 's':
		$class="is-success";
		break;
	case 'p':
		$class="is-primary";
		break;	
	case 'i':
		$class="is-info";
		break;
	case 'w':
		$class="is-warning";
		break;
	case 'd':
		$class="is-danger";
		break;
	// case 's':
	// 	$class="is-success"
	// 	break;
	default:
		# code...
		break;
}
}


?>
<div class="hideMe" id="hideMe">
<div style="width:100%;margin:auto;" class="notification <?php echo $class;?>">
<?php
switch ($info) {
	case 'registration_successful':
		echo "Registration was successful ! You may now login to your account.";
		break;
	case 'merchant_registration_successful':
		echo "Merchant Registration was successful ! You may now login to your account.";
		break;
	case 'reset_email_sent':
		echo "Operation was successful ! please check your email for password reset code.";
		break;
	case 'password_reset':
		echo "Operation was successful ! your password has been changed.";
		break;
	case 'password_not_reset':
		echo "Operation failed ! please enter the correct reset code to continue.";
		break;
	case 'user_exists':
		echo "This user already exists. Please try again !";
		break;
	case 'user_not_exist':
		echo "This user is not registered. Please try again !";
		break;
	case 'merchant_not_exist':
		echo "This merchant is not registered. Please try again !";
		break;
	case 'wrong':
		echo "Wrong Email or Password !";
		break;
	case 'wrong_password':
		echo "Wrong Account Password !";
		break;
	case 'withdrawal_successful':
		echo "You have successfully withdrawn funds from your account !";
		break;
	case 'lfirst':
		echo "Please login first !";
		break;
	case 'referral_not_exist':
		echo "Please use a valid referral ID !";
		break;
	case 'forbidden':
		echo "Forbidden !";
		break;
	case 'suggested':
		echo "Successfully submitted !";
		break;
	case 'check':
		echo "Successfully resolved!";
		break;
	case 'email_confirmed':
		echo "Email successfully confirmed! You may nw login to your account";
		break;
	case 'email_not_confirmed':
		echo "Wrong confirmation code or email!";
		break;
	case 'phone_changed':
		echo "Phone number successfully changed!";
		break;
	case 'earned':
		echo "You earned $ 0.30 !";
		break;
	case 'avatar_changed':
		echo "Avatar successfully changed !";
		break;
	case 'wrong_secret':
		echo "Wrong secret key !";
		break;
	case 'operation_successful':
		echo "Operation successful !";
		break;
	case 'added_successfully':
		echo "Added successfully !";
		break;
	case 'shipping':
		echo "Successfully confirmed you may now deliver the item to your customer";
		break;
	case 'declined':
	    echo "Order has been successfully declined";
		break;
	case 'delivered':
	    echo "Delivery is successful. Awaiting payment";
		break;
	case 'paid':
	    echo "Payment confirmed. Order is now completed";
		break;
	default:
		# code...
		break;
}
?>	
</div>	
</div>	
<?php


}
?>