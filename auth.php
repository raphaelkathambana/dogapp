<?php
declare(strict_types=1);
require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

class MysqliConnection {
    private $con;
    public function __construct()
    {
        $this->con = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);
        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }
    }
    public function getConnection()
    {
        return $this->con;
    }
}

$con = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
// else {
//     echo "Connection Successfully established!!";
// }
class Connection {
    public PDO $pdo;
    public function __construct()
    {
        $username = $_ENV['DB_USERNAME'];
        $password = $_ENV['DB_PASSWORD'];
        $db = $_ENV['DB_DATABASE'];
        $host = $_ENV['DB_HOST'];
        $port = $_ENV['DB_PORT'];
        $dsn = "mysql:dbname=$db;host=$host:$port";

        $this->pdo = new PDO(dsn: $dsn, username: $username, password: $password);
        $this->pdo->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
    }
    public function getNotes(): array
    {
        $query = 'SELECT * from noteContent order by date_of_note desc;';
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        return $statement->fetchAll(pdo::FETCH_ASSOC);
    }
    public function addNote($note): void
    {
        $query = 'INSERT into noteContent (title, note_description, date_of_note) values (:title, :note_description, :date_of_note);';
        $statement = $this->pdo->prepare($query);
        $statement->bindValue('title', $note['title']);
        $statement->bindValue('note_description', $note['note_description']);
        $statement->bindValue('date_of_note', date('Y-m-d H:i:s'));
        $statement->execute();
    }

    public function getNoteById($id): array
    {
        $query = "SELECT * from noteContent where id = :id;";
        $statement = $this->pdo->prepare($query);
        $statement->bindValue('id', $id);
        $statement->execute();
        return $statement->fetchAll(pdo::FETCH_ASSOC);
    }
    public function updateNote($note): void
    {
        $query = "UPDATE noteContent set title = :title, note_description = :note_description where id = :id;";
        $statement = $this->pdo->prepare($query);
        $statement->bindValue('title', $note['title']);
        $statement->bindValue('note_description', $note['note_description']);
        $statement->bindValue('id', $note['id']);
        $statement->execute();
    }
    public function deleteNote($id): void
    {
        $query = "DELETE from noteContent where id = :id;";
        $statement = $this->pdo->prepare($query);
        $statement->bindValue('id', $id);
        $statement->execute();
    }
}
