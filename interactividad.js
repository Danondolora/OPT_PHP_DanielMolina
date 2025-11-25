const selectProvincia = document.getElementById('provincia');
const selectSede = document.getElementById('sede');

function actualizarSedes() {
    // Esto es redundante pero se hace para no tener que consultar al html de nuevo
    const provinciaSeleccionada = selectProvincia.value;
    
    // Borra los options incluidos dentro del select y lo sobreescribe con exte valor
    selectSede.innerHTML = '<option value="">Selecciona una sede</option>';
    
    if (provinciaSeleccionada) {
        const sedes = PROVINCIAS_SEDES[provinciaSeleccionada];
        
        sedes.forEach(sede => {
            const nuevaOpcion = document.createElement('option');
            nuevaOpcion.value = sede; 
            nuevaOpcion.textContent = sede;
            selectSede.appendChild(nuevaOpcion);
        });
    }
}

// Este es el trigger
document.addEventListener('DOMContentLoaded', () => {
    if (selectProvincia) {
        selectProvincia.addEventListener('change', actualizarSedes);
    }
});