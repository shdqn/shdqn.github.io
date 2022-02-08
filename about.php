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
                        <div class='artikel-kop'>
                            <h2><b>About this blog</b></h2>
                        </div>

                        <div class='artikel-isi'>
                            <p>I created this blog to test entry to a company, namely PT. Sharing Vision Indonesia, I hope this website can bring me in and be accepted in the company. This website is made with the native PHP programming language, mysql for database and is also assisted by bootstrap as a css framework. Thus a brief explanation of this simple website</p>
                            <br><br>
                        </div>
                        <!-- End of content -->
                    </div>
                </div>
            </div>

        </article>

        <footer>
            <?php include("footer.php"); ?>
        </footer>

    </body>
</html>
