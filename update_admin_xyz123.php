<?php
if (!isset($_GET['key']) || $_GET['key'] !== 'CHANGE_THIS_SECRET') {
    http_response_code(403);
    exit('Forbidden');
}

echo "Admin endpoint active.";
