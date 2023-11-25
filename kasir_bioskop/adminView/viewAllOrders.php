<div id="ordersBtn" >
  <h2>Jadwal Tayang</h2>
  <table class="table table-striped">
    <thead>
      <tr>
      <th class="text-center">Id Penayangan</th>
        <th class="text-center">Id Film</th>
        <th class="text-center">Tanggal</th>
        <th class="text-center">Jam</th>
        <th class="text-center">Studio</th>
        <th class="text-center">Harga</th>
        <th class="text-center" colspan="2">Action</th>
     </tr>
    </thead>
     <?php
        include_once "../config/koneksi.php";
        $sql="SELECT * from film";
        $result=$koneksi-> query($sql);
        while ($row=$result-> fetch_assoc()) 
      ?>
      <tr>
        <td><?=$row['id_tayang']?></td>
        <td><?=$row['id_film']?></td>   
        <td><?=$row['tanggal']?></td>
        <td><?=$row['jam']?></td>
        <td><?=$row['studio']?></td>
        <td><?=$row['harga']?></td>
        <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?=$row['product_id']?>')">Edit</button>
        <button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['product_id']?>')">Delete</button></td>
      </tr>
  </table>
  
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Film
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content--><div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambahkan Transaksi</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addCatController.php" method="POST">
            <div class="form-group">
              <label for="c_name"> Id Transaksi :</label>
              <input type="number" class="form-control" name="c_name" required>
            </div>
            <div class="form-group">
              <label for="c_name">Id Tayang:</label>
              <input type="number" class="form-control" name="c_name" required>
            </div>
            <div class="form-group">
              <label for="c_name">Jumlah tiket :</label>
              <input type="number" class="form-control" name="c_name" required>
            </div>
            <div class="form-group">
              <label for="c_name">Tanggal :</label>
              <input type="date" class="form-control" name="c_name" required>
            </div>
            <div class="form-group">
              <label for="c_name">Jam :</label>
              <input type="time" class="form-control" name="c_name" required>
            </div>
            <div class="form-group">
              <label for="c_name">Total Harga:</label>
              <input type="number" class="form-control" name="c_name" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Tambahkan</button>
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
<script>
     //for view order modal  
    $(document).ready(function(){
      $('.openPopup').on('click',function(){
        var dataURL = $(this).attr('data-href');
      });
    });
 </script>
   