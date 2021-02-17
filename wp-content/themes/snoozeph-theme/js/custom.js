window.onload = function(){ 
  //Get a reference to the button
  var button = document.getElementById("generate");

  //Run the function on button click
  button.onclick = function generate() {
      
  // Create a variable to hold a random number
  var randomNum = Math.floor((Math.random() * 99999999) + 1);

  // Create a variable el to hold the ranNum element
  var el = document.getElementById('ranNum');
  
  // Write the number into that element
  el.innerHTML = randomNum;
 }
};




