<html>
<?php
class Genero
{
    //Propriedades
    private $id_genero;
    private $nome;

    //Métodos Get
    public function getIdGenero()
    {
        return $this->id_genero;
    }
    public function getNome()
    {
        return $this->nome;
    }

    //Métodos Set
    public function setIdGenero($valor)
    {
        $this->id_genero = $valor;
    }
    public function setNome($valor)
    {
        $this->nome = $valor;
    }
}
?>

</html>