<?php

class Teachers{

   private function questionPapers(){
        return "question paper for students";
    }

    function exam(){
        if($this->questionPapers()=="important"){
            echo "do something";
        }else{
            echo "do else";
        }
    }

    protected function studentMarks(){
        echo "all student marks";
    }
}

class Management extends Teachers{
    function reviewExam(){
        $this->studentMarks();

    }

   

}

$m1=new Management;
$m1->reviewExam();

$t1=new Teachers();

echo $t1->exam();


?>