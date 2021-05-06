window.addEventListener("DOMContentLoaded", function () {
    var link_apagar = document.getElementById("link_apagar");

link_apagar.addEventListener('click',function(e){
    if(confirm("Tem certeza que deseja excluir esse cadastro?")==false)
    {
        e.preventDefault();
    }

},false)
});