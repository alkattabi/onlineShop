<!DOCTYPE html>
<html lang="en">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY CARD</title>
    <style>
        h3{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        main{
            width: 40%;
            margin-top: 30px;
        }
        table{
            box-shadow: 1px 1px 1px silver;
        }
        thead{
            background-color: #022F71;
            color: white;
            text-align: center;
        }
        tbody{
            text-align: center;
        }


    </style>
    </head>
    <body>

    <center>
    <h3>
        my reserved products
    </h3>
    </center>
        <?php
        include('config.php');
        $result = mysqli_query($con, "SELECT * FROM addcard");
        while($row =mysqli_fetch_array($result)){
            echo"
            <center>
            <main>
                <table class='table'>
                    <thead>
                        <tr>
                            <th scope='col'>product name</th>
                            <th scope='col'>product price</th>
                            <th scope='col'>delete product</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>$row[name]</td>
                            <td>$row[price]</td>
                            <td><a href='dele_card.php? id=$row[id]'class='btn btn-danger'>DELETE</a></td>
                        </tr>
                    </tbody>
                </table>
            </main>
        </center>"
        ;}?>
        <center>
            <a href="shop.php">back to products page</a>
        </center>
    </body>
</html>