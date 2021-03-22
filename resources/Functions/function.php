<?php
    include 'db_connection.php';    

        function query($statement){
            global $sth;
            global $pdo;
            $sth = $pdo->prepare($statement);
            $sth->execute();
            $data = $sth->fetchAll();
            return $data;
        }

        function Amount($column, $name, $table){
            global $sth;
            global $pdo;
            $sth = $pdo->prepare("SELECT count({$column}) AS {$name} FROM {$table}");
            $sth->execute();
            $count = $sth->fetch();
            return $count["{$name}"];
        } 

        function selectAll($table){
            global $sth;
            global $pdo;
            $sth = $pdo->prepare("SELECT `avatar`, `health`, `bio`, `color`, `attack`, `defense`, `weapon`, `armor`FROM {$table}");
            $sth->execute();
            $data = $sth->fetchAll();
            return $data;
        }

        function selectIndivual($table, $id){
            global $sth;
            global $pdo;
            $sth = $pdo->prepare("SELECT `avatar`, `health`, `bio`, `color`, `attack`, `defense`, `weapon`, `armor`FROM {$table} where id='{$id}'");
            $sth->execute();
            $data = $sth->fetch(PDO::FETCH_ASSOC);
            // print_r($data);
            return $data;
        }

        // $arrayName = selectIndivual("characters", "1");
        // echo Amount("id", "aantal", "characters");

        // $test = selectAll("characters");
        // echo $test[0]['avatar'];
       


        
?>