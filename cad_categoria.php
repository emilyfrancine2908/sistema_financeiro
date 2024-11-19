<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container text-center">
      <div style="color: white">
        <?php
        include 'php/conexao.php';
        session_start();
        if (isset($_SESSION['id'])) {
            $id = $_SESSION['id'];
            $sql = "SELECT * FROM tb_user WHERE id_usuario = $id";
            $query = $conexao->query($sql);
            $resultado = $query->fetch_assoc();
            echo "Olá", $resultado['nome']."!";
        }else {
            echo "<script> alert('Você não está logado!'); history.back(); </script>"; 
        }
        ?>
        <a class="btn btn-primary" href="php/logout.php" role="button">Sair</a>

      </div>
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <img class="img" src="img/img.svg" alt="" srcset="">
          </div>
          <div class="col-sm-12 col-md-4">
            <form action="php/insert_categoria.php" method="post">
              <h1 id="h1_cad_user"> CATEGORIA</h1>

                <div class="mb-3">
                  <label for="nome" class="form-label left">Nome</label>
                  <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp">
                </div>

                <h4 style="color: white; text-align: center;">TIPO</h4>
            <div class="mb-3">
              <input type="radio" class="type" id="tipo" name="tipo" aria-describedby="emailHelp" value="0">
              <label for="tipo" class="form-label">Tipo 1</label>
            </div>
            <div class="mb-3">
              <input type="radio" class="type" id="tipo" name="tipo" aria-describedby="emailHelp" value="1">
              <label for="tipo" class="form-label">Tipo 2</label>
            </div>

                  <div class="mb-3">
                    <label for="descricao" class="form-label left">Descrição</label>
                    <input type="text" class="form-control" id="descrição" name="descrição" aria-describedby="emailHelp">
                  </div>

            <div class="button">
                <a href="cad_usuario.html" type="submit" class="btn btn-secondary">Voltar</a>
                <button type="submit" class="btn btn-success">Entrar</a> 
            </div>

              </form>

          </div>

         
          </div>
        </div>
      </div>