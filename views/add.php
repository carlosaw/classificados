<?php
if(!empty($msg)) {
    echo $msg;
}
?>
<div class="container">
    <h1>Meus An�ncios - Adicionar An�ncio</h1>

    <form method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label for="categoria">Categoria:</label>
            <select name="categoria" id="categoria" class="form-control">
                <option value="">Selecione</option>
                <?php 
                foreach($categorias as $categoria): ?>
                    <option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="titulo">T�tulo:</label>
            <input type="text" name="titulo" id="titulo" class="form-control" />
        </div>
        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="text" name="valor" id="valor" class="form-control" />
        </div>
        <div class="form-group">
            <label for="descricao">Descri��o:</label>
            <textarea class="form-control" name="descricao"></textarea>
        </div>
        <div class="form-group">
            <label for="estado">Estado de Conserva��o:</label>
            <select name="estado" id="estado" class="form-control">
                <option value="0">Ruim</option>
                <option value="1">Bom</option>
                <option value="2">�timo</option>
            </select>
        </div>
        <input type="submit" value="Adicionar" class="btn btn-default" />

    </form>
</div>