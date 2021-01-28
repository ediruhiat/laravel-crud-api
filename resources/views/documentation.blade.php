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
                        <strong>Install dependencies</strong>
                        <p>
                            Before dependecies installation you have to rename the ".env.example" file to ".env". You can also do that in the terminal by typing this command (for windows user):
                            <code>
                                ren .env.example .env
                            </code>
                            After successfully renaming the ".env" file you should good to go to the installation by typing the command below.
                            <code>
                                composer update
                            </code>
                            After a while that should install all the required dependencies for the project to run properly.
                        </p>
                    </li>
                    <li>
                        <strong>Configuring the Project</strong>
                        <p>
                            To configure the project correctly you can use these commands below and type it in the terminal.
                            Make sure the MySQL server are running at port: 3306.
                            <code>
                                php artisan key:generate<br/>
                                php artisan db:create laravel_eloquent_relationship<br/>
                                php artisan migrate --force<br/>
                                php artisan serve
                            </code>
                            Open browser then head to http://localhost:8000/ to see if it's running.
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
                <hr>
                <h3>PATHS</h3>
                <ul>
                    <!-- GET -->
                    <li>
                        <strong>GET</strong>
                        <code>
                            http://localhost:8000/api/v1/products <br/>
                            http://localhost:8000/api/v1/brands <br/>
                            http://localhost:8000/api/v1/specs <br/>
                        </code>
                        <p>Return list of all products availabe.</p>
                        <strong>Query List</strong>
                        <table>
                            <tr>
                                <td class="code">id</td>
                                <td>
                                    <p class="semibold-italic">integer</p>
                                    <p>Default value</p>
                                    <code>
                                        NULL
                                    </code>
                                    <p>
                                        The id of product/brand/specs to show (e.g 1).
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </li>

                    <hr>
                    <!-- POST -->
                    <li>
                        <!-- Products -->
                            <strong>POST</strong>
                            <code>
                                http://localhost:8000/api/v1/products <br/>
                            </code>
                            <p>Create a product using multipart form.</p>
                            <strong>Query List</strong>
                            <table>
                                <tr>
                                    <td class="code">slug (required)</td>
                                    <td>
                                        <p class="semibold-italic">string</p>
                                        <p>Default value</p>
                                        <code>
                                            NULL
                                        </code>
                                        <p>
                                            The slug of the product to assign (e.g "nokia-x3").
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">brand_id (required)</td>
                                    <td>
                                        <p class="semibold-italic">small integer</p>
                                        <p>Default value</p>
                                        <code>
                                            0
                                        </code>
                                        <p>
                                            The brand id of the product to assign (e.g 1). See brand list to get the brand id of each brand available.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">name (required)</td>
                                    <td>
                                        <p class="semibold-italic">string</p>
                                        <p>Default value</p>
                                        <code>
                                            NULL
                                        </code>
                                        <p>
                                            The name of the product to assign (e.g "Xperia X Max Pro").
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">model</td>
                                    <td>
                                        <p class="semibold-italic">string</p>
                                        <p>Default value</p>
                                        <code>
                                            NULL
                                        </code>
                                        <p>
                                            The model of the product to assign (e.g "F8331").
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">specs_id</td>
                                    <td>
                                        <p class="semibold-italic">integer</p>
                                        <p>Default value</p>
                                        <code>
                                            0
                                        </code>
                                        <p>
                                            The specs id for the product to assign (e.g 2). See the specs list to get all the specs available.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">price (required)</td>
                                    <td>
                                        <p class="semibold-italic">integer</p>
                                        <p>Default value</p>
                                        <code>
                                            0
                                        </code>
                                        <p>
                                            The price of the product to assign in IDR (e.g 2400000). 
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        <!-- End of Products -->

                        <!-- Brands -->
                            <strong>POST</strong>
                            <code>
                                http://localhost:8000/api/v1/brands<br/>
                            </code>
                            <p>Create a brand using multipart form.</p>
                            <strong>Query List</strong>
                            <table>
                                <tr>
                                    <td class="code">slug (required)</td>
                                    <td>
                                        <p class="semibold-italic">string</p>
                                        <p>Default value</p>
                                        <code>
                                            NULL
                                        </code>
                                        <p>
                                            The slug of the brand to assign (e.g "realme-corp-singapoe").
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">brand_name (required)</td>
                                    <td>
                                        <p class="semibold-italic">string</p>
                                        <p>Default value</p>
                                        <code>
                                            NULL
                                        </code>
                                        <p>
                                            The brand name of the product to assign (e.g "Realme").
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">country (required)</td>
                                    <td>
                                        <p class="semibold-italic">string</p>
                                        <p>Default value</p>
                                        <code>
                                            NULL
                                        </code>
                                        <p>
                                            The country of the brand to assign (e.g "Singapore").
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        <!-- End of Brands -->

                        <!-- Specs -->
                            <strong>POST</strong>
                            <code>
                                http://localhost:8000/api/v1/brands<br/>
                            </code>
                            <p>Create a specs using multipart form.</p>
                            <strong>Query List</strong>
                            <table>
                                <tr>
                                    <td class="code">slug (required)</td>
                                    <td>
                                        <p class="semibold-italic">string</p>
                                        <p>Default value</p>
                                        <code>
                                            NULL
                                        </code>
                                        <p>
                                            The slug of the specs to assign (e.g "xperia-xz-specs").
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">launch</td>
                                    <td>
                                        <p class="semibold-italic">date</p>
                                        <p>Default value</p>
                                        <code>
                                            2000-01-01 00:00:00
                                        </code>
                                        <p>
                                            The date of the specs realeased to assign (e.g "2010-09-11 00:03:03").
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">display (required)</td>
                                    <td>
                                        <p class="semibold-italic">string</p>
                                        <p>Default value</p>
                                        <code>
                                            NULL
                                        </code>
                                        <p>
                                            The display of the specs to assign (e.g "LCD IPS").
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">platform (required)</td>
                                    <td>
                                        <p class="semibold-italic">string</p>
                                        <p>Default value</p>
                                        <code>
                                            NULL
                                        </code>
                                        <p>
                                            The platform of the specs to assign (e.g "Android 9.0").
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">cpu (required)</td>
                                    <td>
                                        <p class="semibold-italic">string</p>
                                        <p>Default value</p>
                                        <code>
                                            NULL
                                        </code>
                                        <p>
                                            The cpu of the specs to assign (e.g "Qualcomm SDM665 Snapdragon 665 (11 nm)").
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">rom (required)</td>
                                    <td>
                                        <p class="semibold-italic">integer</p>
                                        <p>Default value</p>
                                        <code>
                                            0
                                        </code>
                                        <p>
                                            The rom of the specs to assign in Giga Bytes (e.g 32).
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">ram (required)</td>
                                    <td>
                                        <p class="semibold-italic">integer</p>
                                        <p>Default value</p>
                                        <code>
                                            0
                                        </code>
                                        <p>
                                            The ram of the specs to assign in Giga Bytes (e.g 4).
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">camera (required)</td>
                                    <td>
                                        <p class="semibold-italic">integer</p>
                                        <p>Default value</p>
                                        <code>
                                            0
                                        </code>
                                        <p>
                                            The resolution of camera of the specs to assign in Mega Pixels (e.g 13).
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">battery (required)</td>
                                    <td>
                                        <p class="semibold-italic">integer</p>
                                        <p>Default value</p>
                                        <code>
                                            0
                                        </code>
                                        <p>
                                            The capacity of battery of the specs to assign in mAH (e.g 2900).
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        <!-- End of Specs -->
                    </li>

                    <hr>
                    <!-- PUT/PATCH -->
                    <li>
                        <!-- Products -->
                            <strong>PUT/PATCH</strong>
                            <code>
                                http://localhost:8000/api/v1/products <br/>
                            </code>
                            <p>Update a product using multipart form.</p>
                            <strong>Query List</strong>
                            <table>
                                <tr>
                                    <td class="code">slug</td>
                                    <td>
                                        <p class="semibold-italic">string</p>
                                        <p>Default value</p>
                                        <code>
                                            NULL
                                        </code>
                                        <p>
                                            The slug of the product to update (e.g "nokia-x3").
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">brand_id</td>
                                    <td>
                                        <p class="semibold-italic">small integer</p>
                                        <p>Default value</p>
                                        <code>
                                            0
                                        </code>
                                        <p>
                                            The brand id of the product to update (e.g 1). See brand list to get the brand id of each brand available.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">name</td>
                                    <td>
                                        <p class="semibold-italic">string</p>
                                        <p>Default value</p>
                                        <code>
                                            NULL
                                        </code>
                                        <p>
                                            The name of the product to update (e.g "Xperia X Max Pro").
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">model</td>
                                    <td>
                                        <p class="semibold-italic">string</p>
                                        <p>Default value</p>
                                        <code>
                                            NULL
                                        </code>
                                        <p>
                                            The model of the product to update (e.g "F8331").
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">specs_id</td>
                                    <td>
                                        <p class="semibold-italic">integer</p>
                                        <p>Default value</p>
                                        <code>
                                            0
                                        </code>
                                        <p>
                                            The specs id for the product to update (e.g 2). See the specs list to get all the specs available.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">price</td>
                                    <td>
                                        <p class="semibold-italic">integer</p>
                                        <p>Default value</p>
                                        <code>
                                            0
                                        </code>
                                        <p>
                                            The price of the product to update in IDR (e.g 2400000). 
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        <!-- End of Products -->

                        <!-- Brands -->
                            <strong>PUT/PATCH</strong>
                            <code>
                                http://localhost:8000/api/v1/brands<br/>
                            </code>
                            <p>Create a brand using multipart form.</p>
                            <strong>Query List</strong>
                            <table>
                                <tr>
                                    <td class="code">slug</td>
                                    <td>
                                        <p class="semibold-italic">string</p>
                                        <p>Default value</p>
                                        <code>
                                            NULL
                                        </code>
                                        <p>
                                            The slug of the brand to update (e.g "realme-corp-singapoe").
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">brand_name</td>
                                    <td>
                                        <p class="semibold-italic">string</p>
                                        <p>Default value</p>
                                        <code>
                                            NULL
                                        </code>
                                        <p>
                                            The brand name of the product to update (e.g "Realme").
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">country</td>
                                    <td>
                                        <p class="semibold-italic">string</p>
                                        <p>Default value</p>
                                        <code>
                                            NULL
                                        </code>
                                        <p>
                                            The country of the brand to update (e.g "Singapore").
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        <!-- End of Brands -->
                        
                        <!-- Specs -->
                            <strong>PUT/PATCH</strong>
                            <code>
                                http://localhost:8000/api/v1/brands<br/>
                            </code>
                            <p>Create a specs using multipart form.</p>
                            <strong>Query List</strong>
                            <table>
                                <tr>
                                    <td class="code">slug</td>
                                    <td>
                                        <p class="semibold-italic">string</p>
                                        <p>Default value</p>
                                        <code>
                                            NULL
                                        </code>
                                        <p>
                                            The slug of the specs to update (e.g "xperia-xz-specs").
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">launch</td>
                                    <td>
                                        <p class="semibold-italic">date</p>
                                        <p>Default value</p>
                                        <code>
                                            2000-01-01 00:00:00
                                        </code>
                                        <p>
                                            The date of the specs realeased to update (e.g "2010-09-11 00:03:03").
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">display</td>
                                    <td>
                                        <p class="semibold-italic">string</p>
                                        <p>Default value</p>
                                        <code>
                                            NULL
                                        </code>
                                        <p>
                                            The display of the specs to update (e.g "LCD IPS").
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">platform</td>
                                    <td>
                                        <p class="semibold-italic">string</p>
                                        <p>Default value</p>
                                        <code>
                                            NULL
                                        </code>
                                        <p>
                                            The platform of the specs to update (e.g "Android 9.0").
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">cpu</td>
                                    <td>
                                        <p class="semibold-italic">string</p>
                                        <p>Default value</p>
                                        <code>
                                            NULL
                                        </code>
                                        <p>
                                            The cpu of the specs to update (e.g "Qualcomm SDM665 Snapdragon 665 (11 nm)").
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">rom</td>
                                    <td>
                                        <p class="semibold-italic">integer</p>
                                        <p>Default value</p>
                                        <code>
                                            0
                                        </code>
                                        <p>
                                            The rom of the specs to update in Giga Bytes (e.g 32).
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">ram</td>
                                    <td>
                                        <p class="semibold-italic">integer</p>
                                        <p>Default value</p>
                                        <code>
                                            0
                                        </code>
                                        <p>
                                            The ram of the specs to update in Giga Bytes (e.g 4).
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">camera</td>
                                    <td>
                                        <p class="semibold-italic">integer</p>
                                        <p>Default value</p>
                                        <code>
                                            0
                                        </code>
                                        <p>
                                            The resolution of camera of the specs to update in Mega Pixels (e.g 13).
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code">battery</td>
                                    <td>
                                        <p class="semibold-italic">integer</p>
                                        <p>Default value</p>
                                        <code>
                                            0
                                        </code>
                                        <p>
                                            The capacity of battery of the specs to update in mAH (e.g 2900).
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        <!-- End of Specs -->
                    </li>

                    <hr>
                    <!-- DELETE -->
                    <li>
                        <strong>DELETE</strong>
                        <code>
                            http://localhost:8000/api/v1/products/{id} <br/>
                            http://localhost:8000/api/v1/brands/{id} <br/>
                            http://localhost:8000/api/v1/specs/{id} <br/>
                        </code>
                        <p>Delete a product/brand/spec based on the {id}</p>
                        <strong>Query List</strong>
                        <table>
                            <tr>
                                <td class="code">id (required)</td>
                                <td>
                                    <p class="semibold-italic">integer</p>
                                    <p>Default value</p>
                                    <code>
                                        NULL
                                    </code>
                                    <p>
                                        The id of product/brand/specs to delete (e.g 1).
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </li>
                </ul>
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