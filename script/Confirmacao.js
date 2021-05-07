window.addEventListener("DOMContentLoaded", function () {
    var link_apagar = document.querySelectorAll('.link_apagar');
    
    for(var el of link_apagar){
        el.addEventListener('click', function(e){
            e.preventDefault();
            Swal.fire({
                title: 'Tem certeza?',
                text: "Você está prestes a apagar esse cadastro",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim',
                cancelButtonText: 'Não'
              }).then((result) => {
                if (result.isConfirmed) {
                    window.location = $(this).attr('href');
                }
                else
                {
                    e.preventDefault();
                }
            })
        } 
    
    )}
});


