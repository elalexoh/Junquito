<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modal prueba</title>
    <script >
          $(document).ready(function(){
            // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
            $('.modal').modal();
          });
    </script>
    <?php include(CABECERA_CORE . 'public/cabecera.html');?>
</head>
<body>
      <!-- Modal Trigger -->
  <a class="waves-effect waves-light btn" href="#modal1">Modal</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
  	<?php include(FOOTER_CORE . 'public/footer.html') ?>
</body>
</html>      