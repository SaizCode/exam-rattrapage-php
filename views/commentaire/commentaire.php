<?php 


?>

<!doctype html>
<html lang="fr">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <center>
              <div class="container">

                    <div class="row" style="margin-top:50px">

                        <div class="col-md-6 offset-md-2">
                                <form method="post" action="../../controllers/controller.php">
                                        <div class="form-group">
                                          <label for="name">Votre nom</label>

                                             <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                                        </div>
                                
                                        <div class="form-group">
                                            <label for="textFormat">Text Format</label>
                                            <select class="form-control" id="textFormat" name="textFormat">
                                            <option>Simple</option>
                                            <option>Plaint</option>
            
                                            </select>
                                        </div>

                                        <div class="form-group">
                                          <label for="">Page d'accueil</label>

                                             <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="">
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Commentaire</label>
                                            <textarea class="form-control" name="comment" id="comment" rows="3"></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                                <a href="../index.php">Accueil</a>
                        </div>
                        </div>
                    </div>
              </div>
    </center>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>