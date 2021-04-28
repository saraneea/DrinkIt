<!DOCTYPE html>
<html lang="en">
<head>
  <title>DrinkIt</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-default">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">DrinkIt</a>
    </div>
    <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Hae</button>
    </form>
    <form class="navbar-form navbar-left">
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Valikko
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">HTML</a></li>
            <li><a href="#">CSS</a></li>
            <li><a href="#">JavaScript</a></li>
        </ul>
    </div>
    </form>
</nav>
<div class="jumbotron text-center">
  <h1>Tervetuloa drinkkimaailman ytimeen </h1>
  <p>Täältä löydät drinkit joka lähtöön!</p> 
</div>

<div class="container align-center">
  <div class="row">
    <div class="col-sm-4">
      <button type="button" class="btn btn-success btn-lg">Aloita sekoittelu</button> 
    </div>
    <div class="col-sm-4">
      <button type="button" class="btn btn-success btn-lg">Selaa ohjeita</button>   
    </div>
    
  </div>
</div>

</body>
</html>
