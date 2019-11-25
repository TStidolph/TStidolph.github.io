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