<?php

class WorkHoursReport
{
  public static function fetchByProjectId($projectId) {

    $db = new PDO(DB_SERVER, DB_USER, DB_PW);

    $sql = 'SELECT DATE(start_date) as date,
        sum (hours) as $hours
        from Work, Tasks
        where Work.task_id = Tasks.id
        and Tasks.project_id = ?
        Group by date (start_date)';

      $statement = $db->prepare($sql);
      $success = $statement->execute(
        [$projectId]
      );



      $arr = statement -> fecthAll(PDO::FETCH_ASSOC);

      return $arr;
  }

}
