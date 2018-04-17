<?php

$sql = "SELECT * FROM `tbl_name` WHERE `last_name` LIKE \'palmer\'";

$sql = "SELECT * FROM `tbl_name` WHERE `gender` LIKE \'Female\'";

$sql = "SELECT * FROM `tbl_name` WHERE `country_code` LIKE \'N%\'";

$sql = "SELECT *  FROM `tbl_name` WHERE `email` LIKE \'%google%\'";

$sql = "SELECT `country_code`, count(*) as nb FROM `tbl_name` GROUP BY `country_code` ORDER by nb";

$sql = "SELECT `gender`, count(*) as nb FROM `tbl_name` GROUP BY `gender` ORDER by nb";



?>