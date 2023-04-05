<?php

require_once "includes/luuk.actions.php";

if (!isset($_GET['id'])) {
    $data = getInformation();
} else {
    $data = getInformationDetails($_GET['id']);
}

header("Content-Type: application/json");
echo json_encode($data);
exit;
