<?php
    require "global.php";

    if (isset($_POST['nome'])) $nome = test_input($_POST['nome']);
    if (isset($_POST['cognome'])) $cognome = test_input($_POST['cognome']);
    if (isset($_POST['email'])) $email = test_input($_POST['email']);
    if (isset($_POST['username'])) $username = test_input($_POST['username']);
    if (isset($_POST['passwd'])) $password = test_input($_POST['passwd']);

    $conn = new mysqli($serv, $user, $pass, $db);

    if ($conn->connect_error) 
        die("Connection Error");

    $sql = "SELECT username FROM Utenti WHERE username=" . "'" . $username . "';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<br>";
        echo "L'utente: " . $username . " già esiste";
        echo "<br><br>";
        echo "<a href=\"register.html\">Torna alla registrazione</a>";
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $insert =  $conn->prepare("INSERT INTO Utenti (nome, cognome, email, passwd, username, hash) values (?,?,?,?,?,?);");
        $insert->bind_param('ssssss', $nome, $cognome, $email, $password, $username, $hash);

        $insert->execute();
        $insert->close();

        echo "<br>";
        echo "Registrazione effettuata";
        echo "<br><br>";
        echo "<br><br><a href=\"../index.html\">Home page</a>";
    } 

        $conn->close();
    ?>