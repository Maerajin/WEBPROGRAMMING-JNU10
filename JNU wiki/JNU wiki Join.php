<? 
   session_start(); 
?>  
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN“ "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
<meta charset="utf-8">
<script>
function check_id()
{
  window.open("J_check_id.php?id="+document.JNU wiki Join.id.value,"IDcheck",
  "left=200, top=200, width=200, height=60, scrollbars=no,
  resizable=yes");
}

function check_nick()
{
  window.open("J_check_nick.php?nick="+document.JNU wiki Join.nick.value,
  "NICKcheck", "left=200, top=200, width=200, height=60, scrollbars=no,
  resizable=yes");
}

function check_input()
{
  if(!document.JNU wiki Join.id.value)
  {
    alert("아이디를 입력하세요");
    document.JNU wiki Join.id.focus(); 
    return;
  }

  if(!document.JNU wiki Join.pw1.value)
  {
    alert("비밀번호를 입력하세요");
    document.JNU wiki Join.pw1.focus();
    return;
  }
  if(!document.JNU wiki Join.pw2.value)
  {
    alert("비밀번호확인을 입력하세요");
    document.JNU wiki Join.pw2.focus();
    return;
  }
  if(!document.JNU wiki Join.name.value)
  {
    alert("이름을 입력하세요");
    document.JNU wiki Join.name.focus();
    return;
  }
  if(!document.JNU wiki Join.nick.value)
  {
    alert("닉네임을 입력하세요");
    document.JNU wiki Join.nick.focus();
    return;
  }
<title>JNU wiki Join</title>
</head>
<body>
   <br/><br/>
   <form>
        <a href="JNU wiki Homepage.html"><h1>JNU Wiki</h1></a>
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
            <a href="JNU wiki Homepage.html">Submit</a>
        </div>
    </center>
   