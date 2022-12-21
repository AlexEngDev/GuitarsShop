<?php
    session_start();
    if (isset($_SESSION['username'])) {
        unlink($_SESSION["filename"]);
        session_unset();
        setcookie("user", '', time() - 3600, '/');
        session_destroy();
        
        echo "<br><br>";
        echo "Utente scollegato";
        echo "<br><br>";
        echo "<a href=\"index.php\">Torna alla home page</a>";
       
    }


?>