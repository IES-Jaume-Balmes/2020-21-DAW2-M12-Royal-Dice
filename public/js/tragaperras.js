juego = document.getElementById("juego");

//CREAR INPUT PARA INTRODUCIR APUESTA
input = document.createElement("input");
input.setAttribute("type", "number");
input.id = "apuesta"
input.value = 10;
juego.appendChild(input);

//CREAR BOTON PARA EMPEZAR JUEGO
buton = document.createElement("button");
buton.setAttribute("onclick", "jugar()")
buton.appendChild(document.createTextNode("Jugar"));
buton.id = "inicio";
juego.appendChild(buton);

var opciones = JSON.parse('{ "opciones": [{ "valor": "Diamante", "img": "img/tragaperras/diamante.png" },  { "valor": "Limon", "img": "img/tragaperras/limon.png" }, { "valor": "Naranja", "img": "img/tragaperras/naranja.png" }, { "valor": "Platano", "img": "img/tragaperras/platano.png" }, { "valor": "Sandia", "img": "img/tragaperras/sandia.png" }, { "valor": "Siete", "img": "img/tragaperras/siete.png" }]}');

function jugar() {
    document.getElementById("inicio").style.display = "none";
    document.getElementById("apuesta").style.display = "none";
    if (document.contains(document.getElementById("maquina"))) {
        document.getElementById("maquina").remove();
    }

    //CREAR ZONA DE SLOTS(LO QUE EQUIVALDRIA A LA MAQUINA)
    maquina = document.createElement("div");
    maquina.id = "maquina";
    maquina.style.border = "1px solid white";
    maquina.style.display = "block";
    maquina.style.textAlign = "center";
    maquina.style.width = "auto";
    //maquina.style.height = "100px";

    //CREAR SLOTS
    for (let i = 0; i < 3; i++) {
        slot = document.createElement("div");
        slot.className = 'slot';
        slot.id = "slot" + i;
        slot.style.width = "100px";
        slot.style.height = "150px";
        slot.style.border = "1px solid black";
        slot.style.textAlign = "center";
        slot.style.fontSize = "xx-large";
        slot.style.display = "inline-block";
        slot.style.backgroundColor = "white";
        slot.style.margin = "2%";
        slot.style.borderRadius = "10px";
        slot.style.backgroundImage = "url('img/tragaperras/tragagif" + i + ".gif')";
        maquina.appendChild(slot);
    }

    juego.appendChild(maquina);
    buton = document.createElement("button");
    buton.id = "parar";
    buton.setAttribute("onclick", "parar()")
    buton.appendChild(document.createTextNode("Parar"));
    juego.appendChild(buton);



    //wait(1000);

}

function parar() {
    document.getElementById("parar").remove();
    for (let i = 0; i < 3; i++) {
        slot = document.getElementById("slot" + i);
        result = opciones.opciones[Math.floor(Math.random() * 6)];
        slot.style.backgroundImage = "url(" + result.img + ")";
        slot.style.backgroundSize = "100% 100%";
    }
    document.getElementById("inicio").style.display = "";
    document.getElementById("apuesta").style.display = "";
}

function wait(ms) {
    var start = new Date().getTime();
    var end = start;
    while (end < start + ms) {
        end = new Date().getTime();
    }
}