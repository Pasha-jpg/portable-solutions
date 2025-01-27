<?php
    mail('kh_pasha@live.com', $_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['start'], $_POST['end'], $_POST['state'], $_POST['comments']);
?>
<p>Thank you,Your email has been sent.</p>