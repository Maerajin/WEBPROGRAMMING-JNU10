<?
	
	$scale=5;			// 한 화면에 표시되는 글 수
	include "../lib/jnudbconn.php";

	$sql = "select * from memo order by num desc";
	$result = mysql_query($sql, $connect);

	$total_record = mysql_num_rows($result); // 전체 글 수

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	if (!$page)                 // 페이지번호($page)가 0 일 때
		$page = 1;              // 페이지 번호를 1로 초기화
 
	// 표시할 페이지($page)에 따라 $start 계산  
	$start = ($page - 1) * $scale;      

	$number = $total_record - $start;
?>
<!DOCTYPE HTML>
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html"; chsrset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/jnumemo.css">
</head>
<body>

    <div id="search">
          <input type="search" name="search" style="width: 300px;  height: 30px;" />
          <input type="button" value="Search" style="height: 30px;" />
    </div>
    <div id="big">
        <a href="../Homepage2.php"><h1>JNU wiki</h1></a>
    </div>
    <hr />
    <div id="wrap">
	<div id="menu">
	<? include "../lib/jnumenu.php"; ?>
	</div>
    </div>
    <br />
    <br />
    <br />
    <br />
    <hr />
</body>
</html>
