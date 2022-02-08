<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h2 class="sub-header">All Post <a href="tambah_artikel.php" class="btn btn-success pull-right"><i class="fa fa-plus-circle fa-lg"></i> New Article</a></h2>
  <div class="table-responsive">

    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Created date</th>
          <th>Update date</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
          <?php
            $query = mysqli_query($connection, "SELECT * FROM posts");

            while ($artikel = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$artikel['id']."</td>";
                echo "<td><b>".$artikel['title']."</b><br/>";
                echo "<a href='edit_artikel.php?id=".$artikel['id']."'><i class='fa fa-pencil'></i> Edit</a> | ";
                echo "<a href='hapus_artikel.php?id=".$artikel['id']."'><i class='fa fa-trash'></i> Hapus</a>";
                echo "</td>";
                echo "<td>".$artikel['created_date']."</td>";
                echo "<td>".$artikel['update_date']."</td>";
                echo "<td>".$artikel['status']."</td>";
                echo "</tr>";
            }
          ?>
      </tbody>
    </table>

  </div>
</div>
