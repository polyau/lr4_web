<p> Наибольшее число:
<p>  <?php
srand();
$x=rand(1,10);  
$y=rand(1,10);
print ('$x =' . $x . "<br>");
print ('$y =' . $y . "<br>");
if  ($x>$y)  echo("Наибольшее =" . $x);
 elseif  ($x<$y)  echo ("Наибольшее =" . $y);
 else  print ("Наибольшего нет");
?>
