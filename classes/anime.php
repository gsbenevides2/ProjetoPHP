<html>
<?php
include_once "genero.php";
include_once "usuario.php";
require_once "db.php";
class Anime
{
    // Propriedades
    private $anim_id;
    private $anim_nome;
    private $anim_dt_lancamento;
    private $anim_classificacao_indicativa;
    private $anim_genero;
    private $anim_usuario;
    private $anim_autor;
    private $anim_quantidade_episodios;
    private $anim_quantidade_temporadas;
    private $anim_ytId;

    //metodo construtor
    public function __construct()
    {
        $this->anim_genero = new Genero();
        $this->anim_usuario = new Usuario();
    }

    //Métodos Get
    public function getAnimId()
    {
        return $this->anim_id;
    }
    public function getAnimNome()
    {
        return $this->anim_nome;
    }
    public function getAnimDtLancamento()
    {
        return $this->anim_dt_lancamento;
    }
    public function getAnimClassificacaoIndicativa()
    {
        return $this->anim_classificacao_indicativa;
    }
    public function getAnimGenero()
    {
        return $this->anim_genero;
    }
    public function getAnimUsuario()
    {
        return $this->anim_usuario;
    }
    public function getAnimAutor()
    {
        return $this->anim_autor;
    }
    public function getAnimQuantidadeEpisodios()
    {
        return $this->anim_quantidade_episodios;
    }
    public function getAnimQuantidadeTemporadas()
    {
        return $this->anim_quantidade_temporadas;
    }
    public function getAnimYtId()
    {
        return $this->anim_ytId;
    }

    // Métodos Set
    public function setAnimId($valor)
    {
        $this->anim_id = $valor;
    }
    public function setAnimNome($valor)
    {
        $this->anim_nome = $valor;
    }
    public function setAnimDtLancamento($valor)
    {
        $this->anim_dt_lancamento = $valor;
    }
    public function setAnimClassificacaoIndicativa($valor)
    {
        $this->anim_classificacao_indicativa = $valor;
    }
    public function setAnimGenero($valor)
    {
        $this->anim_genero = $valor;
    }
    public function setAnimUsuario($valor)
    {
        $this->anim_usuario = $valor;
    }
    public function setAnimAutor($valor)
    {
        $this->anim_autor = $valor;
    }
    public function setAnimQuantidadeEpisodios($valor)
    {
        $this->anim_quantidade_episodios = $valor;
    }
    public function setAnimQuantidadeTemporadas($valor)
    {
        $this->anim_quantidade_temporadas = $valor;
    }
    public function setAnimYtId($valor)
    {
        $this->anim_ytId = $valor;
    }

    //Método para procurar todos os animes
    public function findAll()
    {
        $sql = "SELECT * FROM animes JOIN generos ON anim_id_genero = genr_id JOIN usuarios ON anim_id_usuario = usu_id";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    //Método para procurar pelo id
    public function findById($id)
    {
        $sql = "SELECT * FROM animes JOIN generos ON anim_id_genero = genr_id JOIN usuarios ON anim_id_usuario = usu_id WHERE anim_id = '$id' ";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    //Método para procurar usando qualquer campo
    public function findGenerico($campo, $valor)
    {
        $sql = "SELECT * FROM animes JOIN generos ON anim_id_genero = genr_id  WHERE $campo = '$valor'";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}
?>

</html>