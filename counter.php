<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/checkout.css" />
    <?php
    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'songs');
    if (!$conn){
        echo 'connection error '. mysqli_connect_error();
    }else{
        // echo 'connect successfully!';
    }
    if (isset($_POST)){
        $_num = $_SESSION['key'] + 1;
        $sql = "SELECT * FROM bread WHERE id = '$_num'";
        $_SESSION['result'] = mysqli_query($conn, $sql);
        $_SESSION['selected'] = mysqli_fetch_all($_SESSION['result'], MYSQLI_ASSOC);
    }


    if (isset($_SESSION["mode"])){
        if ($_SESSION["mode"] == "light"){ ?>
        <link rel="stylesheet" href="style/light.css">
        <style>
                body{
                    background-color: rgb(249, 247, 244) !important;
                }
            </style>

        <?php 
        }else {?>
            <link rel="stylesheet" href="style/dark.css">
            <style>
                body{
                    background-color:#000 !important;
                }
            </style>

        <?php 
        }
    }else {?>
    <link rel='stylesheet' href='style/cart.css'>
    <?php 
    }
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@400;700&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        table{
            width:350px;
            padding:10px
            /* table-layout: fixed; */
        }
        .td1 {
            position: absolute;
            top: 10rem;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <div class="logo">
                <img src="images/e.png" alt=""><h1>Chef</h1>
                <button type='submit' name='submit'><img src="images/grocery-cart.png" alt=""></button>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="cart.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="conn.php">About Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Product</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container"> 
        <div class="d-flex cartcase justify-content-between mb-2" style="margin:0;">
        <!-- <div class="justify-content-between"> -->
                <div class="col-7">
                    <form method='POST' class="form-control" action='counter.php' onsubmit="preventDefault()" style="width:350px; padding-bottom:5.5rem; background-color:transparent; box-shadow:none;">
                        <table class="td1 card" style="background-color:rgb(232, 213, 187);">
                            <tr>
                                <td></td>
                                <td><b>Items<b></td>
                                <td><b>Price<b></td>
                                <td><b><b></td>
                                <td><b><b></td>
                            </tr>
                            <?php
                                $_total = 0;
                                $_SESSION['i'] = 0;
                                $_SESSION['j'] = 1;
                                if(!empty($_SESSION["cart"])) {
                                    foreach ($_SESSION['cart'] as $val){
                                        // echo '<td> <img src = "' . $val['images'] . '" style="height:40px;width:60px;"> </td><td>' . $val['name'] . '</td><td>' . $val['price'] . '</td><td>' .$_SESSION['j']. '</td><td><input type="submit" name="uncart'.$_SESSION['i'].'" value="-"></td><td><input type="submit" name="cart" value="+"></td></tr>';
                                        echo '<tr><td> <img src = "' . $val['images'] . '" style="height:40px;width:60px;"> </td><td>' . $val['name'] . '</td><td>' . $val['price'] . '</td><td>' .$_SESSION['j']. '</td><td><input type="submit" name="uncart" value="-"></td><td><input type="submit" name="cart" value="+"></td></tr>';

                                        echo "<br>";
                                        $_SESSION['i'] = array_search($val, $_SESSION['cart']);
                                        // $_SESSION['i']++;
                                        // $_SESSION['k'] = $_SESSION['i']++;

                                        echo "<br>";
                                        $_total += $val['price'];  
                                    }
                                    if (isset(($_POST['uncart']))){
                                        unset($_SESSION['cart'][$_SESSION['i']]);
                                        // remove();
                                    }
                                    if (isset(($_POST['cart']))){
                                        $_SESSION['cart'].$_SESSION['i'].$_SESSION['j'] += 1;
                                    }
                                }
                            ?>
                            <tr class=''>
                            <td></td>
                            <td>Total</td>
                            <td><?php echo $_total ?></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="col">
                    <form method='POST' action='counter.php' onsubmit="preventDefault()" style="background-color:transparent; border:1px solid #fff">
                        <div class="car">
                        <input type="submit" name="continue" value="Continue Shopping" onclick="preventdefault()">
                        <input type="submit" name="check" value="Check Out" onclick="preventdefault()">
                        </div>
                    </form>

                
                    <?php
                        if (isset($_POST['continue'])){
                            header("location: cart.php");
                        }
                        if (isset($_POST['check'])){
                            session_destroy();
                        }
                    ?>
                    <form method='POST' action='checkout.php' id="payment-form" onsubmit="preventDefault()" style="display:none; position:absolute; right:13.5%; margin-top:1rem;">
                        <div class="form-row">
                            <label for="card-element" class="form-label">Credit or Debit Card</label>
                            <div class="card-errors" role="alert"></div>
                        </div>
                            <div id="payment-element" class="form-control form-control-lg">
                            </div>
                            <div class="form-floating">
                            <input type="Email" name="email" placeholder="Email" id="floatingInput" class="form-control form-control-lg bg-light" onclick="preventdefault()">
                            <label for="floatingInput">Email</label>
                            </div>
                            <button id="submit" name="spin" style="width: 38%; margin-top:10px; border-radius:4px;">
                            <div class="spinner-border hidden text-warning" id="spinner" style="display:none;"> role="status">
                                <span class="visually-hidden" id="load">Loading...</span>
                            </div>
                            <span id="button-text">Proceed</span>
                            </button>
                        <div id="payment-message" class="hidden"></div>
                    </form>

                </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src='cart.js'></script>
<script>
    const btn = document.getElementById('btn');
    const check = document.querySelector("[name='check']");
    const checkform = document.querySelector('#payment-form');
    const spin = document.querySelector("[name='spin']");
    const cart = document.querySelector("[name='cart']");
    const uncart = document.querySelector("[name='uncart']");
    const load = document.querySelector("#spinner");
    const table = document.querySelector("table");
    count=0;
    check.addEventListener('click', (e) =>{
        count++;
        e.preventDefault();
        if (count%2 === 1) {
            checkform.style.display='block';
        }else{
            checkform.style.display='none';
        }
    })
    spin.addEventListener('click', (e) =>{
        e.preventDefault();
        count++;
        if (count%2 === 0) {
            load.style.display='block';
            // unload.style.display='block';
        }else{
            // unload.style.display='none';
            load.style.display='none';
        }
    })
    cart.addEventListener('submit', (e) =>{
        e.preventDefault();
    })
    uncart.addEventListener('submit', (e) =>{
        e.preventDefault();
    })
    table.addEventListener('onload', (e) =>{
        e.preventDefault();
    })



    btn.addEventListener('click', () => {
  const form = document.getElementById('form');
    

  if (form.style.display === 'none') {
    // 👇️ this SHOWS the form
    form.style.display = 'block';
  } else {
    // 👇️ this HIDES the form
    form.style.display = 'none';
  }
});
</script>
<script>
      if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
    }
  </script>
  <script src="https://js.stripe.com/v3/"></script>
 <script src="js/checkout.js" defer></script>
</body>
</html>
