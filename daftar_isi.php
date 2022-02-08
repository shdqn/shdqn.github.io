<?php include("config.php"); ?>
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
                            $i = 1;

                            // looping Artikel
                            echo "<div class='list-group'>";
                            while($artikel = mysqli_fetch_array($query)){

                                echo "<a class='list-group-item' href='artikel.php?id=".$artikel['id']."'>$i. <b>".$artikel['title']."</b><span class='badge'>".$artikel['update_date']."</span></a>";
                                $i++;
                            }
                            echo "</div>";
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
