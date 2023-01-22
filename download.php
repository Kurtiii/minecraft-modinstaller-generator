<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minecraft Mod-Installer Generator by Kurtiii</title>
    <link rel="stylesheet" href="assets/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/code/css/main.css">
    <script src="assets/lib/jquery/jquery.min.js"></script>
    <script src="assets/code/js/download.js" defer></script>
</head>

<body>
    <div class="d-flex align-items-center justify-content-center" style="height: 100vh">
        <div class="card m-auto" style="max-width: 900px" id="cardGenerator">
            <div class="card-body pt-5 px-5">
                <h1 class="h3">
                    Download Minecraft Mod-Installer
                </h1>
                <p>
                    Someone generated a Minecraft mod-installer for you. You can download it here.
                </p>

                <hr class="my-4">

                <div class="alert alert-danger" role="alert" id="alertNotFromForge" style="display: none;">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="pe-3">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 40px; height: 40px;">
                                <path
                                    d="M13 1h-2v2H9v2H7v2H5v2H3v2H1v2h2v2h2v2h2v2h2v2h2v2h2v-2h2v-2h2v-2h2v-2h2v-2h2v-2h-2V9h-2V7h-2V5h-2V3h-2V1zm0 2v2h2v2h2v2h2v2h2v2h-2v2h-2v2h-2v2h-2v2h-2v-2H9v-2H7v-2H5v-2H3v-2h2V9h2V7h2V5h2V3h2zm0 4h-2v6h2V7zm0 8h-2v2h2v-2z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div style="font-size: 70%;">
                            <b>Warning!</b>
                            The Forge installer in this mod-installer is not from the official Forge website. It will be downloaded from a third
                            party website. Please make sure that you trust the website you're downloading the installer from.
                            URL: <span class="forgeUrl"></span>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="#" class="btn btn-light rounded-0 w-100" data-bs-toggle="modal" data-bs-target="#modalDownload">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
                            <path
                                d="M10 4h6v2h-6V4zM8 8V6h2v2H8zm-4 2V8h4v2H4zm-2 2v-2h2v2H2zm0 6H0v-6h2v6zm0 0h5v2H2v-2zM18 8h-2V6h2v2zm4 4h-4V8h2v2h2v2zm0 6v-6h2v6h-2zm0 0v2h-5v-2h5zm-11 2h2v-2h2v-2h2v-2h-4V9h-2v5H7v2h2v2h2v2z"
                                fill="currentColor" />
                        </svg><br>
                        Download
                    </a>
                    <a href="#" class="btn btn-outline-light rounded-0 w-100" id="btnShareInstaller">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
                            <path d="M4 6h7v2H4v8h7v2H2V6h2zm16 0h-7v2h7v8h-7v2h9V6h-2zm-3 5H7v2h10v-2z" fill="currentColor" />
                        </svg><br>
                        Share installer
                    </a>
                    <a href="#" class="btn btn-outline-light rounded-0 w-100" data-bs-toggle="modal" data-bs-target="#modalCode">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
                            <path
                                d="M8 5h2v2H8V5zM6 7h2v2H6V7zM4 9h2v2H4V9zm-2 2h2v2H2v-2zm2 2h2v2H4v-2zm2 2h2v2H6v-2zm2 2h2v2H8v-2zm8-12h-2v2h2V5zm2 2h-2v2h2V7zm2 2h-2v2h2V9zm2 2h-2v2h2v-2zm-2 2h-2v2h2v-2zm-2 2h-2v2h2v-2zm-2 2h-2v2h2v-2z"
                                fill="currentColor" />
                        </svg><br>
                        Show code
                    </a>
                    <a href="./" class="btn btn-outline-light rounded-0 w-100">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 20px; height: 20px;">
                            <path
                                d="M16 2h-2v2h2v2H4v2H2v5h2V8h12v2h-2v2h2v-2h2V8h2V6h-2V4h-2V2zM6 20h2v2h2v-2H8v-2h12v-2h2v-5h-2v5H8v-2h2v-2H8v2H6v2H4v2h2v2z"
                                fill="currentColor" />
                        </svg><br>
                        Create own
                    </a>
                </div>

                <hr class="my-4">

                <div class="form-text">
                    <a href="#" class="text-reset" data-bs-toggle="modal" data-bs-target="#sourcesModal">Sources and
                        authors</a>
                </div>

            </div>
        </div>

    </div>

    <!-- Modal -> sources -->
    <div class="modal fade" id="sourcesModal" tabindex="-1" aria-labelledby="sourcesModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="sourcesModalLabel">Sources and authors</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Coded by <a href="https://kurtiii.de" target="_blank" class="text-reset">Kurt Krüger</a>
                    <br>
                    <br>
                    <a href="https://getbootstrap.com/" target="_blank" class="text-reset">Bootstrap</a> by <a
                        href="https://twitter.com/mdo" target="_blank" class="text-reset">Mark Otto</a> and <a
                        href="https://twitter.com/fat" target="_blank" class="text-reset">Jacob Thornton</a>
                    <br>
                    Font "Minecraft" by <a href="https://www.dafont.com/de/craftron-gaming.d6128"
                        class="text-reset">Craftron Gaming</a>
                    <br>
                    Background image by <a
                        href="https://pixabay.com/de/illustrations/minecraft-shader-minecraft-wallpaper-1970876/"
                        class="text-reset">@minecraftfaq</a>
                    <br>
                    Icons by <a href="https://pixelarticons.com/" class="text-reset">Gerrit Halfmann</a>
                    <hr>
                    <p class="form-text text-muted">
                        <strong>Important:</strong> This tool is not affiliated with Mojang or Minecraft. It is just a
                        tool to make mod
                        installation easier.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -> Code -->
    <div class="modal fade" id="modalCode" tabindex="-1" aria-labelledby="modalCodeLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalCodeLabel">Generated batch code</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="font-monospace">
                        <pre id="containerCode">

                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -> Download -->
    <div class="modal fade" id="modalDownload" tabindex="-1" aria-labelledby="modalDownloadLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalCodeLabel">Download installer</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" role="alert">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="pe-3">
                                <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 40px; height: 40px;">
                                    <path
                                        d="M13 1h-2v2H9v2H7v2H5v2H3v2H1v2h2v2h2v2h2v2h2v2h2v2h2v-2h2v-2h2v-2h2v-2h2v-2h2v-2h-2V9h-2V7h-2V5h-2V3h-2V1zm0 2v2h2v2h2v2h2v2h2v2h-2v2h-2v2h-2v2h-2v2h-2v-2H9v-2H7v-2H5v-2H3v-2h2V9h2V7h2V5h2V3h2zm0 4h-2v6h2V7zm0 8h-2v2h2v-2z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                            <div style="font-size: 70%;">
                                <b>Warning!</b>
                                Please make sure that you trust the person who gave you this link before downloading the installer.
                                More informations are below.
                            </div>
                        </div>
                    </div>
                    <p>
                        Only download the installer if you trust the source.
                        This tool is not affiliated with Mojang or Minecraft. It is just a tool to make mod installation easier.
                        We are not responsible for any damage caused by the installer or the mods.
                        Please check the <a href="#" class="text-reset" data-bs-toggle="modal" data-bs-target="#modalCode">source code</a> before downloading.
                    </p>
                    <p>
                        If you are sure that the source is safe, you can download the installer by clicking the button below.
                        After downloading, you can run the installer by double-clicking it.
                        Your antivirus, browser or operating system may block the download or the execution of the installer.
                        If this happens, you can add an exception for the installer or click on "more information" and then "run anyway".
                    </p>
                    <div class="clearfix mt-5">
                        <a href="https://safebrowsing.google.com/safebrowsing/report_badware/?hl=en" class="btn btn-outline-danger rounded-0 float-start">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 18px; height: 18px;">
                                <path d="M3 2h10v2h8v14H11v-2H5v6H3V2zm2 12h8v2h6V6h-8V4H5v10z" fill="currentColor" />
                            </svg>
                            Report malware
                        </a>
                        <a href="#" class="btn btn-light rounded-0 px-5 float-end" id="btnDownloadInstaller">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 18px; height: 18px;">
                                <path
                                    d="M10 4h6v2h-6V4zM8 8V6h2v2H8zm-4 2V8h4v2H4zm-2 2v-2h2v2H2zm0 6H0v-6h2v6zm0 0h5v2H2v-2zM18 8h-2V6h2v2zm4 4h-4V8h2v2h2v2zm0 6v-6h2v6h-2zm0 0v2h-5v-2h5zm-11 2h2v-2h2v-2h2v-2h-4V9h-2v5H7v2h2v2h2v2z"
                                    fill="currentColor" />
                            </svg>
                            Download
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/lib/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>