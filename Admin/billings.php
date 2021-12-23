<?php 
include "header.php";
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Billings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Billings</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 20%">ID</th>
                      <th style="width: 15%">Last Name</th>
                      <th style="width: 15%">Fisrt Name </th>
                      <th style="width: 15%">Email </th>
                  </tr>
              </thead>
              <tbody>
                <?php
                    $getAllBilling = $billing->getAllBilling();
                    foreach($getAllBilling as $value):
                ?>
                <tr>
                    <td><?php echo $value['id_bill'] ?></td>
                    <td><?php echo $value['fname'] ?></td>
                    <td><?php echo $value['lname'] ?></td>
                    <td><?php echo $value['email'] ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include "footer.html" ?>