<?php
session_start();
if(isset($_POST['submit'])){
//open the json file
$data = file_get_contents('collection.json');
$data = json_decode($data);

//data in out POST
$input = array(
'Name' => $_POST['Name'],
'Email' => $_POST['Email'],
'Phone' => $_POST['Phone']);
//append the input to our array
$data[] = $input;
//encode back to json
$data = json_encode($data, JSON_PRETTY_PRINT);
file_put_contents ('collection.json', $data);
header('location: show.php');
return;
}
?>
<html>
<body>
<form method="POST">
<p> Name <input type="text" name="Name"
        ></p>	
        <p> Email <input type="text" name="Email"
        ></p>
        <p> Phone <input type="text" name="Phone"
        ></p> 
<button
      	type="submit"  name="submit">submit
      </button>
<a href=show.php>Back</a>
</form>
</body>
</html>
