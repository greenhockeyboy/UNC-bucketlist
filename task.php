<?php include('views/_header.php'); ?>

<script type="text/javascript">qsParm['task'] = null;
qs();</script>
<body><div data-role="page" data-theme="a" >
	<div>I AM A TEST PAGE</div>
<?php
echo 'Hello ' . htmlspecialchars($_GET["task"]) . '!';
$taskID=htmlspecialchars($_GET["task"]);
echo "$taskID". 'hi';




$result = mysqli_query($con,"SELECT * FROM tasks");

while($row = mysqli_fetch_array($result)) {
	if($row['taskid']==$taskID){
		echo $row['taskname']
	}
  echo $row['FirstName'] . " " . $row['LastName'];
  echo "<br>";
}


?>




</div></body>
<?php include('_footer.php'); ?>
