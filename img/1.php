<?php
  ////////////////////////////////////////////////////////////
  // 2005-2008 (C) �������� �.�., �������� �.�.
  // PHP. �������� �������� Web-������
  // IT-������ SoftTime 
  // http://www.softtime.ru   - ������ �� Web-����������������
  // http://www.softtime.biz  - ������������ ������
  // http://www.softtime.mobi - ��������� �������
  // http://www.softtime.org  - �������������� �������
  ////////////////////////////////////////////////////////////
  // ���������� ������� ��������� ������ 
  // (http://www.softtime.ru/info/articlephp.php?id_article=23)
  error_reporting(E_ALL & ~E_NOTICE);

  // ���� ����� ���������� � ����� 
  ob_start(); 

  // ������� ���������� ��������
  echo "Hello world";
  // ���������� HTTP-���������
  header("X-my-header: Hello world!");
  
  // ���������� ���������� ������ ������ �������
  ob_end_flush(); 
?> 
