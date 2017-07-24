

<!DOCTYPE html>
<html lang="en">
<head>
<title>Crud App </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale-1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css";
<script src="js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<?php
require('config.php');
$sql = "SELECT * FROM `insertdata`";		
$result=mysqli_query($GLOBALS['$conn'],$sql);
?>



<div class="container bg-info" style="padding-top:20px  padding-bottom:20px";


<h3>Books To Grab Unique Parenting Style</h3>


<div class="row">

<div class="col-sm-4">

<form role="form" action="insertM.php" method="post">

<div class="form-group">
<label>Book Title</label>

<input type="text" name="btitle" class="form-control">
</div>

<div  class="form-group">
<label>Book Price</label>
<input type="text" name="bprice" class="form-control">
</div>

<button type="submit" name="bsubmit" class="btn btn-primary btn-block">
Add Books</button>

</form>

</div>

<div class="col-sm-8">

<table class="table">
<thread>
<tr>
<th>Book title</th>
<th>Book price</th>
<th>Crud Actions</th>

</tr>
</thread>
<tbody>

<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>



<tr>
<td><?php echo $row['book_title']; ?></td>
<td><?php echo $row['book_price']; ?></td>
<td>
<a href="Editbook.php?id=<?php echo $row['book_id']; ?>" class="btn btn-success" role="button">Edit book</a>
<a href="Delbook.php?id=<?php echo $row['book_id']; ?>" class="btn btn-danger" role="button">Delete book</a>

</td>
</tr>

<?php

    }
} else {
    return false;
}
mysqli_close($GLOBALS['$conn']);
?>
<tbody>
<table>

</div>

</div>

</div>
</body>
</html>



