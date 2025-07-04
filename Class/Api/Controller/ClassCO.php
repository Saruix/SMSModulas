<?php

class ClassCO extends ClassCM
{
    private $classId;
    private $className;
    private $classCode;
    private $classTeacher;
    public function __construct($class_Id, $class_name, $class_code, $class_teacher)
    {
        $this->classId = $class_Id;
        $this->classCode = $class_code;
        $this->className = $class_name;
        $this->classTeacher = $class_teacher;
    }
    public function introduceClass(): void
    {
        if (this->isEmptyoinputs() == true) {
            header("Location:./../../index.php?msg=empty_fields");
            exit;
        }
        $this->appendClass($this->className, $this->classCode, $this->classTeacher);
    }
    private function updateClass(): void
    {
        if ($this->isEmptyinputs() == true) {
            header("Location:./../../index.php?msg=empty_fields");
            exit;
    }
    $this->ammendClass($this->classId, $this->className, $this->classCode, $this->classTeacher);
}
private function isEmptyinputs(): bool

{
    if(empty($this->className) || empty($this->classCode) || empty($this->classTeacher)){
        return true;
    }else {
        return false;
    }
}
}