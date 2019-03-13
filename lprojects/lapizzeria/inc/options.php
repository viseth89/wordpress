<?php

function lapizzeria_options()
{
  // 1. Title for Page 2. Title for Menu 3.  visibile to 4. slug 5.function that will be communicated 6 icon 7. Position
  add_menu_page('La Pizzeria', 'La Pizzeria Options', 'administrator', 'lapizzeria_options', 'lapizzeria_adjustments', '', 20);
  add_submenu_page('lapizzeria_options', 'Reservations', 'Reservations', 'administrator', 'lapizzeria_reservations', 'lapizzeria_reservations');
}

add_action('admin_menu', 'lapizzeria_options');

function lapizzeria_adjustments()
{
  echo "Hello from lapizzeria_adjustments";
}

function lapizzeria_reservations()
{ ?>

<div class="wrap">
    <h1>Reservations</h1>

    <table class='wp-list-table widefat striped'>
        <thead>
            <tr>
                <th class='manage-column'>ID</th>
                <th class='manage-column'>Name</th>
                <th class='manage-column'>Date of Reservation</th>
                <th class='manage-column'>Phone Number</th>
                <th class='manage-column'>Message</th>
            </tr>
        </thead>

        <tbody>

            <?php

            global $wpdb;
            $table = $wpdb->prefix . 'reservations';
            $reservations = $wpdb->get_results("SELECT * FROM $table", ARRAY_A);

            foreach ($reservations as $reservation) : ?>
            <tr>
                <td><?php echo $reservation['id']; ?></td>
                <td><?php echo $reservation['name']; ?></td>
                <td><?php echo $reservation['date']; ?></td>
                <td><?php echo $reservation['email']; ?></td>
                <td><?php echo $reservation['phone']; ?></td>
                <td><?php echo $reservation['message']; ?></td>
            </tr>

            <?php endforeach ?>

        </tbody>
    </table>
</div>

<?php 
}

?> 

