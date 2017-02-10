<h1>ARTICLE DETAILS</h1>
<div class="row">
	<div class="col-md-6">
        <?php
		$conn = mysqli_connect('localhost', 'root', '', 'article');
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $sql = "SELECT * from articles where id = '".$_GET['id']."'";
                $query = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($query);
            }
        ?>
		<h3>Article title : <?php echo $row["title"] ?></h3>
		Article content : <br/><textarea cols="100" rows="20"><?php echo $row["content"] ?></textarea>
		<p>Date created : <?php echo $row["date_created"] ?></p>
	</div>
 </div>
 <div style="clear:both">
	<p style="padding-left:600px"><a href="/Blog/index.php">Home</a></p>
</div>