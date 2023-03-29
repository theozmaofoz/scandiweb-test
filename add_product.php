<?php 
include 'save.php';
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Oz Flea Market </title>
        <link rel="stylesheet" href="style.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="validation.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>

    <body>
        <header>
            <div class="center">
                <h1> Flea Market of Oz </h1>
            </div>          
            
        </header>
        <div class="wrapper">
        <br>
        <legend class="center">Fill the form to add product</legend>
        <br>
        
        <form class="form-horizontal" id="productform" method="POST" enctype="multipart/form-data"> 
            <fieldset>

                <!-- ID -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="product_id">ID</label>  
                    <div class="col-md-4">
                    <input id="sku" name="product_id" placeholder="Please, enter 8 digit ID number" class="form-control input-md" required="" type="text" maxlength="8">
                    <span class="error" id="sku_err"></span>
                    </div>
                </div>
                
                <!-- name -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="product_name">NAME</label>  
                    <div class="col-md-4">
                    <input id="name" name="product_name" placeholder="Please, enter product's name" class="form-control input-md" required="" type="text">
                    <span class="error" id="name_err"></span>
                    </div>
                </div>

                <!-- price -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="product_name_fr">PRICE</label>  
                    <div class="col-md-4">
                    <input id="price" name="product_price" placeholder="Please, enter product's price in EUR" class="form-control input-md" required="" type="text">
                    <span class="error" id="price_err"></span>
                    </div>
                </div>

                <!-- type switcher -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="product_categorie">PRODUCT CATEGORY</label>
                    <div class="col-md-4">
                    <select name="selectType" id="selectType" class="form-control">  
                        <option value="nth"> -- </option>
                        <option value="cd"> CD </option>
                        <option value="book"> Book </option>
                        <option value="furniture"> Furniture </option>  
                    </select>
                    </div>
                </div>

                <!-- changing product info with switcher -->
                <script>
                    $(document).ready(function(){
                        $('#selectType').change(function(){
                            $('[name="keycategory[]"]').prop('disabled', false);
                            selection = $(this).val();
                            switch(selection)
                            {
                                case 'cd':
                                    $('#cd').show();
                                    $('#book').hide();
                                    $('#furniture').hide();
                                    $('#furniture2').hide();
                                    $('#furniture3').hide();
                                    $('#book[name="keycategory[]"]').prop('disabled', true);
                                    $('#furniture[name="keycategory[]"]').prop('disabled', true);
                                    $('#furniture2[name="keycategory[]"]').prop('disabled', true);
                                    $('#furniture3[name="keycategory[]"]').prop('disabled', true);
                                    break;
                                case 'book':
                                    $('#cd').hide();
                                    $('#book').show();
                                    $('#furniture').hide();
                                    $('#furniture2').hide();
                                    $('#furniture3').hide();
                                    $('#cd[name="keycategory[]"]').prop('disabled', true);
                                    $('#furniture[name="keycategory[]"]').prop('disabled', true);
                                    $('#furniture2[name="keycategory[]"]').prop('disabled', true);
                                    $('#furniture3[name="keycategory[]"]').prop('disabled', true);
                                    break;
                                case 'furniture':
                                    $('#cd').hide();
                                    $('#book').hide();
                                    $('#furniture').show();
                                    $('#furniture2').show();
                                    $('#furniture3').show();
                                    $('#book[name="keycategory[]"]').prop('disabled', true);
                                    $('#cd[name="keycategory[]"]').prop('disabled', true);
                                    break;  
                                default:


                            }
                        });
                    });
                </script>


                <!-- product info based on switcher -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="product_categorie">PRODUCT INFO</label>
                    <div class="col-md-4">
                        <div id="cd" style="display:none">
                        <input type="text" id="size" name="product_size" placeholder="Please, eneter size in MB" class="form-control input-md">
                        <span class="error" id="size_err"></span>
                        </div>

                        <div id="book" style="display:none">
                        <input type="text" id="weight" name="product_weight" placeholder="Please, enter weight in grams" class="form-control input-md">
                        <span class="error" id="weight_err"></span>
                        </div>

                        <div id="furniture" style="display:none">
                        <input type="text" id="height" name="product_height" placeholder="Please, enter height in cm" class="form-control input-md">
                        <span class="error" id="height_err"></span>
                        <br>
                        </div>

                        <div id="furniture2" style="display:none">
                        <input type="text" id="width" name="product_width" placeholder="Please, eneter width in cm" class="form-control input-md">
                        <span class="error" id="width_err"></span>
                        <br>
                        </div>

                        <div id="furniture3" style="display:none">
                        <input type="text" id="length" name="product_length" placeholder="Please, enter length in cm" class="form-control input-md">
                        <span class="error" id="length_err"></span>
                        </div>

                    </div>
                </div>
                
                

                <!-- save button -->
                <br>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"></label>
                    <div class="center">
                    <div class="col-md-4">
                    <button type="submit"id="savebutton" name="savebutton" class="button addbutton">SAVE</button>

                    </div>
                    </div>
                </div>



            </fieldset>
        </form>
        <div class="center">
            <a href="index.php"><button name="cancelbutton" class="button deletebutton">CANCEL</button></a>
        </div>
        </div>
    </body>
</html>







