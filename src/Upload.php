<?php 
namespace App;

class Upload{
    private $p_path;

    public function __construct()
    {
        $this->p_path=dirname(__DIR__)."/upload/";
    }

    public function LoadFile(string $file)
    {

        require dirname(__DIR__)."/upload/UploadController.php";
        

    }

}



/* if(isset($_FILES)){
            //var_dump($_FILES);
        
            $filename=$_FILES['image']['name'];
            $tmp_name=$_FILES['image']['tmp_name'];
        
            $filetype=explode('.',$filename)[1];
        
            if($_FILES['image']['error'] == UPLOAD_ERR_OK){ 
        
                if(loadPath($filetype) === "error"){
                    echo "Fichier non attendue";
                }else{
                    $destination="data/".(loadPath($filetype))."/".$filename;
        
                    //echo getcwd();
                    move_uploaded_file($tmp_name,getcwd().DIRECTORY_SEPARATOR.str_replace("/",DIRECTORY_SEPARATOR,$destination));
        
                    $response=["success"=> true,"message"=>"Fichier copié"];
                }
                
            }else if($_FILES['image']['error'] == UPLOAD_ERR_INI_SIZE){
                echo "Erreur de taille";
            }else{
                echo "Autres erreurs";
                var_dump($_FILES['image']['error']);
            }
        
        }
         */