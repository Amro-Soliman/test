<?php ?>
<!DOCTYPE HTML>
<html>
 <head>
  <meta charset='utf8'>
   <meta author='Amro Soliman'>
   <title> Chuck Norris jokes </title>
   <script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
        <style>
        </style>

  </head>
   <body>
   <div id='container'>
     <h2>Click to get a Chuck Norris joke</h2>
     <form>
       <button id='getJoke'>Get a joke</button>
       </form>
     
     <p id='test'></p>
     </div>
     <script>
     $(document).ready(function(){
       var test = $('#test');
       test.hide();
     $('#getJoke').click(function(e) {
         e.preventDefault();
  
   test.text('loading . . .');
  
  $.ajax({
    type:"GET",
    url:"https://api.chucknorris.io/jokes/random",
    dataType: 'json',

    success: function(data) {
      test.show();
      console.log(data['url']);
      test.text(data['value']);
    }
  });
  
});
     });
     
     
     </script>
     </body>
   </html>