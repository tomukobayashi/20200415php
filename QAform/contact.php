<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$inquery = $_POST['inquery'];

	$pattern = '/\A(a-z0-9_\-\+\/\?]+)';
	$pattern = '@([a-z0-9\-]+\.)+[a-z]{2,6}\z/i';

if(!preg_match($pattern,$email)){
	$err='メールアドレスの形式が違います';
}

//POSTデータのバリデーション
	if(!preg_match($pattern,$email)){
		$err ='メールアドレスの形式が違います。';
	}
	if(!isset($err)){
		//データベースへの登録
		mb_language("Japanese");
		mb_internal_encoding("UTF-8");
		$subject = 'お問い合わせありがとうございます。';
$inquiry =<<<EOM
{$name}さん、

お問い合わせ内容：
{$inquiry}
EOM;
		$headers = 'From: sender@sender.com' . "\r\n";

		if(mb_send_mail($email, $subject, $inquiry, $headers) === FALSE){
			$message = 'メール送信に失敗しました。';
		}else{
			$message = 'お問い合わせを受け付けました。確認メールを送信しております。';
		}
	}
}
?>


<html>
<body>
<h1>お問い合わせ</h1>
<p><form action="" method="POST"></p>
<label>お名前</label>
<p><input type="text" name="name"></p>
<label>メールアドレス</label>
<p><input type="text" name="email"></p>
<label>お問い合わせ</label>
<p><textarea name="inquery"></textarea>
<p><input type="submit" value="送信"></p>
</form>
</body>
</html>