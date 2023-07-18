const formulario = document.querySelector('#frmUsers');
const tabla = document.querySelector('table');
const button = document.getElementById('buttonConsulta');

document.getElementById('frmUsers').addEventListener('submit', function (event) {
    var input = document.getElementsByName('contries')[0];
    var userInput = input.value.trim().toLowerCase();

    fetch(`https://restcountries.com/v3.1/demonym/${userInput}`)
        .then(response => response.json())
        .then(data => {
            if (data.status === 404) {
                event.preventDefault();
                alert('Por favor, ingrese un gentilicio en inglés');
            }
        })
        .catch(error => {
            console.error(error);
        });
});

tabla.style.display = 'none';
const consultarPais = async (e) => {
    e.preventDefault();
    let gentilicio = formulario.contries.value;
    if (gentilicio == '') {
        alert("Ingrese el gentilicio");
        return;
    }
    const url = `https://restcountries.com/v3.1/demonym/${gentilicio}`;

    const config = {
        method: 'GET'
    };

    // consulta a la API
    document.getElementById('estado').innerText = 'Buscando datos...';
    try {
        // CONSULTA A LA API
        const respuesta = await fetch(url, config);
        if (respuesta.status == 200) {
            const data = await respuesta.json();
            const pais = data[0];
            console.log(pais);
            console.log(pais.name.common);
            console.log(pais.name.official);
            console.log(pais.population);

            document.getElementById('nombrePais').innerText = pais.name.common;
            document.getElementById('nombreOficial').innerText = pais.name.official;
            document.getElementById('nombreNativo').innerText = pais.population;
            document.getElementById('estado').innerText = 'Datos encontrados';
            tabla.style.display = 'block';
        } else {
            document.getElementById('estado').innerText = 'Datos no encontrados';
        }
    } catch (error) {
        console.log(error);
    }
}

formulario.addEventListener('submit', consultarPais);



////////////////////////////////////////////////////////////////////////////////////////////////////
const formulario2 = document.getElementById('frmUsers2');
const tabla2 = document.getElementById('table2');
const button2 = document.getElementById('buttonConsulta2');

tabla2.style.display = 'none';

const consultarSubregion = async (e) => {
    e.preventDefault();
    let nombrePais2 = formulario2.contries2.value;
    if (nombrePais2 === '') {
        alert("Ingrese el dato de la SubRegión");
        return;
    }
    const url = `https://restcountries.com/v3.1/subregion/${nombrePais2}`;

    const config = {
        method: 'GET'
    };

    // Consulta a la API
    document.getElementById('estado2').innerText = 'Buscando datos...';
    try {
        // CONSULTA A LA API
        const respuesta = await fetch(url, config);
        if (respuesta.status === 200) {
            const data = await respuesta.json();
            console.log(data);

            const tbody = tabla2.getElementsByTagName('tbody')[0];
            tbody.innerHTML = ''; // Limpiar contenido anterior de la tabla

            data.forEach(country => {
                const row = document.createElement('tr');
                const datoCell = document.createElement('td');
                const valorCell = document.createElement('td');

                datoCell.textContent = 'País';
                valorCell.textContent = country.name.common; // Acceder al nombre común del país

                row.appendChild(datoCell);
                row.appendChild(valorCell);

                tbody.appendChild(row);
            });

            document.getElementById('estado2').innerText = 'Datos encontrados';
            tabla2.style.display = 'block';
        } else {
            document.getElementById('estado2').innerText = 'verifique que halla ingresa los datos en ingles';
        }
    } catch (error) {
        console.log(error);
    }
};

formulario2.addEventListener('submit', consultarSubregion);


////////////////////////////////////////////////////////////////////////
const formulario3 = document.getElementById('frmUsers3');
const tabla3 = document.getElementById('table3');
const button3 = document.getElementById('buttonConsulta3');

tabla3.style.display = 'none';

const consultarPorIdiomaNombre = async (e) => {
    e.preventDefault();
    let buscarPais3 = formulario3.contries3.value;
    if (buscarPais3 === '') {
        alert("Ingrese el idioma o nombre a buscar");
        return;
    }
    const url = `https://restcountries.com/v3.1/lang/${encodeURIComponent(buscarPais3)}`;

    const config = {
        method: 'GET'
    };

    // Consulta a la API
    document.getElementById('estado3').innerText = 'Buscando datos...';
    try {
        // CONSULTA A LA API
        const respuesta = await fetch(url, config);
        if (respuesta.status === 200) {
            const data = await respuesta.json();
            console.log(data);

            const tbody = tabla3.getElementsByTagName('tbody')[0];
            tbody.innerHTML = ''; // Limpiar contenido anterior de la tabla

            data.forEach(country => {
                const row = document.createElement('tr');
                const paisCell = document.createElement('td');
                const banderaCell = document.createElement('td');

                paisCell.textContent = country.name.common; // Acceder al nombre común del país
                banderaCell.innerHTML = `<img src="${country.flags.svg}" alt="Bandera">`; // Acceder a la URL de la bandera

                row.appendChild(paisCell);
                row.appendChild(banderaCell);

                tbody.appendChild(row);
            });

            document.getElementById('estado3').innerText = 'Datos encontrados';
            tabla3.style.display = 'block';
        } else {
            document.getElementById('estado3').innerText = 'Datos no encontrados';
        }
    } catch (error) {
        console.log(error);
    }
};

formulario3.addEventListener('submit', consultarPorIdiomaNombre);

