<?php
// �S�D�R�ō쐬�������ۃN���X���p�����āA�ȉ��̃N���X���쐬���Ă��������B
// �@�@�E�l�̏�������Human�N���X
// �@�@�@�@�E�w�̏�������Station�N���X
// �@�@�@�@�@�@�܂��A�e�N���X�ɉB���ϐ���table�Ƃ����ϐ���p�ӂ��A�e�N���X�̏�����������
// �@�@�@�@�@�@�@�@table�ϐ��Ƀe�[�u������ݒ肵�Ă��������B
require_once("08kadai0.php");
require_once("08kadai3.php");

$pdo = connectDb();

Class human extends base{
    private $table;

     function constract(){
      $this->table = "human";
    }
}


Class station extends base{
    private $table;

     function constract(){
        $this->table= "station";
    }
}