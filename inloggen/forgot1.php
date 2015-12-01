<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<title>Login</title>
</head>
<body>
<?php
include 'style4.html'
?>

<?php
include("inlog_header.php");
?>

		
<form action="forgot.php" method="post">
 <table>
  <tr>
   <td><b>Vul hier uw e-mailadres in:</td></b>
   <td><input type="text" name="mail" /></td>
  </tr>
  </tr>
  <tr>
   <td />
   <td><input type="submit" value="Verzenden" />
  </tr>
 </table>
</form>
<?php
include("footer.php");
?>

</body>
</html>