<?php
include_once "genero.php";
include_once "usuario.php";
include_once "db.php";
class Anime
{
    // Propriedades
    private $anim_id;
    private $anim_nome;
    private $anim_dt_lancamento;
    private $anim_classificacao_indicativa;

    private $id_genero;
    private $id_usuario;

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

    public function getIdGenero()
    {
        return $this->id_genero;
    }
    public function getIdUsuario()
    {
        return $this->id_usuario;
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
    public function setIdGenero($valor)
    {
        $this->id_genero = $valor;
    }
    public function setIdUsuario($valor)
    {
        $this->id_usuario = $valor;
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
        try {
            $sql = "SELECT * FROM animes JOIN generos ON anim_id_genero = genr_id JOIN usuarios ON anim_id_usuario = usu_id";
            $stmt = DB::prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    //Método para procurar pelo id
    public function findById()
    {
        try {
            $sql = "SELECT * FROM animes JOIN generos ON anim_id_genero = genr_id JOIN usuarios ON anim_id_usuario = usu_id WHERE anim_id = '$this->anim_id' ";
            $stmt = DB::prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    //Método para procurar usando qualquer campo
    public function findGenerico($campo, $valor)
    {
        try {
            $sql = "SELECT * FROM animes JOIN generos ON anim_id_genero = genr_id  WHERE $campo = '$valor'";
            $stmt = DB::prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    //Método para inserir um anime
    public function insertAnime()
    {
        try {
            
            $sql = "INSERT INTO animes (anim_nome, anim_dt_lancamento, anim_classificacao_indicativa, anim_id_genero, anim_id_usuario, anim_autor, anim_quantidade_episodios, anim_quantidade_temporadas, anim_yt_id) VALUES ('$this->anim_nome', '$this->anim_dt_lancamento', '$this->anim_classificacao_indicativa', '$this->id_genero', '$this->id_usuario', '$this->anim_autor', '$this->anim_quantidade_episodios', '$this->anim_quantidade_temporadas', '$this->anim_ytId')";
            $stmt = DB::prepare($sql);
            $stmt->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function deleteAnime()
    {
        try {
            $sql = "DELETE FROM animes WHERE anim_id = $this->anim_id";
            $stmt = DB::prepare($sql);
            $stmt->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function updateAnime()
    {
        try {
            $sql = "UPDATE animes SET anim_nome='$this->anim_nome', anim_dt_lancamento='$this->anim_dt_lancamento', anim_classificacao_indicativa='$this->anim_classificacao_indicativa', anim_id_genero='$this->id_genero', anim_autor='$this->anim_autor', anim_quantidade_episodios='$this->anim_quantidade_episodios', anim_quantidade_temporadas='$this->anim_quantidade_temporadas', anim_id_usuario='$this->id_usuario', anim_yt_id='$this->anim_ytId' WHERE anim_id = '$this->anim_id'";
            $stmt = DB::prepare($sql);
            $stmt->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}