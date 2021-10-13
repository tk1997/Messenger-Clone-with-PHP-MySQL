<?php


?>

<html>
<head>
<title>Messenger</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="main">
    <br><br><br>
    <h4>Reach out to your contacts easily!</h4>
<img src="icon.png" width="100px"/><br>
<span stlye="color:red;">
<?php
if(isset($_GET['login']))
{
    echo"Incorrect username or password. Try again!";
}
?>
</span>

<table>
<form method="post" action="send.php">

<input type="text" name="username" placeholder="Username"><br>
<input type="text" name="password" placeholder="Password"><br>
<button type="submit" name="login">Login</button>

</form>
</table>
</div>


<div id="footer">
All Rights Reserved &Copy 2021-2022<?php echo date('Y'); ?>
</div>
</body>

<?php ?>
</body>
</html>