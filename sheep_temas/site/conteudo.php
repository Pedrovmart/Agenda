<?php
ob_start();

$sucesso = filter_input(INPUT_GET, 'msgSucesso', FILTER_VALIDATE_BOOLEAN);
$erro = filter_input(INPUT_GET, 'msgErro', FILTER_VALIDATE_BOOLEAN);
$del = filter_input(INPUT_GET, 'msgExcluir', FILTER_VALIDATE_BOOLEAN);
$delExcluir = filter_input(INPUT_GET, 'delete', FILTER_VALIDATE_INT);


?>

<div class="container">

<hr style="background:none;">

<?php



if($sucesso){
  echo '<div class="alert alert-success" role="alert">
  Contato adicionado!
</div>';
}

if($erro){
  echo '<div class="alert alert-danger" role="alert">
  Ocorreu um Erro! 
</div>';
}

if($del){
  echo '<div class="alert alert-success" role="alert">
  Contato excluido!
</div>';
}

if($delExcluir){
  $excluirContato = new Excluir();
  $excluirContato->Remover("contatos", "WHERE id = :id", "id={$delExcluir}");
  if($excluirContato->getResultado()){
      header("Refresh: 1; url=".HOME."?msgExcluir=true");
  }
}
?>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CriarContato" data-bs-whatever="@mdo">Criar Contato</button>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Cidade/Estado</th>
      <th scope="col">E-mail</th>
      <th scope="col">Categoria</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php

      $ler = new Ler();
      $ler->Leitura('contatos', "ORDER BY id ASC");
      if($ler->getResultado()):
        foreach($ler->getResultado() as $contatos):

    ?>
    <tr>
      <th scope="row"><?= $contatos['id'] ?></th>
      <td><?= $contatos['nome'] ?></td>
      <td><?= $contatos['fone'] ?></td>
      <td><?= $contatos['cidade'] ?></td>
      <td><?= $contatos['email'] ?></td>
      <td><?= $contatos['categoria'] ?></td>
      <td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#AtualizaContato<?= $contatos['id'] ?>" data-bs-whatever="@mdo">Editar</button></td>
      <td><a href="<?= HOME ?>?delete=<?= $contatos['id'] ?>" class="btn btn-danger">Excluir</a></td>
    </tr>

    <div class="modal fade" id="AtualizaContato<?= $contatos['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ID <?= $contatos['id'] ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= HOME ?>/atualizar" method="post">

          <div class="mb-3">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Adicione seu nome" value="<?= $contatos['nome'] ? $contatos['nome'] : null  ?>">
          </div>

          <div class="mb-3">
            <input type="numeric" class="form-control" id="fone" name="fone" placeholder="Adicione seu telefone" value="<?= $contatos['fone'] ? $contatos['fone'] : null  ?>">
          </div>

          <div class="mb-3">
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Adicione sua cidade e estado" value="<?= $contatos['cidade'] ? $contatos['cidade'] : null  ?>">
          </div>

          <div class="mb-3">
            <input type="email" class="form-control" id="email" name="email" placeholder="Adicione seu e-mail" value="<?= $contatos['email'] ? $contatos['email'] : null  ?>">
          </div>

          <div class="mb-3">
            <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Adicione a categoria" value="<?= $contatos['categoria'] ? $contatos['categoria'] : null  ?>">
          </div>

          
        
      </div>
      <div class="modal-footer">
        <input type="hidden" name="id" value="<?=$contatos['id']?>">
        <button type="submit" class="btn btn-primary" name="send">Salvar</button>

      </div>

      </form>
    </div>
  </div>
</div>


</div>
    
    <?php

      endforeach;
      endif;


    ?>
   
  </tbody>
</table>


<div class="modal fade" id="CriarContato" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Novo Contato</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= HOME ?>/salvar" method="post">
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
          <div class="mb-3">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Adicione seu nome">
          </div>

          <div class="mb-3">
            <input id="fone" type="numeric" class="form-control"  name="fone" placeholder="Adicione seu Telefone" onkeypress="$(this).mask('(00) 0000-00009')">
          </div>

          <div class="mb-3">
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Adicione sua cidade">
          </div>

          <div class="mb-3">
            <input type="email" class="form-control" id="email" name="email" placeholder="Adicione seu e-mail">
          </div>

          <div class="mb-3">
            <p class="form-control"> Categoria:   
            <select name="categoria" id="categoria">
              <option value="aluno" class="form-control">Aluno</option>
              <option value="responsavel" class="form-control">Responsável</option>
              <option value="professor" class="form-control">Professor</option>
              <option value="funcionario" class="form-control">Funcionário</option>
              <option value="coordenador" class="form-control">Coordenador</option>
            </select>
            </p>
            
            <!-- <input type="" class="form-control" id="recipient-name" name="categoria" placeholder="Adicione a categoria ("> -->
          </div>

          
        
      </div>
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary" name="send">Salvar</button>

      </div>

      </form>
    </div>
  </div>
</div>



</div>