<?php
    try {
        $conn = new mysqli("localhost", "root", "", "teste");
    }catch(\Trowable $th){
        throw $th;
    }
?>