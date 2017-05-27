function validaCampos() {
    var mail = document.getElementById("inputEmail");
    var pass = document.getElementById("inputClave");
    alert(mail);
    if(isset()){
        alert("Debe ingresar un correo !!!");
    } else if(pass === "" || pass === null){
        alert("Debe ingresar la contraseña !!!");
    }
    
    
}


