<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD API > Docs</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="page-wrapper docs">
        <a href="/">
            <div class="logo">
                <h1><img src="{{ asset('images/logo.png') }}" alt="logo"/><p class="red">Laravel</p> CRUD API</h1>
            </div>
        </a>

        <div class="docs-content">
            <div class="intro">
                <h2>Introduction</h2>

                <p>
                    This application is a simple REST API backend for CRUD usage. It's capable to do Create, Read, Update and Delete data from the app's database through API endpoints using HTTP request methods such as GET, POST, PUT/PATCH, DELETE. Here's the list of the available endpoints:
                </p>
                <img class="ins" src="{{ asset('images/endpoints.jpg') }}" alt="endpoints"/>
            </div>
        </div>

        <div class="docs-content">
            <div class="installation">
                <h2>Installation</h2>

                <p>
                    To install this application you have to install composer in your machine. Then install laravel package globally using composer. After got composer and laravel installed in your machine you can follow the steps below to get this application installed properly.
                </p>

                <ul>
                    <li>
                        <strong>Using Git Clone</strong>
                        <p>
                            If you have git installed in your machine you can follow simply open the terminal (cmd for windows user) then execute the command below.
                            <code>
                                git clone https://github.com/edrhyt/laravel-crud-api.git
                            </code>
                            The command above will create a folder which is "laravel-crud-api" inside your active directory. After successfully clone the project then move to the "laravel-crud-api" folder using terminal with this command.
                            <code>
                                cd ./laravel-crud-api
                            </code>
                            After that you can follow the rest of the steps.
                        </p>
                    </li>
                    <li>
                        <strong>Using Git Download Zip</strong>
                        <p>
                            If you prefer to download the zip from the <a href="https://github.com/edrhyt/laravel-crud-api/" target="_blank">https://github.com/edrhyt/laravel-crud-api</a> you can follow the steps below.
                        </p>
                        <ol>
                            <li>
                                Download the zip
                                <p>
                                    Go to the github repository by following the link above. Then download the zip as shown below.
                                </p>
                                <img class="ins" src="{{ asset('images/zip_down.png') }}" alt="zip_download"/>
                            </li>
                            <li>
                                After successfully downloaded the zip, you can extract to wherever directory you wish using archive application you prefer (e.g WinRAR).
                            </li>
                            <li>
                                Open terminal inside the downloaded folder which is "laravel-crud-api".
                            </li>
                        </ol>
                    </li>
                    <li>
                        <strong>Import the MySQL database</strong>

                        <p>
                            I will recommend to use phpmyadmin to get rid of this step, but you can choose the way you want to do this.
                        </p>
                        <p>
                            Since I'm recommend to use phpmyadmin then open the phpmyadmin using browser by typing this URL <a href="http://localhost/phpmyadmin/">http://localhost/phpmyadmin/</a> (in some cases might doesn't work, you can google the error). Then head to the import tab and hit the "Choose File" button.
                        </p>
                        <img class="ins" src="{{ asset('images/import.png') }}" alt="import" style="width: 85%;"/>
                        <p>
                            When file selector opens, find the laravel_eloquent_relationship.sql file inside database folder on the project directory then hit "Open". You should notice that the file is selected correctly the scroll down to bottom of the page and hit "Go" button.
                        </p>
                        <img class="ins" src="{{ asset('images/go_import.png') }}" alt="go_import" style="width: 85%;"/>
                    </li>
                    <li>
                        <strong>Install dependencies</strong>
                        <p>
                            On the terminal (active at project directory) use the following command to install the dependencies.
                            <code>
                                composer update
                            </code>
                            After a while that should install all the required dependencies for the project to run properly.
                        </p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="docs-content">
            <div class="usage">
                <h2>Usage</h2>

                <p>
                    To use the REST API service you can use application like Postman or Insomnia. Example are provided using Insomnia application in the <a class="example-link" href="/example">Example</a> page. Or you can simply test using the browser by visiting the endpoints provided above. For example you can visit http://localhost:8000/api/v1/brands/ to make a GET http request.
                </p>
            </div>
        </div>
    </div>

    <footer>
        <div class="copyright">
            <p>Developed by <a href="https://www.github.com/edrhyt" target="_blank">Edi Ruhiat</a></p>
        </div>
    </footer>
</body>
</html>