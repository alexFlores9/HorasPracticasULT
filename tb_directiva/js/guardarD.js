function guardar() {
    if (confirm("Usuario registrado exitosamente")) {
        return true;
    }
}

let g = document.querySelectorAll(".btnRegistrar");

for (let i = 0; i < g.length; i++) {
    g[i].addEventListener('clic', guardar );
}