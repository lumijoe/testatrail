<?php
/*
Template Name: Contact Page
*/
get_header();
?>
<!----------------------------------
form
----------------------------------->
<h1>contact page</h1>
<?php echo FrmFormsController::get_form_shortcode(array('id' => 1)); ?>