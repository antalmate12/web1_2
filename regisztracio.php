<?php
    if(isset($_POST['nev']) && isset($_POST['jelszo']) && isset($_POST['email']) && isset($_POST['kor'])) {
        try {
           
            $dbh = new PDO('mysql:host=localhost;dbname=zh', 'root', '',
                            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
            
           
            $sqlSelect = "select id from regisztracio where nev = :nev";
            $sth = $dbh->prepare($sqlSelect);
            $sth->execute(array(':nev' => $_POST['nev']));
            if($row = $sth->fetch(PDO::FETCH_ASSOC)) {
                $uzenet = "A név már foglalt!";
                $ujra = "true";
            }
            else {
                
                $sqlInsert = "insert into regisztracio(id, email, nev, jelszo, kor)
                              values(0, :email, :nev, :jelszo, :kor)";
                $stmt = $dbh->prepare($sqlInsert); 
                $stmt->execute(array(':email' => $_POST['email'], ':nev' => $_POST['nev'],
                                     ':jelszo' => sha1($_POST['jelszo']), ':kor' => $_POST['kor'])); 
                if($count = $stmt->rowCount()) {
                    $newid = $dbh->lastInsertId();
                    $uzenet = "A regisztrációja sikeres.<br>Azonosítója: {$newid}";                     
                    $ujra = false;
                }
                else {
                    $uzenet = "A regisztráció nem sikerült.";
                    $ujra = true;
                }
            }
        }
        catch (PDOException $e) {
            echo "Hiba: ".$e->getMessage();
        }      
    }
    else {
        header("Location: pelda.html");
    }


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Regisztráció</title>
        <meta charset="utf-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    </head>
    <body>
        <?php if(isset($uzenet)) { ?>
            <h1><?= $uzenet ?></h1>
            <?php if($ujra) { ?>
                <a href="index.php">Próbálja újra!</a>
            <?php } ?>
        <?php } ?>
    </body>  
</html>