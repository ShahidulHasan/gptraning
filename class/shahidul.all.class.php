<?php
require_once('class/shahidul.set.con.php');
class ExamResult{
    public $uid;
    public $types;
    public $exam_no;
    public $rightans;
    public $wrongans;
    public $blankans;
    public $que_no;
    public $que_nu;
    public $exam_date;
    public $exam_time;
	
public function rightresult(){ 

$pe=mysql_query("select * from tb_exam_permission where exam_no={$this->exam_no} and types={$this->types} and uid='{$this->uid}' ");
$permission=mysql_num_rows($pe); 																				
    
	if($permission==false){
		$sql="insert into tb_result(uid,types,exam_no,rightans,wrongans,blankans,que_no,que_nu)
		values('{$this->uid}',{$this->types},{$this->exam_no},{$this->rightans},{$this->wrongans},{$this->blankans},{$this->que_no},{$this->que_nu})";
		return mysql_query($sql);
    }else{ 
    $sql="UPDATE tb_result SET rightans={$this->rightans},wrongans={$this->wrongans},blankans={$this->blankans} WHERE uid='{$this->uid}' AND types={$this->types} AND exam_no={$this->exam_no} AND que_nu={$this->que_nu}";
    return mysql_query($sql);
	}
	
}
		
public function premission(){

	$certified=mb_strtoupper(uniqid());
	
	$right=mysql_query("select rightans from tb_result where exam_no={$this->exam_no} and types={$this->types} and uid='{$this->uid}' and rightans='1' ");
	$rightansr=mysql_num_rows($right);
	$ques=mysql_query("select id from exam_que where exam_no={$this->exam_no} and types={$this->types}");
	$questotal=mysql_num_rows($ques);

	$rightper=($rightansr/$questotal);
	$right_percentage=$rightper*100;	

	if($right_percentage>=60){	
    $sql1="insert into tb_certified(uid, certified, types, exam_no, exam_date, exam_time)
    values('{$this->uid}','$certified',{$this->types},{$this->exam_no},'{$this->exam_date}','{$this->exam_time}')";
    mysql_query($sql1);		
	}else{}
	
$pe=mysql_query("select * from tb_exam_permission where exam_no={$this->exam_no} and types={$this->types} and uid='{$this->uid}' ");
$permission=mysql_num_rows($pe); 																				
    
	if($permission==false){
		$sql="insert into tb_exam_permission(uid, certified, types, exam_no, exam_date, exam_time)
		values('{$this->uid}','$certified',{$this->types},{$this->exam_no},'{$this->exam_date}','{$this->exam_time}')";
		return mysql_query($sql);	
	}else{
    $sql="UPDATE tb_exam_permission SET certified='$certified',exam_date='{$this->exam_date}',exam_time='{$this->exam_time}' WHERE uid='{$this->uid}' AND types={$this->types} AND exam_no={$this->exam_no}";
    return mysql_query($sql);	
	}
	
	}	
}
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
    public $photo;
	
public function examQues(){      
    $sql="insert into exam_que(types, exam_no, ans, que_nu, que, ans_one, ans_two, ans_three, ans_four, photo)
    values({$this->types},{$this->exam_no},'{$this->ans}',{$this->que_nu},'{$this->que}','{$this->ans_one}','{$this->ans_two}','{$this->ans_three}','{$this->ans_four}','{$this->photo}')";
    return mysql_query($sql);
	}
public function examQuesUp(){      
    $sql="UPDATE exam_que SET photo='{$this->photo}' WHERE types={$this->types} AND exam_no={$this->exam_no} AND que_nu={$this->que_nu}";
    return mysql_query($sql);
	}
}
class ChangePass{
    public $newpass;
    public $find;
	
public function changepass(){      
    $sql="UPDATE tbadminpass SET password='{$this->newpass}' WHERE id={$this->find} ";
    return mysql_query($sql);
	}
}
class InforMation{
    public $id;
    public $mob;
    public $post;
    public $address;
    public $photo;
    public $img;
    public $comp;
	
public function informationins(){
$query=mysql_query("select * from tbuserinfo where id={$this->id} ");
$check=mysql_num_rows($query);
		if($check==false){
			$sql="insert into tbuserinfo(id, mob, comp, post, address, photo, img)
			values({$this->id},'{$this->mob}','{$this->comp}','{$this->post}','{$this->address}','{$this->photo}','{$this->img}')";
		return mysql_query($sql);
		}else{
			$sql="UPDATE tbuserinfo SET mob='{$this->mob}',comp='{$this->comp}',post='{$this->post}',address='{$this->address}' WHERE id={$this->id} ";
			return mysql_query($sql);
		}
	}
public function infoPChange(){
		$sql="UPDATE tbuserinfo SET photo='{$this->photo}',img='{$this->img}' WHERE id={$this->id} ";
		return mysql_query($sql);
}
} 

 
class RegUser{
    public $fullname;
    public $email;
    public $username;
    public $password;
	public $regno;
	public $regdate;
	public $regtime;
	
public function reguser(){      
	$show="Successfull Registry";
$query=mysql_query("select id from tbadmin where username='$username' ");
$check=mysql_num_rows($query);
	if($check==true){
			echo"The userName is used before...";
		}else{	
		$sql=mysql_query("insert into tbadmin(username, active) values('$username',3) ");
			if($sql==true){
				$sqlU=mysql_query("select id from tbadmin where username='$username' ");
				$rowU = mysql_fetch_assoc($sqlU);
				$idU=$rowU['id'];
				$sqlP=mysql_query("insert into tbadminpass(id, password) values('$idU','$password') ");	
				if($sqlP==true){
					$sqlF=mysql_query("insert into tbregistration(id, fullname, email, regno, regdate, regtime, active) values('$idU','$fullname','$email','$regno','$regdate','$regtime',3) ");				
				}		
			if($sqlF==true){echo"$show";}else{echo"Error Registry";}	
			}
		}    
	}
}
?>
