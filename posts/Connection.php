<?php

    class Connection {
        public PDO $pdo;
        
        public function __construct() {
            $username = "codelegacy";
            $password = "legacycode";
            $dsn = 'mysql:dbname=notes;host=localhost:3306';

            $this->pdo = new PDO(dsn: $dsn, username: $username, password: $password);
            $this->pdo->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
        }

        public function getNotes(): array {
            $query = 'SELECT * from noteContent order by date_of_note desc;';
            $statement = $this->pdo->prepare($query);
            $statement->execute();
            return $statement->fetchAll(pdo::FETCH_ASSOC);
        }
        public function addNote($note): void {
            $query = 'insert into noteContent (title, note_description, date_of_note) values (:title, :note_description, :date_of_note)';
            $statement = $this->pdo->prepare($query);
            $statement->bindValue('title', $note['title']);
            $statement->bindValue('note_description', $note['note_description']);
            $statement->bindValue('date_of_note', date('Y-m-d H:i:s'));
            $statement->execute();
        }

        public function getNoteById($id): array {
            $query = "select * from noteContent where id = :id";
            $statement = $this->pdo->prepare($query);
            $statement->bindValue('id', $id);
            $statement->execute();
            return $statement->fetchAll(pdo::FETCH_ASSOC);
        }
        public function updateNote($note): void {
            $query = "update noteContent set title = :title, note_description = :note_description where id = :id";
            $statement = $this->pdo->prepare($query);
            $statement->bindValue('title', $note['title']);
            $statement->bindValue('note_description', $note['note_description']);
            $statement->bindValue('id', $note['id']);
            $statement->execute();
        }
        public function deleteNote($id): void {
            $query = "delete from noteContent where id = :id";
            $statement = $this->pdo->prepare($query);
            $statement->bindValue('id', $id);
            $statement->execute();
        }
    }
return new Connection();