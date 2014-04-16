@echo off
cls
:start

echo Start Crwler
cd \
echo changed directory
e:
echo e
cd E:\Program Files\R\R-3.0.2\bin
echo exec script
Rscript crawler.R


@start "" /b "C:\Program Files\Internet Explorer\iexplore.exe" localhost/regex.php

echo waiting to kill iexplore.exe
timeout /t 2
taskkill /im "iexplore.exe" 
echo Time out and waiting to restart the crawl
timeout /t 100


Crawl.bat