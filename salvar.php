<?php
require_once "config.php";

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nomeFabricante = $_POST["nomeFabricante"];
        $categoriaUm = $_POST["categoriaUm"];
        $categoriaDois = $_POST["categoriaDois"];
        $categoriaTres = $_POST["categoriaTres"];

        $sql = "INSERT INTO `fabricante`(`nomeFabricante`, `categoriaUm`, `categoriaDois`, `categoriaTres`) VALUES ('$nomeFabricante','$categoriaUm','$categoriaDois','$categoriaTres')";
        
        if (mysqli_query($conn, $sql)) {
            print "<script>alert('O fabricante foi salva com sucesso.'); </script>";
            header("Refresh: 2;url=index.php");
        } else {
            echo "não cadastrado";
        }
        break;
        case 'produto':
            $nomeProduto = $_POST['nomeProduto'];
            $nomeCategoria = $_POST['nomeCategoria'];
            $preco = $_POST['preco'];
            $idfabricante = $_POST['fabricante'];

            $fa = explode("_", $idfabricante);

            $sql = "INSERT INTO `produto` (`nomeProduto`, `fabricante`, `categoria`, `preco`, `fabricante_idfabricante`) VALUES ('$nomeProduto ', '$fa[0]', '$nomeCategoria', '$preco', '$fa[1]')";
            
        
            if (mysqli_query($conn, $sql)) {
                print "<script>alert('O fabricante foi salva com sucesso.'); </script>";
                header("Refresh: 2;url=index.php");
            } else {
                echo "não cadastrado";
            }
            break;
        }
