<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lançamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container text-center">
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <img class="img" src="img/img.svg" alt="" srcset="">
          </div>
          <div class="col-sm-12 col-md-4">
            <form>

                <h1 id="h1_cad_user">LANÇAMENTO</h1>
    
                <div class="mb-3">
                  <label for="nome" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp">
                </div>
    
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                </div>
                
                <div class="mb-3">
                  <label for="categoria" class="form-label">Categoria</label>
                  <input type="number" min="0" max="1" class="form-control" id="categoria" name="categoria" aria-describedby="emailHelp">
                </div>

                <div class="button">
                  <a href="cad_categoria.html" type="submit" class="btn btn-secondary">Voltar</a>
                  <a href="#" type="submit" class="btn btn-success">Próximo</a> 

                  </form>

              </div>
         
          </div>
        </div>
      </div>