<?php 

Class CategoryManager extends AbstractManager{
    public function __construct() {
        parent::__construct();
    }

    public function findAll() : array {

            $query = $this->db->prepare('SELECT * FROM categories');
            $query->execute();
            $categories = $query->fetchAll(PDO::FETCH_ASSOC);
            
            return $categories;
    }
}
