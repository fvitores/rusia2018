/*------------- p o r r a     j s ---------------*/

/*------------------ f u n c i o n e s -------------------*/

function abre(x){
	window.parent.location.href = x;
}

function confirma(x){
	var mensaje = confirm("¿Resetear la tabla?");

	if (mensaje) {
		//alert("¡La has cagado!");
		window.parent.location.href = x;
		}
}


function entra(x){

	enlace = document.getElementById(x);

	//enlace.style.fontSize = "9pt";
	enlace.style.color = "#e30303";	
}

function sale(x){
	enlace = document.getElementById(x);

	//enlace.style.fontSize = "8pt";
	enlace.style.color = "#fe6666";
}

function abrep(x){
	open(x);
}



function cierra(x){
	enlace = document.getElementById(x);
	enlace.style.visibility = "hidden";
}


        
        
/*------------------ r a f a e l l i n i --------------------*/