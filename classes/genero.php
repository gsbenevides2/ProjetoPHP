<html>
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
        $sql = "SELECT * FROM generos";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    //Método para procurar pelo id
    public function findById($id)
    {
        $sql = "SELECT * FROM generos WHERE genr_id";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
    public function findGenerico($campo, $valor)
    {
        $sql = "SELECT * FROM generos WHERE $campo = '$valor'";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}
?>

</html>