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

        <?php if ($_GET['type'] == "no_bitsadmin") : ?>
            <div class="card m-auto" style="max-width: 900px">
                <div class="card-body pt-5 px-5">
                    <h1 class="h3">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 30px; height: 30px;">
                            <path d="M3 3h16v2H5v14h14v2H3V3zm18 0h-2v18h2V3zM11 15h2v2h-2v-2zm2-8h-2v6h2V7z" fill="currentColor" />
                        </svg>
                        Oh no!
                    </h1>
                    <p>
                        It seems like something went wrong.
                    </p>

                    <hr class="my-4">

                    <p>
                        It seems like your windows installation is missing the <b>bitsadmin</b> command.
                        Please try updating your windows installation.
                    </p>

                    <p>
                        Do you want to create your own installer?
                        <a href="./" class="text-reset">Click here</a>
                    </p>

                    <hr class="my-4">

                    <div class="form-text">
                        <a href="#" class="text-reset" data-bs-toggle="modal" data-bs-target="#sourcesModal">Sources and
                            authors</a>
                    </div>
                </div>
            </div>
        <?php elseif ($_GET['type'] == "no_powershell") : ?>
            <div class="card m-auto" style="max-width: 900px">
                <div class="card-body pt-5 px-5">
                    <h1 class="h3">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 30px; height: 30px;">
                            <path d="M3 3h16v2H5v14h14v2H3V3zm18 0h-2v18h2V3zM11 15h2v2h-2v-2zm2-8h-2v6h2V7z" fill="currentColor" />
                        </svg>
                        Oh no!
                    </h1>
                    <p>
                        It seems like something went wrong.
                    </p>

                    <hr class="my-4">

                    <p>
                        You don't seem to have powershell installed. Please install it and try again.
                        You can download it <a href="https://learn.microsoft.com/en-us/powershell/scripting/install/installing-powershell-on-windows?view=powershell-7.3" target="_blank" class="text-reset">here</a>.
                    </p>

                    <p>
                        Do you want to create your own installer?
                        <a href="./" class="text-reset">Click here</a>
                    </p>

                    <hr class="my-4">

                    <div class="form-text">
                        <a href="#" class="text-reset" data-bs-toggle="modal" data-bs-target="#sourcesModal">Sources and
                            authors</a>
                    </div>
                </div>
            </div>

        <?php elseif ($_GET['type'] == "no_java") : ?>
            <div class="card m-auto" style="max-width: 900px">
                <div class="card-body pt-5 px-5">
                    <h1 class="h3">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 30px; height: 30px;">
                            <path d="M3 3h16v2H5v14h14v2H3V3zm18 0h-2v18h2V3zM11 15h2v2h-2v-2zm2-8h-2v6h2V7z" fill="currentColor" />
                        </svg>
                        Oh no!
                    </h1>
                    <p>
                        It seems like something went wrong.
                    </p>

                    <hr class="my-4">

                    <p>
                        It seems like you don't have java installed. Please install it and try again.
                        You can download it <a href="https://www.java.com/download/" target="_blank" class="text-reset">here</a>.
                    </p>

                    <p>
                        Do you want to create your own installer?
                        <a href="./" class="text-reset">Click here</a>
                    </p>

                    <hr class="my-4">

                    <div class="form-text">
                        <a href="#" class="text-reset" data-bs-toggle="modal" data-bs-target="#sourcesModal">Sources and
                            authors</a>
                    </div>
                </div>
            </div>

        <?php elseif ($_GET['type'] == "minecraft_running") : ?>
            <div class="card m-auto" style="max-width: 900px">
                <div class="card-body pt-5 px-5">
                    <h1 class="h3">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 30px; height: 30px;">
                            <path d="M3 3h16v2H5v14h14v2H3V3zm18 0h-2v18h2V3zM11 15h2v2h-2v-2zm2-8h-2v6h2V7z" fill="currentColor" />
                        </svg>
                        Oh no!
                    </h1>
                    <p>
                        It seems like something went wrong.
                    </p>

                    <hr class="my-4">

                    <p>
                        It seems like you have minecraft running.
                        Please close it and try again.
                        If the problem persists, restart your computer.
                    </p>

                    <p>
                        Do you want to create your own installer?
                        <a href="./" class="text-reset">Click here</a>
                    </p>

                    <hr class="my-4">

                    <div class="form-text">
                        <a href="#" class="text-reset" data-bs-toggle="modal" data-bs-target="#sourcesModal">Sources and
                            authors</a>
                    </div>
                </div>
            </div>

        <?php elseif ($_GET['type'] == "no_minecraft") : ?>
            <div class="card m-auto" style="max-width: 900px">
                <div class="card-body pt-5 px-5">
                    <h1 class="h3">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 30px; height: 30px;">
                            <path d="M3 3h16v2H5v14h14v2H3V3zm18 0h-2v18h2V3zM11 15h2v2h-2v-2zm2-8h-2v6h2V7z" fill="currentColor" />
                        </svg>
                        Oh no!
                    </h1>
                    <p>
                        It seems like something went wrong.
                    </p>

                    <hr class="my-4">

                    <p>
                        It seems like you don't have minecraft installed. Please install it and try again.
                        You can download it <a href="https://www.minecraft.net/en-us/download" target="_blank" class="text-reset">here</a>.
                        If your minecraft is not in the default directory, please move it to the default directory.
                    </p>

                    <p>
                        Do you want to create your own installer?
                        <a href="./" class="text-reset">Click here</a>
                    </p>

                    <hr class="my-4">

                    <div class="form-text">
                        <a href="#" class="text-reset" data-bs-toggle="modal" data-bs-target="#sourcesModal">Sources and
                            authors</a>
                    </div>
                </div>
            </div>

        <?php else : ?>
            <b>unknown type</b>
        <?php endif; ?>

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
                    <a href="https://getbootstrap.com/" target="_blank" class="text-reset">Bootstrap</a> by <a href="https://twitter.com/mdo" target="_blank" class="text-reset">Mark Otto</a> and <a href="https://twitter.com/fat" target="_blank" class="text-reset">Jacob Thornton</a>
                    <br>
                    Font "Minecraft" by <a href="https://www.dafont.com/de/craftron-gaming.d6128" class="text-reset">Craftron Gaming</a>
                    <br>
                    Background image by <a href="https://pixabay.com/de/illustrations/minecraft-shader-minecraft-wallpaper-1970876/" class="text-reset">@minecraftfaq</a>
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

    <script src="assets/lib/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>