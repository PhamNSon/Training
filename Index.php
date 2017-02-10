<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            include 'Model/conn.php';
            $view = isset($_GET['view']) ? $_GET['view'] : 'Main';
            include "View/".$view.".php";           
        ?>
        
    </body>
</html>