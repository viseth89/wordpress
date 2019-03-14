$ = jQuery.noConflict();

$(document).ready(function() {

  $('.remove_reservation').on('click', function(e) {
    e.preventDefault();
    var id = $(this).attr('data-reservation');
    
    swal({
      title: 'Are you sure?',
      text: 'You will not be able to recover this imaginary file!',
      type: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, keep it'
    }).then((result) => {
      if (result.value) {
        $.ajax({
          type:'post',
          data : {
            'action': 'lapizzeria_delete_reservation',
            'id' : id,
            'type' : 'delete'
          },
          url: admin_ajax.ajaxurl,
          success: function(data){
            var result = JSON.parse(data);
            if(result.response == 'success') {
              // Review traversing
              jQuery("[data-reservation='"+ result.id +"']").parent().parent().remove();
            }
          }
    
        });
      }







  })
});

});
