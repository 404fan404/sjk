<?php
    // print_r($_POST)
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $add = $_POST['add'];
    $lxfs = $_POST['lxfs'];

    $resdate = array("code"=>0,"mes"=>"");   //自定义一个统一的返回格式

    $link = mysqli_connect('localhost','root','root','ajax');

    if(!$link){
        $resdate["code"] = 1;
        $resdate["mes"] = "数据库链接失败";
        echo json_encode($resdate);
        exit;
    }
    // echo $na;
    $res = mysqli_query($link,"insert r(name,sex,age,ad,lxfs) values ('$name','$sex','$age','$add','$lxfs')");
    // var_dump($res);

    if(!$res){
        $resdate["code"] = 2;
        $resdate["mes"] = "信息添加失败";
        echo json_encode($resdate);
    }
    $resdate["mes"] = "信息添加成功";
    echo json_encode($resdate);

    mysqli_close($link);

?>