$(document).ready(function() {
    $('#sku').on('input', function(){
        checkid();
    });

    $('#name').on('input', function(){
        checkname();
    });

    $('#price').on('input', function(){
        checkprice();
    });

    $('#selectType').on('input', function (){
        checktype();
    });

    $('#size').on('input', function(){
        checksize();
    }); 

    $('#weight').on('input', function(){
        checkweight();
    });

    $('#height').on('input', function(){
        checkheight();
    });

    $('#length').on('input', function(){
        checklength();
    });

    $('#width').on('input', function(){
        checkwidth();
    });

    $('#savebutton').click(function() {
        if(!checkid() && !checkname() && !checkprice() && !checktype() && (!checksize() || !checkweight() || !checkheight() || !checklength() || !checkwidth())) {
            console.log("er1");
            $('#savebutton').attr("disabled", true);

        }
        else if (checkid() && checkname() && checkprice() && checktype() && (checksize() || checkweight() || checkheight() || checklength() || checkwidth())) {
            $('#savebutton').attr("disabled", false);
            console.log("er"); 
        }
        else {
            console.log("ok");
            $("#message").html("");
            var form = $("#productform")[0];
            var data = new FormData(form);
            $.ajax({
                type: "POST",
                url: "save.php",
                data: data,
                processData: false,
                contentType: false, 
                cache: false,
                async: false, 
                
                beforeSend: function() {
                    $('#savebutton').html('<i class="fa-solid fa-spinner fa-spin"></i>');
                    $('#savebutton').attr("disabled", true);
                    $('#savebutton').css({ "border-radius": "50%" });
                },

                success: function(data) {
                    $('#message').html(data);
                },

                complete: function() {
                    setTimeout(function () {
                        $('#productform').trigger("reset");
                        $('#savebutton').html('Submit');
                        $('#savebutton').attr("disabled", false);
                        $('#savebutton').css({ "border-radius": "50%" });
                    }, 50000);
                }
            });
        }
    });

    function checkid() {
        var pattern = /^[0-9]+$/;
        var id = $('#sku').val();
        var validid = pattern.test(id);

        if ($('#sku').val().length < 1 ) {
            $('#sku_err').html('ID must be 1 to 8 digit long');
            $('#savebutton').attr("disabled", true);
            return false;
        } else if (!validid) {
            $('#sku_err').html('ID must be digits only!');  
            $('#savebutton').attr("disabled", true);          
            return false;
        }
        else {
            $('#sku_err').html('');
            return true;
        }
    }

    function checkname() {
        var name = $('#name').val();

        if(!name) {
            $('#name_err').html('Name is required');  
            $('#savebutton').attr("disabled", true);          
            return false;
        }
        else {
            $('#name_err').html('');
            $('#savebutton').attr("disabled", false); 
            return true;
        }

    }

    function checkprice() {
        var pattern = /^[0-9]*\.[0-9]{2}$/;
        var pattern2 = /^[0-9]+$/;
        var price = $('#price').val();
        var validprice = pattern.test(price);
        var validprice2 = pattern2.test(price);

        if (!validprice && !validprice2){
            $('#price_err').html('Price format must be 00.00 - digits only');  
            $('#savebutton').attr("disabled", true);          
            return false;
        }
        else {
            $('#price_err').html('');
            $('#savebutton').attr("disabled", false); 
            return true;
        }
    }

    function checksize() {
        var pattern = /^[0-9]*\.[0-9]{2}$/;
        var pattern2 = /^[0-9]+$/;
        var size = $('#size').val();
        var validsize = pattern.test(size);
        var validsize2 = pattern2.test(size);

        if (!validsize && !validsize2) {
            $('#size_err').html('Size format must be 00.00 - digits only');    
            $('#savebutton').attr("disabled", true);        
            return false;
        }
        else {
            $('#size_err').html('');
            $('#savebutton').attr("disabled", false); 
            return true;
        }
    }

    function checkweight() {
        var pattern = /^[0-9]*\.[0-9]{2}$/;
        var pattern2 = /^[0-9]+$/;
        var weight = $('#weight').val();
        var validweight = pattern.test(weight);
        var validweight2 = pattern2.test(weight);

        if (!validweight && !validweight2) {
            $('#weight_err').html('Weight format must be 00.00 - digits only');   
            $('#savebutton').attr("disabled", true);         
            return false;
        }
        else {
            $('#weight_err').html('');
            $('#savebutton').attr("disabled", false); 
            return true;
        }
    }

    function checkheight() {
        var pattern = /^[0-9]*\.[0-9]{2}$/;
        var pattern2 = /^[0-9]+$/;
        var height = $('#height').val();
        var validheight = pattern.test(height);
        var validheight2 = pattern2.test(height);

        if (!validheight && !validheight2){
            $('#height_err').html('Height format must be 00.00 - digits only');   
            $('#savebutton').attr("disabled", true);         
            return false;
        }
        else {
            $('#height_err').html('');
            $('#savebutton').attr("disabled", false); 
            return true;
        }
    }

    function checkwidth() {
        var pattern = /^[0-9]*\.[0-9]{2}$/;
        var pattern2 = /^[0-9]+$/;
        var width = $('#width').val();
        var validwidth = pattern.test(width);
        var validwidth2 = pattern2.test(width);

        if (!validwidth && !validwidth2) {
            $('#width_err').html('Width must be 00.00 - digits only'); 
            $('#savebutton').attr("disabled", true);           
            return false;
        }
        else {
            $('#width_err').html('');
            $('#savebutton').attr("disabled", false); 
            return true;
        }
    }

    function checklength() {
        var pattern = /^[0-9]*\.[0-9]{2}$/;
        var pattern2 = /^[0-9]+$/;
        var length = $('#length').val();
        var validlength = pattern.test(length);
        var validlength2 = pattern2.test(length);

        if (!validlength && !validlength2) {
            $('#length_err').html('Length format must be 00.00 - digits only'); 
            $('#savebutton').attr("disabled", true);           
            return false;
        }
        else {
            $('#length_err').html('');
            $('#savebutton').attr("disabled", false); 
            return true;
        }
    }
    
})