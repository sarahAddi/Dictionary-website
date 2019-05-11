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
        <div class="row justify-content-center ">
            <div class="list">

            <ul>
            <li><a href="list.php?letter=a">A</a></li>
            <li><a href="list.php?letter=b">B</a></li>
            <li><a href="list.php?letter=c">C</a></li>
            <li><a href="list.php?letter=d">D</a></li>
            <li><a href="list.php?letter=e">E</a></li>
            <li><a href="list.php?letter=f">F</a></li>
            <li><a href="list.php?letter=g">G</a></li>
            <li><a href="list.php?letter=h">H</a></li>
            <li><a href="list.php?letter=i">I</a></li>
            <li><a href="list.php?letter=j">J</a></li>
            <li><a href="list.php?letter=k">K</a></li>
            <li><a href="list.php?letter=l">L</a></li>

            <li><a href="list.php?letter=m">M</a></li>
            <li><a href="list.php?letter=n">N</a></li>
            <li><a href="list.php?letter=o">O</a></li>
            <li><a href="list.php?letter=p">P</a></li>
            </ul>
            <ul>
            <li><a href="list.php?letter=q">Q</a></li>
            <li><a href="list.php?letter=r">R</a></li>
            <li><a href="list.php?letter=s">S</a></li>
            <li><a href="list.php?letter=t">T</a></li>
            <li><a href="list.php?letter=u">U</a></li>
            <li><a href="list.php?letter=v">V</a></li>
            <li><a href="list.php?letter=w">W</a></li>
            <li><a href="list.php?letter=x">X</a></li>
            <li><a href="list.php?letter=y">Y</a></li>
            <li><a href="list.php?letter=z">Z</a></li>
            </ul>
            </div>
        </div>
        
    <div class="row mt-5">
   
     <?php
            
      if(isset($_GET['letter'])){
        $req = $db->prepare("select term from dictionary where term like ? ORDER BY term ");
        $req->execute(array($_GET['letter'].'%'));
        
        while( $data = $req->fetch()){
            echo 
            " <div class='col-md-2 my-2 text-capitalize terms '>
            <a href=list.php?term=".$data['term'].">".$data['term']."</a>
            </div>";
        }
        $req->closeCursor();
      } 
      
      else if(isset($_GET['term'])){
        $req = $db->prepare("select * from dictionary where term = ?");
        $req->execute(array($_GET['term']));
   
        $data = $req->fetch();
         echo "<div class='col-md-7 mx-auto'>";
         echo  "<h1 class='text-capitalize'>" .$data['term']. "</h1>";
         echo "<hr>";
         
         echo "<p class='text-capitalize'> <strong>".$data['type']."</strong></p>";

         echo "<p>".$data['definition']."<p>";
         echo "</div>";
        
      }

    ?>
    </div>
    </div>
   <!-- Footer -->
   <footer><div class=" py-1"> Copyright © 2019 </div></footer>

  

    <!-- Optional JavaScript -->
    <script src="app.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>