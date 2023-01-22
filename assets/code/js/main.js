$('#btnForge1-19-3').click(function () {
    $('#inputForgeUrl').val('https://maven.minecraftforge.net/net/minecraftforge/forge/1.19.3-39.0.8/forge-1.19.3-39.0.8-installer.jar');
});
$('#btnForge1-18-2').click(function () {
    $('#inputForgeUrl').val('https://maven.minecraftforge.net/net/minecraftforge/forge/1.18.2-39.0.8/forge-1.18.2-39.0.8-installer.jar');
});
$('#btnForge1-16-5').click(function () {
    $('#inputForgeUrl').val('https://maven.minecraftforge.net/net/minecraftforge/forge/1.16.5-36.2.8/forge-1.16.5-36.2.8-installer.jar');
});
$('#btnForge1-12-2').click(function () {
    $('#inputForgeUrl').val('https://maven.minecraftforge.net/net/minecraftforge/forge/1.12.2-14.23.5.2854/forge-1.12.2-14.23.5.2854-installer.jar');
});
$('#btnForge1-7-10').click(function () {
    $('#inputForgeUrl').val('https://maven.minecraftforge.net/net/minecraftforge/forge/1.7.10-10.13.4.1614-1.7.10/forge-1.7.10-10.13.4.1614-1.7.10-installer.jar');
});

var bat = '';
var forgeUrl = '';
var modsUrl = '';
var errorHandling = 0;

// on click on the generate button
$('#btnGenerate').click(function () {
    // get the forge url from the input field
    forgeUrl = $('#inputForgeUrl').val();

    // get the mods url from the input field
    modsUrl = $('#inputModsUrl').val();

    // check if the forge url or the mods url is empty
    if (forgeUrl == '' || modsUrl == '') {
        // show an error message
        alert('Please enter a forge url and a mods url!');
        return;
    }

    // get the radio values from inputs with the ids radioErrorOnline and radioErrorLocal using the jquery
    var errorOnline = $('#radioErrorOnline').is(':checked');
    var errorLocal = $('#radioErrorLocal').is(':checked');

    // check if the errorOnline or the errorLocal is not checked
    if (!errorOnline && !errorLocal) {
        // show an error message
        alert('Please select an error type!');
        return;
    }

    // if the errorOnline is checked
    if (errorOnline) {
        // generate the bat file with online error handling
        errorHandling = 1;
        bat = `@echo off

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
powershell -command "Start-BitsTransfer -Source ${forgeUrl} -Destination forge.jar"

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
powershell -command "Start-BitsTransfer -Source ${modsUrl} -Destination mods.zip"
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
`;
    } else {
        // generate the bat file with local error handling
        errorHandling = 0;
        bat = `@echo off


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
    echo bitsadmin is not installed. Please install it and try again.
    pause
    exit
)

REM check if powershell is installed
where powershell >nul 2>nul
if %errorlevel%==1 (
    echo powershell is not installed. Please install it and try again.
    pause
    exit
)

REM check if java is installed
where java >nul 2>nul
if %errorlevel%==1 (
    echo java is not installed. Please install it and try again.
    pause
    exit
)

REM check if minecraft is running
tasklist /fi "imagename eq javaw.exe" | find /i "javaw.exe" >nul
if %errorlevel%==0 (
    echo minecraft is running. Please close it and try again.
    pause
    exit
)

REM check if minecraft is installed
if not exist "%APPDATA%/.minecraft" (
    echo minecraft is not installed. Please install it and try again.
    pause
    exit
)

REM download forge installer
echo Forge is downloading...
powershell -command "Start-BitsTransfer -Source https://kurtiii.de/mods/forge.jar -Destination forge.jar"

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
powershell -command "Start-BitsTransfer -Source https://kurtiii.de/mods/mods_newest.zip -Destination mods.zip"
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
echo Installation was successful.
echo You can now start minecraft.
pause
exit
cls

REM update success message
:m-update
cls
echo Update was successful.
echo You can now start minecraft.
pause
exit
cls
`;
    }

    // insert the bat file into the div using jquery
    $("#containerCode").text(bat);

    

    // hide card with jquery fade out
    $("#cardGenerator").fadeOut(500, function() {
        // show success card with jquery fade in
        $("#cardResult").fadeIn(500);
    });
});

// on click on the download button
$("#btnDownloadInstaller").click(function() {
    // download the bat file
    var element = document.createElement('a');
    element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(bat));
    element.setAttribute('download', 'mods-installer.bat');

    element.style.display = 'none';
    document.body.appendChild(element);

    element.click();

    document.body.removeChild(element);
});

// on click on the share button
$("#btnShareInstaller").click(function() {
    // check if the share api is supported
    if (navigator.share) {
        // share the bat file
        navigator.share({
            title: 'Mods Installer',
            text: 'Mods Installer',
            url: 'https://kurtiii.de/mods/download?mods=' + encodeURIComponent(modsUrl) + '&forge=' + encodeURIComponent(forgeUrl) + '&eh=' + encodeURIComponent(errorHandling),
        })
        .then(() => console.log('Successful share'))
        .catch((error) => console.log('Error sharing', error));
    } else {
        // copy url to clipboard
        var dummy = document.createElement("textarea");
        document.body.appendChild(dummy);
        dummy.value = 'https://kurtiii.de/mods/download?mods=' + encodeURIComponent(modsUrl) + '&forge=' + encodeURIComponent(forgeUrl) + '&eh=' + encodeURIComponent(errorHandling);
        dummy.select();
        document.execCommand("copy");
        document.body.removeChild(dummy);

        // show success message
        alert("We have copied a download link to your clipboard. You can now share it with your friends.");
    }
});