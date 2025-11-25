// 1. Obtener los elementos por ID
const selectProvincia = document.getElementById('provincia');
const selectMunicipio = document.getElementById('municipio');

function actualizarMunicipios() {
    // Esto es redundante pero se hace para no tener que consultar al html de nuevo
    const provinciaSeleccionada = selectProvincia.value;
    
    // Borra los options incluidos dentro del select y lo sobreescribe con exte valor
    selectMunicipio.innerHTML = '<option value="">Selecciona un municipio</option>';
    
    if (provinciaSeleccionada) {
        const sedes = PROVINCIAS_SEDES[provinciaSeleccionada];
        
        sedes.forEach(sede => {
            const nuevaOpcion = document.createElement('option');
            nuevaOpcion.value = sede; 
            nuevaOpcion.textContent = sede;
            selectMunicipio.appendChild(nuevaOpcion);
        });
    }
}

// Este es el trigger
document.addEventListener('DOMContentLoaded', () => {
    if (selectProvincia) {
        selectProvincia.addEventListener('change', actualizarMunicipios);
    }
});