<?php
require('Demo/Api.php');
header("Refresh:1;url=".$dwon)
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Minimalist Web Notepad ()">
    <title>沃游戏key自动获取接口</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="container">
        <textarea id="content">Auth：沧水
沃游戏模式自动更新
模式更新时间：<?php echo date("m月-d日 H时:i分",time());?>

1秒后自动下载当前配置文件
<?php echo $curl?>
</textarea>
    </div>
    <pre id="printable"></pre>
</body>

</html>