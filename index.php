<!DOCTYPE html>
<html lang="en">
<head>
  <title>DrinkIt</title>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico">
  
  <!--JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
<!-- Bootstrap Javascript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>

<script>
  $(document).ready(function(){
    $("#filter").keyup(function(){
 
        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val(), count = 0;
	// get the list to be searched				
	var items = $(".onlineText li");
	//get the total lenght for counting later
	var totalItems = items.length;
								
        // Loop through the comment list
        $(".onlineText li").each(function(){
 
            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();
 
            // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).show();
                count++;
            }
        });
 
        // Update the count
        var numberItems = count;
        //begin if to change colors for input group
	if(count == totalItems){
	 //If the count matches the total items in the list.  Set the text to 0 and remove Danger and Success Classes
	 $("#filter-count").parent().removeClass('btn-success').removeClass('btn-danger');
	 $("#filter-count").text(0);
	}else if(count == 0){
	 //If the count matches 0 in the list.  Set the text to 0 and Add Danger and Remove Success Class
	 $("#filter-count").parent().removeClass('btn-success').addClass('btn-danger');
	 $("#filter-count").text(0);
	}else{
	 //If the count is in between 0 and Total items in the list.  Set the text to the counter and Add Success and Remove Danger Class
	 $("#filter-count").parent().addClass('btn-success').removeClass('btn-danger');
	 $("#filter-count").text(count);
	}
    });
});
</script>

</head>


<style>
.jumbotron {
  
  background-image: url("https://images.unsplash.com/photo-1525268323446-0505b6fe7778?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1052&q=80");
  background-size: cover;
  height: 400px;
  width: auto; 
  
}

.teksti{
  text-align: center;
  font-family: "Pacifico";
  padding-top: 100px;
  text-shadow: 0 0 5px #FF0000;
  
}

.navbar{
  height: 60px;
  margin-bottom:0px;
  background-color: white ;
}

.btn{

  border-style: round;
  border-color: #404040;
  border-width: 2px;
  
}

.navbar-brand{
  font-family: "Pacifico";
  color: black;
}

</style>
<body>
<nav class="navbar navbar-default">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">DrinkIt</a>
    </div>
    <!--
    <form class="navbar-form navbar-right" action="/action_page.php">
      
    </form> -->
    <form action="" class="navbar-form navbar-right" id="live-search" method="post">
            <div class="col-sm-10">
              <div class="input-group input-group-sm"> 
                <!--<label class="control-label sr-only" for="filter">Title Search </label>-->
                <input class="form-control input-lg" id="filter" type="text" value="" placeholder="Search..."/>
                <span class="input-group-btn">
                <button class="btn btn-disabled" type="button">Matches <span id="filter-count" class="badge">0</span></button>
                </span> </div>
            </div>
      </form>
    <form class="navbar-form navbar-left">
      <div class="dropdown">
       <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Valikko
       <span class="caret"></span></button>
          <ul class="dropdown-menu">
          <li><a onclick="location.href='Drinkkiohjeet.php'">Drinkkiohjeet</a></li>
          <li><a onclick="location.href='Sekoitus2.php'">Sekoitus generaattori</a></li>
          <li><a onclick="location.href='index.php'">Etusivu</a></li>
          </ul>
      </div>
    </form>
</nav>
<div class="jumbotron text-center">
  <h1 class="teksti" style="color: black">Tervetuloa drinkkimaailman ytimeen </h1>
</div>

<div class="container">
   
  <div class="row">
    <div class="col-md-6">
      <center> <button onclick="location.href='Sekoitus2.php'" type="button" class="btn btn-lg">Aloita sekoittelu</button> </center>
    </div>
    <div class="col-md-6">
      <center> <button onclick="location.href='Drinkkiohjeet.php'" type="button" class="btn btn-lg">Selaa ohjeita</button>  </center>
    </div>
  </div>
    
  
</div>
<hr />
<!-- livesearch -->
<div class="container"> 
  <div class="row">
    <div class="panel panel-info">            
        <!--Online Texts -->        
      <div class="panel-body">        
        <div class="col-sm-6 onlineText">
          <ul>
            <a id="Ainesosat" title="Luettelo ainesosista">
            <h4>Ainesosat</h4>
            </a>
            <li>Appelsiinimehu</li>
            <li>Vichy</li>
            <li>Jallu</li>
            <li>Appelsiinilik????ri</li>
            <li>Lime</li>
            <li>P????ryn??lik????ri</li>
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
