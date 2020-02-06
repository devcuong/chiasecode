<?php

class DangKy extends Controller
{

    public $ThanhVienModel;

    public function __construct()
    {
        // Model
        $this->ThanhVienModel= $this->model("ThanhVienModel");
    }

    function Index()
    {
        $this->view("cat-template", [
            "Page" => "dang-ky"
        ]);
    }

    function DangKyThanhCong($ho, $ten)
    {
        $this->view("cat-template", [
            "Page" => "dang-ky-thanh-cong"
        ]);
    }
}
?>
