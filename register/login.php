<?php
    require "global.php";

    if (isset($_POST['username'])) $username = test_input($_POST['username']);
    if (isset($_POST['passwd'])) $passwd = test_input($_POST['passwd']);

    $conn = new mysqli($serv, $user, $pass, $db);

    if ($conn->connect_error) 
        die("Connection Error");

    $sql = "SELECT * FROM utenti WHERE username=" . "'" . $username . "';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_array(MYSQLI_NUM);
        
        if(password_verify($passwd, $row[6])) {
            session_start();
            $_SESSION['username'] = $row[5];
            $_SESSION['nome'] = $row[1];
            $_SESSION['cognome'] = $row[2];
            setcookie("user", $row[5], time() + 3600, '/');
            echo "<br>";
            echo htmlspecialchars("$row[1] $row[2]: Welcome $row[1]");
            echo "<br><br>";
            echo "<br><br><a href=\"../index.html\">Home page</a>";
        } else {
            echo "<br>";
            echo "Utente o password errati <br><br>";
            echo "<a href=\"login.html\">Torna al login</a>";
        }
    } else {
        echo "<br>";
        echo "L'utente " . $username . " non esiste <br><br>";
        echo "<a href=\"login.html\">Torna al login</a>";
    }

    $result->close();
    $conn->close();
?>