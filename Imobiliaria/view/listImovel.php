<h1>Imoveis</h1>
<hr>
<div>
    <table style="top:40px;">
        <thead>
            <tr>
                <th>Descricao</th>
                <th>tipo</th>
                <th><a href="cadImovel">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            require_once '../controller/ImovelController.php';
           
            $imoveis = call_user_func(array('UsuarioController','listar'));

            if (isset($imoveis)){
                foreach($imoveis as $imovel){

          
            ?>
            <tr>
           
                <td><?php echo $imovel->getdescricao(); ?></td>
                <td><?php echo $imovel->gettipo(); ?></td>
                <td>
                    <a href="">Editar</a>
                    <a href="">Excluir</a>
                </td>
            </tr>
            <?php
                }
            }else {
                ?>
                <tr>
                    <td colspan="5">Nenhum registro encontrado</td>
                </tr>

                <?php
            }  
            ?>
        </tbody>
    </table>
</div>