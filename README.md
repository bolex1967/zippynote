Zippy Note  
========
Пока как MVP

Менеджер персональных записей (блокнот,  органайзер ,база знаний)  представляющий возможность
  сохранения  и упорядочивания  пользовательских записей  в  иерархическом  виде.

Может работать как  SAAS.

Проект инспирирован [статьей](https://habrahabr.ru/post/316814/) о
программе [MyTetra](http://webhamster.ru/site/page/index/articles/projectcode/105) и пожеланиями  в  коментах

Демо:  [http://note.zippy.com.ua/](http://note.zippy.com.ua/)
вход admin@admin.admin admin

[скриншот](https://www.dropbox.com/s/s18z7pq8eq1ba24/screen.png?dl=0)


#### Возможности
* веб интерфейс
* создание  дерева,  копирование , перемещение  узлов
* редактирование, копирование пермещение топиков. Симлинки на  узлы  дерева,  тэги, поиск,  публичная ссылка
* разделение  по  юзерам


####Планируется
* аплоад рисунков  в  редакторе
* аттач файлов
* отметка  избранные
* локализация
* инсталяция  в  сборе  с  WAMP 

 
####Установка

Стащить из гитхаба, выполнить composer, создать БД, прописать  конект  в  /config/config.ini.
Выполнить скрипты  для  структуры /db/db.sql и инициализации   /db/initdata.sql 

Enjoy!

