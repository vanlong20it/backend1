<?php
class FoodModel extends Db
{
    //ok
    public function getFoodList()
    {
        $sql = parent::$connection->prepare('SELECT * FROM food');
        return parent::select($sql);
    }
    //ok
    public function getFoodById($id){
        $sql = parent::$connection -> prepare('SELECT * FROM food WHERE food_id = ?');
        $sql->bind_param('d',$id);
        return parent::select($sql)[0];
    }
    //ok
    public function addFood($name, $desc, $cat, $price, $image)
    {
        $sql = parent::$connection->prepare('INSERT INTO `food`(`food_name`,`food_description`,`food_category`,`food_price`,`food_image`) VALUES (?,?,?,?,?)');
        $sql->bind_param('sssds', $name, $desc, $cat, $price, $image);
        return $sql->execute();
    }
    public function updateFood($id, $name, $desc, $cat, $price, $image){
        $sql = parent::$connection->prepare('UPDATE `food` SET `food_name`=?, `food_description`=?, `food_category`=?, `food_price`=?, `food_image`=? WHERE `food`.`food_id`=?');
        $sql->bind_param('sssdsi',$name, $desc, $cat, $price, $image, $id);
        return $sql->execute();
    }
    public function deleteFood($id){
        $sql = parent::$connection->prepare('DELETE FROM `food` WHERE `food`.`food_id`=?');
        $sql->bind_param('i',$id);
        return $sql->execute();
    }
    //okupdate `food` set food_name="ljaksdjalsdj", food_category="dinner" where `food`.`food_id`=17
    public function truncate($str, $length)
    {
        if (strlen($str) > $length) {
            $str = substr($str, 0, $length + 1);
            $pos = strrpos($str, ' ');
            $str = substr($str, 0, ($pos > 0) ? $pos : $length);
        }
        return $str;
    }
    public function vn_to_str($str)
    {
        $unicode = array(
            'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd' => 'đ',
            'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i' => 'í|ì|ỉ|ĩ|ị',
            'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y' => 'ý|ỳ|ỷ|ỹ|ỵ',
            'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'D' => 'Đ',
            'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'I' => 'Í|Ì|Ỉ|Ĩ|Ị',
            'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
        foreach ($unicode as $nonUnicode => $uni) {
            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
        }
        $str = str_replace(' ', '_', $str);
        return $str;
    }
}
