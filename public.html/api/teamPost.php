<?php
$work = new Team($_POST);
$work->create();
echo json_encode($team);
