<?php
    $title = "For Loops";
    include 'includes/header.php'
?>
    <h1>For Loops</h1>
    <?php
        // For Loops
        for($count = 0; $count < 10; $count++){
            echo '<p>HELLO WOLRD</p>';
        }
        
        for($count = 0; $count < 10; $count++){
            echo"<p>The count is: $count</p>";
        }
    ?>
    <?php require 'includes/footer.php'?>