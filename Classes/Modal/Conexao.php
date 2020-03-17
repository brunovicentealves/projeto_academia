<?php
         $user = 'sql10328288';
         $pass = 'vPXK8VxsuN';
         try {

          return $pdo =  new PDO('mysql:host=sql10.freemysqlhosting.net;dbname=sql10328288', $user, $pass);
         } catch (PDOException $e) {
             echo 'Erro: '.$e->getMessage();
         }



