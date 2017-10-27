<?php
//Connect To DB
$con = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
if (!$con)
{throw new Exception("Can't load your ponies, db connection failed");}
//Load My Ponies
$sql 	= 'SELECT * FROM ponies';
$query 	= mysqli_query($con, $sql); 
?>

<div class="row ponies">
    <? while ($row = mysqli_fetch_array($query)) { ?>
    <div class="col-2">
        <h4><?= $row["name"] ?></h4>
    </div>
    <? } ?>
</div>