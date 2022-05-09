<?php

    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $add = $_POST['add'];
    $lxfs = $_POST['lxfs'];
    $id = $_POST['id'];



    $resdate = array("code"=>0,"mes"=>"");   //自定义一个统一的返回格式

    $link = mysqli_connect('localhost','root','root','ajax');

    if(!$link){
        $resdate["code"] = 1;
        $resdate["mes"] = "数据库链接失败";
        echo json_encode($resdate);
        exit;
    }

    if($name == ""){
        $resdate["code"] = 2;
        $resdate["mes"] = "姓名不能为空";
        echo json_encode($resdate);
        exit;
    }


    $sql = "update r set name='$name',sex='$sex',age='$age',ad='$add',lxfs='$lxfs' where id=$id";

    $res = mysqli_query($link,$sql);

    if(!$res){
        $resdate['code'] = 3;
        $resdate['mes'] = "修改操作执行失败";
        exit(json_encode($resdate));
    }
        $resdate['mes'] = "修改操作执行成功";
        exit(json_encode($resdate));



    mysqli_close($link);



?>