<?php

include 'cd.php';
include 'book.php';
include 'furniture.php';
include 'db_connection.php';
$conn = OpenCon();


// include 'DBController.php';
// $db_handle = new DBController();


    if(isset($_POST['savebutton'])){

        switch($_POST['selectType'])
        {
            case 'cd':

            if(isset($_POST['product_id']) || isset($_POST['product_name']) || isset($_POST['product_price']) || isset($_POST['product_size'])) {
                
                // new object from form 
                $cd = new CD();
                $cd->set_name($_POST['product_name']);
                $cd->set_id($_POST['product_id']);
                $cd->set_price($_POST['product_price']);
                $cd->set_size($_POST['product_size']);
                $size = "Size: ".$cd->size." MB";
            
                if(isset($_POST['product_id']) && isset($_POST['product_name']) && isset($_POST['product_price']) && isset($_POST['product_size'])) {
                    
                    //test if product already in db
                    $in_db = true;
                    $result = $conn->query("SELECT * from `product_list`");
                    foreach ($result as $r) {
                        if($r["SKU"] == $cd->id) {
                            $in_db = false;
                        }
                    }
                    $result->free();
            
                    if($in_db) {
                        $stmt = $conn->prepare("INSERT INTO `product_list`(`TYPE`,`SKU`, `NAME`, `PRICE`, `INFO`, `PIC`) VALUES (?,?,?,?,?,?)");
                        $stmt->bind_param("ssssss", $cd->type, $cd->id, $cd->name, $cd->price, $size, $cd->pic);
                        $stmt->execute();
                        $stmt->close();
                        ?>
                        <script type="text/javascript"> window.location.href = "index.php" </script>
                        <?php
                        return;
                        
                    }
                    elseif(!$in_db) {
                        //product exists 
                        ?> 
                        <div class="center">
                            <h2> Product is already in database! Try again! </h2>
                        </div>
                        <?php
                        
                    }
                    else {
                        ?> 
                        <div class="center">
                            <h1> Please, submit required data </h1>
                        </div>
                        <?php
                    }
                }                
            }
            else {
                ?> 
                    <div class="center">
                        <h1> Please, provide the data of indicated type </h1>
                    </div>
                <?php
            }
            break;

        
        


            case 'book':
            if(isset($_POST['product_id']) || isset($_POST['product_name']) || isset($_POST['product_price']) || isset($_POST['product_weight'])) {
                
                // new object from form 
                $book = new Book();
                $book->set_name($_POST['product_name']);
                $book->set_id($_POST['product_id']);
                $book->set_price($_POST['product_price']);
                $book->set_weight($_POST['product_weight']);
                $weight = "Weight: ".$book->weight." grams";
            
                if(isset($_POST['product_id']) && isset($_POST['product_name']) && isset($_POST['product_price']) && isset($_POST['product_weight'])) {
                    
                    //test if product already in db
                    $in_db = true;
                    $result = $conn->query("SELECT * from `product_list`");
                    foreach ($result as $r) {
                        if($r["SKU"] == $book->id) {
                            $in_db = false;
                        }
                    }
                    $result->free();
            
                    if($in_db) {
                        $stmt = $conn->prepare("INSERT INTO `product_list`(`TYPE`,`SKU`, `NAME`, `PRICE`, `INFO`, `PIC`) VALUES (?,?,?,?,?,?)");
                        $stmt->bind_param("ssssss", $book->type, $book->id, $book->name, $book->price, $weight, $book->pic);
                        $stmt->execute();
                        $stmt->close();
                        ?>
                        <script type="text/javascript"> window.location.href = "index.php" </script>
                        <?php
                        return;
                        
                    }
                    elseif(!$in_db) {
                        //product exists 
                        ?> 
                        <div class="center">
                            <h2> Product is already in database! Try again! </h2>
                        </div>
                        <?php
                        
                    }
                    else {
                        ?> 
                        <div class="center">
                            <h1> Please, submit required data </h1>
                        </div>
                        <?php
                    }
                }                
            }
            else {
                ?> 
                    <div class="center">
                        <h1> Please, provide the data of indicated type </h1>
                    </div>
                <?php
            }
            break;


            case 'furniture':
            if(isset($_POST['product_id']) || isset($_POST['product_name']) || isset($_POST['product_price']) || isset($_POST['product_height']) || isset($_POST['product_width']) || isset($_POST['product_length'])) {
                
                // new object from form 
                $fr = new Furniture();
                $fr->set_name($_POST['product_name']);
                $fr->set_id($_POST['product_id']);
                $fr->set_price($_POST['product_price']);
                $fr->set_height($_POST['product_height']);
                $fr->set_width($_POST['product_width']);
                $fr->set_length($_POST['product_length']);
                $fr_dim = "Dimensions: ".$fr->height."x".$fr->width."x".$fr->length." cm";

            
                if(isset($_POST['product_id']) && isset($_POST['product_name']) && isset($_POST['product_price']) && isset($_POST['product_height']) && isset($_POST['product_width']) && isset($_POST['product_length'])) {
                    
                    //test if product already in db
                    $in_db = true;
                    $result = $conn->query("SELECT * from `product_list`");
                    foreach ($result as $r) {
                        if($r["SKU"] == $fr->id) {
                            $in_db = false;
                        }
                    }
                    $result->free();
            
                    if($in_db) {
                        $stmt = $conn->prepare("INSERT INTO `product_list`(`TYPE`,`SKU`, `NAME`, `PRICE`, `INFO`, `PIC`) VALUES (?,?,?,?,?,?)");
                        $stmt->bind_param("ssssss", $fr->type, $fr->id, $fr->name, $fr->price, $fr_dim, $fr->pic);
                        $stmt->execute();
                        $stmt->close();
                        ?>
                        <script type="text/javascript"> window.location.href = "index.php" </script>
                        <?php
                        return;
                        
                    }
                    elseif(!$in_db) {
                        //product exists 
                        ?> 
                        <div class="center">
                            <h2> Product is already in database! Try again! </h2>
                        </div>
                        <?php
                        
                    }
                    else {
                        ?> 
                        <div class="center">
                            <h1> Please, submit required data </h1>
                        </div>
                        <?php
                    }
                }                
            }
            else {
                ?> 
                    <div class="center">
                        <h1> Please, provide the data of indicated type </h1>
                    </div>
                <?php
            }
            break;



        }
    }
?>