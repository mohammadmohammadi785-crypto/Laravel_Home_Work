<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Form</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        @if ($age>=50)
        <h1 class="h1">you are old</h1>
        @elseif ($age>=40)
        <h1 class="h1">you are an adult</h1>
        @elseif ($age>=18)
        <h1 class="h1">you are young</h1>
        @else
        <h1 class="h1">you are a child</h1>
        @endif
    </body>
</html>
