window.addEventListener("DOMContentLoaded",()=>{
    let $btnHamb = document.querySelector(".encabezado__hamburguesa a");
    let $Menu = document.querySelector(".encabezado__menu-responsive");

    $Menu.hidden = true;
    $btnHamb.addEventListener("click", (e)=>{
        e.preventDefault();

        $Menu.hidden = !$Menu.hidden
        $Menu.classList.toggle("menu_active");
    })
})