<?php
// include_once 'database.php';

$hs="localhost";
$us="root";
$ps="root";
$conn = mysqli_connect("$hs","$us","$ps");
mysqli_select_db($conn,"storyera");


// connect to the database
// $db = mysqli_connect('localhost', 'root', 'root', 'storyera');
$sql = "DELETE FROM stories WHERE title ='" . $_GET["title"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>