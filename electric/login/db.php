<?php
$con=mysqli_connect("localhost","root","","electric");
$response=array();

if(isset($_POST['signup'])){
    $chk=0;
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $locality=$_POST['locality'];

    if($chk==0){
        $querychk="select * from admin_login where mobile='$mobile'";
        $userExists=mysqli_num_rows(mysqli_query($con,$querychk));
        if($userExists==0){
            $query="insert into admin_login(name,email,mobile,password,address,locality)values('$name','$email','$mobile','$password','$address','$locality')";
            mysqli_query($con,$query);
            header("Location:login.php");
            exit();
        }else{
            header("Location:register.php?error=user already exists");
            exit();
        }
    }else{        
        header("Location:register.php?error=Referal Exceeds Maximum Count");
        exit();
    }

}
if(isset($_POST['signin'])){
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    if($mobile=="7568565831" and $password=="admin"){
        echo "Admin";
        session_start();
        $_SESSION['type']="admin";
        $_SESSION['id']=7568565831;
        header("Location:../admin/index.php");
        exit();
    }else{    
        $querychk="select * from admin_login where mobile='$mobile' and password='$password'";
        $user_result=mysqli_query($con,$querychk);
        $userExists=mysqli_num_rows($user_result);    
        if($userExists>0){
            $user=mysqli_fetch_assoc($user_result);
            session_start();
            $_SESSION['type']="user";
            $_SESSION['id']=$user['id'];
            $_SESSION['name']=$user['name'];
            $_SESSION['mobile']=$user['mobile'];
            $_SESSION['status']=$user['status'];
            header("Location:../user/index.php");
            exit();
        }else{
            header("Location:register.php?error=User Not Enabled");
            exit();
        }

    }

}
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if(isset($_POST['loginMobile'])){
        $mobile=$_POST['loginMobile'];
        $password=$_POST['password'];
        if($mobile=="7568565831" && $password=="admin"){
            $response['msg']="0";
            $response['type']="0";
            $response['mobile']=$mobile;
            
        }else
        {    
            $sqlDist="select * from admin_login where mobile='$mobile' and password='$password' and status='1'";
            $count=mysqli_num_rows(mysqli_query($con,$sqlDist));
            if($count>0){
                $response['msg']="1";
                $response['type']="1";
                $response['mobile']=$mobile;
            }else{
                $response['msg']="2";
                $response['type']="2";
                $response['mobile']=$mobile;
            }
        }
    }else 
        if($chk==0){
            $querychk="select * from admin_login where mobile='$mobile'";
            $userExists=mysqli_num_rows(mysqli_query($con,$querychk));
            if($userExists==0){
                $query="insert into admin_login(name,email,mobile,password,address,locality,status)values('$name','$email','$mobile','$password','$address','$locality','0')";
                mysqli_query($con,$query);
                $response['msg']="1";
            }else{
                $response['msg']="2";
            }
        }else{
            $response['msg']="3";
        }
    
    } 
echo json_encode($response);