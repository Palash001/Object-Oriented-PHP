<?php 
include "inc/header.php";

include "function.php";

?>




<form action="" method="post">
<table>

<tr>

<td> Enter the First Number:</td>

<td> <input type="number" name="num1"/> </td>

</tr>


<tr>

<td> ENter the Second Number:</td>

<td> <input type="number" name="num2"/> </td>

</tr>


<tr>

<td> </td>

<td> <input type="submit" name="calculattion" value="calculate"/> </td>

</tr>

</table>

</form>


<?php

if(isset($_POST['calculation']))


{

$numOne=$_POST['num1'];

$numTwo=$_POST['num2']

if(empty($numOne) or empty($numTwo))

{


echo "<span style='color:#EE6554'>Field Must not be empty.</span> <br>";

}

else

{


echo "first Number is: " .$numOne. "Second Number is: ". $numTwo. "<br/>";

$cal=new Calculation;

$cal->add($numOne,$numTwo);

$cal->sub($numOne,$numTwo);

$cal->mul($numOne,$numTwo);

$cal->div($numOne,$numTwo);


}

}

?>


<?php include "inc/footer.php";?>