<meta charset="utf-8">
<?
   $birth = $year."-".$month."-".$day;

   $regist_day = date("Y-m-d (H:i)");  // ������ '��-��-��-��-��'�� ����
   $ip = $REMOTE_ADDR;         // �湮���� IP �ּҸ� ����

   include "../JNU wiki/Jdbconn.php";       // dconn.php ������ �ҷ���

   $sql = "select * from Jmember where id='$id'";
   $result = mysql_query($sql, $connect);
   $exist_id = mysql_num_rows($result);

   if($exist_id) {
     echo("
           <script>
             window.alert('�ش� ���̵� �����մϴ�.')
             history.go(-1)
           </script>
         ");
         exit;
   }
   else
   {            // ���ڵ� ���� ����� $sql�� �Է�
	    $sql = "insert into Jmember(id, pw1, name, nick, birth, regist_day) ";
		$sql .= "values('$id', '$pass', '$name', '$nick', '$birth', '$regist_day')";

		mysql_query($sql, $connect);  // $sql �� ����� ��� ����
   }

   mysql_close();                // DB ���� ����
   echo "
	   <script>
	    location.href = '../JNU wiki/JNU wiki Homepage.php';
	   </script>
	";
?>