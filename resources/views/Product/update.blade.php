<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.min.css">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="min-h-screen w-flll flex justify-center flex-col items-center">
       
        <form enctype="multipart/form-data" action="{{ URL('/product/update', $products->id) }}" class="flex p-4 flex-col w-7/12 shadow-2xl text-stone-600 bg-stone-100  rounded-md" method="post">
            @csrf
            @method('PUT')
            <h1 class="text-3xl text-center font-black p-4">Update Products</h1>
            @if ($errors->any()>0)
                <div class="flex flex-col gap-2.5 w-full">
                    @foreach ($errors->all() as $error )
                        <span class="p-2 my-1 bg-red-700 text-right text-white rounded-sm">{{ $error }}</span>
                    @endforeach
                </div>
            @endif
            <input value="{{ $products->name }}" class="border py-3 my-1  focus:outline-0 rounded-md px-4" type="text" name="name">
            <input value="{{ $products->price }}" class="border py-3 my-1  focus:outline-0 rounded-md px-4" type="number" name="price">
            <input value="{{ $products->stock }}" class="border py-3 my-1  focus:outline-0 rounded-md px-4" type="number" name="stock">
            @if(count($products->images)>0)
            <div class="w-full grid grid-cols-2 font-bold text-2xl text-black relative gap-4" id="image-container">
                <i id="remove-image1" class="cursor-pointer absolute top-4 right-4">x</i>
                @foreach ($products->images as $image)
                    <img class="w-full h-50" src="{{ '/storage/'. $image->image_url }}" alt="">
                @endforeach
            </div>
            @endif
            <input id="image1" name="image1" type="file" accept="image/*" class="w-full hidden py-2">
            <input id="image2" name="image2" type="file" accept="image/*" class="w-full hidden py-2">
            <input class="w-full py-3 my-1 border rounded-md" type="submit" value="Save">
        </form>
    </div>    
        <script>
            const imageContainer = document.getElementById("image-container")
           const RemoveImage1 = document.getElementById("remove-image1")
           const RemoveImage2 = document.getElementById("remove-image2")
           const image1 =  document.getElementById("image1")
           const image2 =  document.getElementById("image2")
           RemoveImage1.addEventListener("click", ()=>{
            image1.classList.remove("hidden");
            image2.classList.remove("hidden");
            imageContainer.classList.add("hidden")
           })
        </script>
</body>
</html>