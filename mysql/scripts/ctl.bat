@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop


"V:\Program Files\xampp\mysql\bin\mysqld" --defaults-file="V:\Program Files\xampp\mysql\bin\my.ini" --standalone
if errorlevel 1 goto error
goto finish

:stop
cmd.exe /C start "" /MIN call "V:\Program Files\xampp\killprocess.bat" "mysqld.exe"

if not exist "V:\Program Files\xampp\mysql\data\%computername%.pid" goto finish
echo Delete %computername%.pid ...
del "V:\Program Files\xampp\mysql\data\%computername%.pid"
goto finish


:error
echo MySQL could not be started

:finish
exit
