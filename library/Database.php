<?php

class Database extends Object
{
    public $host;
    public $username;
    public $password;
    
    public function __construct() {
        
    }
    
    private function connect() {
        
    }
}


/* PDO connection */
//$dsn = 'mysql:host=' . $hostname . ';dbname=' . $database;
//$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'); 
//
//$dbh = new PDO($dsn, $username, $password, $options);
//$sql = 'SELECT ident, username, password FROM user;';
//
//foreach ($dbh->query($sql) as $row) {
//    print $row['ident'] . "\t";
//    print $row['username'] . "\t";
//    print $row['password'] . "\n";
//}

//$query = sprintf(
//    'SELECT ident, username, password FROM user WHERE username=\'%s\' AND lastname=\'%s\'',
//    mysql_real_escape_string($firstname),
//    mysql_real_escape_string($lastname));
