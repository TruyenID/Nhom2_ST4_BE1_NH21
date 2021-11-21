<?php include "header.php" ?>
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
                      <th style="width: 1%">
                          ID
                      </th>
                      <th style="width: 20%"> Name </th>
                      <th style="width: 15%">Image </th>
                      <th>Price</th>
                      <th style="width: 7%">Manufacture</th>
                      <th style="width: 7%">Protype</th>
                      <th style="width: 30%">Decription</th>
                      <th style="text-align: center;width: 20%;">Action</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                    $getAllProducts = $product->getAllProducts();
                    foreach($getAllProducts as $value):
                  ?>
                  <tr>
                      <td><?php echo $value['id'] ?></td>
                      <td><a><?php echo $value['name']?></a><br/></td>
                      <td><img src="./img/<?php echo $value['image']?>" alt="loi" style="width:80px" ></td>
                      <td class="project_progress"><?php echo number_format($value['price'])?> VND</td>
                      <td class="project-state"><?php echo $value['manu_name'] ?></td>
                      <td class="project-state"><?php echo $value['type_name'] ?></td>
                      <td class="project-state"><?php echo substr($value['description'],0,50)?></td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $value['id']?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
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