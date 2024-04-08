$database = new Dibi\Connection([
    'driver'   => 'mysqli',
    'host'     => 'localhost',
    'username' => 'root',
    'password' => '***',
    'database' => 'table',
]);

$result = $database->query('SELECT * FROM users');
