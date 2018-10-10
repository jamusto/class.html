<?php

require '../../app/common.php';
if ($projectId < 1) {
  throw new Exception ('Invalid Project ID in URL');
}

$workArr = WorkHoursReport::fetchByProjectId($projectId);

$json = json_encode($workArr, JSON_PRETTY_PRINT);

header ('Content-Type: application/json');
echo $json;
