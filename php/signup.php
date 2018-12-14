<?php

// Check if the form is submitted
if ( !empty( $_POST ) ) {

    echo $_REQUEST;
    //TODO save all the other data
    $firstname = $_REQUEST['name'];
    exit;
}