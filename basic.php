<!DOCTYPE html>
<html>
    
<body>
<div>Github location  https://github.com/nlbrown/WDV341/blob/master/basic.php</div><br>

<?php
    echo "<div>Create a variable called yourName.  Assign it a value of your name.</div> ";
    static $Norm = "Norman Brown";

    echo "<div>Display the assignment name in an h1 element on the page. Include the elements in your output. </div><br>";  
    echo "<h1> PHP Basics Assignment - ". $Norm ." </h1><br>";
?>

<div>Use HTML to put an h2 element on the page. Use PHP to display your name inside the element using the variable.</div><br>"
<h2>
<?php   
echo "$Norm";
?>
</h2>

<?php
    echo "<div>Create the following variables:  number1, number2 and total.  Assign a value to them.</div><br> ";
$number1 = 10;
$number2 = 20;
$number3 = 30;
$total = $number1 + $number2 + $number3;

echo "<div>Display the value of each variable and the total variable when you add them together. </div><br>";
echo "$number1<br>";
echo "$number2<br>"; 
echo "$number3<br>"; 
echo "Total is ", $total, "<br>";  
?>

<br><div>Use PHP to create a Javascript array with the following values: PHP,HTML,Javascript.  Output this array using PHP.  Create a script that will display the values of this array on your page.  NOTE:  Remember PHP is building the array not running it.  </div><br>
<?php
    echo "<script>";
    echo " var nameArray = ['PHP', 'HTML', 'Javascript'];";
    echo "for (i = 0; i < 3; i++) {";
    
    echo "document.write(nameArray[i]+'<br>');";
    echo "}";
    echo "</script>";
 ?>
  
        
</body>
</html>