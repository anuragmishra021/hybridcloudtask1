<html>
<body>
<h1>KANIKA SHARMA</h1>
<h3>MY FIRST AWS CLOUD TASK </h3>
<?php
   $cloudant_url=`head -n1 path.txt`;
   $img_path="https://".$cloudant_url."/terraform.png";
   echo "<br>";
   echo "<img src='${img_path}' width=100 height=100>";
?>
</body> 
</html> 