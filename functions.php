<?php 

    $conn = mysqli_connect("localhost", "root", "", "primera_clinica");
    if(!$conn) {

        echo "Connection Failed";

    }



    function tampil($query) {

        global $conn;

        $result = mysqli_query($conn, $query);

        $rows = [];

        while($row = mysqli_fetch_assoc($result)) {

            $rows[] = $row;

        }

        return $rows;

    }