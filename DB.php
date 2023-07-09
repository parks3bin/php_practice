<?php

class DB
{
    private $user = "root";
    private $password = "1234";
    private $option = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
    private $db;

    public function __construct(){
        try{
            $this->db = new PDO("mysql:host=localhost;dbname=study", $this->user, $this->password, $this->option);
            $this->db->exec("set names UTF8");
        } catch (Exception $e) {
            echo "데이터베이스 연결 실패 <br>";
            echo $e;
        }
    }

    public function getDB() {
        return $this->db;
    }

    public function selectTest() {
        try {
            $stmt = $this->db->prepare("select * from address where name = ?");
            $stmt->execute(array("박세빈"));
            $result = $stmt->fetchAll();
            return $result;
        } catch (Exception $e) {
            return $e;
        }
    }
    
    public function insertTest() {
        try {
            $stmt = $this->db->prepare("insert into address values(null, '이희수', '21', '010-1234-8888', '전북', '2002-04-21')");
            $stmt->execute();
            return true;
        } catch(Exception $e) {
            echo $e;
            return false;
        }
    }

    public function updateTest() {
        try {
            $stmt = $this->db->prepare("update address set name='업데이트 완료' limit 2");
            $stmt->execute();
            return true;
        } catch(Exception $e) {
            echo $e;
            return false;
        }
    }

    public function deleteTest() {
        try {
            $stmt = $this->db->prepare("delete from address limit 1");
            $stmt->execute();
            return true;
        } catch(Exception $e) {
            echo $e;
            return false;
        }
    }
    
}