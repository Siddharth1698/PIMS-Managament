<?php ob_start();

 include "db.php";
 $user_id = $_GET["user_id"];
 $p_date = $_GET["p_date"];
 $admin_id = $_GET["admin_id"];
 $prstatus = $_GET["prstatus"];
 $backer = $_GET["backer"];



if($backer == '0'){
	 $date_clickeder = time();

 header('Location: profilePatient.php?user_id='.$user_id.'&flag=0&post_id=0&admin_id='.$admin_id.'&p_date='.$date_clickeder);
}


       $backer = '0';

       header('Location: prescription.php?user_id='.$user_id.'&flag=0&post_id=0&admin_id='.$admin_id.'&p_date='.$p_date.'&current_appointment='.$current_appointment.'&prstatus=0');



?>
