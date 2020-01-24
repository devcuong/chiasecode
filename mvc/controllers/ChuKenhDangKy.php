<?php

class ChuKenhDangKy extends Controller
{

    public $ChuKenhModel;

    public function __construct()
    {
        // Model
        $this->ChuKenhModel = $this->model("ChuKenhModel");
    }

    function SayHi()
    {
        $this->view("cat-template", [
            "Page" => "chu-kenh-dang-ky"
        ]);
    }
}
?>
