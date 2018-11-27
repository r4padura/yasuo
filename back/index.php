<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <title></title>
</head>
<body>
	<!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastro">
    Cadastro
  </button>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">
    Login
  </button>
  <!-- Modal -->
  <div class="modal fade" id="cadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cadastro">cadastro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="cadastro.php" method="post" onsubmit="return valida_cadastro(this)">
            <div class="form-group">
              <label for="nome">Nome Completo</label>
              <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo">
            </div>
            <div class="form-group">
              <label for="endereco">endereço</label>
              <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite seu endereco">
            </div>
            <div class="form-group">
              <label for="telefone">telefone</label>
              <input type="telefone" class="form-control" id="telefone" name="telefone" aria-describedby="TelHelp" placeholder="Digite telfone">
            </div>
            
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
            </div>
            <div class="form-group">
              <label for="senha">senha</label>
              <input type="password" class="form-control" id="Password" name="senha1" placeholder="senha">
            </div>
            <div class="form-group">
              <label for="senha">Confirme a Senha</label>
              <input type="password" class="form-control" id="Password" name="senha2" placeholder="Confirme a Senha">
            </div>
            <center><button type="submit" class="btn btn-primary">Cadastrar</button></center>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="index.php" method= "post">
            email: <input type="email" name="email" placeholder="email"><br>
            senha: <input type="password" name="senha" placeholder="senha"><br>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">salvar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>


