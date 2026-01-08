function toggleSubmenu(event, id) {
    event.stopPropagation();
    const submenu = document.getElementById(id);
    
    // Buscamos la flecha dentro del elemento al que le dimos clic
    const arrow = event.currentTarget.querySelector('.arrow-icon');

    // Abre o cierra el submenú
    submenu.classList.toggle('show');

    // Rota la flechita usando la clase que ya tienes en tu CSS
    if (arrow) {
        arrow.classList.toggle('rotate');
    }
}


function showSection(event, sectionId) {
    if (event) event.preventDefault();

    // 1. Ocultar todas las secciones
    const sections = document.querySelectorAll('.tab-content');
    sections.forEach(s => s.classList.remove('active'));

    // 2. Desactivar todos los botones del menú
    const navItems = document.querySelectorAll('.nav-item');
    navItems.forEach(item => item.classList.remove('active'));

    // 3. Mostrar la sección elegida
    const target = document.getElementById(sectionId);
    if (target) target.classList.add('active');

    // 4. Marcar botón como activo
    if (event.target.tagName === 'A') {
        // Si es un link del submenú, activamos el padre
        event.target.closest('.has-submenu').querySelector('.nav-item').classList.add('active');
    } else {
        event.currentTarget.classList.add('active');
    }
}
