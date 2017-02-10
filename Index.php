<html>
<head>
        <meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="View/css/bootstrap.min.css" />
</head>
<body>
	<div id="container">
        <?php
            include 'Model/conn.php';
		?>
		<div style="padding-left:1000px;"><a href="/Blog/index.php?view=createarticle"><h2>Create</h2></a></div>
		<div class="row">
			<div class="col-md-6 col-md-offset-1">
			<?php
				$view = isset($_GET['view']) ? $_GET['view'] : 'Main';
				include "View/".$view.".php";           
			?>
			</div>
			<div class="col-md-4 col-md-offset-1">
			<?php include "View/categorylist.php"; ?>
			</div>
		</div>
	</div>
</body>
</html>