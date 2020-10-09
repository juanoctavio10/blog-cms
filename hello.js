alert('Hello');

var firstName = "Jane";
var lastName = "Doe";
var age = 35;
var married = true;
var childrenNames = ["Alice","Bod"];
var husband = { firstName: "John", lastName: "Doe", age:35 };

var fullName = firstName +" "+ lastName;
var dogYear = age/7;
var isAdult = dogYear > 4;
var isSeattled= isAdult && married;


function getFullName(firstName, lastName){
    return firstName+" "+ lastName;
}

var fullName= getFullName(firstName,lastName);
var fullName= getFullName("Alice","Doc");

if (isSeattled){
    document.write(fullName+ "is settled");
} else {
    document.write(fullName+ "is not settled");
}

childrenNames.forEach(function(childName){
    document.write("<li>"+ childName+"</li>")
})

function hello(){

    alert("Hi there");
    var boton=document.getElementById("botonhello");
    boton.style.display = 'none';

}

