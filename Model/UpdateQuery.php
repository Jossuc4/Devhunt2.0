<?php
namespace Model;

class UpdateQuery{
    private $insert;

    private $into;

    private $columns;

    private $delete;

    private $update;

    public function insert(string ...$values):self
    {
        $this->insert=$values;
        return $this;
    }

    public function into(string $table,$columns=[]):self
    {
        $this->into=$table;
        $this->columns=$columns;
        return $this;
    }

    public function __toString()
    {
        if($this->insert){
            $parts=["INSERT INTO"];

            if($this->into){
                $parts[]=$this->into;

                $parts[]="(".join(",",$this->columns).")";

                $parts[]="VALUES";

                $parts[]="(".join(",",$this->insert).")";

            }
        }
    }
}