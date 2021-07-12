<?php


namespace Source\Models;


use Source\Core\Model;

class Library extends Model
{
    /** @var array $safe no update or create */
    protected static $safe = ["id", "created_at"];

    /** @var string $entity database table */
    protected static $entity = "books";

    /**
     * @param int $id
     * @param string $columns
     * @return Library|null
     */
    public function load(int $id, $columns = "*"): ?Library
    {
        $load = $this->read("SELECT {$columns} FROM ". self::$entity ." WHERE id = :id", "id={$id}");

        if($this->fail() || !$load->rowCount()){
            $this->message = "Livro não encontrado";
            return null;
        }

        return $load->fetchObject(__CLASS__);
    }

    /**
     * @param $id
     * @param string $columns
     * @return Library|null
     */
    public function find($id, string $columns = "*"): ?Library
    {
        $find = $this->read("SELECT {$columns} FROM ". self::$entity ." WHERE id = :id", "id={$id}");

        if($this->fail() || !$find->rowCount()){
            $this->message = "Livro não encontrado";
            return null;
        }

        return $find->fetchObject(__CLASS__);
    }

    /**
     * @param int $limit
     * @param int $offset
     * @param string $columns
     * @return array|null
     */
    public function all(int $limit = 30, int $offset = 0, string $columns = "*"): ?array
    {
        $all = $this->read("SELECT {$columns} FROM ". self::$entity ." LIMIT :l OFFSET :o", "l={$limit}&o={$offset}");

        if($this->fail() || !$all->rowCount()){
            $this->message = "Sua consulta não retornou nemhum resultado";
            return null;
        }

        return $all->fetchAll(\PDO::FETCH_CLASS,__CLASS__);
    }
}