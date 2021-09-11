

<div class="conteiner">
    <label> Registro de comprobantes </label>
    <input type="text" id="calendario" >
</div>


<script>
  
  $( function() {
    $( "#calendario" ).datepicker({
      showOn: "button",
      buttonImageOnly: true,
      buttonText: "Select date",
      changeMonth: true,
      changeYear: true
    });
  } );
  </script>

