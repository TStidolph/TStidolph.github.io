function initialiseClock(){
  var currentDate = new Date();
  var hour = currentDate.getHours();
  var minute = currentDate.getMinutes();
  var second = currentDate.getSeconds();
    
  document.getElementById('clock').innerHTML = "Current time (GMT): "+hour+":"+minute+":"+second;
    
  var timer = setTimeout(initialiseClock,1000);
};

window.onload = initialiseClock();

var closeText = document.getElementById("text-hide");
var initialText = document.getElementById("initial-text");

closeText.onclick=function(){
    initialText.style.display = 'none';
    initialText.style.color = '0';
};

$("#simulation-button").click(function(){
    $("#simulation-theory").toggle()
});

$("#drones-button").click(function(){
    $("#drones").toggle()
});