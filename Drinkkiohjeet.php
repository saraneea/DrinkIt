<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
<style>
#section1 {
  height: 600px;
  background-color: pink;
}

#section2 {
  height: 600px;
  background-color: yellow;
}
</style>
</head>
<body>

<h1>Smooth Scroll</h1>

<div class="main" id="section1">
  <h2>Drinkkiohjeet</h2>
  <p>Click on the link to see the "smooth" scrolling effect.</p>
  <a href="#section2">Click Me to Smooth Scroll to Section 2 Below</a>
  <p>Note: Remove the scroll-behavior property to remove smooth scrolling.</p>
</div>

<div class="main" id="section2">
  <h2>Section 2</h2>
  <a href="#section1">Click Me to Smooth Scroll to Section 1 Above</a>
</div>

</body>
</html>
