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



    $.get("index.php").done(function(data){
        alert("Data Loaded: "+data);
    })

    $.post("submit-post.php",{
        title:"AJAX Post",
        content:"AJAX Post Content",
        author:"me",
        data:"2019-01-01"
    }).done(function(data){
        alert("Data Loaded:"+ data);
    })

});

