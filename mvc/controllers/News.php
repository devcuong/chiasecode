<?php
    class News extends Controller{
        function SayHi(){
            echo "News - say Hi";
        }
        function Abc($ho, $ten){
            echo $ho . " - " . $ten;
        }
    }
?>