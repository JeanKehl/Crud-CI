<?php 
    defined('BASEPATH') OR exit('No direct script acess allowed');
?>

<html lang='pt-BR'>
    <head>
        <link href="<?php echo base_url('assets/bootstrap-3.3.7/css/bootstrap.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap-3.3.7/css/bootstrap-theme.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap-3.3.7/css/bootstrap-theme.css.map')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap-3.3.7/css/bootstrap-theme.min.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap-3.3.7/css/bootstrap-theme.min.css.map')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap-3.3.7/css/bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap-3.3.7/css/bootstrap.min.css.map')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap-3.3.7/css/bootstrap.css.map')?>" rel="stylesheet">
        <title> Lista de produtos </title>
    </head>
    <body>
        <div class='container'>
            <div class='row'>
                <h1>Lista de Produtos</h1><br/>
               <ol class="breadcrumb">
                   <li><a href="../">Home</a> </li>
                    <li class="active">Listar Produtos</a></li>
                    <li><a href="addprodutos">Novo Produto</a> </li>
                </ol>

               <table class='table'>
                   <thread>
                       <tr>
                           <th scope="col">Produtos</th>
                           <th scope="col">Preço</th>
                            <th scope="col">Açoes</th>
                        </tr>
                    </thread>

                    <?php
                    $contador=0;
                    foreach ($produtos as $produto) {
                        echo '<tr>';
                        echo '<td>'.$produto->nome.'</td>';
                        echo '<td >'.$produto->preco.'</td>';
                
                        echo'<td>';
                        echo '<a href="editarprodutos/'.$produto->id.'" title="editar produto"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></button></a>       ';
                        echo '<a href="apagarProdutos/'.$produto->id.'" title="excluir produto"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></button></a>       ';
                        echo '<a href="/produtos/ver/'.$produto->id.'" title="ver produto"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></button></a>'       ;

                         
                        echo'</tr>';
                        $contador++;
                    }
                    
                
                    ?>
                    </table>
                    <div class="row">
                        <div class="col-md-12"><br/>
                            total de registro: <?php echo $contador ?>
                        </div>
                    </div>
           
        </div>  
            </div>
    </body>
</html>