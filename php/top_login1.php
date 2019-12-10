<style>
  h1{
       text-align:center;
       font-size:7em;
       color:green;
       text-decoration:none;
      }
  a{
       text-decoration:none;
    }
</style>
<div id="top_login" style="text-align:right;">
<?
    if(!$userid)
    {
?>
<a href="../JNU wiki/Login.php" style="font-size: 20px; ">Login</a> |
<a href="../JNU wiki/Join.php" style="font-size: 20px; text-decoration:none;">Join</a> |
<a href="../JNU wiki/Help.php" style="font-size: 20px; text-decoration:none;">Help</a>
<?
    }
    else
    {
?>
<?=$usernick?> |
<a href="../JNU wiki/Logout.php" style="font-size: 20px; text-decoration:none;">Logout</a> |
<a href="../JNU wiki/Modify.php" style="font-size: 20px; text-decoration:none;">Modify</a> |
<a href="../JNU wiki/Help.php" style="font-size: 20px; text-decoration:none;">Help</a>
<?
    }
?>
<br/>
<div id="logo">
   <a href="../JNU wiki/Homepage.php"><h1>JNU wiki</h1></a>
</div>
