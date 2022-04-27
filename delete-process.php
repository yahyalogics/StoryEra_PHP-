<?php
include_once 'database.php';
$sql = "DELETE FROM stories WHERE title ='" . $_GET["title"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>