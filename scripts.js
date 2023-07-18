const formulario = document.querySelector('form')
const tabla = document.querySelector('table')
const button = document.getElementById('buttonConsulta')

tabla.style.display = 'none'
const consultarPais= async (e) => {
    e.preventDefault();
    let nombrePais = formulario.contries.value;
    if(nombrePais == ''){
        alert("ingrese el dato del pais")
        return;
    }
const url = `https://restcountries.com/v3.1/demonym/${nombrePais}`

const config = {
        method : 'GET'
    }
    
        // consulta a la API
        document.getElementById('estado').innerText = 'Buscando datos...'
        try {
            // CONSULTA A LA API
            const respuesta = await fetch(url, config);   
            if(respuesta.status == 200){
                const data = await respuesta.json()
                const pais = data[0]
                console.log(pais)
                console.log(pais.name.common)
                console.log(pais.name.official)
                console.log(pais.population)
                // console.log(pais.sprites.front_default)
    
                document.getElementById('nombrePais').innerText = pais.name.common
                document.getElementById('nombreOficial').innerText = pais.name.official
                document.getElementById('nombreNativo').innerText = pais.population
                // document.getElementById('--').src = data.sprites.front_default
                document.getElementById('estado').innerText = 'Datos encontrados'
                tabla.style.display = 'block'
            }else{
                // alert('error en la consulta')
                document.getElementById('estado').innerText = 'Datos no encontrados'
            }
        } catch (error) {
            console.log(error)
        }
    }

    formulario.addEventListener('submit', consultarPais )
 