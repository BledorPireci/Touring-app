<?php
require_once '/xampp/Database.php';

    class MenuController{
    public $db;

    public function construct(){
        $this->db = new Database;
    }

    public function readData(){
        $query = $this -> db -> pdo -> query('SELECT * from exam');
        return $query -> fetchAll();
    }

    public function delete($id) {
        $query = $this -> db -> pdo -> prepare ('DELETE from exam WHERE id=:id');
        $query -> bindParam(':id',$id);
        $query -> execute();
        return header('Location: index.php');
    }
    public function edit($id){
        $query = $this ->db -> pdo -> prepare('SELECT * FROM exam WHERE id=:id');
        $query -> bindParam(':id', $id);
        $query -> execute-> fetch();
    }

    public function insert($request){
        $query = $this -> db -> pdo ->prepare('INSERT INTO exam (menu_tittle,menu_emri,menu_mbiemri,menu_image)
        VALUES (:menu_tittle, :menu_emri, :menu_mbiemri, :menu_image)');

        $query -> bindParam(':menu_tittle', $request['Tittle']);
        $query -> bindParam(':menu_emri', $request['Emri']);
        $query -> bindParam(':menu_mbiemri', $request['Mbiemri']);
        $query -> bindParam(':menu_image', $request['Image']);
        $query -> execute();

    }
    }






?>