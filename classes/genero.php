<?php
require_once "db.php";
class Genero
{
    //Propriedades
    private $genr_id;
    private $genr_nome;

    //Métodos Get
    public function getGenrId()
    {
        return $this->genr_id;
    }
    public function getGenrNome()
    {
        return $this->genr_nome;
    }

    //Métodos Set
    public function setGenrId($valor)
    {
        $this->genr_id = $valor;
    }
    public function setGenrNome($valor)
    {
        $this->genr_nome = $valor;
    }

    //Método para procurar todos os generos
    public function findAll()
    {
        try {
            $sql = "SELECT * FROM generos";
            $stmt = DB::prepare($sql);
            print_r($stmt);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    //Método para procurar pelo id
    public function findById()
    {
        try {
            $sql = "SELECT * FROM generos WHERE genr_id ='$this->genr_id'";
            $stmt = DB::prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function findGenerico($campo, $valor)
    {
        try {
            $sql = "SELECT * FROM generos WHERE $campo = '$valor'";
            $stmt = DB::prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
