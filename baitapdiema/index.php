<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_detal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_cart.css">
    <link rel="stylesheet" href="css/style_ads.css">
    <link rel="stylesheet" href="css/dangnhap.css">
    <link rel="stylesheet" href="css/dangky.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <title>Shop</title>
</head>
<body>
    <div class="wrapper">
        <?php
        session_start();
        
        include("admincp/config/connect.php");
        // include("pages/header.php");
        include("pages/menu.php");
        include("pages/main.php");
        
        include("pages/show_product.php");
        include("pages/footer.php");

        ?>
    </div>
       
   

</body>
<script type="text/javascript" src="js/modal.js"></script>
</html>