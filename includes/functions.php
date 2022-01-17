<?php
    function includePagination($previous, $next) {
        include '../includes/pagination.php';
    }

    function getHomePageClass() {
        $current_url = basename($_SERVER['REQUEST_URI'], ".php");
        if ($current_url === '') 
        echo 'class="home"';
    }
?>