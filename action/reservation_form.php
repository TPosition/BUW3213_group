<?php
    $sql = "SELECT DISTINCT(room_type) FROM `room` WHERE status='free'";
    $result = mysqli_query($link, $sql);
?>