<?php
    namespace Model;
    use \PDO;

    class Database{

        private $dbname;

        private $user;
        
        private $passwd;

        private $pdo;

        private $preparedQuery;

        public function __construct(string $dbname,string $user,string $passwd=null)
        {

            $this->dbname=$dbname;
            $this->user=$user;
            $this->passwd=$passwd;
            $this->pdo=new PDO("mysql:dbname=".$this->dbname.";port:3308",$this->user,$this->passwd);

        }

        public function prepare(string $request){
            $this->preparedQuery=$this->pdo->prepare($request);
            return  $this->preparedQuery;
        }
    
        public function execute(){
            return $this->preparedQuery->execute();
        }

        public function fetchData()
        {
            return $this->preparedQuery->fetchAll();
        }

        public function ValidFile(string $file,string $type): bool
        {
            $ext=substr($file,-3);

            if($ext !== $type){
                return false;
            }

            return true;
        }
        

    }