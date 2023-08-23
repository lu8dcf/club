
// reconozca esta constante segun el primer elemento de la clase de la PRIMER PAGINA
const movPagina=document.querySelector(".movPagina")

// se crea la constante con el boton que sea de pagina siguiente
const botonAdelante2=document.querySelector(".sigPagina");

const botonAtras1=document.querySelector(".volver-pag1");
const botonAdelante3=document.querySelector(".adelante-pag3");

const botonAtras2=document.querySelector(".volver-pag2");
const botonAdelante4=document.querySelector(".adelante-pag4");

const botonAtras3=document.querySelector(".volver-pag3");
const botonFinal=document.querySelector(".finalizar");

const progresoText=document.querySelectorAll(".paso p"); // trae a todos los elementos de las clases
const progresoCheck=document.querySelectorAll(".paso img");
const progresoNum=document.querySelectorAll(".paso .num");

let max=4; //numero de paginas creadas
let contador=1;

// BOTONES QUE ADELANTAN
// cuando escuhe un click del boton siguiente de la primer pag
botonAdelante2.addEventListener("click", function(e){
    e.preventDefault(); //evita el recargo de la pagina

    var nombre=document.getElementById("nom").value;
    var apellido=document.getElementById("ape").value;
    var dni=document.getElementById("dni").value;


    if ((nombre=="" || apellido=="" || dni=="") ||
         (nombre.length<=2 || apellido.length<=2 || dni.length<=6) || 
            (!verificarLetras(nombre) || !verificarLetras(apellido) || !verificarNumeros(dni)) ) {
            
        if (nombre=="") {
            document.getElementById("nom-error").innerHTML="* Este campo no puede quedar vacío"
            document.getElementById("nom").style.borderColor="#ff0000";
        }else if (nombre<=2) {
            document.getElementById("nom-error").innerHTML="* Debe tener 2 o más carácteres"
            document.getElementById("nom").style.borderColor="#ff0000";
        }else if (!verificarLetras(nombre)) {
            document.getElementById("nom-error").innerHTML="* Dato no válido, ingrese solo letras"
            document.getElementById("nom").style.borderColor="#ff0000";
        }else{
            document.getElementById("nom-error").innerHTML=""
            document.getElementById("nom").style.borderColor="rgb(179, 168, 189)";
        }
        if (apellido=="") {
            document.getElementById("ape-error").innerHTML="* Este campo no puede quedar vacío"
            document.getElementById("ape").style.borderColor="#ff0000";
        }else if (apellido<=2) {
            document.getElementById("ape-error").innerHTML="* Debe tener 2 o más carácteres"
            document.getElementById("ape").style.borderColor="#ff0000";
        }else if (!verificarLetras(apellido)) {
            document.getElementById("ape-error").innerHTML="* Dato no válido, ingrese solo letras"
            document.getElementById("ape").style.borderColor="#ff0000";
        }else{
            document.getElementById("ape-error").innerHTML=""
            document.getElementById("ape").style.borderColor="rgb(179, 168, 189)";
        }
        if (dni=="") {
            document.getElementById("dni-error").innerHTML="* Este campo no puede quedar vacío"
            document.getElementById("dni").style.borderColor="#ff0000";
        }else if (dni.length<=6) {
            document.getElementById("dni-error").innerHTML="* Debe tener al menos 7 dígitos"
            document.getElementById("dni").style.borderColor="#ff0000";
        }else if (!verificarNumeros(dni)) {
            document.getElementById("dni-error").innerHTML="* Dato no válido, ingrese solo números"
            document.getElementById("dni").style.borderColor="#ff0000";
        }else{
            document.getElementById("dni-error").innerHTML=""
            document.getElementById("dni").style.borderColor="rgb(179, 168, 189)";
        }

    }else{    
        
        document.getElementById("nom-error").innerHTML=""
        document.getElementById("nom").style.borderColor="rgb(179, 168, 189)";
        document.getElementById("ape-error").innerHTML=""
        document.getElementById("ape").style.borderColor="rgb(179, 168, 189)";
        document.getElementById("dni-error").innerHTML=""
        document.getElementById("dni").style.borderColor="rgb(179, 168, 189)";

        movPagina.style.marginLeft="-25%";
        progresoNum[contador-1].classList.add("active"); //agrega a la lista de clases de num la clase active
        progresoCheck[contador-1].classList.add("active");
        progresoText[contador-1].classList.add("active");

        contador+=1;
    }
    
})

botonAdelante3.addEventListener("click", function(e){
    e.preventDefault(); //evita el recargo de la pagina

    var codigoPostal=document.getElementById("cod").value;

    if (( codigoPostal=="") ||
    (codigoPostal.length<4) || 
       (!verificarNumeros(codigoPostal)) ) {

        if (codigoPostal=="") {
            document.getElementById("cod-error").innerHTML="* Este campo no puede quedar vacío"
            document.getElementById("cod").style.borderColor="#ff0000";
        }else if (codigoPostal.length<4) {
            document.getElementById("cod-error").innerHTML="* Debe tener 4 o más dígitos"
            document.getElementById("cod").style.borderColor="#ff0000";
        }else if (!verificarNumeros(codigoPostal)) {
            document.getElementById("cod-error").innerHTML="* Dato no válido, ingrese solo numeros"
            document.getElementById("cod").style.borderColor="#ff0000";
        }else{
            document.getElementById("cod-error").innerHTML=""
            document.getElementById("cod").style.borderColor="rgb(179, 168, 189)";
        }
    }else{
        document.getElementById("cod-error").innerHTML=""
        document.getElementById("cod").style.borderColor="rgb(179, 168, 189)";

        movPagina.style.marginLeft="-50%";
        progresoNum[contador-1].classList.add("active"); //agrega a la lista de clases de num la clase active
        progresoCheck[contador-1].classList.add("active");
        progresoText[contador-1].classList.add("active");
        contador+=1;
    }
})
botonAdelante4.addEventListener("click", function(e){
    e.preventDefault(); //evita el recargo de la pagina

    var numero=document.getElementById("nmr").value;

    if (( numero=="") ||
    (numero.length>6) || 
       (!verificarNumeros(numero)) ) {

        if (numero=="") {
            document.getElementById("nmr-error").innerHTML="* Este campo no puede quedar vacío"
            document.getElementById("nmr").style.borderColor="#ff0000";
        }else if (numero.length>6) {
            document.getElementById("nmr-error").innerHTML="* No puede tener más de 6 dígitos"
            document.getElementById("nmr").style.borderColor="#ff0000";
        }else if (!verificarNumeros(numero)) {
            document.getElementById("nmr-error").innerHTML="* Dato no válido, ingrese solo números"
            document.getElementById("nmr").style.borderColor="#ff0000";
        }else{
            document.getElementById("nmr-error").innerHTML=""
            document.getElementById("nmr").style.borderColor="rgb(179, 168, 189)";
        }
    }else{
        document.getElementById("nmr-error").innerHTML=""
        document.getElementById("nmr").style.borderColor="rgb(179, 168, 189)";

        movPagina.style.marginLeft="-75%";
        progresoNum[contador-1].classList.add("active"); //agrega a la lista de clases de num la clase active
        progresoCheck[contador-1].classList.add("active");
        progresoText[contador-1].classList.add("active");
        contador+=1;
    }
})

// BOTONES QUE RETROCEDEN
botonAtras1.addEventListener("click", function(e){
    e.preventDefault(); //evita el recargo de la pagina
    movPagina.style.marginLeft="0%";
    progresoNum[contador-2].classList.remove("active"); //agrega a la lista de clases de num la clase active
    progresoCheck[contador-2].classList.remove("active");
    progresoText[contador-2].classList.remove("active");
    contador-=1;
    
})

botonAtras2.addEventListener("click", function(e){
    e.preventDefault(); //evita el recargo de la pagina
    movPagina.style.marginLeft="-25%";
    progresoNum[contador-2].classList.remove("active"); //agrega a la lista de clases de num la clase active
    progresoCheck[contador-2].classList.remove("active");
    progresoText[contador-2].classList.remove("active");
    contador-=1;
})

botonAtras3.addEventListener("click", function(e){
    e.preventDefault(); //evita el recargo de la pagina
    movPagina.style.marginLeft="-50%";
    progresoNum[contador-2].classList.remove("active"); //agrega a la lista de clases de num la clase active
    progresoCheck[contador-2].classList.remove("active");
    progresoText[contador-2].classList.remove("active");
    contador-=1;
})

// BOTON FINAL

function terminar(){
    e.preventDefault(); //evita el recargo de la pagina

    var email=document.getElementById("email").value;

    if (( email=="" ) || 
       (!verificarEmail(email)) ) {

        if (email=="") {
            document.getElementById("email-error").innerHTML="* Este campo no puede quedar vacío"
            document.getElementById("email").style.borderColor="#ff0000";
        }else if (!verificarEmail(email)) {
            document.getElementById("email-error").innerHTML="* Dato no válido, reingrese el email"
            document.getElementById("email").style.borderColor="#ff0000";
        }else{
            document.getElementById("email-error").innerHTML=""
            document.getElementById("email").style.borderColor="rgb(179, 168, 189)";
        }
    }else{
        document.getElementById("email-error").innerHTML=""
        document.getElementById("email").style.borderColor="rgb(179, 168, 189)";

        progresoNum[contador-1].classList.add("active"); //agrega a la lista de clases de num la clase active
        progresoCheck[contador-1].classList.add("active");
        progresoText[contador-1].classList.add("active");
        contador+=1;
        alert("Finalizado el registro.")


        
    }
}



// botonFinal.addEventListener("click", function(e){
//     e.preventDefault(); //evita el recargo de la pagina

//     var email=document.getElementById("email").value;

//     if (( email=="" ) || 
//        (!verificarEmail(email)) ) {

//         if (email=="") {
//             document.getElementById("email-error").innerHTML="* Este campo no puede quedar vacío"
//             document.getElementById("email").style.borderColor="#ff0000";
//         }else if (!verificarEmail(email)) {
//             document.getElementById("email-error").innerHTML="* Dato no válido, reingrese el email"
//             document.getElementById("email").style.borderColor="#ff0000";
//         }else{
//             document.getElementById("email-error").innerHTML=""
//             document.getElementById("email").style.borderColor="rgb(179, 168, 189)";
//         }
//     }else{
//         document.getElementById("email-error").innerHTML=""
//         document.getElementById("email").style.borderColor="rgb(179, 168, 189)";

//         progresoNum[contador-1].classList.add("active"); //agrega a la lista de clases de num la clase active
//         progresoCheck[contador-1].classList.add("active");
//         progresoText[contador-1].classList.add("active");
//         contador+=1;
//         alert("Finalizado el registro.")
//     }
// })


// EXPRESIONES REGULARES

function verificarLetras(input) {
    const valor = input.trim(); // Eliminar espacios en blanco al principio y al final
  
    // Expresión regular para verificar que solo haya letras
    const expresion = /^[a-zA-ZáéíóúüÁÉÍÓÚÜ]+(\s[a-zA-ZáéíóúüÁÉÍÓÚÜ]+)*$/;
  return expresion.test(input);  
  }

function verificarNumeros(input){
    const expresion= /^[0-9]+$/;
    return expresion.test(input)
}

function verificarEmail(input){
    const expresion= /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    return expresion.test(input)
}
