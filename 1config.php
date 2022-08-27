<?php
    $connect = '127.0.0.1'; 	// conexão local 
    $user = 'root'; 			// usuário do banco de dados
    $senha = ''; 		        // senha do banco de dados
    $db = 'cadastro';		    // db_banks
    
    if($conn = mysqli_connect($connect, $user, $senha, $db)) {
        echo 'Conectado!';
    }else {
        echo 'erro!';
    }
    
    
