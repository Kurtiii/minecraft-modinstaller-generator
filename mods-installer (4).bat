@echo off

REM ask user if he wants to update mods
echo Installer created with the free creator by Kurt Krueger (kurtiii.de/mods)
echo What do you want to do?
echo 1) Install all mods and forge
echo 2) Update mods
echo 3) Cancel
set /p answer=Please enter a number:
if %answer%==1 goto install
if %answer%==2 goto install
if %answer%==3 goto exit
exit



REM install
:install
cls
REM check if bitsadmin is installed
where bitsadmin >nul 2>nul
if %errorlevel%==1 (
    start "" https://kurtiii.de/mods/error?type=no_bitsadmin
    exit
)

REM check if powershell is installed
where powershell >nul 2>nul
if %errorlevel%==1 (
    start "" https://kurtiii.de/mods/error?type=no_powershell
    exit
)

REM check if java is installed
where java >nul 2>nul
if %errorlevel%==1 (
    start "" https://kurtiii.de/mods/error?type=no_java
    exit
)

REM check if minecraft is running
tasklist /fi "imagename eq javaw.exe" | find /i "javaw.exe" >nul
if %errorlevel%==0 (
    start "" https://kurtiii.de/mods/error?type=minecraft_running
    exit
)

REM check if minecraft is installed
if not exist "%APPDATA%/.minecraft" (
    start "" https://kurtiii.de/mods/error?type=no_minecraft
    exit
)

REM download forge installer
echo Forge is downloading...
powershell -command "Start-BitsTransfer -Source https://kurtiii.de -Destination forge.jar"

REM install forge
echo Forge is installing...
powershell -command "java -jar forge.jar"
cls

REM remove forge installer
echo Artifacts are being removed...
powershell -command "Remove-Item forge.jar"
powershell -command "Remove-Item forge.jar.log"
cls

REM download mods from server
echo Mods are being downloaded...
powershell -command "Start-BitsTransfer -Source dfssdffd -Destination mods.zip"
cls

REM remove old mods
echo Old mods are being removed...
powershell -command "Remove-Item %APPDATA%/.minecraft/mods/* -Recurse -Force"
cls

REM extract new mods
echo New mods are being installed...
powershell -command "Expand-Archive mods.zip %APPDATA%/.minecraft/mods/ -Force"
cls

REM remove downloaded zip
echo Artifacts are being removed...
powershell -command "Remove-Item mods.zip"

REM check which number the user has entered and show a different message
if %answer%==1 goto m-install
if %answer%==2 goto m-update
exit

REM install success message
:m-install
cls
start "" https://kurtiii.de/mods/success?type=install
exit
cls

REM update success message
:m-update
cls
start "" https://kurtiii.de/mods/success?type=update
exit
cls
