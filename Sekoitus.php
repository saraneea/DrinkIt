<!DOCTYPE html>
<html lang="en">
  
<style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
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
</script>
<!-- Drinkkiohjehaku-->
<script>
  
  var ainesosat = {1:{id:"jallu", nimi:"Jallu"},
                  2: {id: "appelsiinil", nimi:"Appelsiinilikööri"},
                  3: {id: "lime", nimi:"Lime"},
                  4: {id: "päärynäl", nimi:"Päärynälikööri"},
                  5: {id: "sprite", nimi:"Sprite"},
                  6: {id: "vodka", nimi:"Vodka"},
                  7: {id: "vichy", nimi:"Vichy"},
                  8: {id: "kossu ", nimi:"Kossu"}
                   };

 var  valitut = {};

 function move() {
  
  var node = document.createElement("LI");
  var textnode = document.createTextNode("appelsiinimehu");
  node.appendChild(textnode);
  document.getElementById("lista").appendChild(node); 
  }

 function ifClicked() {

    if(document.getElementById(1).clicked == true ){
        window.alert("ok"); 
        var node = document.createElement("LI");
        var textnode = document.createTextNode("Jallu");
        node.appendChild(textnode);
        document.getElementById("lista").appendChild(node); 
      }
    else{
      window.alert("errori");
      var node = document.createElement("LI");
        var textnode = document.createTextNode("Jallu");
        node.appendChild(textnode);
        document.getElementById("lista").appendChild(node); 
    }
 }


</script>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>
</head>


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
          <li><a onclick="location.href='index.php'">Etusivu</a></li>
          </ul>
      </div>
    </form>
</nav>
<div class="jumbotron text-center">
  <h1>Lets mix it! </h1>
  
</div>

<hr />
<!-- livesearch -->
<div class="container">
 
  <div class="row">

    <div class="col-sm-6">
      <div class="panel panel-default" style="height: 350px;">  
        <div id="Valinnat"class="panel-body">       
            <ul>
              <a id="Ainesosat" title="Luettelo ainesosista">
              <h4>Ainesosat</h4>
              </a>
              <a onclick="move()"> <li id="appelsiini">Appelsiinimehu</li> </a>
              <a onclick="tarkistaId()" id="vichy"> <li >Vichy</li></a>
              <a onclick="ifClicked()" id=1> <li>Jallu</li> </a>
              <li>Appelsiinilikööri</li>
              <li>Lime</li>
              <li>Päärynälikööri</li>
              <li>Sprite</li>
              <li>Vodka</li>
              
            </ul>
        </div>  
      </div>
    </div>
  
    <div class="col-sm-6">
      <div class="panel panel-default" style="height: 350px;">  
        <div id="Valinnat"class="panel-body">              
              <ul id="lista">
                <a title="Valitsemasi ainesosat">
                <h4>Valinnat</h4>
              </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Dropdown</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <a href="#about">About</a>
    <a href="#base">Base</a>
    <a href="#blog">Blog</a>
    <a href="#contact">Contact</a>
    <a href="#custom">Custom</a>
    <a href="#support">Support</a>
    <a href="#tools">Tools</a>
  </div>
</div>
 
</div>

</body>
</html>

