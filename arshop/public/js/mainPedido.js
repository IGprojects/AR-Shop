const botones = document.querySelectorAll(".bEliminar");

botones.forEach(boton=>{
    boton.addEventListener("click", function(){
        const ID_Pedido=this.dataset.pedido;
        const confirm =window.confirm("Desitja eliminar el Pedido amb ID="+ID_Pedido +"?")
        if(confirm){
            httpRequest("http://localhost/arshop/consulta/eliminarpedido/"+ID_Pedido, function(){});
            console.log("S'ha eliminat el pedido"); 

            const tbody = document.querySelector("#tbody-pedidos");
            const fila = document.querySelector("#fila-"+ID_Pedido);
        
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