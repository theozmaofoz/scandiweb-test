<?php 
include 'index.php';
session_start();

if(isset($_POST['delete_button'])) {
    $all_id = $_POST['delete_product'];
    $ext = implode(',', $all_id);
    $query = "DELETE FROM product_list WHERE SKU IN($ext)";
    $run = mysqli_query($conn, $query);    
}
?>
<script type="text/javascript"> window.location.href = "index.php" </script>