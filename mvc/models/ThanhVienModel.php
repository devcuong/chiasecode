<?php
    class ThanhVienModel extends DB{
        /*THÊM USER*/
        public function InsertThanhVien($email, $password, $hoten, $username, $sdt){
            $qr = "INSERT INTO thanhvien VALUES(null, '$email', '$password', '$hoten', '$username', '$sdt')";
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            
            return json_encode( $result );
        }
        /*CHECK USERNAME CHỦ KÊNH*/
        public function CheckUsernameThanhVien($username){
            $qr = "SELECT id FROM thanhvien WHERE username='$username'";
            $rows = mysqli_query($this->con, $qr);
            $kq=false;
            if (mysqli_num_rows($rows)>0){
                $kq=true;
            }
            return json_encode($kq);
        }
        
        /*CHECK EMAIL CHỦ KÊNH*/
        public function CheckEmailThanhVien($email){
            $qr = "SELECT id FROM thanhvien WHERE email='$email'";
            $rows = mysqli_query($this->con, $qr);
            $kq=false;
            if (mysqli_num_rows($rows)>0){
                $kq=true;
            }
            return json_encode($kq);
        }
        
        /*CHECK SDT CHỦ KÊNH*/
        public function CheckSdtThanhVien($sdt){
            $qr = "SELECT id FROM thanhvien WHERE sdt='$sdt'";
            $rows = mysqli_query($this->con, $qr);
            $kq=false;
            if (mysqli_num_rows($rows)>0){
                $kq=true;
            }
            return json_encode($kq);
        }
        
    }
?>