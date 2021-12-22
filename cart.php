<?php 
session_start();
include "header.php";
include "libCart.php";
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
                      <th style="width: 20%"> Name </th>
                      <th style="width: 15%">Image </th>
                      <th>Price</th>
                      <th style="width: 15%">Quantity </th>
                      <th style="text-align: center;width: 20%;">Action</th>
                  </tr>
              </thead>
              <tbody>
                  <?php showCart(); ?>
              </tbody>
          </table>
          <form action="checkout.php" method="post">
          <button class="primary-btn order-submit">Checkout</button> 
                  
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include "footer.html" ?>