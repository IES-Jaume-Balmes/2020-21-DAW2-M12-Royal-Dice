registro_partidas = [];
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

//CREAR PARTE ZONA DE RESULTADO
p = document.createElement("p");
p.id = "result";
juego.appendChild(p);

//CREAR PARTE ZONA DE MOSTAR CARTA
div = document.createElement("div");
div.id = "carta";
juego.appendChild(div);

//CREAR PARTE ZONA DE SELECCION MAYOR O MENOR
div = document.createElement("div");
div.id = "div1";
juego.appendChild(div);

function inicializar() {
    document.getElementById("result").innerHTML = "";
    var baraja = JSON.parse('{ "cartas": [{ "palo": "Treboles", "numero": "As" }, { "palo": "Treboles", "numero": "2" }, { "palo": "Treboles", "numero": "3" }, { "palo": "Treboles", "numero": "4" }, { "palo": "Treboles", "numero": "5" }, { "palo": "Treboles", "numero": "6" }, { "palo": "Treboles", "numero": "7" }, { "palo": "Treboles", "numero": "8" }, { "palo": "Treboles", "numero": "9" }, { "palo": "Treboles", "numero": "Jota" }, { "palo": "Treboles", "numero": "Dama" }, { "palo": "Treboles", "numero": "Rey" }, { "palo": "Diamantes", "numero": "As" }, { "palo": "Diamantes", "numero": "2" }, { "palo": "Diamantes", "numero": "3" }, { "palo": "Diamantes", "numero": "4" }, { "palo": "Diamantes", "numero": "5" }, { "palo": "Diamantes", "numero": "6" }, { "palo": "Diamantes", "numero": "7" }, { "palo": "Diamantes", "numero": "8" }, { "palo": "Diamantes", "numero": "9" }, { "palo": "Diamantes", "numero": "Jota" }, { "palo": "Diamantes", "numero": "Dama" }, { "palo": "Diamantes", "numero": "Rey" }, { "palo": "Corazones", "numero": "As" }, { "palo": "Corazones", "numero": "2" }, { "palo": "Corazones", "numero": "3" }, { "palo": "Corazones", "numero": "4" }, { "palo": "Corazones", "numero": "5" }, { "palo": "Corazones", "numero": "6" }, { "palo": "Corazones", "numero": "7" }, { "palo": "Corazones", "numero": "8" }, { "palo": "Corazones", "numero": "9" }, { "palo": "Corazones", "numero": "Jota" }, { "palo": "Corazones", "numero": "Dama" }, { "palo": "Corazones", "numero": "Rey" }, { "palo": "Picas", "numero": "As" }, { "palo": "Picas", "numero": "2" }, { "palo": "Picas", "numero": "3" }, { "palo": "Picas", "numero": "4" }, { "palo": "Picas", "numero": "5" }, { "palo": "Picas", "numero": "6" }, { "palo": "Picas", "numero": "7" }, { "palo": "Picas", "numero": "8" }, { "palo": "Picas", "numero": "9" }, { "palo": "Picas", "numero": "Jota" }, { "palo": "Picas", "numero": "Dama" }, { "palo": "Picas", "numero": "Rey" }] }');

    cartas = [];
    for (let i = 0; i < baraja.cartas.length; i++) {
        cartas.push(baraja.cartas[i]);
    }

    return cartas;
}

function shuffle(array) {
    var currentIndex = array.length,
        temporaryValue, randomIndex;

    while (0 !== currentIndex) {

        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;

        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
    }

    return array;
}

function generarCarta(carta) {
    var el = document.createElement('div');
    el.style.margin = "0 10px"
    el.style.display = "inline-block";
    el.style.backgroundColor = "white";
    var icon = '';
    if (carta.palo == 'Corazones')
        icon = '&hearts;';
    else if (carta.palo == 'Picas')
        icon = '&spades;';
    else if (carta.palo == 'Diamantes')
        icon = '&diams;';
    else
        icon = '&clubs;';

    el.className = 'carta';
    el.style.width = "75px";
    el.style.height = "150px";
    el.style.border = "1px solid black";
    el.style.textAlign = "center";
    el.style.fontSize = "xx-large";
    el.style.borderRadius = "10px";
    el.innerHTML = carta.numero + '<br/>' + icon;
    return el;
}

function mostrar_carta(carta) {
    var div = document.getElementById("carta");
    /*while (div.firstChild) {
        div.removeChild(div.firstChild);
    }*/

    //for (let i = 0; i < 1 /*cartas.length*/ ; i++) {
    div.appendChild(generarCarta(carta));

    //}
}

async function jugar() {
    //LIMPIAR DIV
    zona_cartas = document.getElementById("carta");
    while (zona_cartas.firstChild) {
        zona_cartas.removeChild(zona_cartas.firstChild);
    }
    document.getElementById("apuesta").style.display = "none";
    document.getElementById("inicio").style.display = "none";
    //MEZCAMOS CARTAS------------------------------------------------------------------------------------------
    cartas = inicializar();
    shuffle(cartas);

    //POR HACER
    //RETIRAMOS APUESTA DEL CLIENTE-----------------------------------------------------------------------------
    apuesta = parseInt(document.getElementById("apuesta").value);
    csrf = document.querySelector('meta[name="csrf-token"]').content;
    var resp = await fetch('http://localhost/2020-21-DAW2-M12-Royal-Dice/public/cartamasalta/apuesta', {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrf

        },
        body: JSON.stringify({ apuesta: apuesta })
    });
    //console.log(await resp.json());
    respo = await resp.json();
    console.log(respo.sepuede);
    if (!respo.sepuede) {
        nofichas = document.createElement("p");
        nofichas.innerHTML = "Compra puto";
        juego.appendChild(nofichas);
        return;
    }
    mostrar_carta(cartas[0]);

    var primera_carta = valor_carta(cartas[0]);
    var segunda_carta = valor_carta(cartas[1]);
    //console.log(primera_carta + " - " + segunda_carta);

    mayor = document.createElement('button');
    mayor.appendChild(document.createTextNode("Mayor"));
    mayor.onclick = function() { resolucion_partida(primera_carta > segunda_carta) };
    document.getElementById("div1").appendChild(mayor);

    menor = document.createElement('button');
    menor.appendChild(document.createTextNode("Menor"));
    menor.onclick = function() { resolucion_partida(primera_carta < segunda_carta) };
    document.getElementById("div1").appendChild(menor);
}

async function resolucion_partida(resultado) {
    botones = document.getElementById("div1");
    while (botones.firstChild) {
        botones.removeChild(botones.firstChild);
    }

    p = document.getElementById("result");
    if (resultado) {
        p.innerHTML = "Has ganado";
        registro_partidas.push("W");
        var resp = await fetch('http://localhost/2020-21-DAW2-M12-Royal-Dice/public/cartamasalta/recompensa', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrf

            },
            body: JSON.stringify({ apuesta: apuesta })
        });
        console.log(await resp.json());
    } else {
        p.innerHTML = "Has perdido";
        registro_partidas.push("L");
    }
    mostrar_carta(cartas[1]);
    console.log(registro_partidas);
    document.getElementById("inicio").style.display = "";
    document.getElementById("apuesta").style.display = "";
}

function valor_carta(carta) {
    switch (carta.numero) {
        case "Jota":
            return 11;
            break;
        case "Dama":
            return 12;
            break;
        case "Rey":
            return 13;
            break;
        case "As":
            return 1;
            break;
        default:
            return carta.numero;
            break;
    }

}