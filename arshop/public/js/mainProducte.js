const botones = document.querySelectorAll(".bEliminar");

botones.forEach(boton=>{
    boton.addEventListener("click", function(){
        const ID_Producte=this.dataset.producte;
        const confirm =window.confirm("Desitja eliminar el producte amb ID="+ID_Producte +"?")
        if(confirm){
            httpRequest("http://localhost/arshop/consulta/eliminarproducte/"+ID_Producte, function(){});
            console.log("S'ha eliminat el producte"); 

            const tbody = document.querySelector("#tbody-productes");
            const fila = document.querySelector("#fila-"+ID_Producte);
        
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