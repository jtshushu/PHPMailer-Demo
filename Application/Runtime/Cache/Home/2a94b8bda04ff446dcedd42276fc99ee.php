<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="<?php echo U('Index/index');?>" method="post">
    用户名：<input type="text" name="name" id=""/><br/>
    密码：<input type="password" name="password" id=""/><br/>
    邮箱：<input type="email" name="email" id=""/><br/>
    <input type="submit" value="提交"/>
</form>
</body>
</html>