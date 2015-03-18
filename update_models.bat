set ROOTDIR = %cd%
cd conf
propel model:build
chdir /D %ROOTDIR%
composer dump-autoload