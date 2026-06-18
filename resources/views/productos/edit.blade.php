<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>


<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>


</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


<body class="bg-slate-100" style="font-family: 'Poppins', sans-serif;">


<div class="max-w-2xl mx-auto mt-10 bg-white shadow-2xl rounded-2xl p-8 border border-gray-100">

    <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">
        Editar Producto
    </h1>
    @if($producto->imagen)

    <div class="mb-6 text-center">

        <p class="font-semibold text-gray-700 mb-2">
            Imagen actual
        </p>

        <img
            src="{{ asset('storage/' . $producto->imagen) }}"
            alt="{{ $producto->producto }}"
            class="mx-auto rounded-lg shadow-lg w-48">

    </div>

    @endif

    @if ($errors->any())

        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">

            <ul class="list-disc list-inside">

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    <form action="{{ route('productos.update', $producto->id) }}"
        method="POST"
        enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">
                Producto
            </label>

            <input
                type="text"
                name="producto"
                value="{{ old('producto', $producto->producto) }}"
                class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">
                Descripción
            </label>

            <input
                type="text"
                name="descripcion"
                value="{{ old('descripcion', $producto->descripcion) }}"
                class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">
                Unidades
            </label>

            <input
                type="number"
                name="unidades"
                value="{{ old('unidades', $producto->unidades) }}"
                class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 font-semibold mb-2">
                Precio
            </label>

            <input
                type="number"
                step="0.01"
                name="precio"
                value="{{ old('precio', $producto->precio) }}"
                class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 font-semibold mb-2">
                    Nueva Imagen
            </label>

            <input
                type="file"
                name="imagen"
                accept="image/*"
                class="w-full border rounded-lg px-3 py-2">

                <p class="text-sm text-gray-500 mt-1">
                Déjalo vacío para conservar la imagen actual.
                </p>

         </div>
        <div class="flex gap-3">

            <button
                type="submit"
                class="bg-yellow-500 text-white px-5 py-2 rounded hover:bg-yellow-600">

                Actualizar Producto

            </button>

            <a href="{{ route('productos.index') }}"
               class="bg-gray-600 text-white px-5 py-2 rounded hover:bg-gray-700">

                Regresar

            </a>

        </div>

    </form>

</div>

</body>
</html>
