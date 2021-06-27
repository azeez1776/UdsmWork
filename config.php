<?php
$conn = mysqli_connect('localhost', 'root', 'samatar@1776', 'LEOPETER');

if (!$conn) {
    echo "There is a connection problem to the database";
}
