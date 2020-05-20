class Caja {

    constructor(id,lado1,lado2,lado3,cantidad,pesoV1,pesoV2){
        this.id = id;
        this.lado1 = lado1;
        this.lado2 = lado2;
        this.lado3 = lado3;
        this.cantidad = cantidad;
        this.pesoV1 = pesoV1;
        this.pesoV2 = pesoV2;
    }
}

var paquetes = [];

function obtenerDatos() {
    var l1 = document.getElementById("lado1").value;
    l1=parseInt(l1);

    var l2 = document.getElementById("lado2").value;
    l2=parseInt(l2);

    var l3 = document.getElementById("lado3").value;
    l3=parseInt(l3);

    var bultos = document.getElementById("cantidad").value;
    bultos=parseInt(bultos);

    var peso1 = (l1*l2*l3)/4000*bultos;

    var peso2 = (l1*l2*l3)/6000*bultos;
   

    function crearCaja() {
        var pack = new Caja (paquetes.length+1,l1,l2,l3,bultos,peso1,peso2);
        paquetes.push(pack);
    };
    crearCaja();

    function mostrarListado(){
        var lista='';
        for(var i=0; i<paquetes.length; i++){
          lista+= 'id:' + paquetes[i].id + ' - '+
            '  ladoA:' + paquetes[i].lado1 + ' - '+
            '  ladoB:' + paquetes[i].lado2+ ' - '+
            '  ladoC:' + paquetes[i].lado3 + ' - '+
            '  bultos:' + paquetes[i].cantidad + ' - '+
            '  PesoDHL:' + paquetes[i].pesoV1 + ' - '+
            '  PesoSEUR:' + paquetes[i].pesoV2+ 
            '\n';
        }
        document.getElementById('listado').innerText = lista;
    
      }
     mostrarListado(); 

    function sumarPeso1() {
        var totalesPeso = 0;
        for (let p = 0; p < paquetes.length; p++) {
            totalesPeso +=paquetes[p].pesoV1;   
        }
        document.getElementById('totales').innerText = 'pesoDHL:'+totalesPeso.toFixed(2);
    }  
    sumarPeso1();

    function sumarPeso2() {
        var totalesPeso2 = 0;
        for (let p = 0; p < paquetes.length; p++) {
            totalesPeso2 +=paquetes[p].pesoV2;   
        }
        document.getElementById('totales2').innerText = 'pesoSEUR: '+totalesPeso2.toFixed(2);
    }  
    sumarPeso2();

}  

function borrarBulto() {
        var n = document.getElementById("borrar").value;
        n=parseInt(n);
        var aborrar = n-1;
    
        paquetes.splice(aborrar,1);

        // obtenerDatos(); investigar como acceder solo a la funcion mostrar listado        
        function mostrarListado(){
            var lista='';
            for(var i=0; i<paquetes.length; i++){
              lista+= 'id:' + paquetes[i].id + ' - '+
                '  ladoA:' + paquetes[i].lado1 + ' - '+
                '  ladoB:' + paquetes[i].lado2+ ' - '+
                '  ladoC:' + paquetes[i].lado3 + ' - '+
                '  bultos:' + paquetes[i].cantidad + ' - '+
                '  PesoDHL:' + paquetes[i].pesoV1 + ' - '+
                '  PesoSEUR:' + paquetes[i].pesoV2+ 
                '\n';
            }
            document.getElementById('listado').innerText = lista;
          }
          mostrarListado();
    }
