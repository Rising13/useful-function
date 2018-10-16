<?php
/*Функция получения текущего url страницы*/
function request_url()
{
  $result = '';
  $default_port = 80; // Порт по-умолчанию
 
  // Тип соединения
  if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS']=='on')) {
    $result .= 'https://';
    $default_port = 443;
  } else {
    $result .= 'http://';
  }
	
  // Имя сервера
  $result .= $_SERVER['SERVER_NAME'];
 
  // порт
  if ($_SERVER['SERVER_PORT'] != $default_port) {
    $result .= ':'.$_SERVER['SERVER_PORT'];
  }
  // путь и GET-параметры.
  $result .= $_SERVER['REQUEST_URI'];
  return $result;
}

/*Получаем id видео с youtube из ссылки*/
function youtube_video_id($video_url){
	$video_id = '';
	if (!empty($video_url)) {
		$preg_youtube = '%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i';
		if (preg_match($preg_youtube, $video_url, $match)) { 
			$video_id = $match[1]; 
			if(empty($video_id)){
				$video_id = $video_url;
			}
		}else{
			$video_id = $video_url;
		}
		return $video_id;
	}
}
