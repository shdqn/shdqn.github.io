<?php
session_start();

// if(isset($_SESSION['username'])){

    if(isset($_GET['id']) && !empty($_GET['id'])){
        // tampilkan form edit
        include('../../config.php');

        // ambil data dari database
        $id = $_GET["id"];
        $query = mysqli_query($connection, "SELECT * FROM posts WHERE id=$id");
        if(mysqli_num_rows($query) > 0){
            $art = mysqli_fetch_array($query);
        } else {
            // artikel tidak ada di dabase
            echo "<script>window.location = 'index.php'</script>";
        }

?>
<!-- Tampilkan Form ubah -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../bootstrap/css/style-admin.css" rel="stylesheet">

    <!-- font-awesome untuk ikon -->
    <link href="../../font-awesome/css/font-awesome.css" rel="stylesheet">

  </head>

  <body>

    <nav><?php include('../navbar.php'); ?></nav>

    <div class="container-fluid">
      <div class="row">
          <aside>
              <?php $artikel = "class='active'"; ?>
              <?php include('aside.php'); ?>
          </aside>

          <section id="konten">
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

              <form class="form" action="" method="POST">
                  <div class="form-group">
                      <input type="text" name="title" class="form-control" placeholder="title" value="<?php echo $art['title']; ?>">
                  </div>
                  <div class="form-group">
                      <input type="text" name="status" class="form-control" placeholder="status" value="<?php echo $art['status']; ?>">
                  </div>
                  <div class="form-group">
                      <textarea name="content" class="form-control" rows="16"><?php echo $art['content']; ?></textarea>
                  </div>
                  <div class="form-group">
                      <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-send"></i> Change</button>
                  </div>

              </form>

            </div>
          </section>

      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../bootstrap/js/jquery.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../../bootstrap/js/holder.js"></script>
  </body>
</html>

<?php

    } else {
        // arahkan ke halaman data artikel
    }

    // kode untuk mengupdate artikel ke database
    if(isset($_POST['simpan'])){
        $title = empty($_POST['title']) ? "Untitle": $_POST['title'];
        $content = $_POST['content'];
        $status = $_POST['status'];

        // lakukan penyimpanan ke database
        $simpan = mysqli_query($connection, "UPDATE posts SET title='$title',content='$content',status='$status' WHERE id=$id");

        if($simpan) {
            // berhasil tersimpan, arahkan ke tabel data artikel
            echo "<script>window.location = 'index.php'</script>";
        } else {
            // gagal menyimpan
            echo "Gagal menyimpan, suatu kesalahan terjadi!";
        }
    }
?>
// } else {
//     // suruh user login
//     header('location: ../login.php');
// }

