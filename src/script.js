


function openNav(){
    document.getElementById("mobile-menu").style.width = "100%";
}

function closeNav(){
    document.getElementById("mobile-menu").style.width = "0%";
}

const img = document.querySelector('#estrellaSSP');
const navsop = document.querySelector('#navs-op');
const navcont = document.querySelector('#contenidos-nav');
setInterval(() => {
    if(window.scrollY > 1){ 
    	img.style.animation = 'fadeIn 1s ease-out forwards';
        navsop.style.background ="#2a2a2a"
        navsop.style.animation = ' fadeOut 3s ease-out forwards';
        navcont.style.animation = ' fadeOut 3s ease-out forwards';
        // navsop.style.opacity = '1 !important';
        // navsop.style.animation = ' fadeOut 2s ease-out forwards';
        
        
        
    }else {
        img.style.display = 'block';
        img.style.animation = 'fadeOut 1s ease-out forwards';
        navsop.style.background ="transparent"
        navsop.style.animation = 'fadeOut 3s ease-out forwards';
        // navcont.style.opacity = '1';
        // navsop.style.opacity = '1';
        // navsop.style.animation = 'fadeIn 0.1s ease-out forwards';
        
    }

}, 1000);


let preguntas_aleatorias = true;
let mostrar_pantalla_juego_términado = true;
let reiniciar_puntos_al_reiniciar_el_juego = true;

window.onload = function () {
    base_preguntas = readText("preguntas.json");
    interprete_bp = JSON.parse(base_preguntas);
    escogerPreguntaAleatoria();
};

let pregunta;
let posibles_respuestas;
btn_correspondiente = [
	select_id("btn1"),
	select_id("btn2"),
	select_id("btn3"),
];

let npreguntas = [];

let preguntas_hechas = 0;
let preguntas_correctas = 0;

function escogerPreguntaAleatoria() {
    let n;
    if (preguntas_aleatorias) {
		n = Math.floor(Math.random() * interprete_bp.length );
		console.log(n);
    } else {
      	n = 0;
    }
  
    while (npreguntas.includes(n)) {
      	n++;
		if (n >= interprete_bp.length) {
			n = 0;
		}
		if (npreguntas.length == interprete_bp.length) {
			//Aquí es donde el juego se reinicia
			if (mostrar_pantalla_juego_términado) {
			swal.fire({
				title: "Juego finalizado",
				text:
				"Puntuación: " + preguntas_correctas + "/" + (preguntas_hechas),
				icon: "success",
				background: "#2a2a2a"
			});
			}
				if (reiniciar_puntos_al_reiniciar_el_juego) {
				preguntas_correctas = 0
				preguntas_hechas = 0
			}
			npreguntas = [];
		}
    }
    npreguntas.push(n);
    preguntas_hechas++;
  
    escogerPregunta(n);
}

function escogerPregunta(n) {
    pregunta = interprete_bp[n];
    select_id("categoria").innerHTML = pregunta.categoria;
    select_id("pregunta").innerHTML = pregunta.pregunta;
    select_id("numero").innerHTML = n;
    let pc = preguntas_correctas;
    if (preguntas_hechas > 1) {
        select_id("puntaje").innerHTML = pc + "/" + (preguntas_hechas - 1);
    } else {
        select_id("puntaje").innerHTML = "";
    }
  
    // style("imagen").objectFit = pregunta.objectFit;
    desordenarRespuestas(pregunta);
    // if (pregunta.imagen) {
    //     select_id("imagen").setAttribute("src", pregunta.imagen);
    //     style("imagen").height = "200px";
    //     style("imagen").width = "100%";
    // } else {
    //     style("imagen").height = "0px";
    //     style("imagen").width = "0px";
    //     setTimeout(() => {
    //     select_id("imagen").setAttribute("src", "");
    //   }, 500);
    // }
}
  
function desordenarRespuestas(pregunta) {
    posibles_respuestas = [
        pregunta.respuesta,
        pregunta.incorrecta1,
        pregunta.incorrecta2,
    ];
    posibles_respuestas.sort(() => Math.random() - 0.5);
  
    select_id("btn1").innerHTML = posibles_respuestas[0];
    select_id("btn2").innerHTML = posibles_respuestas[1];
    select_id("btn3").innerHTML = posibles_respuestas[2];
}

let suspender_botones = false;


function oprimir_btn(i) {
    if (suspender_botones) {
      return;
    }
    suspender_botones = true;
    if (posibles_respuestas[i] == pregunta.respuesta) {
      preguntas_correctas++;
      btn_correspondiente[i].style.background = "lightgreen";
    } else {
      btn_correspondiente[i].style.background = "pink";
    }
    for (let j = 0; j < 4; j++) {
      if (posibles_respuestas[j] == pregunta.respuesta) {
        btn_correspondiente[j].style.background = "lightgreen";
        break;
      }
    }
    setTimeout(() => {
      reiniciar();
      suspender_botones = false;
    }, 3000);
}

function reiniciar() {
    for (const btn of btn_correspondiente) {
      btn.style.background = "#D4B338";
      btn.style.color = "#white";
    }
    escogerPreguntaAleatoria();
  }
  
  function select_id(id) {
    return document.getElementById(id);
  }
  
  function style(id) {
    return select_id(id).style;
  }
  
  function readText(ruta_local) {
    var texto = null;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", ruta_local, false);
    xmlhttp.send();
    if (xmlhttp.status == 200) {
      texto = xmlhttp.responseText;
    }
    return texto;
}

