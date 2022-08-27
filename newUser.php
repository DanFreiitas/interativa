<div class="row form-row">
    <div class="col">
        <!-- NOVA MARCA -->
        <h3>FABRICANTE E CATEGORIA</h3>
        <form action="salvar.php" method="POST">
            <input type="hidden" name="acao" value="cadastrar">
            <div class="mb-3">
                <label for="">FABRICANTE</label>
                <input type="text" name="nomeFabricante" class="form-control" placeholder="Digite o nome do fabricante">
            </div>
            <div class="mb-3">
                <label for="">CATEGORIA *</label>
                <input type="text" name="categoriaUm" class="form-control" placeholder="Digite o nome da categoria 1" require>
            </div>
            <div class="mb-3">
                <input type="text" name="categoriaDois" class="form-control" placeholder="Digite o nome da categoria 2">
            </div>
            <div class="mb-3">
                <input type="text" name="categoriaTres" class="form-control" placeholder="Digite o nome da categoria 3">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Adicionar</button>
            </div>
        </form>
    </div>

    <!-- NOVO PRODUTO -->
    <div class="col">

        <h3>PRODUTOS</h3>
        <form action="salvar.php" method="POST">
            <input type="hidden" name="acao" value="produto">
            <div class="mb-3">
                <label for="nomeProduto">NOME DO PRODUTO</label>
                <input type="text" name="nomeProduto" class="form-control" placeholder="Digite o nome do produto">
            </div>
            <div class="mb-3">
                <label for="fabricante">FABRICANTE</label>
                <select class="form-select" aria-label="Default select example" name="fabricante" id="fabrica">
                    <?php

                    $sql = "SELECT * FROM `fabricante` WHERE 1";

                    $res = mysqli_query($conn, $sql);

                    $qtd = $res->num_rows;

                    if ($qtd > 0) {
                        print "<option selected>Selecione o fabricante</option>";
                        while ($row = $res->fetch_object()) {
                            //print "<option value='" . $row->idfabricante . "'>" . $row->nomeFabricante . "</option>";
                            print "<option value='" . $row->nomeFabricante . "_" . $row->idfabricante . "'>" . $row->nomeFabricante . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="nomeCategoria">CATEGORIA</label>
                <input type="text" name="nomeCategoria" class="form-control" placeholder="Digite o nome da categoria">
            </div>
            <div class="mb-3">
                <label for="">Preço</label>
                <input type="text" name="preco" class="form-control" placeholder="Digite o preço">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>
</div>
<!-- LINHA DE BUSCA -->
<div class="row">
    <nav class="navbar navbar-light bg-light">
        <form class="form-inline align-items-center">
            <input class="form-control mr-sm-2" type="search" placeholder="Procurar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
</div>

<!-- LINHA DE BUSCA -->
<?php

$sql = "SELECT `idproduto`, `nomeProduto`, `fabricante`, `categoria`, `preco`, `fabricante_idfabricante` FROM `produto`";

$res = mysqli_query($conn, $sql);

$qtd = $res->num_rows;


print "<table class='table table-houver'>";
print "<tr>";
print "<th>ID</th>";
print "<th>Nome Produto</th>";
print "<th>Fabricante</th>";
print "<th>Categoria</th>";
print "<th>Preço</th>";
print "</tr>";
while ($row = $res->fetch_object()) {
    print "<tr>";
    print "<td>" . $row->idproduto . "</td>";
    print "<td>" . $row->nomeProduto . "</td>";
    print "<td>" . $row->fabricante . "</td>";
    print "<td>" . $row->categoria . "</td>";
    print "<td>" . $row->preco . "</td>";
    print "<td>
        <button onclick=\"location.href='?page=editar&id=" . $row->idproduto . "';\"class='btn btn-success'>Editar</button>;
        <button class='btn btn-danger' onclick='location.href='?page=salvar&acao=excluir&id=".$row->idproduto.">Excluir</button></td>";
    print "</tr>";
}
print "</table>";

?>
<script>
   async function excluir(){
    var excluir =

    }

</script>