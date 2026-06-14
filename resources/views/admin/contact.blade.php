<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-full max-w-6xl mx-auto">
        <h1 class="h1">This is the contact page</h1>
        @switch($name)
            @case("Ali")
                <p class="h1">Hi Ali, how are you?</p>
                @break
            @case("Ahmad")
                <p class="h1">Hi Ahmad, how are you?</p>
                @break
            @case("Mahmood")
                <p class="h1">Hi Mahmood, how are you?</p>
                @break
            @default
                <p class="h1">Hi there, how are you?</p>
        @endswitch
    </div>
</body>
</html>