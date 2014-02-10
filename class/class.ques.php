<?php
require_once('class/shahidul.set.con.php');
class ExamQue{
    public $types;
    public $exam_no;
    public $que;
    public $ans_one;
    public $ans_two;
    public $ans_three;
    public $ans_four;
    public $ans;
    public $que_nu;
	
public function examQues(){      
    $sql="insert into exam_que(types, exam_no, ans, que_nu, que, ans_one, ans_two, ans_three, ans_four)
    values({$this->types},{$this->exam_no},'{$this->ans}',{$this->que_nu},'{$this->que}','{$this->ans_one}','{$this->ans_two}','{$this->ans_three}','{$this->ans_four}')";
    return mysql_query($sql);
	}
}
?>