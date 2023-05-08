<?php 
$DB = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
    global $DB;
    $result = mysqli_query($DB, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
