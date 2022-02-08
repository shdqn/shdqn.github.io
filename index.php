<?php
 include("config.php"); 
 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="bootstrap/css/style.css" />
        <link rel="stylesheet" href="font-awesome/css/font-awesome.css" />
    </head>
    <body>

        <header>
            <?php include("header.php"); ?>
        </header>

        <nav class="navbar navbar-default"><?php include("menu.php"); ?></nav>

        <article>

            <div class="container wrap">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Main content -->
                        <?php

                            $query = mysqli_query($connection, "SELECT * FROM posts ORDER BY update_date DESC");

                            // looping Artikel
                            while($artikel = mysqli_fetch_array($query)){
                                echo "<div class='artikel-kop'>";
                                echo "<h2><b>".$artikel['title']."</b></h2>";
                                echo "<p class='artikel-tanggal'>Update time. ".$artikel['update_date']."</p>";
                                echo "</div>";

                                echo "<div class='artikel-isi'>";
                                echo substr($artikel['content'], 0, 255);
                                echo " [<a href='artikel.php?id=".$artikel['id']."' />Read more</a>]";
                                echo "</div><hr/>";

                            }

                        ?>
                        <!-- End of content -->
                    </div>
                </div>
            </div>
        </article>

        <!-- Footer -->
        <footer>
            <?php include("footer.php"); ?>
        </footer>
        <!-- End of footer -->
    </body>
</html>
