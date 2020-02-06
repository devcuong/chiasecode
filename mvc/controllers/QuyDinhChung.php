<?php
class QuyDinhChung extends Controller{
    function Index(){
       $this->view("cat-template", ["Page"=>"quy-dinh-chung"]);
    }
    
}
?>
