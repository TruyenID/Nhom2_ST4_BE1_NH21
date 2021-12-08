<?php 
session_start();
include "header.php";
if(!isset($_SESSION['whist'])) $_SESSION['whist'] = [];

//xoa sp
  if(isset($_GET['delid']) && ($_GET['delid'] >= 0)) {
    array_splice($_SESSION['whist'],$_GET['delid'],1);
  }
if(isset($_GET['id'])){
  $id = $_POST['hidden_id'];
  $name = $_POST['hidden_name'];
  $image = $_POST['hidden_image'];
  $price = $_POST['hidden_price'];
  //kiem tra sp co trung trong gio hang hay k
  $flag=0;

  for($i = 0; $i < sizeof($_SESSION['whist']); $i++){
    if($_SESSION['whist'][$i][0]==$id){
      $flag=1;
      $idNew = $_SESSION['whist'][$i][0];
      $_SESSION['whist'][$i][0]=$idNew;
      break;
    }
  }
  //neu ko trung thi them moi
  if($flag==0){
     //them moi sp vao whist
    $pd = [$id,$name,$image,$price];
    $_SESSION['whist'][]= $pd;
  }
}
function showWhistList(){
  if($_SESSION['whist'] && (is_array($_SESSION['whist']))){
    for($i = 0; $i < sizeof($_SESSION['whist']); $i++){
      echo '<tr>
            <td>'.$_SESSION['whist'][$i][0].'</td>
            <td>'.$_SESSION['whist'][$i][1].'</td>
            <td><img src="./img/'.$_SESSION['whist'][$i][2].'" alt="loi" style="width:80px" ></td>
            <td class="project_progress">'.number_format($_SESSION['whist'][$i][3]).' VND</td>      
            <td class="project-actions text-right">
            <a class="btn btn-danger btn-sm" href="whistlist.php?delid='.$i.'">
              <i class="fas fa-trash">
              </i>
              Delete
            </a>
            </td>
            </tr>'; 
      }
    }            
  }
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
                      <th style="width: 20%"> ID </th>
                      <th style="width: 20%"> Name </th>
                      <th style="width: 15%">Image </th>
                      <th>Price</th>
                      <th style="text-align: center;width: 20%;">Action</th>
                  </tr>
              </thead>
              <tbody>
                  <?php showWhistList(); ?>   
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