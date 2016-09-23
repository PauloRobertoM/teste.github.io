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

         <h1>Pizzaria</h1>
         <h3>Entre no Sistema!</h3>
         
         <form class="login" action="functions/validacao.php" method="post">
            <div class="form-group">
               <label for="email">Email</label>
               <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
               <label for="senha">Senha</label>
               <input type="password" name="senha" class="form-control" placeholder="Senha">
            </div>
            <br /><br/>
            <input name="entrar" class="btn btn-default" type="submit" value="Entrar">

            <input name="limpar" class="btn btn-default" type="reset" value="Limpar"  onclick="javascript:window.location.reload();"/>
            <br /><br />
         </form>
      </div>

      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   </body>
</html>