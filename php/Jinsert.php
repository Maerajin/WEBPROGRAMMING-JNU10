<meta charset="utf-8">
<?
   $birth = $year."-".$month."-".$day;

   $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장
   $ip = $REMOTE_ADDR;         // 방문자의 IP 주소를 저장

   include "../JNU wiki/Jdbconn.php";       // dconn.php 파일을 불러옴

   $sql = "select * from Jmember where id='$id'";
   $result = mysql_query($sql, $connect);
   $exist_id = mysql_num_rows($result);

   if($exist_id) {
     echo("
           <script>
             window.alert('해당 아이디가 존재합니다.')
             history.go(-1)
           </script>
         ");
         exit;
   }
   else
   {            // 레코드 삽입 명령을 $sql에 입력
	    $sql = "insert into Jmember(id, pw1, name, nick, birth, regist_day) ";
		$sql .= "values('$id', '$pass', '$name', '$nick', '$birth', '$regist_day')";

		mysql_query($sql, $connect);  // $sql 에 저장된 명령 실행
   }

   mysql_close();                // DB 연결 끊기
   echo "
	   <script>
	    location.href = '../JNU wiki/JNU wiki Homepage.php';
	   </script>
	";
?>