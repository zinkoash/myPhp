
<?php
session_start();
    

$params = array(
	'client_id'     => '116896893939-tslf2btd7af43rlka4ob45eiq4hkgft3.apps.googleusercontent.com',
	'redirect_uri'  => 'http://pssip29.com',
	'response_type' => 'code',
	'scope'         => 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile',
	'state'         => '123'
);

$url = 'https://accounts.google.com/o/oauth2/auth?' . urldecode(http_build_query($params));


if(isset($_SESSION['user'])) {
    echo "Вы уже авторизованы <br>";
    echo "<form action='/' method='post'><input type='submit' value='exit' name='exit'></form>";
} else {
echo '<a href="' . $url . '">Авторизация через Google</a>';
}
if (isset($_POST['exit'])) {
    unset($_SESSION['user']);
}

if (!empty($_GET['code'])) {
	// Отправляем код для получения токена (POST-запрос).
	$params = array(
		'client_id'     => '116896893939-tslf2btd7af43rlka4ob45eiq4hkgft3.apps.googleusercontent.com',
		'client_secret' => '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',
		'redirect_uri'  => 'http://pssip29.com',
		'grant_type'    => 'authorization_code',
		'code'          => $_GET['code']
	);	
			
	$ch = curl_init('https://accounts.google.com/o/oauth2/token');
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $params); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_HEADER, false);
	$data = curl_exec($ch);
	curl_close($ch);	
 
	$data = json_decode($data, true);
	if (!empty($data['access_token'])) {
		// Токен получили, получаем данные пользователя.
		$params = array(
			'access_token' => $data['access_token'],
			'id_token'     => $data['id_token'],
			'token_type'   => 'Bearer',
			'expires_in'   => 3599
		);
		$info = file_get_contents('https://www.googleapis.com/oauth2/v1/userinfo?' . urldecode(http_build_query($params)));
		$info = json_decode($info, true);
		print_r($info);
	}
}

$_SESSION['user'] = $info;
?>