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
        <a href="./seller/sign_up.php" class="text-black text-decoration-none">Become a Seller</a>
    </div>
    <div class="col5 me-3">

        <?php

        if (isset($_SESSION['account_loggedin'])) {
        ?>
            <a href="./logout.php" class="text-black text-decoration-none">Log Out</a>

        <?php } ?>
    </div>
</div>