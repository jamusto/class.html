<?php
$team = new Team($_POST);
$team->create();
echo json_encode($team);
