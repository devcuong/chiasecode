<?php
    class ChuKenhModel extends DB{
        /*THÊM USER*/
        public function InsertChuKenhYoutube($email, $password, $hoten, $username, $sdt){
            $qr = "INSERT INTO chukenh VALUES(null, '$email', '$password', '$hoten', '$username', '$sdt')";
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            
            return json_encode( $result );
        }
        /*CHECK USERNAME CHỦ KÊNH*/
        public function CheckUsernameChuKenh($username){
            $qr = "SELECT id FROM chukenh WHERE username='$username'";
            $rows = mysqli_query($this->con, $qr);
            $kq=false;
            if (mysqli_num_rows($rows)>0){
                $kq=true;
            }
            return json_encode($kq);
        }
        
        /*CHECK EMAIL CHỦ KÊNH*/
        public function CheckEmailChuKenh($email){
            $qr = "SELECT id FROM chukenh WHERE email='$email'";
            $rows = mysqli_query($this->con, $qr);
            $kq=false;
            if (mysqli_num_rows($rows)>0){
                $kq=true;
            }
            return json_encode($kq);
        }
        
        /*CHECK SDT CHỦ KÊNH*/
        public function CheckSdtChuKenh($sdt){
            $qr = "SELECT id FROM chukenh WHERE sdt='$sdt'";
            $rows = mysqli_query($this->con, $qr);
            $kq=false;
            if (mysqli_num_rows($rows)>0){
                $kq=true;
            }
            return json_encode($kq);
        }
        
    }
?>