
function openTab(tabName) {
                // Ocultar todos los formularios
    const formContenedores = document.getElementsByClassName('form-contenedor');
    for (let i = 0; i < formContenedores.length; i++) {
        formContenedores[i].classList.remove('active');
    }
    
                // Mostrar el formulario seleccionado
    document.getElementById(tabName).classList.add('active');
    
                // Actualizar el estado de las pestañas
    const tabs = document.getElementsByClassName('tab');
    for (let i = 0; i < tabs.length; i++) {
        tabs[i].classList.remove('active');
    }
    event.currentTarget.classList.add('active');
}