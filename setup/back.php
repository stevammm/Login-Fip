<?php
date_default_timezone_set("America/Sao_Paulo");
require_once("Conn_mysql.php");

$dados = new Conn_mysql();

if(isset($_POST['op'])){
    $op = $_POST['op'];
    $tabela = $_POST['tabela'];
    echo $_POST['dados'];
    die();
    if($op=='insert'){
        $produto = $_POST['dados'];
        if($projeto['nome']==""){
            $resultado['status'] = false;   
            $resultado['message'] = "Preencha o título";    
            $resultado['result'] = "Erro";
            echo json_encode($resultado);     
            exit();
        };        
        $resultado = $dados->insert($produto, $tabela);
        echo json_encode($resultado);
    }

    if($op=='delete'){
        $condicao = array(
            "where"=> array(
                "id"=> $_POST['id'],
            )    
        );
        $resultado = $dados->delete($condicao,'Produtos');
        echo json_encode($resultado);
    }

    if($op=='update'){
        $condicao = array(
            "where"=>array(
                "id"=> $_POST['id'],
            ),
            "return_type"=>'single'
        );
        $produto = array(
            "descricao"=> $_POST['descricao'],
            "preco"=> $_POST['preco'],
            "marca"=> $_POST['marca'],
            "fabricante"=> $_POST['fabricante'],
            "datafabricacao"=> $_POST['dataFab'],
            "origem"=> $_POST['origem']       
        ); 
        $resultado = $dados->update(
            $produto,$condicao,"Produtos");
        
        echo json_encode($resultado);
    }

    if($op=='select'){
        $dados = new Conn_mysql();
        // $filtro = array(
        //     "select"=>"marca"
        // );
        $resultado = $dados->getRows("Produtos");
        echo json_encode($resultado);
    }
    if($op=='filtro'){
        $dados = new Conn_mysql();
        $filtro = array(
            "where"=>array(
                'id' => $_POST['id'],
            )
        );
        $resultado = $dados->getRows("Produtos",$filtro);
        //echo $resultado ;
        echo json_encode($resultado);
    }


}

