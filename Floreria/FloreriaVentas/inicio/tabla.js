


///*
if (localStorage.getItem('loStPila') == null) {
  localStorage['loStPila'];
  var pilaVacia = [-1];
  localStorage['loStPila'] = JSON.stringify(pilaVacia);
}
//*/



///*
function agregar_carrito(id){
  var bandera = 0;
  var pila = [];
      pila = JSON.parse(localStorage['loStPila']);

  if (pila[0] == -1){
      pila.pop();                                                                                      //Si no hay datos en el vector                                                                         
      pila.push(id);                                                                  //introduce el primer arreglo en el vector local
      localStorage['loStPila'] = JSON.stringify(pila);                                //introduce la pila en el globla storage                               
   
    alert('Se agregó correctamente al carrito el arreglo');                           // e imprime que se ha introducido un arreglo

  } else {                                                                             //Si hay datos en el vector

          for (var i=0; i<pila.length; i++){   if( pila[i] == id){bandera = 1;}    }   //recorre el vector para verificar que el arreglo no este repetido

          if (bandera == 1) {
            alert("Ya está incluido en el carrito el arreglo");}                       //Si esta repetido, pinta en pantalla que ya esta incluido
          else{                                                                        //SI no esta repetido
            pila.push(id);                                                             //Guarda el arreglo en el vector local
            localStorage['loStPila'] = JSON.stringify(pila);                           //introduce la pila en el globla storage 

            alert("Se agregó correctamente al carrito el arreglo");                     //Y pinta el id del areglo que se incluyo
    }
  }
}
//*/



///*
function vaciar_carrito(){

  var pilaVacia = [-1];                                         // creamos un vector llamado pilaVacia con 0 datos
  localStorage['loStPila'] = JSON.stringify(pilaVacia);       // guardamos el vector pilaVacia en la variable LoStpila almacenada en el localStorage
 // alert("Se Elimino un arreglo del carrito");                                  // imprimimos que el carrito esta vacio
}
//*/



///*
function obtenerCarritoLleno(){

   // var pila = [];
          pila = JSON.parse(localStorage['loStPila']);

        for (var i=0; i<pila.length; i++){

           document.write("save " + pila[i], ",");

         }
}
//*/