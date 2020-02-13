<?php
    class SuaCode extends Controller{
        
        public $CodeModel;
        
        public function __construct()
        {
            // Model
            $this->CodeModel = $this->model("CodeModel");
        }
        
        //Biến a ở hàm index lấy tên controller map
        //Biến b ở hà index là param
        function Index($a, $b){
            $arrTenSourceCode = explode("-",$b);
            $maSourceCode = end($arrTenSourceCode);
            $kq = $this->CodeModel->GetCodeById($maSourceCode);
            $kq2 =  $this->CodeModel->GetCodeById($maSourceCode);
            $imageDaiDien = "";
          while($row = mysqli_fetch_array($kq2)){
              $imageDaiDien = $row['anhdaidien'];
          }
            $img = file_get_contents('http://localhost/chiasecode/mvc/public/member/thumbnail/' . $imageDaiDien);
            $data = base64_encode($img);
            $showData = "data:image/png;base64,".$data;
            //View
            $this->view("cat-template", ["Page"=>"sua-code",
                "InforSourceCode" => $kq,
                "ImageEncode" => $showData
            ]);
        }
        
        function UpdateCode(){
            $idCode = "";
            $imageDaiDien = "";
            $tieuDeCode = "";
            $danhMuc = "";
            $moTaNgan = "";
            $linkCode = "";
            $linkDemo = "";
            $luaChonPhiTai = "";
            $phiTai = "";
            $camKetHoTro = "";
            $hinhAnhCode = "";
            $moTaChiTiet = "";
            $huongDanCaiDat = "";
            $tuKhoa = "";
            $daDocDieuKhoan = "";
            
            if(isset($_POST["hidden-code-id"])){
                $idCode = $_POST["hidden-code-id"];
            }
            
            $arrImage = [];
            if(isset($_POST["img-dai-dien-hidden"])){
                $data = $_POST["img-dai-dien-hidden"];
                $image_array_1 = explode(";", $data);
                $image_array_2 = explode(",", $image_array_1[1]);
                $data = base64_decode($image_array_2[1]);
                $imageName = time() . '.png';
                file_put_contents('mvc/public/member/thumbnail/'.$imageName, $data);
                $imageDaiDien = $imageName;
            }
            if (isset($_POST["txt-title"])){
                $tieuDeCode = trim($_POST["txt-title"]);
            }
            if(isset($_POST["ddl-category-lang"])){
                $danhMuc = trim($_POST["ddl-category-lang"]);
                $danhMuc = intval($danhMuc);
            }
            if(isset($_POST["txt-subtitle"])){
                $moTaNgan = trim($_POST["txt-subtitle"]);
            }
            if(isset($_POST["txt-link"])){
                $linkCode = trim($_POST["txt-link"]);
            }
            if (isset($_POST["txt-link-demo"])){
                $linkDemo = trim($_POST["txt-link-demo"]);
            }
            if (isset($_POST["options"])){
                $luaChonPhiTai= trim($_POST["options"]);
            }
            if(isset($_POST["txt-price-other"])){
                $phiTai = trim($_POST["txt-price-other"]);
                $phiTai = intval($phiTai);
            }
            if(isset($_POST["chk-cam-ket"])){
                $camKetHoTro = $_POST["chk-cam-ket"];
                $camKetHoTro = intval($camKetHoTro);
            }
            else {
                $camKetHoTro = 0;
            }
            $total = count($_FILES['file-upload-2']['name']);
            if($total > 0){
                $fileName = "";
                for($i=0 ;$i<$total; $i++){
                    $fileName = $_FILES['file-upload-2']['name'][$i];
                    $fileName = time().'-'.$_SESSION['username'].$fileName;
                    $duongDanHinhAnh = 'mvc/public/member/code/'.$fileName;
                    array_push($arrImage,$fileName);
                    // Upload file
                    move_uploaded_file($_FILES['file-upload-2']['tmp_name'][$i],$duongDanHinhAnh);
                }
            }
            if(isset($_POST["ck-detail"])){
                $moTaChiTiet = trim($_POST["ck-detail"]);
            }
            if(isset($_POST["ck-config"])){
                $huongDanCaiDat = trim($_POST["ck-config"]);
            }
            if(isset($_POST["txt-tag"])){
                $tuKhoa = trim($_POST["txt-tag"]);
            }
            if(isset($_POST["chk-require"])){
                $daDocDieuKhoan = $_POST["chk-require"];
                $daDocDieuKhoan = intval($daDocDieuKhoan);
            }
            $created_date = date("Y-m-d H:i:s");
            $kq = $this->CodeModel->UpdateCode($idCode, $imageDaiDien, $tieuDeCode, $danhMuc, $moTaNgan, $linkCode, $linkDemo, $luaChonPhiTai, $phiTai, $camKetHoTro,implode(",",$arrImage), $moTaChiTiet, $huongDanCaiDat, $tuKhoa, $daDocDieuKhoan, intval($_SESSION['userid']), $created_date);
            echo $kq;
        }
       
    }
?>

