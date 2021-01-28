<?php
    session_start();
    include('head.php');



    setcookie('user_find', 0, time() + 3600, "/" );
    setcookie('card_find', 0, time() + 3600, "/" );
?>


    


<?php
    include('foot.php'); 
?>