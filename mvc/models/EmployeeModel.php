<?php
class EmployeeModel extends DB{

    private  $employeeCode;
    private  $name;
    private  $email;
    private  $phone;
    private  $position;

   

    public function GetEmployees(){
        $qr = "SELECT * FROM employee";
        $data =  $this->excute($qr);
        return $data;
    }

    public function InsertEmployee($name,$email,$phone,$vitri){

        $qr = "INSERT INTO employee(EmployeeID,Name,Phone,Email,Position) VALUES (null,'".$name."','".$phone."','".$email."','".$vitri."')";
        return $this->excute($qr);
    }
    public function EditEmployee($id,$name,$email,$phone,$vitri){
        $qr = "UPDATE employee set Name ='".$name."'  and Email ='".$email."' and Phone ='".$phone."' and Position ='".$vitri."'  where EmployeeID = '".$id."' " ;
        return $this->excute($qr);
    }
    public function DeleteEmployee($id){
        $qr = "Delete from employee where EmployeeID = '".$id."'";
        return $this->excute($qr);
    }


}
?>