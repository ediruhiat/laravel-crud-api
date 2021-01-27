<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD API > Example</title>    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="page-wrapper example">
        <a href="/">
            <div class="logo">
                <h1><img src="{{ asset('images/logo.png') }}" alt="logo"/><p class="red">Laravel</p> CRUD API</h1>
            </div>
        </a>

        <div class="example-content">
            <h2>Usage Examples</h2>
            <p>
                You can use any API testing tools, but in this case I will recomend to use Insomnia. For Insomnia user, you can <a href="https://drive.google.com/file/d/1uCHlcoKMl_P-lyLvSXHMqYb331xYvznD/view?usp=sharing" style="text-decoration: underline; color: royalblue;">download</a> the workspace to simplify the work.
            </p>

            <strong>Importing the workspace</strong>
            <p>
                After downloaded the .json Insomnia workspace, you can import the workspace by following these steps:
                <ol style="margin-left: 1rem;">
                    <li>
                        Open Insomnia then head to Import/Export menu.
                        <img class="ins" src="{{ asset('images/insomnia_import.png') }}" alt="insomnia_import"/>
                    </li>
                    <li>
                        Click Import Data and select From File, then select the downloaded workspace file.

                        <img class="ins" src="{{ asset('images/insomnia_import_2.png') }}" alt="insomnia_import_2"/>
                    </li>
                </ol>
            </p>

            <strong>Testing the API</strong>
            <p>
                The workspace should now shown on left side of Insomnia, you can test evertyhing through the workspace. For example showing all the products, you can use the GET request for the products.

                <img class="ins" src="{{ asset('images/products.png') }}" alt="products"/>
            </p>
        </div>
    </div>

    <footer>
        <div class="copyright">
            <p>Developed by <a href="https://www.github.com/edrhyt" target="_blank">Edi Ruhiat</a></p>
        </div>
    </footer>
</body>
</html>