<?php
include "db.php";

$report_id = $_POST['report_id'];
$status = $_POST['status'];
$remark = $_POST['remark'];

$sql = "UPDATE reports 
        SET status='$status', admin_remark='$remark'
        WHERE id='$report_id'";

$conn->query($sql);

echo "Status Updated";
?>
