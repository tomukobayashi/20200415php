<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1>POSTでデータを送信する</h1>
<p>プロフィールを投稿しよう</p>
<form action="post_receive.php" method="POST">
<label>お名前</label>
<input type ="text" name = "name">
<br>
<label>性別</label>
<input type ="radio" name = "sex" value="1">男
<input type ="radio" name = "sex" value="2">女
<br>
<label>血液型</label>
<select name = "blood">
<option value ="A">A型</option>
<option value ="B">B型</option>
<option value ="O">O型</option>
<option value ="AB">AB型</option>
</select>
<br>
<label>ひとこと：</label>
<br>
<textarea name="comment" rows="4" cols="40"></textarea>
<br>
<input type ="submit" value="送信">
</form>
</body>
</html>
