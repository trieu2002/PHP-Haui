<?php 
include "./db.php";
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    echo $id;
    $sql="delete from tblhouseHold where id=$id";
    $result=$connect->query($sql);
    if($result){
         echo "<script>alert('Xóa thành công')</script>";
         echo "<script>window.location.href='index.php'</script>";
    }
  }
?>