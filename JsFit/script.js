document.querySelector("form").addEventListener("submit", function(e){
    e.preventDefault();
    texto = "";
    nome = document.querySelector('#name').value;
    texto += `${nome}`;
    if(document.querySelector("#size1").checked){
        size = document.querySelector('#size1').value;
        texto += ` ${size}`;
    }
    else if(document.querySelector("#size2").checked){
        size = document.querySelector('#size2').value;
        texto += ` ${size}`;
    }else{
        size = "M";
        texto += `${size}`;
    }
    items = [document.querySelector("#item1"), document.querySelector("#item2"), document.querySelector("#item3")];
    for (let i = 0; i < items.length; i++) {
        if(items[i].checked){
            texto += `, ${items[i].value}`;
        } 
    }    
    
    console.log(texto);
    document.querySelector(".boxResult").innerHTML = texto;

});

