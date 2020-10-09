$(document).ready(function(){




    $("#botonhello").click(function(){
        alert("Hi there");
        var boton=document.getElementById("botonhello");
        boton.style.display = 'none';
    });
    
    var options= {
        valueNames:['title']
    };

    new List('sortable-blog-list',options);



});

