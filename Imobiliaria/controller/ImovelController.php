<?php
require_once '../model/Imovel.php';

class ImovelController{


    public static function salvar(){

        $imovel = new Imovel;

        $imovel->setdescricao($_POST['descricao']);
        $imovel->setvalor($_POST['valor']);
        $imovel->settipo($_POST['tipo']);

        $imovel->save();
    }
    
public static function listar(){

    
    $imovel = new Imovel;
   
    return $imovel->listAll();
}

}
?>