function alerteliminar (){
  $("tr td #delete").click(function(ev){
  var nombre = $(this).parents('tr').find('td:first').text();
  var id = $(this).attr('data-id');
  var name = $(this).attr('data-name');
  swal({
    title:'Estás a punto de eliminar el horario "'+name+'"' ,
    text: 'Estás seguro de eliminarlo?',
    icon: "warning",
    buttons: true,
    buttons: ["Cancelar", "Eliminar"],
    dangerMode: true,
    allowOutsideClick: false,
  }).then((willDelete) => {
    if (willDelete) {
    location.href='../../models/Horarios/eliminar_horario.php?id='+id+'';
      
    }
  })
  })
}