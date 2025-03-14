<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Product</title>
    <style>
        input {
            width: 100%;
            height: 40px;
            margin-bottom: 20px;
            padding: 10px;
            border: none;
            border-bottom: 1px solid #ccc;
        }

        .container {
            display: flex;
            margin: 0px;
            gap: 5%;
        }

        button {
            margin: 10px;
            padding: 20px;
            border: none;
            border-radius: 10px;
            background-image: linear-gradient(red, rgb(142, 225, 71));
            color: white;
            font-size: 20px;

        }

        .top {
            width: 100%;
            text-align: right;
            position: absolute;
        }

        a {
            text-decoration: none;
            color: white;
            font-size: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="top">
        <button>Add Product</button>
    </div>
    <div class="container">


        <div style="background-color: black; color:white; height:700px; width:450px; padding-left:30px; padding-top:100px;">
            <div>
                <img src="" alt="" width="300px" height="300" style="border-radius:50% ; border:2px solid white;">
            </div>
            <div>
                <a href="">Profile</a><br><br>
                <a href="">Order</a><br><br>
                <a href="">Prouct</a><br><br>
                <a href="">Add Product</a><br><br>
                <a href="">Logout</a>
            </div>
        </div>

        <div style="width: 400px; margin-top:100px; ">
            <form action="">
                <input type="text" name="product_name" placeholder="Product Name"><br>
                <input type="text" name="product_price" placeholder="Product Price"><br>
                <input type="text" name="product_quantity" placeholder="Product Quantity"><br>

                <input type="file" name="filename"><br>
                <input type="text" name="product_details" placeholder="Product Details"><br>
                <input type="submit" value="Add Product">
            </form>
        </div>
    </div>
</body>

</html>