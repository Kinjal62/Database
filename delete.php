<?php 
include("connect.php");
$sql = "DELETE FROM form WHERE id=5";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>

