<?php
    session_start();
    $_SESSION['bread'] = [
        [
            'name' => 'white Bread',
            'price' => '1200',
            'quantity' => '10',
            'supply' => '1'
        ],
        [
            'name' => 'Browny Bread',
            'price' => '1500',
            'quantity' => '10',
            'supply' => '1'

        ],
        [
            'name' => 'Coconut Bread',
            'price' => '2000',
            'quantity' => '10',
            'supply' => '1'

        ],
        [
            'name' => 'Banana Bread',
            'price' => '1800',
            'quantity' => '10',
            'supply' => '1'

        ],
        [
            'name' => 'Bread Cube',
            'price' => '1800',
            'quantity' => '10',
            'supply' => '1'
        ],
        [
            'name' => 'Cheesy Bread',
            'price' => '1800',
            'quantity' => '10',
            'supply' => '1'
        ],
        [
            'name' => 'Chicken Bread',
            'price' => '1800',
            'quantity' => '10',
            'supply' => '1'

        ],
        [
            'name' => 'Sadien Bread',
            'price' => '1200',
            'quantity' => '10',
            'supply' => '1'

        ],
        [
            'name' => 'sacarra Bread',
            'price' => '1800',
            'quantity' => '10',
            'supply' => '1'

        ],
        [
            'name' => 'Chocolate Bread',
            'price' => '2000',
            'quantity' => '10',
            'supply' => '1'

        ],
        [
            'name' => 'Wheat Bread',
            'price' => '800',
            'quantity' => '10',
            'supply' => '1'

            ],
    
        [
            'name' => 'Olive Bread',
            'price' => '1400',
            'quantity' => '10',
            'supply' => '1'

        ],
        [
            'name' => 'Pineapple Bread',
            'price' => '1800',
            'quantity' => '10',
            'supply' => '1'

        ],
        [
            'name' => 'Rainbow Bread',
            'price' => '2500',
            'quantity' => '10',
            'supply' => '1'

        ],
        [
            'name' => 'Apple Bread',
            'price' => '1500',
            'quantity' => '5',
            'supply' => '1'

        ],
        [
            'name' => 'Peanut Bread',
            'price' => '2500',
            'quantity' => '10',
            'supply' => '1'

        ],
        [
            'name' => 'Hot Bread',
            'price' => '2000',
            'quantity' => '5',
            'supply' => '1'

        ],
        [
            'name' => 'Vanilla Bread',
            'price' => '1800',
            'quantity' => '10',
            'supply' => '1'

        ],
        [
        'name' => 'Weed Bread',
        'price' => '1800',
        'quantity' => '10',
        'supply' => '1'

        ],
        [
        'name' => 'Bun Bread',
        'price' => '850',
        'quantity' => '10',
        'supply' => '1'
        ],
        [
            'name' => 'Package',
            'price' => '000',
            'quantity' => '0',
            'supply' => '0'
            ]
    
        ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style/cart.css'>
    <link rel='stylesheet' href='style/calc.css'>
    <title>Home</title>
    <style>
        body {
            margin: 0;
            background: lightgray;
            text-align: center;
            font-family: sans-serif;
            color: rgb(194, 192, 190);
            /* text-shadow:1px 1px 1px solid black;*/
            /* background-Color: rgb(240, 148, 29); */
            background-Color: rgb(245, 176, 87);
            /* background-Color: rgb(251, 218, 186) ; */

        }
        .container {
            position: relative;
            width: 320px;
            margin: 100px auto 0 auto;
            perspective: 1000px;
        }
        .carousel {
            position: absolute;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d; 
            animation: rotate360 60s infinite forwards linear;
        }
        .carousel__face { 
            position: absolute;
            width: 300px;
            height: 187px;
            top: 20px;
            left: 10px;
            right: 10px;
            background-size: cover;
            box-shadow:inset 0 0 0 2000px rgba(0,0,0,0.5);
            display: flex;
        }      
        span {
            margin: auto;
            font-size: 2rem;
        }

        .carousel__face:nth-child(1) {
            background-image: url("images/peanut bread.jfif");
            transform: rotateY(  0deg) translateZ(430px); }
        .carousel__face:nth-child(2) { 
            background-image: url("images/cream bread.jfif");
            transform: rotateY( 40deg) translateZ(430px); }
        .carousel__face:nth-child(3) {
            background-image: url("https://images.pexels.com/photos/808466/pexels-photo-808466.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
            transform: rotateY( 80deg) translateZ(430px); }
        .carousel__face:nth-child(4) {
            background-image: url("images/cheesy Bread.jfif");
            transform: rotateY(120deg) translateZ(430px); }
        .carousel__face:nth-child(5) { 
            background-image: url("images/bread 15.jfif");
        transform: rotateY(160deg) translateZ(430px); }
        .carousel__face:nth-child(6) { 
            background-image: url("images/Bread cube.jpg");
        transform: rotateY(200deg) translateZ(430px); }
        .carousel__face:nth-child(7) { 
            background-image: url("https://images.pexels.com/photos/1394841/pexels-photo-1394841.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
        transform: rotateY(240deg) translateZ(430px); }
        .carousel__face:nth-child(8) {
            background-image: url("images/fruit mix.jfif");
            transform: rotateY(280deg) translateZ(430px); }
        .carousel__face:nth-child(9) {
            background-image: url("images/cart.png");
            transform: rotateY(320deg) translateZ(430px); }
        
    
        @keyframes rotate360 {
            from {
            transform: rotateY(0deg);
            }
            to {
            transform: rotateY(-360deg);
            }
        }
  
    </style>
</head>
<body>
<div class="container">
    <div class="carousel">
        <?php
        for ($_carokey = 0; $_carokey < 20; $_carokey++){
        ?>
        <div class="carousel__face"><span><?php echo $_SESSION['bread'][$_carokey]['name'];?> </span></div>
        <?php
        }
        ?>
    </div>
    <div class="">
    <form class="form-control" action="home.php" method="POST" id="homeForm" style="width:300%; display:block; position:absolute; right:-100%; left:-100%; color:#fff; text-shadow: 2px 2px 3px black; bottom:-600px;">
            <img src="images/e.png" alt="" style="width:20%; padding-bottom: 2rem;">
            <h1 style="font-size: 4rem;
            margin-bottom: 0;">Monk Concept</h1>
            <h2 style="font-size: 3rem;
            font-weight: 200;
            margin:-10px 0 10px 0;">You are welcome back to E-Bakery...</h2>
            <label style="margin-top: 10px;
            font-size:2rem;">Prefered mode</label>
            <input type="radio" name="mode" value="light" required>Light 
            <input type="radio" name="mode" value="dark" required>Dark
            <input type="submit" id="explore" name="explore" value="Explore" style="padding:5px 15px; outline:1px solid rgb(240, 148, 29); box-shadow: 1px 1px 2px black;;">
    </form>

        <?php
            $defaultMode;
            if (isset($_POST["explore"])){
                $_SESSION["mode"] = isset($_POST["mode"]) ? $_POST["mode"] : $defaultMode;
                header("Location: cart.php");
                exit;
            }
        ?>
    </div>
</div>
</body>
</html>