<?php
include "db.php";

$sql = "SELECT r.id, r.title, u.username, r.status 
        FROM reports r
        JOIN users u ON r.user_id = u.id
        WHERE r.status != 'Resolved'";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo $row['title']." | ".$row['username']." | ".$row['status']."<br>";
}
?>
