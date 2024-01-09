<?php 
$empName = "Mohamed";
$basicSalary = 5000;
$bonus = 420;
$penalties = 190;
$taxRate = 0.23;

$grossSalary = $basicSalary + $bonus = $penalties;
$taxValue = $grossSalary * $taxRate;
$netSalary = $grossSalary - $taxValue;
?>

<h1>Employee Name: <?php echo $empName; ?></h1>
<h1>Employee Net Salary: <?php echo $netSalary; ?></h1>
