<?php
require_once ("DB.php");

class Address
{
    private $db;

    public function __construct() {
        $db = new DB();
        $this->db = $db->getDB();
    }

    public function getList() {
        try {
            $stmt = $this->db->prepare("select * from address ");
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }catch (Exception $e) {
            return $e;
        }
    }

    public function setAddress($name, $age, $tel, $area, $birth) {
        try {
            $stmt = $this->db->prepare("insert into address values(null,?, ?, ?, ?, ?)");
            $stmt->execute(array($name, $age, $tel, $area, $birth));
            return true;
        } catch (Exception $e){
            return false;
        }
    }

    public function getAddress($no) {
        try {
            $stmt = $this->db->prepare("select * from address where no = ?");
            $stmt->execute(array($no));
            $result = $stmt->fetch();
            return $result;
        } catch (Exception $e) {
            return $e;
        }
    }

    public function setUpdateAddress($no, $name, $age, $tel, $area, $birth){
        try {
            $stmt = $this->db->prepare("update address set name = ?, age=?, tel=?, area=?, birth=? where no=?");
            $stmt->execute(array($name, $age, $tel, $area, $birth, $no));
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function setDeleteAddress($no) {
        try {
            $stmt = $this->db->prepare("delete from address where no=?");
            $stmt->execute(array($no));
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    // 전체 게시글 카운팅
    public function getCountList() {
        try {
            $sql = "select count(*) count from address";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        } catch (Exception $e) {
            return $e;
        }
    }
}