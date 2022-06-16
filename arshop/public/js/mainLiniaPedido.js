const botones = document.querySelectorAll(".bEliminar");

botones.forEach(boton=>{
    boton.addEventListener("click", function(){
        const ID_Liniapedido=this.dataset.liniapedido;
        const confirm =window.confirm("Desitja eliminar la linia de pedido amb ID="+ID_Liniapedido +"?")
        if(confirm){
            httpRequest("http://localhost/arshop/consulta/eliminarliniapedido/"+ID_Liniapedido, function(){});
            console.log("S'ha eliminat la linia pedido"); 

            const tbody = document.querySelector("#tbody-liniaspedido");
            const fila = document.querySelector("#fila-"+ID_Liniapedido);
        
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