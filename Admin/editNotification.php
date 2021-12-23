<?php include "header.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Notification Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Notification Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="edit_Notification.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Notification</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <?php
                if(isset($_GET['id']))
                    $id = $_GET['id'];
                    $getnotificationById = $Notification->getNotificationById($id);
                    foreach($getnotificationById as $value):   
            ?>
            <div class="card-body">
                <div class="form-group">
                    <label for="inputName">value</label>
                    <input type="text" id="inputName" class="form-control" name="value" value="<?php echo $value['value'];?>">
                    <div class="form-group">
                        <label for="inputProjectLeader">Image</label>
                        <input type="file" class="form-control"  name="image" value="<?php echo $value['image'];?>">
                </div>
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