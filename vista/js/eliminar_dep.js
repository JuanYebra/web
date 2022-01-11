function alerteliminar (){
  $("#delete").click(function(ev){
  //var nombre = $(this).parents('tr').find('td:first').text();
  var id = $(this).attr('data-id');
  var name = $(this).attr('data-name');
  swal({
    title:'Estás a punto de eliminar el departamento de "'+name+'"' ,
    text: 'Estás seguro de eliminarlo?',
    icon: "warning",
    buttons: true,
    buttons: ["Cancelar", "Eliminar"],
  }).then((willDelete) => {
    if (willDelete) {
    location.href='../../models/Departamento/eliminar_departamento.php?id='+id+'';
      
    }
  })
  })
}
