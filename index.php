<?php
    $db = "bd_resto";
    $statement = "INSERT INTO reservation (nom,numero,guest) VALUES(?,?,?)";

    if (empty($_POST['nom']) || empty($_POST['numero']) || empty($_POST['personne'])) {
        echo '<script>alert("Enter all the informations")</script>';
        echo'<script>window.history.back();</script>';
    }else{
        $array[0] = strtolower($_POST['nom']);
        $array[1]= strtolower($_POST['numero']);
        $array[2] = strtolower($_POST['personne']);
        if ($array[1]<0 || $array[2]<0) {
            echo '<script>alert("Don\'t Enter a number Lower than 0")</script>';
            echo'<script>window.history.back();</script>';
        }else{
            try {
                $conn = new PDO('mysql:dbname='.$db.';host=127.0.0.1','root','');
            } catch (\Throwable $th) {
                $th->getMessage();
            }

            $requete = $conn->prepare($statement);
            $insert = $requete->execute($array);
            if ($insert) {
                echo '<script>alert("Insertion Successfuled!!")</script>';
                echo'<script>window.history.back();</script>';
            }else{
                echo '<script>alert("Insertion Failed")</script>';
            }
        }
    }