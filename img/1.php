<?php
  ////////////////////////////////////////////////////////////
  // 2005-2008 (C) Кузнецов М.В., Симдянов И.В.
  // PHP. Практика создания Web-сайтов
  // IT-студия SoftTime 
  // http://www.softtime.ru   - портал по Web-программированию
  // http://www.softtime.biz  - коммерческие услуги
  // http://www.softtime.mobi - мобильные проекты
  // http://www.softtime.org  - некоммерческие проекты
  ////////////////////////////////////////////////////////////
  // Выставляем уровень обработки ошибок 
  // (http://www.softtime.ru/info/articlephp.php?id_article=23)
  error_reporting(E_ALL & ~E_NOTICE);

  // Весь вывод направляем в буфер 
  ob_start(); 

  // Выводим содержимое страницы
  echo "Hello world";
  // Отправляем HTTP-заголовок
  header("X-my-header: Hello world!");
  
  // Отправляем содержимое буфера вывода клиенту
  ob_end_flush(); 
?> 
