<?php
      //connect to the db
      include('connectToDB.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- font awsome-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Dictionary</title>
  </head>
  <body>

       <?php
              include('navbar.php');
       ?>
     <div class="vector" style="transform: scaleX(-1) rotate(180deg); background-size : 32%; "></div>
    <div class="container p-5 mb-5">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <h1 class="text-center search-header"> Dictionary</h1>
                <form class="my-2" method="post" action="index.php">
                        <label class="sr-only" for="inlineFormInputGroup">Search</label>
                        <div class="input-group mb-2">
                          
                          <input name ="search" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search...">
                          <div class="input-group-prepend search-btn">
                                <button type="submit" class="input-group-text"><i class="fa fa-search"></i></button>
                              </div>
                        </div>
                        
                </form>

            </div>
        </div>
        <div class="row ">
            <div class="col-md-8 my-5 mx-auto">

            <?php
             if(isset($_POST['search'])){
              $search = htmlspecialchars($_POST['search']);
      
                  
      
              //select term from dictionary
              $req = $db->prepare("select * from dictionary where term = ?");
              $req->execute(array($search));
      
              //fetch the data
              $data = $req -> fetch();
      
              //check 
              $rowCount=$req->rowCount();
      
                if( $rowCount != 0){

               
                 echo  "<h1 class='text-capitalize'>" .$data['term']. "</h1>";
                 echo "<hr>";
                 
                 echo "<p class='text-capitalize'> <strong>".$data['type']."</strong></p>";

                 echo "<p>".$data['definition']."<p>";
                }else {
                  echo "<h5 class=' text-center'> No result found </h5>";
                }

                  // clear the request
                $req->closeCursor();

             }
              
            ?>
             </div>
      </div>
      
        
    
    </div>
   <!-- Footer -->
<footer><div class=" py-1"> Copyright © 2019 </div></footer>


  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>