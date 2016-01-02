<?php
//４．以下の機能を持つクラスを作成してください。
//    ・パブリックな２つの変数
//    ・２つの変数に値を設定するパブリックな関数
//    ・２つの変数の中身をechoするパブリックな関数

//物質の内訳
class object{
    //形
     $form;
    //化学式
     $nature;
    //値をセット,フォームを用意して入力する形に
    public function set ($value1,$value2){
        $this->form = $value1;
        $this->nature = $value2;
    }
    //中身をecho
    public function extract(){ 
        echo $this->form; 
        echo $this->nature;
        }
?>