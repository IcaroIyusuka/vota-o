<?
include("protec.php");
include("dlogin.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Votação Simpatia</title>
  <link rel="icon" type="image/png" href="img/logoicon.jpg">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <form method="post" action="dados.php">
    <div class="row row-cols-1 row-cols-md-5 g-3">
      <div class="col">
        <div class="card h-100">
          <img src="img/Yasmin-01.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Quesito Simpatia</h5>
            <p class="card-text">Yasmin</p>

            <input type="radio" class="btn-check pda blok1 " name="nota" id="b1" value="5" autocomplete="off" required="required">
            <label class="btn btn-outline-primary blok1" for="b1">5</label>

            <input type="radio" class="btn-check pda blok1" name="nota" id="b2" value="6" autocomplete="off" required="required">
            <label class="btn btn-outline-primary blok1" for="b2">6</label>

            <input type="radio" class="btn-check pda blok1" name="nota" id="b3" value="7" autocomplete="off" required="required">
            <label class="btn btn-outline-primary blok1" for="b3">7</label>

            <input type="radio" class="btn-check pda blok1" name="nota" id="b4" value="8" autocomplete="off" required="required">
            <label class="btn btn-outline-primary blok1" for="b4">8</label>

            <input type="radio" class="btn-check pda blok1" name="nota" id="b5" value="9" autocomplete="off" required="required">
            <label class="btn btn-outline-primary blok1" for="b5">9</label>

            <input type="radio" class="btn-check pda blok1" name="nota" id="b6" value="10" autocomplete="off">
            <label class="btn btn-outline-primary blok1" for="b6">10</label>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/Isadora-02.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Quesito Simpatia</h5>
            <p class="card-text">Isadora</p>
            <input type="radio" class=" pode btn-check blok2" name="not" id="t1" value="5" autocomplete="off" required="required">
            <label class="btn btn-outline-primary blok2" for="t1">5</label>

            <input type="radio" class="pode btn-check blok2" name="not" id="t2" value="6" autocomplete="off" required="required">
            <label class="btn btn-outline-primary blok2" for="t2">6</label>

            <input type="radio" class="pode btn-check blok2  " name="not" id="t3" value="7" autocomplete="off" required="required">
            <label class="btn btn-outline-primary blok2" for="t3">7</label>

            <input type="radio" class="pode btn-check blok2" name="not" id="t4" value="8" autocomplete="off" required="required">
            <label class="btn btn-outline-primary blok2" for="t4">8</label>

            <input type="radio" class="pode btn-check blok2 " name="not" id="t5" value="9" autocomplete="off" required="required">
            <label class="btn btn-outline-primary blok2  " for="t5">9</label>

            <input type="radio" class="pode btn-check blok2 " name="not" id="t6" value="10" autocomplete="off" required="required">
            <label class="btn btn-outline-primary blok2  " for="t6">10</label>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/Melissa-03.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Quesito Simpatia</h5>
            <p class="card-text">Melissa</p>
            <input type="radio" class="pla btn-check blok3 " name="no" id="n1" value="5" autocomplete="off" required="required">
            <label class="btn btn-outline-primary  blok3 " for="n1">5</label>

            <input type="radio" class="pla btn-check blok3 " name="no" id="n2" value="6" autocomplete="off" required="required">
            <label class="btn btn-outline-primary blok3  " for="n2">6</label>

            <input type="radio" class="pla btn-check blok3 " name="no" id="n3" value="7" autocomplete="off" required="required">
            <label class="btn btn-outline-primary blok3  " for="n3">7</label>

            <input type="radio" class="pla btn-check blok3 " name="no" id="n4" value="8" autocomplete="off" required="required">
            <label class="btn btn-outline-primary blok3  " for="n4">8</label>

            <input type="radio" class="pla btn-check blok3 " name="no" id="n5" value="9" autocomplete="off" required="required">
            <label class="btn btn-outline-primary blok3  " for="n5">9</label>

            <input type="radio" class="pla btn-check blok3 " name="no" id="n6" value="10" autocomplete="off" required="required">
            <label class="btn btn-outline-primary blok3  " for="n6">10</label>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/Paola-04.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Quesito Simpatia</h5>
            <p class="card-text">Paola</p>
            <input type="radio" class="ple btn-check blok4 " name="nt" id="a1" value="5" autocomplete="off" required="required">
            <label class="btn btn-outline-primary blok4  " for="a1">5</label>

            <input type="radio" class="ple btn-check blok4 " name="nt" id="a2" value="6" autocomplete="off" required="required">
            <label class="btn btn-outline-primary blok4  " for="a2">6</label>

            <input type="radio" class="ple btn-check blok4 " name="nt" id="a3" value="7" autocomplete="off" required="required">
            <label class="btn btn-outline-primary blok4  " for="a3">7</label>

            <input type="radio" class="ple btn-check blok4 " name="nt" id="a4" value="8" autocomplete="off" required="required">
            <label class="btn btn-outline-primary  blok4  " for="a4">8</label>

            <input type="radio" class="ple btn-check blok4  " name="nt" id="a5" value="9" autocomplete="off" required="required">
            <label class="btn btn-outline-primary blok4  " for="a5">9</label>

            <input type="radio" class="ple btn-check blok4  " name="nt" id="a6" value="10" autocomplete="off" required="required">
            <label class="btn btn-outline-primary blok4  " for="a6">10</label>

            
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/Larissa-05.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Quesito Simpatia</h5>
            <p class="card-text">Larissa</p>
            <input type="radio" class="btn-check puo blok5 " name="a" id="c1" value="5" autocomplete="off" required="required">
            <label class="btn btn-outline-primary blok5  " for="c1">5</label>

            <input type="radio" class="btn-check puo blok5 " name="a" id="c2" value="6" autocomplete="off" required="required">
            <label class="btn btn-outline-primary   blok5 " for="c2">6</label>

            <input type="radio" class="btn-check puo blok5 " name="a" id="c3" value="7" autocomplete="off" required="required">
            <label class="btn btn-outline-primary  blok5  " for="c3">7</label>

            <input type="radio" class="btn-check puo blok5 " name="a" id="c4" value="8" autocomplete="off" required="required">
            <label class="btn btn-outline-primary   blok5 " for="c4">8</label>

            <input type="radio" class="btn-check puo blok5  " name="a" id="c5" value="9" autocomplete="off" required="required">
            <label class="btn btn-outline-primary   blok5 " for="c5">9</label>

            <input type="radio" class="btn-check puo blok5  " name="a" id="c6" value="10" autocomplete="off" required="required">
            <label class="btn btn-outline-primary   blok5 " for="c6">10</label>
            
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/Isabelly-06.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Quesito Simpatia</h5>
            <p class="card-text">Isabelly</p>
            <input type="radio" class="btn-check pat blok6 " name="c" id="d1" value="5" autocomplete="off" required="required">
            <label class="btn btn-outline-primary  blok6  " for="d1">5</label>

            <input type="radio" class="btn-check pat blok6 " name="c" id="d2" value="6" autocomplete="off" required="required">
            <label class="btn btn-outline-primary  blok6  " for="d2">6</label>

            <input type="radio" class="btn-check pat blok6 " name="c" id="d3" value="7" autocomplete="off" required="required">
            <label class="btn btn-outline-primary   blok6 " for="d3">7</label>

            <input type="radio" class="btn-check pat blok6 " name="c" id="d4" value="8" autocomplete="off" required="required">
            <label class="btn btn-outline-primary   blok6 " for="d4">8</label>

            <input type="radio" class="btn-check pat blok6 " name="c" id="d5" value="9" autocomplete="off" required="required">
            <label class="btn btn-outline-primary  blok6  " for="d5">9</label>

            <input type="radio" class="btn-check pat blok6 " name="c" id="d6" value="10" autocomplete="off" required="required">
            <label class="btn btn-outline-primary  blok6  " for="d6">10</label>

          
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/Camilly-07.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Quesito Simpatia</h5>
            <p class="card-text">Camilly</p>
            <input type="radio" class="btn-check pet blok7  " name="d" id="e1" value="5" autocomplete="off" required="required">
            <label class="btn btn-outline-primary   blok7 " for="e1">5</label>

            <input type="radio" class="btn-check pet blok7 " name="d" id="e2" value="6" autocomplete="off" required="required">
            <label class="btn btn-outline-primary  blok7  " for="e2">6</label>

            <input type="radio" class="btn-check pet blok7 " name="d" id="e3" value="7" autocomplete="off" required="required">
            <label class="btn btn-outline-primary   blok7 " for="e3">7</label>

            <input type="radio" class="btn-check pet blok7 " name="d" id="e4" value="8" autocomplete="off" required="required">
            <label class="btn btn-outline-primary  blok7  " for="e4">8</label>

            <input type="radio" class="btn-check  pet blok7" name="d" id="e5" value="9" autocomplete="off" required="required">
            <label class="btn btn-outline-primary blok7  " for="e5">9</label>

            <input type="radio" class="btn-check  pet blok7" name="d" id="e6" value="9" autocomplete="off" required="required">
            <label class="btn btn-outline-primary blok7  " for="e6">10</label>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/Luana-08.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Quesito Simpatia</h5>
            <p class="card-text">Luana</p>
            <input type="radio" class="btn-check pur blok8 " name="e" id="f1" value="5" autocomplete="off" required="required">
            <label class="btn btn-outline-primary  blok8 " for="f1">5</label>

            <input type="radio" class="btn-check  pur blok8" name="e" id="f2" value="6" autocomplete="off" required="required">
            <label class="btn btn-outline-primary  blok8 " for="f2">6</label>

            <input type="radio" class="btn-check  pur blok8" name="e" id="f3" value="7" autocomplete="off" required="required">
            <label class="btn btn-outline-primary   blok8 " for="f3">7</label>

            <input type="radio" class="btn-check pur blok8 " name="e" id="f4" value="8" autocomplete="off" required="required">
            <label class="btn btn-outline-primary  blok8  " for="f4">8</label>

            <input type="radio" class="btn-check pur blok8 " name="e" id="f5" value="9" autocomplete="off" required="required">
            <label class="btn btn-outline-primary  blok8  " for="f5">9</label>

            <input type="radio" class="btn-check pur blok8 " name="e" id="f6" value="10" autocomplete="off" required="required">
            <label class="btn btn-outline-primary  blok8  " for="f6">10</label>
            

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/Kaiane-09.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Quesito Simpatia</h5>
            <p class="card-text">Kaiane</p>
            <input type="radio" class="btn-check pot blok9 " name="f" id="g1" value="5" autocomplete="off" required="required">
            <label class="btn btn-outline-primary  blok9  " for="g1">5</label>

            <input type="radio" class="btn-check pot blok9 " name="f" id="g2" value="6" autocomplete="off" required="required">
            <label class="btn btn-outline-primary   blok9 " for="g2">6</label>

            <input type="radio" class="btn-check pot blok9 " name="f" id="g3" value="7" autocomplete="off" required="required">
            <label class="btn btn-outline-primary  blok9  " for="g3">7</label>

            <input type="radio" class="btn-check pot blok9 " name="f" id="g4" value="8" autocomplete="off" required="required">
            <label class="btn btn-outline-primary  blok9 " for="g4">8</label>

            <input type="radio" class="btn-check pot blok9 " name="f" id="g5" value="9" autocomplete="off" required="required">
            <label class="btn btn-outline-primary   blok9 " for="g5">9</label>

            <input type="radio" class="btn-check pot blok9 " name="f" id="g6" value="10" autocomplete="off" required="required">
            <label class="btn btn-outline-primary   blok9 " for="g6">10</label>
           
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/Nicolly-10.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Quesito Simpatia</h5>
            <p class="card-text">Nicolly</p>
            <input type="radio" class="btn-check har blok10" name="g" id="h1" value="5" autocomplete="off" required="required">
            <label class="btn btn-outline-primary  har blok10" for="h1">5</label>

            <input type="radio" class="btn-check har blok10 " name="g" id="h2" value="6" autocomplete="off" required="required">
            <label class="btn btn-outline-primary blok10  " for="h2">6</label>

            <input type="radio" class="btn-check har blok10 " name="g" id="h3" value="7" autocomplete="off" required="required">
            <label class="btn btn-outline-primary   blok10 " for="h3">7</label>

            <input type="radio" class="btn-check har blok10 " name="g" id="h4" value="8" autocomplete="off" required="required">
            <label class="btn btn-outline-primary   blok10 " for="h4">8</label>

            <input type="radio" class="btn-check har blok10 " name="g" id="h5" value="9" autocomplete="off" required="required">
            <label class="btn btn-outline-primary  blok10  " for="h5">9</label>

            <input type="radio" class="btn-check har blok10 " name="g" id="h6" value="10" autocomplete="off" required="required">
            <label class="btn btn-outline-primary  blok10  " for="h6">10</label>
      
          </div>
        </div>
      </div>
    </div><br>
    <button class="btn btn-primary" type="submit">Avaliar</button>
  </form>
  <script type="text/javascript" src="javas.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>