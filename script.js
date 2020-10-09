
    var editor =  ace.edit("editor");
    editor.session.setMode("ace/mode/html");

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


/*
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
*/


    $("#submit").click(function(){
        var title = $("#title").val();
        var author = $("#autor").val();
        var date = $("#date").val();
        var content = editor.getValue();

        $.post("submit-post.php",{
            title: title,
            content: content,
            author: author,
            data:date
        }).done(function(data){
            window.location = "/blog-cms/index.php";
        })

    });


});

