<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="Assets/css/bootstrap.min.css" rel="stylesheet" >
    <link href="Assets/css/main.min.css" rel="stylesheet" >

    <title>Agenda</title>
  </head>
  <body>

  <div class="container">
    <div id='calendar'></div>
  </div>


    
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header bg-info">
                            <h5 class="modal-title" id="titulo">Registro de eventos</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                <form id="formulario">
                    <div class="modal-body">
                    <input type="text" id="id" name="id">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="title" name="title">
                          <label for="title" class="form-label">Evento</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input type="date" class="form-control" id="start" name="start">
                          <label for="start" class="form-label">Fecha</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input type="color" class="form-control" id="color" name="color">
                          <label for="color" class="form-label">Color</label>
                        </div>

                    </div>

                    <div class="modal-footer">
                      <!--<button class="btn btn-warning">Cancelar</button>--> 
                      <button class="btn btn-danger" type="button" id="btnEliminar">Eliminar</button> 
                      <button class="btn btn-info" id="btnAccion" type="submit">Registrar</button>                 
                </div>
                </form>

            </div>
        </div>
    </div>
    
    <script>
        var modalId = document.getElementById('myModal');
    
        modalId.addEventListener('show.bs.modal', function (event) {
              // Button that triggered the modal
              let button = event.relatedTarget;
              // Extract info from data-bs-* attributes
              let recipient = button.getAttribute('data-bs-whatever');
    
            // Use above variables to manipulate the DOM
        });
    </script>
    


    <script src="Assets/js/bootstrap.bundle.min.js"></script>
    <script src="Assets/js/main.min.js"></script>
    <script src="Assets/js/moment.js"></script>
    <script src="Assets/js/sweetalert2.all.min.js"></script>
    <script src="Assets/js/app.js"></script>
    <script>
      const base_url = '<?php echo base_url; ?>'; 
    </script>
    <script src="Assets/js/es.js"></script>


  </body>
</html>
