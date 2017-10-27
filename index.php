<?
require_once "config.php";

//Connect To DB
$con = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);

if (!$con)
{throw new Exception("Can't load your ponies, db connection failed");}

//Load My Ponies
$sql 	= 'SELECT * FROM ponies';
$query 	= mysqli_query($con, $sql); 
?><!DOCTYPE html>
<html>
<head>
<title>Chef Work Shop</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="/css/default.css">
</head>

<body>

<div class="container-fluid">
  
  <div class="row">
    <div class="col-11">
      <h1>Ops Demo</h1>
      <h6>Deployment celebrations should be about the value of the new features, not joyful relief that nothing went horribly wrong</h6>
    </div>
    <div class="col-1">
      <img src="/images/chef.png" width="80"/>
    </div>
  </div>
  
  <div class="row ponies">
    <? while ($row = mysqli_fetch_array($query)) { ?>
    <div class="col-2">
        <h3><?= $row["name"] ?></h3>
    </div>
    <? } ?>
  </div>
</div>
</body>

</html>