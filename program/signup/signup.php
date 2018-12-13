<?php

echo $_POST;
// Check if the form is submitted
if ( isset( $_POST['submit'] ) ) {

    // retrieve the form data by using the element's name attributes value as key

    echo '<h2>form data retrieved by using the $_REQUEST variable<h2/>';

    $firstname = $_REQUEST['name'];

    // display the results
    echo 'Your name is ' . $firstname;

    // check if the post method is used to submit the form

    if ( filter_has_var( INPUT_POST, 'submit' ) ) {

        echo '<h2>form data retrieved by using $_POST variable<h2/>';

        $firstname = $_REQUEST['name'];

        // display the results
        echo 'Your name is ' . $firstname;
    }

    // display the results
    echo 'Your name is ' . $firstname;
    exit;
}