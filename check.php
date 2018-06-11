<!DOCTYPE html>
<head>
<title>登陆测试页面
</title>
</head>
<body>
<?php
    $hostname = 'localhost';
    $database = 'web_usrinfo';
    $usrname = 'root';
    $password = 'root';  
?>

<?php
    $conn = new mysqli($hostname,$usrname,$password,$database);
    if(!$conn) die("connect error".mysqli_connect_error());
    else echo "success connect"."<br>";
    //exist userinfo or not
    $query_one = "insert into loginfo(username,password) values('test','test');"
    $result_one = $conn->query($query_one);
    if(!$result_one){
	echo "error insert"."<br>";
    }else{
	echo "success insert"."<br>";
    }
    $conn->close();
/*    
    if(isset($_POST['username']) && isset($_POST['password'])){
    echo "表单数据提交成功";
    //$uname = get_post($conn,'username');
    //$pword = get_post($conn,'password');
    echo "get_post成功";
    $query = "select * from loginfo";
    $result = $conn->query($query);
    if (!$result){
    echo "请求不成功";
    }else{
    echo "请求成功";
    }
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    echo "共".counts($rows)."条记录";
    $conn->close();  
    }
/*
    $arr = array();
    while($r = $result->fetch_row()){
	array_push($arr,substr($arr[0],0,4))
    }

    $query = "SELECT * FROM loginfo where name='$username' and password = '$password'";
    $result = conn->query($query);
    if(!$result) die($conn->error);
    
    $rows = $result->num_rows;

    for($j = 0;$j <= $rows; ++$j){
	$result->data_seek($j);
	$row = $result->fetch_array(MYSQLI_ASSOC);
    }
    $result->close();
    $conn->close();
    
    echo "zhouming--2";
*/
?>
</body>
