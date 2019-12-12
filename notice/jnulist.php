
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
 <div id="memo_row1">
       	<form  name="memo_form" method="post" action="jnuinsert.php"> 
		<div id="memo_writer"><span >▷ <?= $usernick ?></span></div>
		<div id="memo2"><input type="image" src="../img/memo_button.gif"></div>
		<div id="memo1"><textarea rows="10" cols="140" name="content"></textarea></div>
		
	</form>	
<?		
   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)                    
   {
      mysql_data_seek($result, $i);       
      $row = mysql_fetch_array($result);       
	
	  $memo_id      = $row[id];
	  $memo_num     = $row[num];
      $memo_date    = $row[regist_day];
	  $memo_nick    = $row[nick];

	  $memo_content = str_replace("\n", "<br>", $row[content]);
	  $memo_content = str_replace(" ", "&nbsp;", $memo_content);
?>
		<div id="memo_writer_title">
		<ul>
		<li id="writer_title1"><?= $number ?></li>
		<li id="writer_title2"><?= $memo_nick ?></li>
		<li id="writer_title3"><?= $memo_date ?></li>
		<li id="writer_title4"> 
		      <? 
					if($userid=="admin" || $userid==$memo_id)
			          echo "<a href='delete.php?num=$memo_num'>[삭제]</a>"; 
			  ?>
		</li>
		</ul>
		</div>
		<div id="memo_content"><?= $memo_content ?>
		</div>
<?
	    $sql = "select * from memo_ripple where parent='$memo_num'";
	    $ripple_result = mysql_query($sql);

		while ($row_ripple = mysql_fetch_array($ripple_result))
		{
			$ripple_num     = $row_ripple[num];
			$ripple_id      = $row_ripple[id];
			$ripple_nick    = $row_ripple[nick];
			$ripple_content = str_replace("\n", "<br>", $row_ripple[content]);
			$ripple_content = str_replace(" ", "&nbsp;", $ripple_content);
			$ripple_date    = $row_ripple[regist_day];
?>
<?
		}
?>
<?
		$number--;
	 }
	 mysql_close();
?>			
			</div>

</div>
</body>
</html>