<nav class="navbar navbar-expand-sm">
            <div class="container-fluid">
                <div class="logo">
                    <img src="images/e.png" alt=""><h1>Chef</h1>
                    <button type='submit' name='submit'><img src="images/grocery-cart.png" alt=""></button>
                    <span class="add"><?php echo ((count($_SESSION['cart'])) - 1); ?></span>
                </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="conn.php">About Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id="product" href="#">Product</a>
                <ul class="prodUl"> 
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                </ul>
                </li>
            </ul>
            </div>

            <span class="d-flex">
                <input class="form-control me-3" id="searchbar" onkeyup="search()" type="text" placeholder="Search">
                <button class="btn" type="button" id="searchbtn">Search</button>
            </span>

</nav>
