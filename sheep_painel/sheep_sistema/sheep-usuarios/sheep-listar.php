
       <div class="main-content" >
           
           
           <!-- INICIO NAVEGAÇÃO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
           <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="sheep.php">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="sheep-usuarios/sheep-criar">Novo</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Listar</li>
                      </ol>
           </nav>
          <!-- FIM NAVEGAÇÃO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
          
        <section class="section">
          <div class="section-body">
              <!--INICIO LINKS TOPO clientesPR.COM.BR MAYKON SILVEIRA---> 
              <?php include_once 'topo.php';?>
                <!--FIM LINKS TOPO clientesPR.COM.BR MAYKON SILVEIRA---> 
              <br>
         
               <!-- INICIO TABELA  MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA -->
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Ativos</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Nº</th>
                            <th>Foto</th>
                            <th>Criado</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Função</th>
                            <th>Status</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                            
                           
                          <tr>
                            <td>07</td>
                            <td>
                            <a href="#"data-toggle="modal" data-target="#ver"><img alt="" src="assets/img/sem-imagem.png" width="35"></a>
                            
                            </td>
                            <td><?= date('d/m/Y') ?></td>
                            <td>Maykon Silveira</td>
                            <td>777.777.777-77</td>
                            
                            <td><a href="">Administrador</a></td>
                            <td><button type="submit" class="btn btn-icon btn-success"><i class="fas fa-check-square"></i></button></td>
                            
                            <td><a href="" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a></td>
                            <td>
                                <form action="" method="post">
                                 <input type="hidden" name="shepp-firewall" value="">
                                 <input type="hidden" name="idDelete" value="">
                                 <button type="submit" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></button>
                                 </form>
                            </td>
                          </tr>
                          
               
                       

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              
              
          </div>
        </section>
          
          

          
      </div>
    
 
      