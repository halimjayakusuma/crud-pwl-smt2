<?php
    session_start();
    // Hapus data session
    session_unset();
    session_destroy();
    // Redirect ke halaman index.php
    header("Location: index.php");
    exit();
