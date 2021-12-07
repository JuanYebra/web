(function eliminar (){
  $("te td #delete").click(function(ev){
  console.log($(this).parents('tr').find('th').text);
  swal({
    title: "Deseas continuar?",
    text: "Estás a punto de eliminar un elemento",
    icon: "warning",
    buttons: true,
    dangerMode: true,
    allowOutsideClick: false,
  }).then((willDelete) => {
    if (willDelete) {
      url=("'../../models/Departamento/eliminar_departamento.php?id=<?php echo $dato->id_departamento; ?>'"), 
     
      swal(
        "Eliminación exitosa", 
        "success"
      )
    }
  })
  })
})();
