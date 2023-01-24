<?php

$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(isset($post['send'])){
   unset($post['send']);

   $dados = [
        "nome" => $post['nome'],
        "fone" => $post['fone'],
        "cidade" => $post['cidade'],
        "email" => $post['email'],
        "categoria" => $post['categoria']
];

 $atualizar = new Atualizar();
 $atualizar->Atualizando("contatos", $dados, "WHERE id = :id", "id={$post['id']}");
 if($atualizar->getResultado()){
    header("Location: ".HOME."?msgSucesso=true");
}else{
    header("Location: ".HOME."?msgErro=true");
}
}


?>