<!DOCTYPE html>
<html lang="en">  
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <?php
    include('config.php');
    $ID=$_GET['id'];
    $up = mysqli_query($con, "select * from prod where id =$ID");
    $data = mysqli_fetch_array($up);
    ?>

    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
            <img src="edit.pic.png" alt="logo" width="Auto" >
                 <h2> Edit Product </h2>  
                 <style>
                    ::placeholder {
                        color: blue;    
       
                    }
                    input[type=text]{
                        padding: 12px;
                        border: 1px;
                        border: 4px solid #efc9af;
                        border-radius: 4px;
                        background-color: black;    
                        text-align: center;
                        font-weight: bold;
                    }   
                </style> 
                 <input type="text" name='id'  value='<?php echo $data['id']?>'
                 <br>
                <input type="text" name='name'  value='<?php echo $data['name']?>'
                <br>
                <input type="text" name="price"  value='<?php echo $data['price']?>'>
                <br>
                <input type="file" id="file" name="image" style="display: none;">
                <label for="file">Edit a picture of the product</label> 
                <br><br>          
                <button name='update'type='submit'>✅ Edit Product</button>
                <br>
                <a href="products.php">All Products</a>
            </form>
        </div>
        
        <p>Developer By KHATTABI</p>
    </center>
</body>
</html>