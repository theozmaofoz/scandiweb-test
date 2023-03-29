<?php session_start();
include 'DBController.php';
$db_handle = new DBController();
$conn = $db_handle->connectDB();
?>

<!DOCTYPE html>

<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Oz Flea Market </title>
        <link rel="stylesheet" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Source Sans Pro' rel='stylesheet'>

    </head>

    <body>
        <header>
            <div class="center">
                <h1> Flea Market of Oz </h1>
            </div>        
            
        </header>
        
        <div class="center">
            <form method="post">
                <button class="button addbutton" style="margin-right: 50px;" id="ADD" text="ADD" value="ADD" type="button" name="ADD" onclick="window.location.href='add_product.php'">ADD</button>
                <button class="button deletebutton" style="margin-right: 100px;" id="delete-product-btn" type="submit" name="mass_delete" onclick="window.location.href='delete.php'">MASS DELEATE</button>
        </div>       

            <div class="wrapper">
                

                <div id="gridview">
                    <?php 

                        $query = $db_handle->runQuery("SELECT * FROM product_list");                        
                        if(!empty($query)){
                            foreach($query as $key => $value) {
                                ?>                                    
                                    <div class="image">
                                        <img src="<?=$query[$key]['PIC'];?>">                                        
                                        <div class="product-info">
                                            <input class="delete-checkbox" id="delete-check" type="checkbox" name="delete_product[]" value="<?=$query[$key]['SKU'];?>">
                                            <div class="product-title">  <h2><?php echo $query[$key]["NAME"] ;?> </h2></div>
                                            <div>  <h2> <?php echo $query[$key]["PRICE"] ;?> EUR </h2> </div>
                                            <div> <h2> <?php echo $query[$key]["INFO"];?> </h2> </div>
                                        </div>
                                    </div>

                                    

                                <?php
                            }
                        }
                    ?>
                </div>
                
                </form>
            </div>
        
    </body>

    <script>
        fetch(url, {
            method: "get",
            headers: new Headers({
            "ngrok-skip-browser-warning": "69420",
            }),
        })
        .then((response) => response.json())
        .then((data) => console.log(data))
        .catch((err) => console.log(err));
    </script>
</html>