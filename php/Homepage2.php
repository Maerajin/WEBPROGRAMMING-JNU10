<?
	session_start();
?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/jnucommon2.css">
</HEAD>
<BODY>
    <div id="content">
        <a href="Join.php">  Join</a>
        <a href="Login.php">Login  |</a>
    </div>
    <div id="aside">
        <a href="Homepage2.php"><h1>JNU wiki</h1></a>
    </div>
    <hr />
    <div id="wrap">
	<div id="menu">
	<? include "./lib/jnumenu.php"; ?>
	</div>
    </div>
    <br />
    <br />
    <br />
    <br />
    <hr />
    <div class="search" style="text-align:center">
        <form method="get" action="Searchresult.php">
            
            <input type="text" tabindex="1" placeholder="Search" value="" name="query" style="width: 800px;  height: 50px; font-size:20px;" />
            <input type="submit" value="Search" style="height: 50px; background-color:chartreuse; border:5px solid black" />
        </form>
    </div>
   
    <div class="etc">
        <form method="get" action="EmptySearchresult.php" style="text-align:right; margin-top:300px;">
            <input type="text" tabindex="1" placeholder="Enter here if there are no documents" value="" name="query" style="width: 400px; height: 50px; font-size:20px;" />
            <input type="submit" value="Search" style="height: 50px; background-color:deepskyblue; border:5px solid green" />
        </form>
    </div>

</BODY>
</HTML>
