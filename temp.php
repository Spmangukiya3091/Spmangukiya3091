<?php
    include('header.php');
    include('topbar.php');
    include('011.php');
?>


<?php
include('dbcon.php');
function getposts()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['name'];
    $posts[2] = $_POST['quantity'];
    $posts[3] = $_FILES['img'];
    return $posts;
}

if(isset($_POST['submit']))
{
    $data = getposts();

    if(isset($_FILES['img'])){
      $ext = explode(".",$data[3]);
      $cn = count($ext);
      if($ext[$cn-1]=='jpg' || $ext[$cn-1]=='png' || $ext[$cn-1]=='jpeg')

      $tmp = $_FILES['img'];
      move_uploaded_file($tmp,"uploads/".$data[3]);

    }

    $insertquery = "INSERT INTO product (proid,productname,quantity,img) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]')";
    try{
      $res = mysqli_query($con,$insertquery);
      if($res){
          if(mysqli_affected_rows($con)>0){
            ?>
            <script>
              alert("Data Inserted Properly");
            </script>
            <?php
          }else{
            ?>
            <script>
              alert("Data  Not Inserted ");
            </script>
            <?php
          }
      }
    } catch(Exception $ex){
        echo 'Error insert'.$ex->getmessage();
    }
}


if(isset($_POST['update']))
{
    $data = getposts();

    if(isset($_FILES['img'])){
      $ext = explode(".",$data[3]);
      $cn = count($ext);
      if($ext[$cn-1]=='jpg' || $ext[$cn-1]=='png' || $ext[$cn-1]=='jpeg')

      $tmp = $_FILES['img'];
      move_uploaded_file($tmp,"uploads/".$data[3]);

    }

    $updatequery = "UPDATE product SET proid='$data[0]',productname='$data[1]',quantity='$data[2]' WHERE F_type='$data[3]'";
    try{
      $updateres = mysqli_query($con,$updatequery);
      if($updateres){
          if(mysqli_affected_rows($con)>0){
            ?>
            <script>
              alert("Data Updated Properly");
            </script>
            <?php
          }else{
            ?>
    <script>
      alert("Data Updated Properly");
    </script>
          <?php
          }
      }
    } catch(Exception $ex){
        echo 'Error update'.$ex->getmessage();
    }
}
?>



<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->




    <section class="content">
        <div class="container-fluid">
          <div class="row">
           <!-- left column -->
           <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Add Details </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="" method="POST" enctype="multipart/form-data">

                  <div class="card-body">
                    <div class="card-footer">
                      <label>Product Select</label>
                        <select class="form-control" name="ftype">
                          <option>---------</option>
                          <option>Fruit Name</option>
                          <option>Vegetable Name</option>
                        </select>
                      </div>
                      <div class="card-footer">
                        <label for="Id">Id</label>
                        <input type="Id" class="form-control" name="id" id="proid" placeholder="Enter Id">
                      </div>
                      <div class="card-footer">
                        <label for="name">Name</label>
                        <input type="name" class="form-control" name="name" id="productname" placeholder="Enter Product Name">
                      </div>
                      <div class="card-footer">
                       <label for="quantity">Quantity</label>
                       <input type="quantity" class="form-control" name="quantity" id="quantity" placeholder="Enter Quantity">
                      </div>
                      <div class="card-footer">
                        <label for="rant">Image</label>
                          <div class="custom-file">
                            <input type="file" class="form-control" name="img" id="rant" placeholder="Choose File">
                          </div>
                      </div>

                      <div class="card-footer">
                       <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                         <label class="form-check-label" for="exampleCheck1">Check me out</label>
                       </div>
                      </div>
                      <!-- /.card-body -->

                      <div class="card-footer">
                       <button type="submit" name="submit" class="btn btn-primary">Insert</button>
                       <button type="submit" name="update" class="btn btn-primary">Update</button>
                       <button type="submit" name="submit" class="btn btn-primary">Delete</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

</div>

      <?php
include('footer.php');
?>
