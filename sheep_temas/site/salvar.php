<?php

$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(isset($post['send'])){
   unset($post['send']);

    $criar = new Criar();
    $dados = [
        "nome" => $post['nome'],
        "fone" => $post['fone'],
        "cidade" => $post['cidade'],
        "email" => $post['email'],
        "categoria" => $post['categoria'],
        
    ];

    $criar->Criacao('contatos', $dados);

    if($criar->getResultado()){
        header("Location: ".HOME."?msgSucesso=true");
    }else{
        header("Location: ".HOME."?msgErro=true");
    }

}else{
    echo "Erro";
}


?>