<?php
    session_abort();
    session_destroy();
    header("Location:index.html");
    exit;
?>