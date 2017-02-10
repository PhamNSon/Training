<?php 
        $conn = mysqli_connect('localhost', 'root', '', 'article');
 
        $result = mysqli_query($conn, 'select count(id) as total from articles');
        $row = mysqli_fetch_assoc($result);
        $total_records = $row['total'];

        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 5;
 
        $total_page = ceil($total_records / $limit);
 
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
 
        $start = ($current_page - 1) * $limit;
 
        $result = mysqli_query($conn, "SELECT * FROM articles LIMIT $start, $limit");
 
        ?>
        <div class="main-left">
			<div class="con1">
			<h1>Article List</h1>
			
            <?php 
            while ($row = mysqli_fetch_assoc($result)){
				$title=$row["title"];
				$content= $row["content"];
				$date1=$row["date_created"];
			?>
				<p><b><a href="/Blog/index.php?view=articledetail&id=<?php echo $row['id']; ?>"><?php echo $title ?></a></b></p>
				<p><?php echo substr($content,0,100) ?></p>
				<p> Date created : <?php echo $date1 ?></p>
			<?php
            }
            ?>
			</div>
        </div>
		<div style="clear:both"><br/></div>
        <div style="text-align:center">
           <?php 
            if ($current_page > 1 && $total_page > 1){
                echo '<a href="index.php?page='.($current_page-1).'">Prev</a> | ';
            }
			
            for ($i = 1; $i <= $total_page; $i++){
                if ($i == $current_page){
                    echo '<span>'.$i.'</span> | ';
                }
                else{
                    echo '<a href="index.php?page='.$i.'">'.$i.'</a> | ';
                }
            }
 
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="index.php?page='.($current_page+1).'">Next</a> | ';
            }
           ?>
        </div>
