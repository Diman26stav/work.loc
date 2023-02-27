<?php

$config = include ('config.php');
include ('queryBuildre.php');

include ('connection.php');

return new QueryBuilder(Connection::make($config['database']));



