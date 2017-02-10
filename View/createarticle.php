<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create Article</title>
    </head>
    <body>
		<div style="float:left;position:fixed;">
		<h1>Create new article</h1>
        <form action="controller/create.php" method="POST">
        <table>
            <tr><td>Title : </td><td><input type="text" name="title"/></td></tr>
			<tr><td>Category : </td>
			<td>
				<select name="cate">
					<option>Truyện cười</option>
					<option>Truyện kiếm hiệp</option>
				</select>		
			</td>
            <tr><td>Content :</td><td><textarea  name="content"></textarea></td></tr>
            <tr><td></td><td><input type="submit" name="sub" value="Submit"></td></tr>
        </table>
        </form>
		</div>
    </body>
</html>