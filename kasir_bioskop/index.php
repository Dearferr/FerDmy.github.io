<!DOCTYPE html>
<html>
<head>
  <title>Kasir Bioskop</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>
  </head>
</head>
<body >
    
        <?php
            include "./adminHeader.php";
            include "./sidebar.php";
           
            include_once "./config/koneksi.php";
        ?>

    <div id="main-content" class="container allContent-section py-4">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <i class="fa fa-th-large mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Total Film</h4>
                    <h5 style="color:white;">
                    <?php
                       
                       $sql="SELECT * from film";
                       $result=$koneksi-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
            <div class="col-sm-3">
            <div class="card">
                    <i class="fa fa-th mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Akan Tayang</h4>
                    <h5 style="color:white;">
                    <?php
                       
                       $sql="SELECT * from jadwal_tayang";
                       $result=$koneksi-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <i class="fa fa-list mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Total Transaksi</h4>
                    <h5 style="color:white;">
                    <?php
                       
                       $sql="SELECT * from transaksi_tiket";
                       $result=$koneksi-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
        </div>
        
    </div>
       
            
        <?php
            if (isset($_GET['film']) && $_GET['film'] == "success") {
                echo '<script> alert("Film Successfully Added")</script>';
            }else if (isset($_GET['film']) && $_GET['film'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
            if (isset($_GET['jadwal_tayang']) && $_GET['jadwal_tayang'] == "success") {
                echo '<script> alert("Jadwal Tayang Successfully Added")</script>';
            }else if (isset($_GET['jadwal_tayang']) && $_GET['jadwal_tayang'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
            if (isset($_GET['transaksi_tiket']) && $_GET['transaksi_tiket'] == "success") {
                echo '<script> alert("Transaksi Successfully Added")</script>';
            }else if (isset($_GET['transaksi_tiket']) && $_GET['transaksi_tiket'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
        ?>


    <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
 
</html>