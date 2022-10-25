<?php
$index=$_GET['index'];
$data = file_get_contents('collection.json');
$data = json_decode ($data) ;
$row=$data[$index];
if( isset($_POST['ro'])){
$input = array(
'Name' => $_POST['Name'],
'Email' => $_POST['Email'],
'Phone' => $_POST['Phone']);
//append the input to our array
$data[$index] = $input;
//encode back to json
$data = json_encode($data, JSON_PRETTY_PRINT);
file_put_contents('collection.json', $data);
header('location: show.php');
    return;
}
?>
<!DOCTYPE html>
<html>
<body>
    <form method="POST">
 <p> Name <input type="text" name="Name"
    value="<?php echo $row->Name?> "></input></p>	
        <p> Email <input type="text" name="Email"
value="<?php echo $row->Email?>"  
        ></input></p>
        <p> Phone <input type="text" name="Phone"
value="<?php echo $row->Phone?>"></input></p> 
<button	type="submit" name= "ro" >submit</button>
<a href="show.php">Back</a>

</form>
 </body>
</html>
