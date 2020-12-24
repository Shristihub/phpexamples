<?php
         session_start();
        $name = $_SESSION["username"];
        $message = $_SESSION["msg"];
        $greet = $_SESSION["greetings"];
        $user = $_SESSION["user"];
?>
    <h2><?php echo $message; ?>  </h2>
    <h2><?php echo $greet; ?>  </h2>
    <h2><?php echo $user->get_name(); ?>  </h2>
    <h2>Welcome <?php  echo $name; ?> </h2>

 <?php  ?>