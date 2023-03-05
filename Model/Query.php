<?php 

namespace Model;

class Query{

    private $from;

    private $select;

    private $where;

    private $group;

    private $count;


    public function select(string ...$values) : self
    {
        $this->select=$values;
       
        return $this;
    }

    public function from(string $table): self
    {
        $this->from=$table;

        return $this;
    }

    public function count(string $entity){
        $this->count=$entity;

        return $this;

    }
    public function where(string ...$condition):self
    {
        $this->where= $condition;
        return $this;
    }

    public function group(string $column): self
    {
        $this->group= $column;
        return $this;
    }

    public function __toString()
    {
        
        //if($this->select){

            $parts=["SELECT"];

            if(!empty($this->count)){
                $parts[]="COUNT(".$this->count.")";
            }
            if(!empty($this->select)){

                $parts[]=join(", ",$this->select);

            }else{
                $parts[]= "*";
            }

            $parts[]="FROM";
            $parts[]=$this->from;

            if($this->where){
                $parts[]="WHERE";
                $parts[]="(".join(") AND (",$this->where) .")";
            }
            if($this->group){
                $parts[]="GROUP BY";
                $parts[]=$this->group;
            }
            
       // }

       

        
        



        return join(" ",$parts);
    }

}