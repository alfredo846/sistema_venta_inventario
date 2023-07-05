    const btn = document.querySelector("#btn-actualizar");
    const form = document.querySelector("#formactualizar");
    btn.addEventListener("click", (e) =>{
    e.preventDefault();
    const datos = new FormData(form);
    fetch('categorias',{
    method: 'put',
    body:datos
    })
    .then(response => response.json())
    .then(result => {
    console.log(result)

    if (result.alerta == "danger") {

    let nombre = document.querySelector(".errors-name");
    nombre.textContent = result.nombre[0];
    let imagen = document.querySelector(".errors-foto");
    imagen.textContent = result.imagen[0];

    //--------------Detalle del alertas de validaciones en el formulario de crear--------
    let validacion = document.querySelectorAll(".validacion");
    validacion.forEach(span => {
    span.style.display = "block"
    span.style.textAlign = "left";
    });

    setTimeout(() => {
    validacion.forEach(span => {
    span.style.display = "none";
    });
    }, 4000);
    }


    //--------------Detalle del alerta de creacion de nuevo registro --------
    if (result.alerta == "success") {

    //--------------Redirigir cada vez que se ingrese un nuevo registro --------
    setTimeout("window.location = 'categorias'", 1000);

    const success = document.querySelector(".alert");
    success.textContent = "¡ Registro actualizado exitosamente !";
    success.style.display = "block";

    let alert = document.querySelectorAll(".alert");
    alert.forEach(div => {
    div.style.display = "block";
    });

    setTimeout(() => {
    alert.forEach(div => {
    div.style.display = "none";
    });
    }, 2000);

    //--------------Cerrar el modal cada vez que se ingrese un nuevo registro --------
    $('.modal').modal('hide')

    }
    })
    });