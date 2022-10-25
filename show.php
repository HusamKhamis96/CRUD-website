<!DOCTYPE html>
<html>
<body>
<a href="add.php">Add</a>
<table><thead>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Edit</th>
<th>delete</th>
</thead>
<tbody>
<?php
$data=file_get_contents('collection.json');
$data= json_decode($data);
$index=0;
foreach($data as $row){
echo "
<tr>
<td>$row->Name</td>
<td>$row->Email</td>
<td>$row->Phone</td>
<td>
<a href='edit.php?index=$index'>Edit</a></td>
<td>
<a href='delete.php?index=$index'>Delete</a></td>
</tr>
";
$index++;
}
?>
</tbody>
<p> Search <input type="text" name="Search"></p>
<button type="submit" name="sname">Name</button>
<button type="button" name="sname">Search by Name</button>
<button type="button" name="semail">Search by Email</button>
<button type="button" name="sphone">Search by phone</button>

<?php
$a="";
if(isset($_POST['Search'])){
$a=$_POST['Search'];}
if(isset($_POST['sname'])){
header('location: search.php?Name=$a');
}
if(isset($_POST['semail'])){
header('location: search.php?Email=$a');
}
if(isset($_POST['sphone'])){
header('location: search.php?Phone=$a');
}
?>

</body>
</html>
