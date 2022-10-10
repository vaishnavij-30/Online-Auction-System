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
  <!-- daterange picker -->
  <link rel="stylesheet" href="../admin/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../admin/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="../admin/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="../admin/plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/dist/css/adminlte.min.css">
  <script type="text/javascript">
    function get_sub_cat(val)
    {
      $.ajax({
          data: "cid="+val,
          type: "POST",
          url: "sub_ajax_code.php",
          success: function(data)
          {
            $("#scat").html(data);
            // document.getElementById('scat').value=data;
          }

        });
    }
  </script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  
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
    


<br>
<br>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Old Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
  <?php
  $a = mysqli_connect("localhost","root","","Auction_system")or die("database error");
    
  ?>
              <form action="add_oldproduct.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                  	<!-- <input type="file" class="form-control" name="img"> -->
                    <label>Category</label>
                    <select class="form-control" name="category" onchange="get_sub_cat(this.value)"
                    style="border-top: 1px solid #0000;border-left: 1px solid #0000; border-right: 1px solid 
                      #0000;">
                      <option>Select Category</option>
                      <?php
                      $res=mysqli_query($a,"SELECT * FROM category");
                      while($row=mysqli_fetch_row($res))
                      {
                        echo "<option value='".$row[0]."'>$row[1]</option>";
                      }
                      ?>
                    </select>

                    <br>
                     <label>Sub Category</label>
                    <select class="form-control" name="scategory" id="scat" style="border-top: 1px solid #0000;border-left: 1px solid #0000; border-right: 1px solid #0000;">
                      <option>Select Sub Category</option>
                    </select>
                    <br>

                    <label>Product Name</label>
                    <input type="text" class="form-control"  placeholder="Enter name" name="pname"
                    style="border-top: 1px solid #0000;border-left: 1px solid #0000; border-right: 1px solid 
                      #0000;"><br>

                    <label>Photo</label>
                      <input type="file" class="form-control" name="Photo" 
                      style="border-top: 1px solid #0000;border-left: 1px solid #0000; border-right: 1px solid 
                      #0000; border-bottom: 1px solid #0000"><br>

                    <label>Product Original Price</label>
                    <input type="number" class="form-control"  placeholder="Original price" name="oprice"
                    style="border-top: 1px solid #0000;border-left: 1px solid #0000; border-right: 1px solid 
                      #0000;"><br>

                    <label>Product Selling Price</label>
                    <input type="number" class="form-control"  placeholder="Selling price" name="sprice"
                    style="border-top: 1px solid #0000;border-left: 1px solid #0000; border-right: 1px solid 
                      #0000;">
                  </div>

                  <label>Bid End Date and Time</label>
                    <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                        <input type="text" name="days" class="form-control datetimepicker-input" data-target="#reservationdatetime" placeholder="Date & Time" style="border-top: 1px solid #0000;border-left: 1px solid #0000; border-right: 1px solid #0000;">
                        <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                  <br>
                  
                <div class="card-footer">
                  <button type="submit" class="btn btn-secondary" name="save">Submit</button>
                  <button type="reset" class="btn btn-danger" name="save">Cancel</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

           

          </div>
          <!--/.col (left) -->
          <!-- right column -->
         
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../admin/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../admin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../admin/plugins/moment/moment.min.js"></script>
<script src="../admin/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="../admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="../admin/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="../admin/plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="../admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../admin/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
</body>
</html>
<?php
if(isset($_POST['save']))
{
  $category=$_POST['category'];
  $name=$_POST['pname'];
  $oprice=$_POST['oprice'];
  $sprice=$_POST['sprice'];
  $days=$_POST['days'];
  $scategory=$_POST['scategory'];

$max1=mysqli_query($a,"SELECT MAX(ID) FROM old_product");
$max=mysqli_fetch_row($max1);
      if($max[0])
      {
        $max=$max[0];
        $max_id=$max+1;
      }
      else 
      {
       $max_id=1;
      } 


  $file_exists=array("jpg","jpeg","png","gif","bmp","pdf");//file extenssions supported for upload 

        
        $upload_exists = end (explode('.', $_FILES["Photo"]["name"]));//find extension of file 
        if(($upload_exists==null )||($upload_exists==""))//file is none or of 0kb
        {
            
            echo"<script>alert('File Not Select Or uncompatible file'); </script>";
        }
        else
        {
            if((($_FILES['Photo']['size']<2000000) || in_array($upload_exists,$file_exists)))//file size & file extension support
            {
             $newname="$max_id"."_Oldproduct.png"; 
          $targetfile='upload/'.$newname;//location of folder with target file name 

                if($_FILES['Photo']['error']>0)//check if any error in file 
                {
                    echo"<script>alert('image 2 large  or pdf large size should b less than 2 mb');</script>";
                }
                else
                {
                    //upload file to location set above
                    move_uploaded_file($_FILES['Photo']['tmp_name'],$targetfile);//end img code


  if(mysqli_query($a,"INSERT INTO old_product VALUES('','".$category."','".$name."','".$oprice."','".$sprice."','".$days."','".$_SESSION['user']."','".$scategory."','".$targetfile."')"))
  {
    echo'<script>
    alert("Old Product Added");
    window.location.href="add_oldproduct.php";
    </script>';
  }
  else
  {
    echo'<script>
    alert("Old Product Added");
    window.location.href="add_oldproduct.php";
    </script>';
  }

}
}
}
}

?>