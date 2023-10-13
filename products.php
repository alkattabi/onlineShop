<!DOCTYPE html>
<html lang="en">  
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <style>
        h3{
            font-family: 'Cairo', sans-serif;
            font-weight: bold;
        }
        .card{
            float:right;
            margin-top: 20px;
            margin-right: 10px;
        }
        .card img{
            width: 250px;
            height: 100px;
        }
        main{
            width: 15%;
        }
       
    </style>
</head>
<body>
    <center>
        <h3>ADMIN CONTROL PANEL</h3>
    </center>
    <?php
    include('config.php');
    $result = mysqli_query($con, "SELECT * FROM prod");
    while($row = mysqli_fetch_array($result)){
        echo "
        <center>
        <main>
            <div class='card' style='width: 15rem;'>
               <img src='$row[image]' class='card-img-top'>
                <div class='card-body'>
                  <h5 class='card-title'>$row[name]</h5>
                  <p class='card-text'>$row[price]</p>
                  <a href='delete.php? id=$row[id]' class='btn btn-danger'>delete product</a>
                  <a href='update.php? id=$row[id]' class='btn btn-primary'>edit product</a>
                </div>
            </div>  
        </main>
    
        <center>
        ";
    }
    
    
    ?>





</body>
</html>