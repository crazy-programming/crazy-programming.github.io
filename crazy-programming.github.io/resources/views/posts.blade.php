<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Implement Social Share Button in Laravel</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <style>
            div#social-links {
                /* position:sticky; */
                position:fixed;
                top:10%;
                right:1%;
            }
            div#social-links ul li {
                display: block;
            }          
            div#social-links ul li a {
                padding: 5px;
                border: none;
                margin: 1px;
                font-size: 24px;
            }
            .fa-twitter{
                color: rgb(29,155,240);
            }
            .fa-reddit{
                color: rgb(242, 70, 52);
            }
            .fa-telegram{
                color: rgb(39,167,229);
            }
            .fa-linkedin{
                color:rgb(11,102,194);

            }
            .fa-facebook-square{
                color:rgb(52,92,171);
            }
            .fa-whatsapp{
                color:rgb(95,196,84); 
            }
            .fa-pinterest{
                color:rgb(231,54,50);
            }
            
        </style>
    </head>
    <body>

        <div class="container mt-4">
            {!! $shareComponent !!}

            @foreach ($singles as $item)
            
            <h2 class="mb-5 text-center">{{$item->title}}</h2>
            <hr>
            <h3 class="mb-5 text-center">{{$item->description}}</h2>
            @endforeach
        </div>
    </body>
</html>