<?php

session_start();

// if (!isset($_SESSION['account_loggedin'])) {
//     header('Location: index.php');
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Flipkart</title>

    <link
        rel="stylesheet"
        href="./node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link
        rel="stylesheet"
        href="./node_modules/bootstrap-icons/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="./src/css/style.css" />

</head>

<body>
    <div class="d-flex m-4 row1">
        <div class="col1 me-3">
            <a href=""><img
                    src="https://static-assets-web.flixcart.com/batman-returns/batman-returns/p/images/fkheaderlogo_exploreplus-44005d.svg"
                    alt="LOGO" /></a>
        </div>
        <div class="col2 me-3">
            <input type="text" placeholder="Search for products, brands and more" />
        </div>
        <div class="col3 me-3 dropdown">
            <?php

            if (!isset($_SESSION['account_loggedin'])) {
            ?>
                <a
                    href="./login.php"
                    class="dropdown-toggle text-black text-decoration-none"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="bi bi-person-circle"></i>Login</a>
            <?php } else { ?>
                <a class="dropdown-item" href="./profile.php">My Profile</a> <?php } ?>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./sign_up.php">New Customer </a></li>
                <li><a class="dropdown-item" href="./profile.php">My Profile</a></li>
                <li><a class="dropdown-item" href="#">Order</a></li>
            </ul>
        </div>
        <div class="col4 me-3">
            <a href="" class="text-black text-decoration-none">Cart</a>
        </div>
        <div class="col5 me-3">
            <a href="" class="text-black text-decoration-none">Become a Seller</a>
        </div>
    </div>

    <div class="center">
        <div class="row2 d-flex align-items-center" style="justify-content: space-between;">
            <div class="card me-4 p-4">
                <img
                    src="https://rukminim2.flixcart.com/flap/128/128/image/29327f40e9c4d26b.png?q=100" />
                <a href="" class="text-black text-decoration-none">Kilos</a>
            </div>
            <div class="card me-4 p-4">
                <img
                    src="https://rukminim2.flixcart.com/flap/128/128/image/22fddf3c7da4c4f4.png?q=100" />
                <a href="" class="text-black text-decoration-none">Mobiles</a>
            </div>
            <div class="card me-4 p-4">
                <img
                    src="https://rukminim2.flixcart.com/fk-p-flap/128/128/image/0d75b34f7d8fbcb3.png?q=100" />
                <a href="" class="text-black text-decoration-none">Fashions</a>
            </div>
            <div class="card me-4 p-4">
                <img
                    src="https://rukminim2.flixcart.com/flap/128/128/image/69c6589653afdb9a.png?q=100" />
                <a href="" class="text-black text-decoration-none">Electronics</a>
            </div>
            <div class="card me-4 p-4">
                <img
                    src="https://rukminim2.flixcart.com/flap/128/128/image/ab7e2b022a4587dd.jpg?q=100" />
                <a href="" class="text-black text-decoration-none">Home & Furnitures</a>
            </div>
            <div class="card me-4 p-4">
                <img
                    src="https://rukminim2.flixcart.com/flap/128/128/image/29327f40e9c4d26b.png?q=100" />
                <a href="" class="text-black text-decoration-none">Appliances</a>
            </div>
            <div class="card me-4 p-4">
                <img
                    src="https://rukminim2.flixcart.com/flap/128/128/image/29327f40e9c4d26b.png?q=100" />
                <a href="" class="text-black text-decoration-none">Flight Booking</a>
            </div>
        </div>
    </div>

    <div class="row3">
        <h2>Best of Electronics</h2>
        <div class="d-flex" style="justify-content: space-between;">
            <div class="card">
                <img
                    src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcTcear0wwHxSxlR8tqqve9ebZ8DvRTXEIH4b1GEUIRxczhXcPzWUW8GUwPQ0tcuTiEZaO_xgGJcJalP0z8MqkDA01-Kvr9GcwUGkUrexqQLZI0mksTB-f6D" />
                <a href="" class="text-black text-decoration-none pt-4">Best Truewireless <br /><span><b>Grab Now</b></span></a>
            </div>

            <div class="card">
                <img
                    src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcS1Wi_vlAxD2rtIMF91ANMxIzLngalLLP1AsIFIpVGkaSWHLXhMTpGhYGJWBW4zotwSa7tMRb4IGYYkCQCzxfRZHfJvSo068PfSNNnzoPc" />
                <a href="" class="text-black text-decoration-none pt-4">Printer <br /><span><b>Start from 4999</b></span></a>
            </div>

            <div class="card">
                <img
                    src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRStcxBjBccFSxmyihO3oKMgdicvgfAqpqg5Yebrqa00N1acidt8yDCGiToQa7Hddf8IP6Y3-tWYjaR4CjXEmkri96x5QrIhDjvHTp5eLT0SrMRJXm1bKATx_4Vq-LMRPhfZyh_AMecUP4&usqp=CAc" />
                <a href="" class="text-black text-decoration-none pt-4">Camera <br /><span><b>Start From 9999</b></span></a>
            </div>

            <div class="card">
                <img
                    src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcT2v3Z_UZNrAy_pOLjNEJ6fEc4eeOmIrYJ8htKRPcWgeAoVKhu_xL8d6p30VoDjs0jvk2VTxcfbrk6vLU_FZO7BgbxhsUj57mbYco9GWEgcwQF9Y5nUaQmr" />
                <a href="" class="text-black text-decoration-none pt-4">Vivo Phones <br /><span><b>Start From 7999</b></span></a>
            </div>

            <div class="card">
                <img
                    src="https://static1.industrybuying.com/products/it-electronics/mobiles-accessories/smart-phones/ITE.SMA.923606743_1702534832022.webp" />
                <a href="" class="text-black text-decoration-none pt-4">I-kall Phones <br /><span><b>Start From 4999</b></span></a>
            </div>

            <div class="card">
                <img
                    src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTwJCeL3C_Kx22ybl0otDiZes8Ulr8ADBp-_jXQ8f81Hhl0DWJ4evuZiNjiuGpOrhWNtUbb9nn13YV1mjH8xfWz_QSktr84EbWw5Aa4vWJb_HYS5R0MSngz_A" />
                <a href="" class="text-black text-decoration-none pt-4">IPad <br /><span><b>Start From 49999</b></span></a>
            </div>

            <div class="card">
                <img
                    src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcROuClFjNJQlVsiI0nZRoKRmUg4P8LCbxthD9pig74oTG0GkBTPtBXmkxtHYbYdmxDhJ0tFEoxpDra_dSepjDw9_b_PWhrI-j407JS1MtnI0eZvBmkajoQW5g" />
                <a href="" class="text-black text-decoration-none pt-4">Head Phone <br /><span><b>Start From 1099</b></span></a>
            </div>
        </div>
    </div>

    <div class=" row4 ">
        <div class="d-flex">
            <div class="r4c1 ">
                <div class="headi">
                    <h1>Season's Top Picks</h1>
                </div>
                <div class="d-flex">
                    <div>
                        <div class="card">
                            <img
                                src="./Assets/Screenshot 2025-02-23 at 5.44.53 PM.png"
                                alt="" />
                            <a href="" class="text-black text-decoration-none pt-4">Dry Fruit, Nut & Seed</a>
                        </div>
                        <div class="card">
                            <img
                                src="./Assets/Screenshot 2025-02-23 at 5.45.08 PM.png"
                                alt="" />
                            <a href="" class="text-black text-decoration-none pt-4">Women's Gowns</a>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <img
                                src="./Assets/Screenshot 2025-02-23 at 5.45.22 PM.png"
                                alt="" />
                            <a href="" class="text-black text-decoration-none pt-4">Clocks</a>
                        </div>
                        <div class="card">
                            <img
                                src="./Assets/Screenshot 2025-02-23 at 5.45.35 PM.png"
                                alt="" />
                            <a href="" class="text-black text-decoration-none pt-4">Women's Sarees</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="r4c2">
                <img src="./Assets/r4c2.png" alt="" height="650" width="1000" />
            </div>
        </div>
    </div>
    </div>

    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>