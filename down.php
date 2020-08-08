<?php
    $duration = $_GET['duration'];
	$technology = $_GET['technology'];
	// echo $duration,$technology;
    include "connect.php";
    $query = "SELECT * FROM training";
    $data = mysqli_query($connect, $query);
    while ($result = mysqli_fetch_assoc($data)) {
        if ($result['technology'] == $technology && $result['duration'] == $duration) {
            $filepath = "admin/" . $result['content'];
            echo $filepath;

            // Process download
            if (file_exists($filepath)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename="' . basename($filepath) . '"');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize($filepath));
                flush(); // Flush system output buffer
                readfile($filepath);
                exit;
                header("location:coursecontent.php");
            }
            else{
                header("location:coursecontent.php");
            }
        }
    
}

?>