<?php

class approve extends CActiveRecord {
    
    public static function model($className=__CLASS__) {
        return parent::model($className);
    }
    
    public function rules() {
        return array(
            
        );
    }
    
 public function relations() {
  return array(
   // other relations
     'company'=> array(self::BELONGS_TO, 'company', 'CID'),
        
    );
  }
}

?>
