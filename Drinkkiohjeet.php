<!DOCTYPE html>
<html lang="en">
<head>
  <title>DrinkIt</title>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


  <!--JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
<!-- Bootstrap Javascript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>

<body>
<nav class="navbar navbar-default">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">DrinkIt</a>
    </div>
    <!--
    <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Hae</button>
    </form> -->
    <form action="" class="navbar-form navbar-right" id="live-search" method="post">
            <div class="col-sm-10">
              <div class="input-group input-group-sm"> 
                <!--<label class="control-label sr-only" for="filter">Title Search </label>-->
                <input class="form-control input-lg" id="filter" type="text" value="" placeholder="Search..." />
                <span class="input-group-btn">
                <button class="btn btn-disabled" type="button">Matches <span id="filter-count" class="badge">0</span></button>
                </span> </div>
            </div>
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
  <h1>Drinkkiohjeet </h1> 
</div>
<div class="container">
</nav>     

</div>
<!-- livesearch -->
<div class="container">
  <div class="row">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="mg-clear tc-white">Live Search</h3>
        <!--Online Texts--> 
      </div>
      <div class="panel-body">
        <div class="row">
          <form action="" class="" id="live-search" method="post">
            <div class="col-sm-12">
              <div class="input-group input-group-lg"> 
                <!--<label class="control-label sr-only" for="filter">Title Search </label>-->
                <input class="form-control input-lg" id="filter" type="text" value="" placeholder="Search..." />
                <span class="input-group-btn">
                <button class="btn btn-disabled" type="button">Matches <span id="filter-count" class="badge">0</span></button>
                </span> </div>
            </div>
          </form>
        </div>
        <hr />
        <div class="col-sm-6 onlineText">
          <ul>
            <a id="Names" title="Names of Boys and Girls">
            <h4>Names</h4>
            </a>
            <li>Appelsiinimehu</li>
            <li>Vichy</li>
            <li>Jallu</li>
            <li>Appelsiinilikööri</li>
            <li>Lime</li>
            <li>Päärynälikööri</li>
            <li>Sprite</li>
            <li>Vodka</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>

