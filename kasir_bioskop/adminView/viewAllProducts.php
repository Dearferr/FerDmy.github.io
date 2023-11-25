
<div >
  <h2>Data Film</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Id Film</th>
        <th class="text-center">Judul</th>
        <th class="text-center">Genre</th>
        <th class="text-center">Tahun Rilis</th>
        <th class="text-center">Harga</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/koneksi.php";
      $sql="SELECT * from film";
        while ($row=$result-> fetch_assoc()) 
    ?>
    <tr>
      <td><?=$count?></td>
      <td><img height='100px' src='<?=$row["product_image"]?>'></td>
      <td><?=$row["id_film"]?></td>
      <td><?=$row["judul"]?></td>      
      <td><?=$row["tahun_rilis"]?></td> 
      <td><?=$row["harga"]?></td>     
      <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?=$row['product_id']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['product_id']?>')">Delete</button></td>
      </tr>
      <?php
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Film
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambahkan Film Baru</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
          <div class="form-group">
              <label for="c_name"> Id Film :</label>
              <input type="number" class="form-control" name="c_name" required>
            </div>
            <div class="form-group">
              <label for="c_name">Judul:</label>
              <input type="number" class="form-control" name="c_name" required>
            </div>
            <div class="form-group">
              <label for="c_name">Genre :</label>
              <input type="number" class="form-control" name="c_name" required>
            </div>
            <div class="form-group">
              <label for="c_name">Tahun Rilis :</label>
              <input type="date" class="form-control" name="c_name" required>
            </div>
            <div class="form-group">
              <label for="c_name">Harga :</label>
              <input type="time" class="form-control" name="c_name" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Tambahkan</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   