<?
   $DepositDate = date($_POST[DepositDate]);   
   $DepositAmount = intval($_POST[DepositAmount]);
   $DepositTerm = intval($_POST[DepositTerm]);
   $AddingToDepositAmount = intval($_POST[AddingToDepositAmount]); 
   $daysn = cal_days_in_month(CAL_GREGORIAN, date('m',$_POST[DepositDate]), date('Y',$_POST[DepositDate]));  
   $daysy = date('L', mktime(1,1,1,1,1,$_POST[DepositDate]))?366:365 
   $summn = 0; 
   $summpre = $DepositAmount; 
   if ($_POST[AddingToDeposit] == "Yes") {
   $summadd = $AddingToDepositAmount;
   } else {
	 $summadd = 0;  
   };
   $percent = 0.1;
   $WorkingYear = date('Y',strtotime($DepositDate));
   $WorkingMonth = date('m',strtotime($DepositDate));
   $WorkingMonth = date("$WorkingYear-$WorkingMonth-01");
   for ($i = 1; $i <= $DepositTerm; $i++) {  
	   for ($j = 1; $j <= 12; $j++) {
		  if ($i==1 && $j==1) {
			   $daysn = cal_days_in_month(CAL_GREGORIAN, date('m',strtotime($DepositDate)), date('Y',strtotime($DepositDate))) - date('j',strtotime($DepositDate));
		   } else if ($i == $DepositTerm && $j == 12) {		        
			   $daysn = cal_days_in_month(CAL_GREGORIAN, date('m',strtotime($DepositDate)), date('Y',strtotime($WorkingMonth))) - date('j',strtotime($DepositDate));
 			   
		   } else { 		   
			 $daysn = cal_days_in_month(CAL_GREGORIAN, date('m',strtotime($WorkingMonth)), date('Y',strtotime($WorkingMonth))); 
		 		   };
		  $summn = $summpre + ($summpre + $summadd)*$daysn*($percent / $daysy);
		  $summpre = $summn;	  
		  $WorkingMonth = date('Y-m-d', strtotime("+1 month", strtotime($WorkingMonth)));	
	   };	    
	   $daysy = date('L', mktime(1,1,1,1,1,($_POST[DepositDate])+1))?366:365;   
   }; 
   $summn = ceil($summn - $DepositAmount);
   echo json_encode($summn);
?>
