<?php

require_once 'controllers/AbstractManager.php';

class PostManager extends AbstractManager {
    public function __construct() {
        parent::__construct();
    }

    public function findAll() : array {
        try {
            $query = $this->db->prepare('SELECT * FROM posts');
            $query->execute();
            $posts = $query->fetchAll(PDO::FETCH_ASSOC);
            
            return $posts;
        } catch (PDOException $e) {
            throw new Exception("Erreur lors de la récupération des publications.", 0, $e);
        }
    }
}

