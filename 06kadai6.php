<?php
//�U�D�ȉ��̋@�\�𖞂������W�b�N���쐬���Ă��������B
//
//�݌ɊǗ��V�X�e�����쐬���܂��B
//�܂��ADB�Ƀ��[�U�[���Ǘ��e�[�u���ƁA���i���o�^�e�[�u�����쐬���Ă��������B
//���̏�ŁA���L�@�\���������Ă��������B
//
//�@���[�U�[�̃��O�C���E���O�A�E�g�@�\
//
//�A���i���o�^�@�\
//
//�B���i�ꗗ�@�\
//
//���e�e�[�u���̍\���͊e���̑z���ō���Ă݂Ă��������B
function connectDb(){
    $param = "mysql:dbname=challenge_db;host=localhost";
    try{
        //�����ōs��ꂽ���u�ŃG���[������������

        //���̎���$pdo�̓��[�J���ϐ��ƒ�`
        $pdo = new PDO($param,"root","46803980a");
        return $pdo;
    }catch(PDOException $e){
        //�����ɏ����Ă��鏈�����s���B
        return $e->getMessage();
    }

}

$pdo =connectDb();

if(is_string($pdo)){
    //    return $pdo;
    echo $pdo;
    exit;
}





Class user{
    private $id;
    private $password;

    //userid�o�^ password�o�^
        public function setmen($input_id,$input_password){
        $this->id = $input_id;
        $this->password = $input_password;
        $sql = "INSERT INTO com_user(id,password) values(:id,:password)";
        global $pdo;
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id',$this->id);
        $stmt->bindValue(':password',$this->password);
        $stmt->execute();
    }
}

Class com{
        private $name;
    //���O��o�^
        public function setname($input_name){
        $this->name = $input_name;
        $sql = "INSERT INTO com(name) values(:name)";
        global $pdo;
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':name',$this->name);
        $stmt->execute();
    }

}