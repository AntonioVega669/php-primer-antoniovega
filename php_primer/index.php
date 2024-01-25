<?php
 $title = "Index";
 include 'includes/header.php'
 ?>
    <!-- Basic HTML -->
    <h1>Hello Wolrd - PHP Primer</h1>

    <?php  
        //Priting to HTML using echo 
        echo "Hello PHP!";
        echo "<br/>";
        echo "Second line";
        echo "<br/>";
    
        //Declare variable
        $name = "Antonio Vega";
        $age = 20;
        //echo variable
        echo $name;
        echo "<h1>My Name Is: ".$name." <h1>";
        echo "<h1>My Age Is: ".$age." <h1>";
    ?>
    <button type="button" class="btn btn-dark">CLICK ME!</button>
<?php require 'includes/footer.php'?>