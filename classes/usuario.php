<html>
<?php
require_once "db.php";
class Usuario
{
    //Propriedades
    private $usu_id;
    private $usu_login;
    private $usu_senha;
    private $usu_status;

    //Metodos get
    public function getUsuId()
    {
        return $this->usu_id;
    }
    public function getUsuLogin()
    {
        return $this->usu_login;
    }
    public function getUsuSenha()
    {
        return $this->usu_senha;
    }
    public function getUsuStatus()
    {
        return $this->usu_status;
    }

    //Metodos set
    public function setUsuId($valor)
    {
        $this->usu_id = $valor;
    }
    public function setUsuLogin($valor)
    {
        $this->usu_login = $valor;
    }
    public function setUsuSenha($valor)
    {
        $this->usu_senha = $valor;
    }
    public function setUsuStatus($valor)
    {
        $this->usu_status = $valor;
    }

    //Método para Procurar todos os usuários
    public function findAll()
    {
        try {
            $sql = "SELECT * FROM usuarios";
            $stmt = DB::prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    //Método para procurar pelo id
    public function findById($id)
    {
        try {
            $sql = "SELECT * FROM usuarios WHERE usu_id = $id";
            $stmt = DB::prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    //Método para procupar por qualquer campo
    public function findGenerico($campo, $valor)
    {
        try {
            $sql = "SELECT * FROM usuarios WHERE $campo = '$valor'";
            $stmt = DB::prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function insertUsuario()
    {
        try {
            $sql = "INSERT INTO usuarios (usu_login, usu_senha, usu_status) VALUES ('$this->usu_login', '$this->usu_senha', '$this->usu_status')";
            $stmt = DB::prepare($sql);
            $stmt->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
?>

</html>