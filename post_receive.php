<?php
    $name=$_POST['name'];
    $sex=(int)$_POST['sex'];
    $blood=$_POST['blood'];
    $comment=$_POST['comment'];

    var_dump($name);
    var_dump($sex);
    var_dump($blood);
    var_dump($comment);
?>

<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1>受信ページ</h1>
<p>あなたの名前は<?php echo $name?>ですね。</p>
<p>性別は<?php if($sex === 1){echo '男性';}elseif($sex === 2){echo '女性';}?>ですね。</p>
<p>血液型は<?php echo $blood;?>型です。</p>
<p>
<?php echo $comment;?>
</p>
</body>
</html>
