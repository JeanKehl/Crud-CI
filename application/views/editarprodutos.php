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
        <title> Editar Produtos </title>
    </head>
    <body>
    
        <div class='container'>
            <div class='row'>
                <h1>Editar Produto</h1>
                <ol class="breadcrumb">
                    <li><a href="../"> Inicio </a></li>
                    <li><a href="listarprodutos">Listar Produtos</a></li>
                     <li class="active"> Editar Produto </li>
                </ol>

                <form action="http://127.0.0.1/crudci/index.php/produtos/salvar" name="form_add" method="post">
                
                <div class="row">
                    <div class="col-md-8">
                        <label> Nome </label>
                        <input type="text" name="nome" value="<?php echo $produto->nome?>" class="form-control"><br/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <label> Preço </label>
                        <input type="text" name="preco" value="<?php echo $produto->preco ?>" class="form-control"><br/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <label>Ativo</label>
                        <select name="ativo" class="form-control">
                            <option value="1" <?php echo($produto->ativo== 1 ? ' selected="selected"' :'')?> >Sim</option>
                            <option value="0" <?php echo($produto->ativo== 0 ? ' selected="selected"' :'')?>>Não</option>
                        </select>
                    </div>
                </div>
                
                <br/>
                <div class="row">
                    <div class ="col-md-2">
                        <input type="hidden" name="id" value="<?php echo $produto->id ?>">
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </div>
                </div>
                
                </form>
           
            </div>  
        </div>
    </body>
</html>