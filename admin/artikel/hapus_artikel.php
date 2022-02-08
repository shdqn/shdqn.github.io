<?php

    if(isset($_GET["id"]) && !empty($_GET['id'])){
        // hapus artikel
        include("../../config.php");
        $id = $_GET["id"];
        $query = mysqli_query($connection, "DELETE FROM posts WHERE id=$id");

        if($query) {
            // arahkan ke data artikel
            echo "<script> window.location = 'index.php'</script>";
        } else {
            // tampilkan pesan error
            die("Failed to delete: " . mysqli_error($connection));
        }

    } else {
        // arahkan ke data artikel
        header("location: index.php");
    }

?>
