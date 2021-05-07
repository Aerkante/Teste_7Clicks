<head>
    <script type="text/javascript" src="../script/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.all.min.js"></script>
</head>
<?php   
session_start();
session_destroy();
echo "
    <script type='text/javascript'>
        
        $(document).ready(function(){

            Swal.fire(
                'Fazendo logout',
                'Você será redirecionado...',
                'info'
                );
            });
        setTimeout( function() {
            window.location.href='../index.html';
        }, 2500 );
    </script>
    ";
