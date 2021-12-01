<?php include "header.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="edit.php" method="post" enctype="multipart/form-data">
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
            <?php
                if(isset($_GET['id']))
                    $id = $_GET['id'];
                    $getProductById = $product->getProductById($id);
                    foreach($getProductById as $value):
                    
            ?>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" id="inputName" class="form-control" name="name" value = "<?php echo $value['name']?>">
              </div>
              <div class="form-group">
                <label for="inputStatus">Manufactures</label>
                <select id="inputStatus" class="form-control custom-select" name="manu">
                  <?php
                  $getAllManus = $manu->getAllManus();
                  foreach($getAllManus as $value1):
                    if($value1['manu_id'] == $value['manu_id']):
                    
                  ?>
                  <option selected value="<?php echo $value1['manu_id']?>">
                    <?php echo $value1['manu_name'];?>
                  </option>
                  <?php
                    else:
                  ?>
                  <option value="<?php echo $value1['manu_id']?>">
                    <?php echo $value1['manu_name'];?>
                  </option>
                  <?php endif; endforeach ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Prototype</label>
                <select id="inputStatus" class="form-control custom-select"  name="type">
                  <?php
                  $getAllProtype = $protype->getAllProtype();
                  foreach($getAllProtype as $value2):
                    if($value2['type_id'] == $value['type_id']):
                  ?>
                  <option selected value="<?php echo $value2['type_id']?>">
                    <?php echo $value2['type_name']?>
                  </option>
                  <?php
                    else:
                  ?>
                  <option value="<?php echo $value2['type_id']?>">
                    <?php echo $value2['type_name']?>
                  </option>
                  <?php endif; endforeach ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Price</label>
                <input type="text" id="inputClientCompany" class="form-control"  
                name="price" value="<?php echo $value['price'];?>">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Image</label>
                <input type="file" class="form-control"  name="image">
              </div>
              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea id="inputDescription" class="form-control" rows="4"  name="des" value=""><?php echo $value['description']?></textarea>
              </div>
              <input type="hidden" name="hidden_id" value="<?php echo $value['id'];?>">
            </div>
            <?php endforeach; ?>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <input name="submit" type="submit" value="Edit" class="btn btn-success float-right">
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include "footer.html" ?>
