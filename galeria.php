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
         <h3>Galeria de Fotos</h3>
         
         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="http://cristalpizza.com.br/site/wp-content/uploads/2014/08/home_restaurante-2000x925.jpg" alt="">
                <div class="carousel-caption">
                  
                </div>
              </div>
              <div class="item">
                <img src="https://photos.smugmug.com/Portfolio/Austin-Gallery/i-q6MJJjz/0/L/austin-roppolo-pizzaria-L.jpg" alt="">
                <div class="carousel-caption">
                  
                </div>
              </div>
              <div class="item">
                <img src="http://www.censier-publicinex.fr/wp-content/uploads/2014/01/Fotolia_51840918_Subscription_Monthly_XXL.jpg" alt="">
                <div class="carousel-caption">
                  
                </div>
              </div>
              
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">
             <div class="col-md-3">
               <div class="thumbnail um">
                <a data-toggle="modal" data-target="#myModal1">
                  <img src="https://media-cdn.tripadvisor.com/media/photo-s/02/c3/c4/bb/pizzeria-don-franchino.jpg" alt="">
                  </a>
               </div>
             </div>

             <div class="col-md-3">
               <div class="thumbnail">
                <a data-toggle="modal" data-target="#myModal2">
                 <img src="http://msalx.vejasp.abril.com.br/2013/07/11/1406/jcclk/soggiorno-alphaville.jpeg?1373562426" alt="">
                 </a>
               </div>
             </div>

             <div class="col-md-3">
               <div class="thumbnail">
                <a data-toggle="modal" data-target="#myModal3">
                 <img src="https://chicquinhas.files.wordpress.com/2012/05/pizza1.jpg" alt="">
                 </a>
               </div>
             </div>

             <div class="col-md-3">
               <div class="thumbnail">
                <a data-toggle="modal" data-target="#myModal4">
                 <img src="http://www.guiajequie.com.br/wp-content/uploads/job-manager-uploads/gallery_images/2016/07/pizzaria-claudio.jpg" alt="">
                 </a>
               </div>
             </div>
           </div>

<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <img src="https://media-cdn.tripadvisor.com/media/photo-s/02/c3/c4/bb/pizzeria-don-franchino.jpg" alt="">
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
            <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <img src="http://msalx.vejasp.abril.com.br/2013/07/11/1406/jcclk/soggiorno-alphaville.jpeg?1373562426" alt="">
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>  
      <img src="https://chicquinhas.files.wordpress.com/2012/05/pizza1.jpg" alt="">
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <img src="http://www.guiajequie.com.br/wp-content/uploads/job-manager-uploads/gallery_images/2016/07/pizzaria-claudio.jpg" alt="">
    </div>
  </div>
</div>

        </div>
      
      <script src="assets/js/jquery.min.js"></script>
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   </body>
</html>