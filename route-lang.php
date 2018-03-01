<?php  
/* $translate_word[0] - имя; $translate_word[1] - имейл; $translate_word[2] - текст; $translate_word[3] - кнопка отправки;*/
/* Для формы обратной связи (которая доступна на всех страницах):wp-content\themes\jupiter\views\footer\quick-contact.php */
/* Маршрутизация в зависимости от языка */
$routes = explode('/', $_SERVER['REQUEST_URI']);
if (!isset($routes[2])) {
  $switch_lang = 0;
} else {
  switch ($routes[2]) {
    case 'uk':
      $switch_lang = 1;
	  break;
    case 'en':
      $switch_lang = 2;
	  break;
    case 'de':
      $switch_lang = 3;
	  break;
	default:
	  $switch_lang = 0;
	  break;
	}
}
/* Массив со значениями для перевода */
$translate_word = [];
  switch ($switch_lang) {
    case 0:
      $translate_word[0] = 'Имя*';
	  $translate_word[2] = 'Тест*';
	  break;
    case 1:
      $translate_word[0] = 'Ім' . "'" . 'я*';
	  $translate_word[2] = 'Тест*';
	  break;
    case 2:
      $translate_word[0] = 'Name*';
	  $translate_word[2] = 'Text*';
	  break;
    case 3:
      $translate_word[0] = 'Name*';
	  $translate_word[2] = 'Text*';
	  break;
	default:
      $translate_word[0] = 'Имя*';
	  $translate_word[2] = 'Тест*';
	  break;
	}
  $translate_word[1] = 'Email*';
