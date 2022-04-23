class Agotado{

  constructor(boton){
    this.boton_elegido = document.querySelector(boton);
    this.agregandoEvento();



  }


  agregandoEvento(){
    this.boton_elegido.addEventListener("click", function(){
      alert("este articulo no esta disponible");
    });

  }


}

let objeto = new Agotado(".boton_agotado");
