
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
</head>
<body>
    <div class="container">
        <form action="login.php" method="post">
        <h1>Home Page</h1>
        <!-- <input type="submit"> -->
        <button name="button1">Logout</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // $name = $_POST["username"];
            // $pass = $_POST["passwd"];
            
            // print_r($_SESSION);
            
            // if(isset($_SESSION['name']))
            // {
            //     $_SESSION["name"] = "Priyanka";
            //     $_SESSION["count"]++;
            // }
            $_SESSION["name"] = "Priyanka";
            $_SESSION["count"]++;
            echo 'Welcome '.$_SESSION["name"]."<br>";
            echo 'You visited '.$_SESSION["count"].' times';
        }
        ?>
        <?php
            function btnLog(){
                echo "Hello";
                if(isset($_SESSION['name']))
                {
                    unset($_SESSION['count']);
                }
    
                // unset($_SESSION['count']);
                // unset($_SESSION['name']);
                session_destroy();
            }
        ?>
        <?php
        if(isset($_POST['button1'])) {
            btnLog();
        }
        ?>
        
           
    </div>
</body>
</html>

<?php
       
        ?>
