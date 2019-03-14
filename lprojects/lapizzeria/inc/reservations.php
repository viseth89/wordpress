<?php 

function lapizzeria_delete_reservation() {
    if($_POST['type'] == 'delete'):
        global $wpdb;
        $table = $wpdb->prefix . 'reservations';
        $id_reservation = $_POST['id'];

        $result = $wpdb->delete($table, array('id' => $id_reservation),array('%d'));

        if($result ==1) {
            $response = array(
                'response' => 'success',
                'id' => $id_reservation
            );
        } else {
            $response = array(
                'response' => 'error',
                'id' => $id_reservation
            );
        }
    endif;

    die(json_encode($response));
    // When using ajax and wordpress must use 'die' or will cause error
}
add_action('wp_ajax_lapizzeria_delete_reservation', 'lapizzeria_delete_reservation');

function lapizzeria_save_reservation() {
  global $wpdb;
  if(isset($_POST['reservation']) && $_POST['hidden'] == "1") {
      $name = sanitize_text_field($_POST['name'] );
      $date = sanitize_text_field($_POST['date'] );
      $email = sanitize_email($_POST['email'] );
      $phone = sanitize_text_field($_POST['phone'] );
      $message = sanitize_text_field($_POST['message'] );

      $table = $wpdb->prefix . 'reservations';

      $data = array(
          'name' => $name,
          'date' => $date,
          'email' => $email,
          'phone' => $phone,
          'message' => $message
      );

      $format = array(
          '%s',
          '%s', 
          '%s', 
          '%s', 
          '%s'
      );
      $wpdb->insert($table, $data, $format);

      $url = get_page_by_title('Thanks for your reservation!');
      // redirect requires exit();
      wp_redirect( get_permalink($url) );
      exit();
  }
}

add_action('init', 'lapizzeria_save_reservation');
?>