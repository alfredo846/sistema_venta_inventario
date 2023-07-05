    const btn = document.querySelector("#btn-enviar");
    const form = document.querySelector("#form");
    btn.addEventListener("click", (e) =>{
    e.preventDefault();
    const datos = new FormData(form);
    fetch('categorias',{
    method: 'post',
    body:datos
    })
    .then(response => response.json())
    .then(result => {
    console.log(result)

    if (result.alerta == "danger") {

    let nombre = document.querySelector(".errors-nombre");
    nombre.textContent = result.nombre[0];

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
    const success = document.querySelector(".alert");
    success.textContent = "¡ Registro creado exitosamente !";
    success.style.display = "block";

    let alert = document.querySelectorAll(".alert");
    alert.forEach(div => {
    div.style.display = "block";
    });

    setTimeout(() => {
    alert.forEach(div => {
    div.style.display = "none";
    });
    }, 4000);

    //--------------Cerrar el modal cada vez que se ingrese un nuevo registro --------
    $('#agregarcategoria').modal('hide')

    }
    })
    });
