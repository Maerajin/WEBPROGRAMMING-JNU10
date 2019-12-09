<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/jnujoin.css">
<TITLE>JNU wiki Join</TITLE>
</HEAD>
<BODY>
    <br/><br/>
    <form>
        <a href="Homepage.php"><h1>JNU Wiki</h1></a>
        <h2>New Join</h2><hr/>
        <div id="ID">
             <label>ID</label>
             <input name="id" type="text" /><br/>
        </div>
        <div id="pw1">
             <label>Password</label>
             <input name="pw1" type="password" /><br/>
        </div>
        <div id="pw2">
            <label>Check Password</label>
            <input name="pw2" type="password" /><br />
        </div>
        <div id="name">
            <label>Name</label>
            <input name="name" type="text" /> <br />
        </div>
        <div id="birth">
            <label>Birth Day</label>
            <input name="year" type="text" placeholder="Year(4)" style="width:200px;" />
            <input name="month" type="text" placeholder="Month" style="width:70px" />
            <input name="day" type="text" placeholder="Day" style="width:70px" /><br />
        </div>
        <div id="sex">
            <label>Sex</label>
            <input id="man" type="radio" name="gender" value="m" style="width:100px; height:20px;" />
            <label for="man">Man</label>
            <input id="woman" type="radio" name="gender" value="w" style="width:100px; height:20px" ; />
            <label for="woman">Woman</label><br />
        </div>
</form>
    <center>
        <div class="button">
            <a href="Homepage.php">Submit</a>
        </div>
    </center>

</BODY>
</HTML>
