document.getElementById('opcion').addEventListener('change', function() {
    var opcionSeleccionada = this.value;
  
    var camposOpcion1 = document.getElementById('campos-opcion1');
    var camposOpcion2 = document.getElementById('campos-opcion2');
  
    if (opcionSeleccionada === 'opcion1') {
      camposOpcion1.style.display = 'block';
      camposOpcion2.style.display = 'none';
    } else if (opcionSeleccionada === 'opcion2') {
      camposOpcion1.style.display = 'none';
      camposOpcion2.style.display = 'block';
    } 
  });
  