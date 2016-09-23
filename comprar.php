<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Pizzaria</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>

  <body>
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <ul class="nav nav-pills">
              <li role="presentation"><a href="home.php">Home</a></li>
              <li role="presentation"><a href="cardapio.php">Cardápio</a></li>
              <li role="presentation"><a href="galeria.php">Galeria de Fotos</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <h1>Pizzaria</h1>
      <h3>Finalize sua Compra!</h3>

      <form class="comprar" action="functions/finalizar.php" method="post">
        <div class="col-md-4">
          <div class="form-group">
            <label for="pizza">Pizza</label>
            <input type="pizza" name="pizza" class="form-control" placeholder="Pizza">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="preco">Preço</label>
            <input type="preco" name="preco" class="form-control" placeholder="Preço">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="quantidade" name="quantidade" class="form-control" placeholder="Quantidade">
          </div>
        </div>

        <div class="col-md-10">
          <input name="entrar" class="btn btn-default" type="submit" value="Submeter">
        </div>
        <div class="col-md-2">
          <input name="limpar" class="btn btn-default" type="reset" value="Limpar"  onclick="javascript:window.location.reload();"/>
        </div>
      </form>
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>