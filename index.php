<!DOCTYPE html><html>
<head>

<title>Salaries Tax</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
<div class="row">
  <div class="col-sm-1">
</div>
  
<div class="row">
  <div class="col-sm-3">

<form action=" "  method="post">
<label> Enter Self Income </label><br>
<input type="text" name="Salary1" ><br>

<!-- Self Income-->
<?php	if(isset($_POST['submit'])){				

$Yearly_Income = $_POST['Salary1'];

// Intput Yearly Salary
	echo "Your Yearly Salary is : $" .($Yearly_Income);
	echo "<br>","<br>";

// Caluculate the MPD Yeraly
if  ($Yearly_Income < 85200) {
    $MPF = 0;
	echo "Total Yearly MPF is : $" .($MPF);
	echo "<br>","<br>";
}
elseif ($Yearly_Income >= 85200 AND $Yearly_Income < 360000) {
    $MPF = $Yearly_Income * 0.05;
	echo "Total Yearly MPF is : $" .($MPF);
	echo "<br>","<br>";
}
else {
    $MPF = 18000;
	echo "Total Yearly MPF is : $" .($MPF);
	echo "<br>","<br>";
}
//Caluculate the  NetIncome = Total Income - Deductions

$NI = $Yearly_Income - $MPF ;

if ($NI >= 2022000){
	$TAX = $NI * 0.15;
	echo "Total Salaries Tax  is (* at Standard Rate): $".$TAX;
	
}

else{

//Caluculate the  Net Chargeable Income = Total Income - Deductions - AllowancesNe

$NCI = $Yearly_Income - $MPF - 132000; // 132000 is personal allowance
echo "Your Net Chargeable Income is: $".($NCI);
echo "<br>","<br>";

if  ($NCI <= 0) {
	echo "Total Salaries Tax  is : $0";
	
}else {

//Caluculate the Tax with Tax Bracket
switch ($NCI) {
    case ($NCI <= 50000):
    	$TAX = $NCI * 0.02;
        echo "Total Salaries Tax  is : $" .($TAX);
        break;
    case ($NCI > 50000 AND $NCI <= 100000):
        $TAX = 50000 * 0.02 + ($NCI-50000) * 0.06;
        echo "Total Salaries Tax  is : $" .($TAX);
        break;
    case ($NCI > 100000 AND $NCI <= 150000):
        $TAX = 50000 * 0.02 + 50000 * 0.06 + ($NCI-100000) * 0.1;
        echo "Total Salaries Tax  is : $" .($TAX);
        break;
    case ($NCI > 150000 AND $NCI <= 200000):
        $TAX = 50000 * 0.02 + 50000 * 0.06 + 50000 * 0.1 + ($NCI-150000) * 0.14;
        echo "Total Salaries Tax  is : $" .($TAX);
        break;
    case ($NCI > 200000):
        $TAX = 50000 * 0.02 + 50000 * 0.06 + 50000 * 0.1 + 50000 * 0.14 + ($NCI-200000) * 0.17;
        echo "Total Salaries Tax  is : $" .($TAX);
        break;
}
}
}
}
?>			
</div>
		
<div class="row">
  <div class="col-sm-3">

<form action=" "  method="post">
<label> Enter Spouse Income </label><br>
<input type="text" name="Salary2" ><br>

<!-- Spouse Income-->
<?php	if(isset($_POST['submit'])){

$Yearly_Income2 = $_POST['Salary2'];

// Intput Yearly Salary
	echo "Your Yearly Salary is : $" .($Yearly_Income2);
	echo "<br>","<br>";

// Caluculate the MPD Yeraly
if  ($Yearly_Income2 < 85200) {
    $MPF2 = 0;
	echo "Total Yearly MPF is : $" .($MPF2);
	echo "<br>","<br>";
}
elseif ($Yearly_Income2 >= 85200 AND $Yearly_Income2 < 360000) {
    $MPF2 = $Yearly_Income2 * 0.05;
	echo "Total Yearly MPF is : $" .($MPF2);
	echo "<br>","<br>";
}
else {
    $MPF2 = 18000;
	echo "Total Yearly MPF is : $" .($MPF2);
	echo "<br>","<br>";
}

//Caluculate the  NetIncome = Total Income - Deductions 

$NI2 = $Yearly_Income2 - $MPF2 ;

if ($NI2 >= 2022000){
	$TAX2 = $NI2 * 0.15;
	echo "Total Salaries Tax  is (* at Standard Rate): $".$TAX2;
	
}

else{


//Caluculate the  Net Chargeable Income = Total Income - Deductions - AllowancesNe

$NCI2 = $Yearly_Income2 - $MPF2 - 132000; // 132000 is personal allowance
echo "Your Net Chargeable Income is: $".($NCI2);
echo "<br>","<br>";

if  ($NCI2 <= 0) {
	echo "Total Salaries Tax  is : $0";
}else {

//Caluculate the Tax with Tax Bracket
switch ($NCI2) {
    case ($NCI2 <= 50000):
    	$TAX2 = $NCI2 * 0.02;
        echo "Total Salaries Tax  is : $" .($TAX2);
        break;
    case ($NCI2 > 50000 AND $NCI2 <= 100000):
        $TAX2 = 50000 * 0.02 + ($NCI2-50000) * 0.06;
        echo "Total Salaries Tax  is : $" .($TAX2);
        break;
    case ($NCI2 > 100000 AND $NCI2 <= 150000):
        $TAX2 = 50000 * 0.02 + 50000 * 0.06 + ($NCI2-100000) * 0.1;
        echo "Total Salaries Tax  is : $" .($TAX2);
        break;
    case ($NCI2 > 150000 AND $NCI2 <= 200000):
        $TAX2 = 50000 * 0.02 + 50000 * 0.06 + 50000 * 0.1 + ($NCI2-150000) * 0.14;
        echo "Total Salaries Tax  is : $" .($TAX2);
        break;
    case ($NCI2 > 200000):
        $TAX2 = 50000 * 0.02 + 50000 * 0.06 + 50000 * 0.1 + 50000 * 0.14 + ($NCI2-200000) * 0.17;
        echo "Total Salaries Tax  is : $" .($TAX2);
        break;
}
}
}
}?>
</div>		   			   

<div class="col-sm-3">
<!-- Joint Assessment-->
<?php	if(isset($_POST['submit'])){				

$Yearly_Income = $_POST['Salary1'];
$Yearly_Income2 = $_POST['Salary2'];

$Total_Yearly_Income = $Yearly_Income + $Yearly_Income2;

// Intput Yearly Salary
echo "<br>";
    echo "<br>","<br>";
	echo "Total Yearly Salary is : $" .($Total_Yearly_Income);
	echo "<br>","<br>";
    
//Calculate the Net Total Income	

$NTI = ($Yearly_Income - $MPF) + ($Yearly_Income2 - $MPF2);
echo "Total Net Income is : $" .($NTI);
echo"<br>","<br>";

if ($NTI >= 3144000){
	$TAX3 = $NTI * 0.15;
	echo "Total Salaries Tax  is (* at Standard Rate): $".$TAX3;
	
}
else{ 

//Caluculate the  Net Chargeable Income = Total Income - Deductions - Allowances

$NCI3 = $NTI - 264000; // 264000 is personal allowance

echo "The Net Chargeable Income is: $".($NCI3);
echo "<br>","<br>";

if  ($NCI3 <= 0) {
	$TAX3 = 0;
	echo "Total Salaries Tax  is : $0";
	
}else {

//Caluculate the Tax with Tax Bracket
switch ($NCI3) {
	
	
    case ($NCI3 <= 50000 and $NCI3 >=0):
    	$TAX3 = $NCI3 * 0.02;
        echo "Total Salaries Tax  is : $" .($TAX3);
        break;
    case ($NCI3 > 50000 AND $NCI3 <= 100000):
        $TAX3 = 50000 * 0.02 + ($NCI3-50000) * 0.06;
        echo "Total Salaries Tax  is : $" .($TAX3);
        break;
    case ($NCI3 > 100000 AND $NCI3 <= 150000):
        $TAX3 = 50000 * 0.02 + 50000 * 0.06 + ($NCI3-100000) * 0.1;
        echo "Total Salaries Tax  is : $" .($TAX3);
        break;
    case ($NCI3 > 150000 AND $NCI3 <= 200000):
        $TAX3 = 50000 * 0.02 + 50000 * 0.06 + 50000 * 0.1 + ($NCI3-150000) * 0.14;
        echo "Total Salaries Tax  is : $" .($TAX3);
        break;
    case ($NCI3 > 200000):
        $TAX3 = 50000 * 0.02 + 50000 * 0.06 + 50000 * 0.1 + 50000 * 0.14 + ($NCI3-200000) * 0.17;
        echo "Total Salaries Tax  is : $" .($TAX3);
        break;
		
        
}
}
}
}?>
</div>	
			 

<div class="row">
  <div class="col-sm-1">
		 
<br><br> <br> <br> <br> <input type="submit" name="submit" value="Calculate"></form> 
			  
<form action="index.php" method="post">
 <br>
<input type="submit" name="reset" value="Reset"><br></form>
</div>	

<div class="col-sm-2">
</div>
<div class="col-sm-10">
<?php if(isset($_POST['submit'])){
    if ($TAX + $TAX2 < $TAX3) {
        echo "<br>","<br>";
        echo "<center>";
        echo "<b>Separate Taxation is recommended in this situation. Total tax payable by you and your spouse:";
        echo "<div class=result>";
        echo "$".($TAX + $TAX2);
        echo "</div>";
        echo "</b>";
    }
    elseif ($TAX + $TAX2 > $TAX3) {
        echo "<br>","<br>";
        echo "<center>";
        echo "<b>Joint Assessment is recommended in this situation. Total tax payable by you and your spouse:";
        echo "<div class=result>";
        echo "$".$TAX3;
        echo "</div>";
        echo "</b>";
    }
    elseif ($TAX + $TAX2 = $TAX3) {
        echo "<br>","<br>";
        echo "<center>";
        echo "<b>Both method recommended in this situation. Total tax payable by you and your spouse:";
        echo "<div class=result>";
        echo "$".$TAX3;
        echo "</div>";
        echo "</b>";
    }
    else {
        echo "<br>","<br>";
        echo "<center>";
        echo "<b>You need to pay:";
        echo "<div class=result>";
        echo "$0";
        echo "</div>";
    }
    }
?>
</div>


</body>

<div class="footer">
<p>By Chan Cheuk Ni and Cheung Wan Yeung</p>
<p> Reference: https://www.ird.gov.hk/eng/ese/st_comp_2018_19/stcfrm.htm</p>
</div>


</html>

<style>
.footer {
position: fixed;
left: 0;
bottom: 0;
width: 100%;
color: black;
text-align: center;
}

</style>

