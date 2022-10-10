<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Online Auction System</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../admin/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
   <?php
  $a = mysqli_connect("localhost","root","","Auction_system")or die("database error");
    
  ?>
      
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="logo.jpg" alt="Bid Logo" height="60" width="60">
  </div>

  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
include('sidebar.php');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    


 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">New Product</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead style="background-color: #fc7e00; color: #fff">
                    <tr>
                      <td>Sr.no</td>
                      <td>Category</td>
                      <td>SubCategory</td>
                      <td>Product Name</td>
                      <td>Image</td>
                      <td>Product Price</td>
                      <td>Bidding End Date&Time</td>
                      <td style="text-align: center;">Update</td>
                      <td style="text-align: center;">Delete</td>
                    </tr>
                    </thead>
                <?php
                $res=mysqli_query($a,"SELECT * FROM new_product WHERE SID='".$_SESSION['user']."'");
                while($row=mysqli_fetch_row($res))
                {
                  $category=mysqli_fetch_row(mysqli_query($a,"SELECT * FROM category WHERE ID='".$row[1]."'"));
                  $scategory=mysqli_fetch_row(mysqli_query($a,"SELECT * FROM sub_category WHERE ID='".$row[6]."'"));
                  echo"<tr>
                    <td>$row[0]</td>
                    <td>$category[1]</td>
                    <td>$scategory[2]</td>
                    <td>$row[2]</td>
                    <td>
                    <img src=".$row[7]." style='height:100px;width:100px'>
                    </td>
                    <td>$row[3]</td>
                    <td>$row[4]</td>

                  
                    
                    <td>
                      <button class='btn btn-primary'>
                        <a style='color:#fff;text-decoration: none;' href='update_newproduct.php?id=".$row[0]."'>
                          <i class='fa fa-edit'></i>
                        </a>
                      </button>
                    </td>
                    <td style='text-align:center'>
                      <button class='btn btn-danger'>
                        <a style='color:#fff;text-decoration: none;' href='delete_newproduct.php?id_c=".$row[0]."'>
                          <i class='fa fa-trash'></i>
                        </a>
                      </button>
                    </td>
                  </tr>";
                }
                ?>


                  
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

   

 </div>
  <!-- /.content-wrapper -->
  <?php
include('footer.php');
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<!-- ./wrapper -->
<!-- jQuery -->
<script src="../admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../admin/plugins/jszip/jszip.min.js"></script>
<script src="../admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../admin/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
