<!DOCTYPE html>
<html>
<body>
<p>
<table><thead>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>update</th>
<th>delete</th>
</thead>
<tbody>
<?php
if(isset($_GET['Name'])){
$ss=$_GET['Name'];
$data=file_get_contents('collection.json');
$data= json_decode($data);
$index=0;
foreach($data as $row){
    $c=$row->Name;
if($c == $ss){
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
$index++;}
else{
    $index++;
}
}
?>
</tbody>
<?php
}
if(isset($_GET['Email'])){
$ss=$_GET['Email'];
$data=file_get_contents('collection.json');
$data= json_decode($data);
$index=0;
foreach($data as $row){
if($row->Email == $ss){
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
";}
$index++;}
}
?>
</tbody>
<?php
if(isset($_GET['Phone'])){
$ss=$_GET['Phone'];
$data=file_get_contents('collection.json');
$data= json_decode($data);
$index=0;
foreach($data as $row){
if($row->Phone == $ss){
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
";}
$index++;
}
?>
</tbody>
<?php
}
?>
<a href="show.php">Back</a></p>
</body>
</html>