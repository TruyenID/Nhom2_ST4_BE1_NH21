<?php 
session_start();
include "header.php";
require "models/billing.php";
include "libCart.php";
$billing = new Billing();
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
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
                      <th style="text-align: center;width: 20%;">Action</th>
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
                    <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="billing_detail.php?id_bill=<?php echo $value['id_bill']?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              View
                          </a>
                      </td>
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