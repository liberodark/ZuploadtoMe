<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <title>Admin</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>

        <?php
    if (isset($_POST['password']) AND $_POST['password'] ==  "$2y$10$8CCaOj65XyLre3aRFZaPqOTxt9pDjFfAcsQrLfopMUKFdnEPASiAm") // Si le mot de passe est bon
    {
    // On affiche les codes
    ?>
    <!DOCTYPE HTML>
    <html lang="fr">
    <head>
    <!-- Force latest IE rendering engine or ChromeFrame if installed -->
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <meta charset="utf-8">
    <title>ZuploadtoMe</title>
    <meta name="keywords" content="ZuploadtoMe, upload, uploadtome, mega, uptobox, megaupload, partage de fichiers, envoi, zupload"/>
    <meta name="description" content="Partager vos fichiers avec vos amis simplement !!!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png" />
    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- Generic page styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- blueimp Gallery styles -->
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
    <link rel="stylesheet" href="css/jquery.fileupload.css">
    <link rel="stylesheet" href="css/jquery.fileupload-ui.css">
    <!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript><link rel="stylesheet" href="css/jquery.fileupload-noscript.css"></noscript>
    <noscript><link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>
    <style>
    /* Hide Angular JS elements before initializing */
    .ng-cloak {
        display: none;
    }
    </style>
    </head>
    <body>
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-fixed-top .navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://zuploadtome.com/">ZuploadtoMe</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="index.html">Home</a></li>
                  <li><a href="password.php">Admin</a></li>
                  <li><a href="https://www.facebook.com/pages/Zuploadtomel/551147664916010" target=_blank>Facebook</a></li>
                  <li><a href="https://twitter.com/ZuploadtoMe" target=_blank>Twitter</a></li>
                  <li><a href="mailto:liberodark@gmail.com">Nous Contacter</a></li>
                  <li><a href="dons.html">Faire un don</a></li>
                  <li><a href="http://zuploadtome.com/">Full Server</a></li>
                  <li><a href="http://zuploadtome.altervista.org/">Lite Server</a></li>
                  <li><a href="http://easyfile.altervista.org">Lite Server 1</a></li>
                  <li><a href="http://videoup.altervista.org/">Lite Server 2</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <br>
        <blockquote>
                    <p>Share your files with your friends simply !!!</p>
        </blockquote>
        <br>
        <!-- The file upload form used as target for the file upload widget -->
        <form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data" data-ng-app="demo" data-ng-controller="DemoFileUploadController" data-file-upload="options" data-ng-class="{'fileupload-processing': processing() || loadingFiles}">
            <!-- Redirect browsers with JavaScript disabled to the origin page -->
            <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
            <div class="row fileupload-buttonbar">
                <div class="col-lg-7">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class="btn btn-success fileinput-button" ng-class="{disabled: disabled}">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>Add files...</span>
                        <input type="file" name="files[]" multiple ng-disabled="disabled">
                    </span>
                    <button type="button" class="btn btn-primary start" data-ng-click="submit()">
                        <i class="glyphicon glyphicon-upload"></i>
                        <span>Start upload</span>
                    </button>
                    <button type="button" class="btn btn-warning cancel" data-ng-click="cancel()">
                        <i class="glyphicon glyphicon-ban-circle"></i>
                        <span>Cancel upload</span>
                    </button>
                    <!-- The global file processing state -->
                    <span class="fileupload-process"></span>
                </div>
                <!-- The global progress state -->
                <div class="col-lg-5 fade" data-ng-class="{in: active()}">
                    <!-- The global progress bar -->
                    <div class="progress progress-striped active" data-file-upload-progress="progress()"><div class="progress-bar progress-bar-success" data-ng-style="{width: num + '%'}"></div></div>
                    <!-- The extended global progress state -->
                    <div class="progress-extended">&nbsp;</div>
                </div>
            </div>
            <!-- The table listing the files available for upload/download -->
            <table class="table table-striped files ng-cloak">
                <tr data-ng-repeat="file in queue" data-ng-class="{'processing': file.$processing()}">
                    <td data-ng-switch data-on="!!file.thumbnailUrl">
                        <div class="preview" data-ng-switch-when="true">
                            <a data-ng-href="{{file.url}}" title="{{file.name}}" download="{{file.name}}" data-gallery><img data-ng-src="{{file.thumbnailUrl}}" alt=""></a>
                        </div>
                        <div class="preview" data-ng-switch-default data-file-upload-preview="file"></div>
                    </td>
                    <td>
                        <p class="name" data-ng-switch data-on="!!file.url">
                            <span data-ng-switch-when="true" data-ng-switch data-on="!!file.thumbnailUrl">
                                <a data-ng-switch-when="true" data-ng-href="{{file.url}}" title="{{file.name}}" download="{{file.name}}" data-gallery>{{file.name}}</a>
                                <a data-ng-switch-default data-ng-href="{{file.url}}" title="{{file.name}}" download="{{file.name}}">{{file.name}}</a>
                            </span>
                            <span data-ng-switch-default>{{file.name}}</span>
                        </p>
                        <strong data-ng-show="file.error" class="error text-danger">{{file.error}}</strong>
                    </td>
                    <td>
                        <p class="size">{{file.size | formatFileSize}}</p>
                        <div class="progress progress-striped active fade" data-ng-class="{pending: 'in'}[file.$state()]" data-file-upload-progress="file.$progress()"><div class="progress-bar progress-bar-success" data-ng-style="{width: num + '%'}"></div></div>
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary start" data-ng-click="file.$submit()" data-ng-hide="!file.$submit || options.autoUpload" data-ng-disabled="file.$state() == 'pending' || file.$state() == 'rejected'">
                            <i class="glyphicon glyphicon-upload"></i>
                            <span>Start</span>
                        </button>
                        <button type="button" class="btn btn-warning cancel" data-ng-click="file.$cancel()" data-ng-hide="!file.$cancel">
                            <i class="glyphicon glyphicon-ban-circle"></i>
                            <span>Cancel</span>
                        </button>
                        <button data-ng-controller="FileDestroyController" type="button" class="btn btn-danger destroy" data-ng-click="file.$destroy()" data-ng-hide="!file.$destroy">
                            <i class="glyphicon glyphicon-trash"></i>
                            <span>Delete</span>
                        </button>
                    </td>
                </tr>
            </table>
        </form>
        <br>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">News</h3>
            </div>
            <div class="panel-body">
                <ul>
                  <li>31.10.16 - HTTPS pour ZuploadtoMe.com. Nouvelle version en AngularJS</li>
                  <li>08.04.14 - Un nouveau serveur pour ZuploadtoMe.com.</li>
                  <li>08.04.14 - ZuploadtoMe.com ouvre.</li>
                  <li>08.04.14 - ZuploadtoMe passe en 2.9.1.</li>
                  <li>08.04.14 - ZuploadtoMe ce met à jour en 2.9.</li>
                  <li>15.09.13 - ZuploadtoMe passe en 2.8.</li>
                  <li>29.04.13 - Ajout de deux nouveaux Lite Serveurs.</li>
                  <li>22.04.13 - ZuploadtoMe rejoint désormais twitter pour vous informer de toutes les news en temps réel et Ajout d'un systeme d'administration.</li>
                  <li>21.04.13 - Ajout d'un sript pour connaitre le nombres d'utilisateurs en ligne.</li>
                  <li>26.03.13 - ZuploadtoMe passe maintenant en version officiel - Amélioration de la rapidité des serveurs - Maitenant le support est interne arret du externe.</li>
                  <li>25.03.13 - Ouverture de la Beta de ZuploadtoMe - Full Server "pour les gros fichiers" - Lite Server "pour les petits fichiers".</li>
                  <li>&copy; Copyright 2013 - 2014 par <a href="index.html">ZuploadtoMe</a> - Tous droits réservés - <a href="cgu.html">CGU</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- The blueimp Gallery widget -->
    <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
        <div class="slides"></div>
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
    <script src="js/vendor/jquery.ui.widget.js"></script>
    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
    <!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
    <!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- blueimp Gallery script -->
    <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src="js/jquery.iframe-transport.js"></script>
    <!-- The basic File Upload plugin -->
    <script src="js/jquery.fileupload.js"></script>
    <!-- The File Upload processing plugin -->
    <script src="js/jquery.fileupload-process.js"></script>
    <!-- The File Upload image preview & resize plugin -->
    <script src="js/jquery.fileupload-image.js"></script>
    <!-- The File Upload audio preview plugin -->
    <script src="js/jquery.fileupload-audio.js"></script>
    <!-- The File Upload video preview plugin -->
    <script src="js/jquery.fileupload-video.js"></script>
    <!-- The File Upload validation plugin -->
    <script src="js/jquery.fileupload-validate.js"></script>
    <!-- The File Upload Angular JS module -->
    <script src="js/jquery.fileupload-angular.js"></script>
    <!-- The main application script -->
    <script src="js/app.js"></script>
    </body>
    </html>

        <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>


    </body>
</html>
