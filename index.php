<!DOCTYPE html>
<html lang="en">  
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOPE ONLINE  | اضافة منتجات</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
            <img src="pngegg.png" alt="logo" width="Auto" >
                 <h2> ONLINE MARKING SITE </h2>   
                <input type="text" name="name" placeholder="product name">
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
                <br>
                <input type="text" name="price" placeholder="product price">
                <br>
                <input type="file" id="file" name="image" style="display: none;">
                <label for="file">Choose a picture of the product</label> 
                <br><br>          
                <button name='upload'>✅ Product upload</button>
                <br>
                <a href="products.php">ADMIN CONTROL PALNEL PRODUCTS</a>
            </form>
        </div>
        
        <p>Developer By KHATTABI</p>
    </center>
</body>
</html>