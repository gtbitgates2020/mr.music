<?php

$host='localhost';
$db='kuldeeprawat';
$user='root';
$pass='960500';

    
        $conn = new mysqli( $host, $user, $pass, $db);
        // Check connection
        if ($conn->connect_error) {
            die("<script>location.href='http://localhost/mrmusic/error.php'</script>");
        }
    

?>