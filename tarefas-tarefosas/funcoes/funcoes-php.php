<?php
session_start();

if ( !isset($_SESSION['tasks']) ) {
     $_SESSION['tasks'] = array();
}

if ( isset($_GET['task_name']) ) {
 unset($_GET['task_name']);
 
 ?>