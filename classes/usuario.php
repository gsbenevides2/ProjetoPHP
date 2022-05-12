<html>
<?php
class Usuario
{
    //Propriedades
    private $id_usuario;
    private $login;
    private $senha;

    //Metodos get
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }
    public function getLogin()
    {
        return $this->login;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    //Metodos set
    public function setIdUsuario($valor)
    {
        $this->id_usuario = $valor;
    }
    public function setLogin($valor)
    {
        $this->login = $valor;
    }
    public function setSenha($valor)
    {
        $this->senha = $valor;
    }
}
?>

</html>