balance = 0;
cont = 0;

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

//CREAR RESULTADO PARTIDA ANTERIOR
div = document.createElement("div");
div.style.display = "none";
div.id = "partidaAnterior";
div.style.color = "white";
juego.appendChild(div);

var opciones = JSON.parse('{ "opciones": [{"nombre": "Diamante", "valor": "5", "img": "img/tragaperras/diamante.png" },{ "nombre": "Limon", "valor": "0", "img": "img/tragaperras/limon.png" }, { "nombre": "Naranja", "valor": "1", "img": "img/tragaperras/naranja.png" }, { "nombre": "Platano", "valor": "0.5", "img": "img/tragaperras/platano.png" }, { "nombre": "Sandia", "valor": "1.5", "img": "img/tragaperras/sandia.png" }, { "nombre": "Caquita", "valor": "0", "img": "img/tragaperras/caquita.png" }, { "nombre": "Siete", "valor": "2", "img": "img/tragaperras/siete.png" }]}');
console.log(opciones)

function probabilidades() {
    s = "";
    //PROBABILIDAD CAQUITA
    for (let i = 0; i <= 6; i++) {
        s += "5"
    }
    //PROBABILIDAD LIMON
    for (let i = 0; i <= 58; i++) {
        s += "1"
    }
    //PROBABILIDAD PLATANO
    for (let i = 0; i <= 16; i++) {
        s += "3"
    }
    //PROBABILIDAD NARANJA
    for (let i = 0; i <= 9; i++) {
        s += "2"
    }
    //PROBABILIDAD SANDIA
    for (let i = 0; i <= 7; i++) {
        s += "4"
    } //PROBABILIDAD SIETE
    for (let i = 0; i <= 3; i++) {
        s += "6"
    }
    //PROBABILIDAD DIAMANTE
    for (let i = 0; i <= 1; i++) {
        s += "0"
    }
    //console.log(s);
    r = s.charAt(Math.floor(Math.random() * s.length));
    return parseInt(r);
}


function jugar() {
    document.getElementById("inicio").style.display = "none";
    document.getElementById("apuesta").style.display = "none";
    if (document.contains(document.getElementById("maquina"))) {
        document.getElementById("maquina").remove();
    }


    //COMPROVAR SI APUESTA ES CORRECTA
    apuesta = parseInt(document.getElementById("apuesta").value);

    if (document.contains(document.getElementById("apuestaMal"))) {
        document.getElementById("apuestaMal").remove();
    }

    if (apuesta < 1) {
        p = document.createElement("p");
        p.id = "apuestaMal";
        p.innerHTML = "Apuesta invalida";
        juego.appendChild(p);
        document.getElementById("inicio").style.display = "";
        document.getElementById("apuesta").style.display = "";
        return;
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
    results = [];
    for (let i = 0; i < 3; i++) {
        slot = document.getElementById("slot" + i);
        result = opciones.opciones[probabilidades()];
        results.push(result);
        slot.style.backgroundImage = "url(" + result.img + ")";
        slot.style.backgroundSize = "100% 100%";
    }
    console.log(results);

    ganancias = 0;
    for (let i = 0; i < results.length; i++) {
        if (results[i].nombre == "Caquita") {
            ganancias = 0;
            break;
        }
        ganancias += parseInt(results[i].valor) * apuesta;
    }
    //console.log(ganancias);

    balance -= apuesta;
    cont++;
    if (ganancias != 0) {
        balance += ganancias
    }

    div = document.getElementById("partidaAnterior");
    div.style.display = "";
    div.innerHTML = "En la ultima partida has ganado " + ganancias + " fichas.<br>Tu balance total es de " + balance + " fichas en las ultimas " + cont + " partidas.";



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