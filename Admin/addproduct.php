<?php include "header.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Products Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="add.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" id="inputName" class="form-control" name="name" required>
              </div>
              <div class="form-group">
                <label for="inputStatus">Manufactures</label>
                <select id="inputStatus" class="form-control custom-select" name="manu" required>
                  <option selected disabled>Select one</option>
                  <?php
                  $getAllManus = $manu->getAllManus();
                  foreach($getAllManus as $value):
                  ?>
                  <option value=<?php echo $value['manu_id']?>>
                    <?php echo $value['manu_name']?>
                  </option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Prototype</label>
                <select id="inputStatus" class="form-control custom-select"  name="type">
                  <option selected disabled>Select one</option>
                  <?php
                  $getAllProtype = $protype->getAllProtype();
                  foreach($getAllProtype as $value):
                  ?>
                  <option value=<?php echo $value['type_id']?>>
                    <?php echo $value['type_name']?>
                  </option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Price</label>
                <input type="text" id="inputClientCompany" class="form-control"  name="price" required>
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Image</label>
                <input type="file" class="form-control" id="test_input" name="image">
                <button  class="btn btn-success" id="test_button">Check file</button>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script>
                  $(document).ready(function(){
                    $("#test_button").click(function() {
                    var test_value = $("#test_input").val();
                    var extension = test_value.split('.').pop().toLowerCase();
                    if ($.inArray(extension, ['png', 'gif', 'jpeg', 'jpg','jfif']) == -1) {
                    alert("File invalid!, please choose image file");
                    return false;
                    } else {
                    alert("File valid!");
                    return false;
                    }
                    });
                    });
                </script>
              </div>
              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea id="summernote" class="form-control" rows="4"  name="des"></textarea>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <input name="submit" type="submit" value="Create new Product" class="btn btn-success float-right">
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include "footer.html" ?>
