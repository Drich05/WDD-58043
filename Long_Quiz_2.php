</center>
<center><?php

	$Salary_rate = 600;
	$Salary_days = 15;
	$Salary = $Salary_rate * $Salary_days;
	$Tax = 0.30;
	$Taxable_amount = $Salary * $Tax;
	$Net_pay = $Salary - $Taxable_amount;
	
	echo "Salary Rate: ".$Salary_rate."/day"."<br>";
	echo "No. of days: ".Salary_days."<br><br>";
	echo "Salary: ".$Salary."<br><br>";
	echo "Tax: ".$Tax * 100,"%<br>";
	echo "Net_pay: ". $Net_pay."<br>";
	
	?></center>
	<center>?php
	
	$count = 1;
	$maxcount = 50;
	$sum = 0;
	
	echo "Sum of 1-50"."<br>";
	for($n = $count; $n <= $maxcount; $n++){
		if($n == $maxcount){
			echo $n." = ";
		}
		else {
			echo $n." + ";
		}
		
		$sum += $n;
		
	}
	echo "<b>".$sum."</b>";
	
		?></center>
	
	</body>
</html>
	
	

	
	