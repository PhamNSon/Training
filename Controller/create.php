<?php
include ('../Model/conn.php');
if(isset($_POST['sub'])){
	$title=$_POST['title'];
	$cate=$_POST['cate'];
	$content=$_POST['content'];
	$now = getdate(); 
    $date =$now["year"] . "-" . $now["mon"] . "-" . $now["mday"] ;
	$sql="insert into articles(category_id,title,content,status,date_created) values ('$cate','$title','$content','1','$date')";
	$kq=mysql_query($sql);
	if(!$kq)
		echo "<script>alert('Error');window.history.go(-1);</script>";
	else{	
		echo "Add article successfully";
		header('location:/Blog/index.php?view=done');
	}
}
?>