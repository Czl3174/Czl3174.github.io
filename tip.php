<?php
header('ContentType=text/html charset=utf-8'); //文档声明

//判断接受数据是否为空
if (empty($_POST['username']) || empty($_POST['password'])) {
//重定向(若传输数据为空则返回登录页)
header('location:login.php');
}
?>
<?php

$name = $_POST['username'];
$pwd = $_POST['password'];
if($name == 'student' && $pwd == '123')
{
echo "
<script>
    alert('海绵宝宝欢迎你回来哟');
    window.location.href = 'index.html';
</script>";
}else{
echo "
<script>
    alert('用户名或者密码出现错误！请您重新输入');
    history.back();
</script>";
}
?>