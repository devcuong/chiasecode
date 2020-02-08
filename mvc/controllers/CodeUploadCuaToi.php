<?php
class CodeUploadCuaToi extends Controller{
    
    public $CodeModel;
    
    public function __construct()
    {
        $this->CodeModel = $this->model("CodeModel");
    }
    
    function Index(){
    if(isset($_SESSION["username"])){
            $this->view("cat-template", ["Page"=>"code-upload-cua-toi"]);
        }else{
            header("Location: http://localhost/chiasecode", 301);
            exit();
        }
    }
}
    ?>
