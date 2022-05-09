<?php

    $id = $_GET['id'];
    // echo $id;
    $link = mysqli_connect('localhost','root','root','ajax');

    $resdate = array('code'=>0,'mes'=>"");  //自定义一个统一的返回格式

    if(!$link){
        $resdate['code'] = 1;
        $resdate['mes'] = "数据库链接失败";
        exit(json_encode($resdate));
    }
    if(!$id){
        $resdate['code'] = 2;
        $resdate['mes'] = "id不存在";
        exit(json_encode($resdate));
    }
    // echo $id;

    $sql = "select * from r where id=$id";

    $res = mysqli_query($link,$sql);

    $row = mysqli_fetch_assoc($res);

    // var_dump($row);
    if(!$row){
        $resdate['code'] = 3;
        $resdate['mes'] = "要修改的数据不存在";
        exit(json_encode($resdate));
    }else{
        $resdate['mes'] = json_encode($row);
        echo json_encode($resdate);
    }



    mysqli_close($link);

?>