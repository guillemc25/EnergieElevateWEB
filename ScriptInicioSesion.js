document.getElementById("loginBtn").addEventListener("click", function() {
    var formularioContainer = document.getElementById("formularioContainer");
    
    // Crea el formulario
    var formulario = document.createElement("form");
    formulario.innerHTML = `
      <h2>Inicio de Sesión</h2>
      <input type="text" placeholder="Nombre de usuario">
      <input type="password" placeholder="Contraseña">
      <button type="submit">Iniciar Sesión</button>
    `;
    
    // Agrega el formulario al contenedor
    formularioContainer.innerHTML = "";
    formularioContainer.appendChild(formulario);
  });
  