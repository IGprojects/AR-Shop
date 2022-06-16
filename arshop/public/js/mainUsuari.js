const botones = document.querySelectorAll(".bEliminar");

botones.forEach(boton=>{
    boton.addEventListener("click", function(){
        const ID_Usuari=this.dataset.usuari;
        const confirm =window.confirm("Desitja eliminar el Usuari amb ID="+ID_Usuari +"?")
        if(confirm){
            httpRequest("http://localhost/arshop/consulta/eliminarusuari/"+ID_Usuari, function(){});
            console.log("S'ha eliminat l'usuari"); 

            const tbody = document.querySelector("#tbody-usuaris");
            const fila = document.querySelector("#fila-"+ID_Usuari);
        
            tbody.removeChild(fila);

        }else{}
    });

});

function httpRequest(url,callback){
    const http = new XMLHttpRequest();
    http.open("GET",url);
    http.send();

    http.onreadystatechange=function(){
        if(this.readyState==4&&this.status==200){
            callback.apply(http);
        }
    }
}