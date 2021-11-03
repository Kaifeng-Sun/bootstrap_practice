<?php
    $data = array(
        array(1,2),
        array(2,3)
    );
    echo '<script>';
    echo 'localStorage.setItem("myData",JSON.stringify('.json_encode($data).'))';
    echo '</script>';
?>