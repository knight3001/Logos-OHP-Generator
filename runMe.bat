@echo off
php songListUpdater.php
start chrome http://localhost:8080/
php -S localhost:8080
