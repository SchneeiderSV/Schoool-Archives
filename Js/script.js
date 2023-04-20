var y = 0;
var counter = document.getElementById("x")
var decrease = document.getElementById("button1");
var reset = document.getElementById("button2");
var increase = document.getElementById("button3");

decrease.addEventListener("click", function(){
    y--;
    counter.innerHTML = y;
})

reset.addEventListener("click", function(){
    y = 0;
    counter.innerHTML = y;
});

increase.addEventListener("click", function(){
    y++;
    counter.innerHTML = y;
});

