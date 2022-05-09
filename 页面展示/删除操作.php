<?php
    $link = mysqli_connect('localhost','root','root','ajax');

    $resdate = array('code'=>0,'mes'=>"");  //自定义一个统一的返回格式

    if(!$link){
        $resdate['code'] = 1;
        $resdate['mes'] = "数据库链接失败";
        exit(json_encode($resdate));
    }
    $id = $_GET['id'];
    // echo $id;
    $sql = "delete from r where id=$id";
    $res = mysqli_query($link,$sql);
    // var_dump($res);

    if(!$res){
        $resdate['code'] = 2;
        $resdate['mes'] = "删除操作执行失败";
        exit(json_encode($resdate));
    }
        $resdate['mes'] = "删除操作执行成功";
        exit(json_encode($resdate));

        mysqli_close($link);

?>