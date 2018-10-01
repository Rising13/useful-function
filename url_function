<?php
/*Функция получения текущего url страницы*/
function request_url()
{
  /*Значение по умолчанию*/
  $result = '';
  $default_port = 80; // Порт по-умолчанию
 
  // Тип соединения?
  if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS']=='on')) {
    // В защищенном! Добавим протокол...
    $result .= 'https://';
    // Переназначим значение порта по-умолчанию
    $default_port = 443;
  } else {
    // Обычное соединение, обычный протокол
    $result .= 'http://';
  }
  // Имя сервера
  $result .= $_SERVER['SERVER_NAME'];
 
  // порт
  if ($_SERVER['SERVER_PORT'] != $default_port) {
    // Если нет, то добавим порт в URL
    $result .= ':'.$_SERVER['SERVER_PORT'];
  }
  // путь и GET-параметры.
  $result .= $_SERVER['REQUEST_URI'];
  return $result;
}
