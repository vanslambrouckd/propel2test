1) MySQL Workbench gebruiken om database structuur te maken  
2) via Workbench de tabellen in MySQL importeren
3) schema.xml maken: propel reverse "mysql:host=localhost;dbname=propel;user=root;password="
4) /conf/propel.yaml maken (en schame.xml ook in deze folder steken)
5) /conf => propel model:build
6) composer dump-autoload (nieuw gemaakte models toevoegen aan composer autoloader)