<?php

class ClassCM extends DatabaseConfig {
    protected function appendClass($className,$classCode,$classTeacher){
        $stashStmt = $this->integrate()->prepare('INSERT INTO`classes`(`className`,`classCode`,`classTeacher`) VALUES (?,?);');
        if (!$stashStmt->execute([$className,$classCode,$classTeacher])){
         header('Location:./../../index.php?msg=server error');
         exit;
        }
        $stashStmt = null;
    }
    protected function ammendClass($className,$classCode,$classTeacher){
        $stashStmt = $this->integrate()->prepare('UPDATE `classes` SET `className`=?,`classCode`=?`classTeacher`=? WHERE `classAddedDate`=?;');
        if (!$stashStmt->execute([$className, $classCode, $classTeacher, $classAddedDate])){
            header('Location:./../../index.php?msg=server error');
            exit;
        }
        $stashStmt = null;
    }

}