class Menu_responsive{

  constructor(menu){
    this.menu = document.querySelector(menu);
    console.log(this.menu);
    this.AddEvents();



  }


  AddEvents(){
    //evento de flecha


    this.menu.addEventListener("click" , function(){

      let flecha = document.querySelector(".nav__content_menú img");
      let menu_responsive =document.querySelector(".nav__ul");

      if(!flecha.classList.contains("active")){

        if(flecha.classList.contains("desactive")){

          flecha.classList.remove("desactive");


        }
        flecha.classList.add("active");
        menu_responsive.classList.add("active");

        console.log(menu_responsive);

      } else {
        flecha.classList.remove("active");
        menu_responsive.classList.remove("active");

        flecha.classList.add("desactive");

      }
    });


  }


}

let objeto = new Menu_responsive(".nav__content_menú");
