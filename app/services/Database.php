<?php
require_once __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

class Database
{
    private static string $db_host;
    private static string $db_name;
    private static string $db_user;
    private static string $db_pass;
    private object $conn;

    public function __construct()
    {
        try {
            self::$db_host = $_ENV['DB_HOST'];
            self::$db_name = $_ENV['DB_NAME'];
            self::$db_user = $_ENV['DB_USER'];
            self::$db_pass = $_ENV['DB_PASS'];

            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ];

            $this->conn = new PDO('mysql:host=' . self::$db_host . ';dbname=' . self::$db_name, self::$db_user, self::$db_pass, $options);

            $this->conn->exec("SET CHARACTER SET UTF8");
        } catch (PDOException $e) {
            die("Connection error: " . $e->getMessage());
        }
    }

    public function getConnection(): object
    {
        return $this->conn;
    }

    public function clouseConnection(): void
    {
        $this->conn = null;
    }
}
