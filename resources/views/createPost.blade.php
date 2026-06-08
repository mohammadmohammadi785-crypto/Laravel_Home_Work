<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite("resources/css/app.css")
</head>
<body>
    <div class='w-full h-screen flex justify-center items-center'>
        <form  action="{{ URL('create-p') }}" enctype="multipart/form-data" class="flex flex-col gap-3.5 w-1/2 p-8 border rounded-md" method="post">
            @csrf
            <input class="border w-full p-2 rounded-md" name="title" type="text" placeholder="Enter the Title">
            <input class="border w-full p-2 rounded-md" name="image" type="file" accept="image/*"> 
            <input class="border w-full py-2 px-8 rounded-md" type="submit" value="save">
        </form>
    </div>
</body>
</html>