<? 
    session_start(); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN“ "http://www.w3.org/TR/html4/loose.dtd"> 
<HTML>
<HEAD>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/jnujoin.css">
<script>
  function check_id()
  { 
    window.open("check_id.php?id=" + document.Join.id.value,"IDcheck",
    "left=200,top=200,width=200,height=60,scrollbars=no, 
    resizable=yes"); 
  } 

  function check_nick()
  { 
    window.open("check_nick.php?nick=" + document.Join.nick.value, 
    "NICKcheck", "left=200,top=200,width=200,height=60, scrollbars=no, 
    resizable=yes"); 
  } 

  function check_input()
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
  
    if(!document.Join.hp2.value || !document.Join.hp3.value)   
    {    
      alert("휴대폰 번호를 입력하세요");     
      document.Join.nick.focus();      
      return; 
    }
 
    if(!document.Join.year.value || !document.Join.month.value || !document.Join.day.value)    
    {    
      alert("생년월일을 입력하세요");     
      document.Join.nick.focus();      
      return; 
    }

    if (document.Join.pw1.value != 
            document.Join.pw2.value)
    {
      alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요.");    
      document.Join.pw1.focus();
      document.Join.pw1.select();
      return;
    }
      document.Join.submit();
  }

</script>
 <TITLE>JNU wiki Join</TITLE>
</HEAD>
<BODY>
    <br/><br/>
    <form name="Join" method="post" action="insert.php">
        <a href="Homepage.php"><h1>JNU Wiki</h1></a>
        <h2>New Join</h2><hr/>
        <div id="id1">
             <label>ID</label>
             <input name="id" type="text" />
        </div>
        <div id="id2" click="check_id()">    
            <a href="#">Check ID</a><br/>
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
        <div id="nick1">
            <label>Nickname</label>
            <input name="nick" type="text" /> 
        </div>
        <div id="nick2" click="check_nick()">
            <a href="#">Check Nickname</a>
        </div>
        <div id="hp">
        <label>Phone</label>
        <select class="hp" name="hp1"> 
              <option value='010'>010</option>
              <option value='011'>011</option>
              <option value='016'>016</option>
              <option value='017'>017</option>
              <option value='018'>018</option>
              <option value='019'>019</option>
        </select>  - 
        <input type="text" class="hp" name="hp2" style="width:150px; height:30px;"/> - 
        <input type="text" class="hp" name="hp3" style="width:150px; height:30px;"/>
        </div>
        <div id="birth">
            <label>Birth</label>
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
            <div class="button" click="check_input()">
                <a href="#">Submit</a>
            </div>
        </center>
    </form>
</BODY>
</HTML>
