<!DOCTYPE html>
<html lang="en">
<head>
  <title>DrinkIt</title>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!--
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 -->
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



// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}



</script>



<script> 

var kossuvissy = ["vodka", "vissy"];
var viskikola = ["viski","coca-cola"];
var vodka_appelsiini = ["vodka", "appelsiini"];
var blue_lagoon = ["blue-curaqao","sprite"];
var pina_colada = ["kookos", "vodka"];
var kelkka = ["vodka", "appelsiini", "karpalo"];
var tequila_sunrise = ["tequila", "passion"];
var niskalaukaus = ["absintti"];

type="text/javascript">
    function reply_click(clicked_id)
    {
     para = document.getElementById(clicked_id).innerText;
     <button onclick="alert('Viskikola\nviski, coca-cola')">Avaa </button>
     } 

</script>


</head>
<style>
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
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
                <input class="form-control input-lg" id="filter" type="text" value="" placeholder="Search..." />
                <span class="input-group-btn">
                <button class="btn btn-disabled" type="button">Matches <span id="filter-count" class="badge">0</span></button>
                </span> </div>
            </div>
      </form>
    <form class="navbar-form navbar-left">
      <div class="dropdown">
       <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Valikko
       <span class="caret"></span></button>
          <ul class="dropdown-menu">
          <li><a onclick="location.href='Drinkkiohjeet.php'">Drinkkiohjeet</a></li>
          <li><a onclick="location.href='Sekoitus.php'">Sekoitus generaattori</a></li>
          <li><a onclick="location.href='index.php'">Sekoitus</a></li>
          </ul>
      </div>
    </form>
</nav>
<div class="jumbotron text-center">
  <h1>Drinkkiohjeet </h1>
  <p>Selaa valmiita ohjeita</p> 
</div>
<div class="container">

    
  
</div>
<hr />
<!-- livesearch -->
<div class="container">
 
  <div class="row">
    <div class="panel panel-info">
            
        <!--Online Texts -->
        
      <div class="panel-body">
      <!--
        <div class="row">
          <form action="" class="" id="live-search" method="post">
            <div class="col-sm-12">
              <div class="input-group input-group-lg"> 
                <!--<label class="control-label sr-only" for="filter">Title Search </label>
                <input class="form-control input-lg" id="filter" type="text" value="" placeholder="Search..." />
                <span class="input-group-btn">
                <button class="btn btn-disabled" type="button">Matches <span id="filter-count" class="badge">0</span></button>
                </span> </div>
            </div>
          </form>
        </div>
        -->
        

<div class="container">
  <div class="row">
  
<div class="col"> <center> <button onclick="alert('Viskikola\nviski, coca-cola')">Viskikola</button> </center>

<div class="col"> <center> <button onclick="alert('Viskikola\nviski, coca-cola')">Viskikola</button> </center>

<center> <button onclick="alert('Viskikola\nviski, coca-cola')">Viskikola</button> </center>

<center> <button onclick="alert('Viskikola\nviski, coca-cola')">Viskikola</button> </center>

<center> <button onclick="alert('Viskikola\nviski, coca-cola')">Viskikola</button> </center>

<center> <button onclick="alert('Viskikola\nviski, coca-cola')">Viskikola</button> </center>

<center> <button onclick="alert('Viskikola\nviski, coca-cola')">Viskikola</button> </center>

<center> <button onclick="alert('Viskikola\nviski, coca-cola')">Viskikola</button> </center>

<center> <button onclick="alert('Viskikola\nviski, coca-cola')">Viskikola</button> </center>

<center> <button onclick="alert('Viskikola\nviski, coca-cola')">Viskikola</button> </center>

<center> <button onclick="alert('Viskikola\nviski, coca-cola')">Viskikola</button> </center>

<center> <button onclick="alert('Viskikola\nviski, coca-cola')">Viskikola</button> </center>

<center> <button onclick="alert('Viskikola\nviski, coca-cola')">Viskikola</button> </center>
    
  </div>
</div> 





  


       
      </div>
    </div>
  </div>
</div>
</body>
</html>

