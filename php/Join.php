<? 
   session_start(); 
?>  
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN“ "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
<meta charset="utf-8">
<script>
function Jcheck_id()
{
  window.open("Jcheck_id.php?id="+document.Join.id.value,"IDcheck",
  "left=200, top=200, width=200, height=60, scrollbars=no,
  resizable=yes");
}

function Jcheck_nick()
{
  window.open("J-check_nick.php?nick="+document.Join.nick.value,
  "NICKcheck", "left=200, top=200, width=200, height=60, scrollbars=no,
  resizable=yes");
}

function Jcheck_input()
{
  if(!document.Join.id.value)
  {
    alert("아이디를 입력하세요");
    document.Join.id.focus(); 
    return;
  }

  if(!document.Join.pw1.value)
  {
    alert("비밀번호를 입력하세요");
    document.Join.pw1.focus();
    return;
  }
  if(!document.Join.pw2.value)
  {
    alert("비밀번호확인을 입력하세요");
    document.Join.pw2.focus();
    return;
  }
  if(!document.Join.name.value)
  {
    alert("이름을 입력하세요");
    document.Join.name.focus();
    return;
  }
  if(!document.Join.nick.value)
  {
    alert("닉네임을 입력하세요");
    document.Join.nick.focus();
    return;
  }
  if(!document.Join.year.value || !document.Join.month.value || !document.Join.day.value)
  {
    alert("생년월일을 입력하세요");
    document.Join.nick.focus();
    return;
  }
  if(document.Join.pw1.value !=
  document.Join.pw2.value)
  {
    alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요.");
    document.Join.pw1.focus();
    document.Join.pw1.select();
    return;
  }

  document.Join.submit();
}

function Jreset_form()
{
   document.Join.id.value="";
   document.Join.pw1.value="";
   document.Join.pw2.value="";
   document.Join.name.value="";
   document.Join.nick.value="";
   document.Join.year.value="";
   document.Join.month.value="";
   document.Join.day.value="";

   document.Join.id.focus();

   return;
}
</script>
<title>JNU wiki Join</title>
</head>
<body>
   <br/><br/>
   <form name="Join" method="post" action="Jinsert.php">
        <a href="../JNU wiki/Homepage.php"><h1>JNU Wiki</h1></a>
        <h2>New Join</h2><hr/>
        <div id="id1"><label>ID</label> <input name="id" type="text" /> </div>
        <div id="id2"><a href="#">check ID<onclick="Jcheck_id()"></a></div>
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
        <div id="nick1"><label>Nickname</label><input name="name" type="text" /> </div>
        <div id="id2"><a href="#">check Nickname<onclick="Jcheck_nick()"></a></div>
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
        <center>
        <div id="button">
            <a href="#">Submit<onclick="Jcheck_input()"></a>
        </div>
        </center>
    </form>
</body>
</html>
    
   