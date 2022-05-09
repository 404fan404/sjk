<?php
    $link = mysqli_connect('localhost','root','root','ajax');

    if(!$link){
        exit('链接失败');
    }
    $res = mysqli_query($link,'select * from r');
    
    $arr = array(); //声明一个空数组用于存储数据库中的数据
    while($row = mysqli_fetch_assoc($res)){
        array_push($arr,$row);
    }

    echo json_encode($arr);

    mysqli_close($link);
?>