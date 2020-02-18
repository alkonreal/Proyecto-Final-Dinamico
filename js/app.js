// Modifica les dades de la taula amb els usuaris trobats al json
/*----------------------------------------------*/
function printListaPelis(lista) {
	let content = document.querySelector('#contingut');
	content.innerHTML = ''
	for(let peli of lista){

		content.innerHTML += `
			<li class="media py-2">
				<img src="img/${peli.img}" class="mr-3" alt="..." style="width:100px">
				<div class="media-body">
					<a href="detall-film.html"><h5 class="mt-0 mb-1">${peli.nombre}</h5></a>
					<span class="badge btn-warning">Estrena</span>
					<p class="py-0 my-0">${peli.descripcion}</p>
					<p class="py-0 my-0">${peli.director}</p>
					<p class="py-0 my-0">${peli.categoria}</p>
					<p class="py-0 my-0">2h 8min</p>
					<p class="py-0 my-0">${peli.edad}</p>
					<p class="py-0 my-0">${peli.year}</p>
					
				</div>
			</li>
		`
	}
}

// Obtenir les dades de les pelis
/*----------------------------------------------*/
function getFilms() {
	// Petició asíncrona
	fetch('./data/llista-films-json.php')
	// fetch('./data/llista-films-by-name-json.php')
	.then(result => result.json())
	.then( (data) => {
		// Actualitza les dades de la llista de pelis
		printListaPelis(data);
	});
}

// getFilms();




//Para el ultimo ejercicio del boton que busca peliculas, hicimos esto
function getFilmsbyName() {
	var nombreFilm = document.getElementById('btn-titulo').value;
	// Petició asíncrona
	fetch('./data/llista-films-by-name-json.php?nombre='+nombreFilm)

	.then(result => result.json())
	.then( (data) => {
		// Actualitza les dades de la llista de pelis
		printListaPelis(data);
	});
}

// getFilms();

// Esto es para ultimo ejercicio de refuerzo antes del examen. LE damos clic
//  a aventuras y solo nos aparecen las pelis de aventuras

function getFilmsbyAventuras() {
	var categoriaFilm = document.getElementById('aventuras').value;
	// Petició asíncrona
	fetch('./data/llista-films-by-categoria-json.php?categoria='+categoriaFilm)

	.then(result => result.json())
	.then( (data) => {
		// Actualitza les dades de la llista de pelis
		printListaPelis(data);
	});
}
function getFilmsbyAccion() {
	var accionFilm = document.getElementById('accion').value;
	// Petició asíncrona
	fetch('./data/llista-films-by-accion-json.php?categoria='+accionFilm)

	.then(result => result.json())
	.then( (data) => {
		// Actualitza les dades de la llista de pelis
		printListaPelis(data);
	});
}
function getFilmsbyDibujos() {
	var dibujosFilm = document.getElementById('dibujos').value;
	// Petició asíncrona
	fetch('./data/llista-films-by-dibujos-json.php?categoria='+dibujosFilm)

	.then(result => result.json())
	.then( (data) => {
		// Actualitza les dades de la llista de pelis
		printListaPelis(data);
	});
}
function getFilmsbyTerror() {
	var terrorFilm = document.getElementById('dibujos').value;
	// Petició asíncrona
	fetch('./data/llista-films-by-terror-json.php?categoria='+terrorFilm)

	.then(result => result.json())
	.then( (data) => {
		// Actualitza les dades de la llista de pelis
		printListaPelis(data);
	});
}