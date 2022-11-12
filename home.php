<?php
session_start();
// $_SESSION["uid"];
// $_SESSION["mode"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel='stylesheet' href='style/calc.css'>
</head>
<body>
    <div class="container2">
        <video autoplay muted loop id="myVideo">
            <source src="images/creative video.mp4" type="video/mp4">
        </video>          
        <form action="home.php" method="POST" id="homeForm">
            <h1>Monk Concept</h1>
            <h2>You are welcome back to E-Bakery...</h2>
            <label for="uid">Nickname</label><input type="text" name="uid" required>
            <label>Prefered mode</label>
            <input type="radio" name="mode" value="light" required>Light 
            <input type="radio" name="mode" value="dark" required>Dark
            <label>would you like to explore now ?</label>
            <input type="radio" name="explore" value="yes">Yes
            <input type="radio" name="explore" value="no">No
            <input type="submit" id="explore" name="explore" value="Explore" >
        </form>

        <!-- <div class="iform">
        </div> -->
        <?php
            $defaultMode;
            if (isset($_POST["explore"])){
                $_SESSION["uid"]= isset($_POST["uid"]) ? $_POST["uid"] : $defaultName;
                $_SESSION["mode"] = isset($_POST["mode"]) ? $_POST["mode"] : $defaultMode;
                header("Location: cart.php");
                exit;
            }
        ?>
    </div>
    <!-- <script>
        count = 0;
        let explore = document.getElementById('explore');
        let iform = document.getElementById('iform');
        explore.addEventListener('click', show);
        function show(){
            count += 1;
            if (count%2 != 0){
                iform.style.display = 'block';
            }else{
                iform.style.display = 'none';
            }
        }
    </script> -->
</body>
</html>