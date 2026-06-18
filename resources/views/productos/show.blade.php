<!DOCTYPE html>

<html lang="es">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Producto</title>


<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>


</head>

<body class="bg-slate-100" style="font-family: 'Poppins', sans-serif;">


<div class="max-w-2xl mx-auto mt-10 bg-white shadow-2xl rounded-2xl p-8 border border-gray-100">

    <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">
    Detalle del Producto
</h1>

@if($producto->imagen)
    <div class="mb-6 text-center">
        <img
            src="{{ asset('storage/' . $producto->imagen) }}"
            alt="{{ $producto->producto }}"
            class="mx-auto rounded-lg shadow-lg max-w-md">
    </div>
@endif

<div class="space-y-4">

    <div class="space-y-4">

        <div>
            <span class="font-bold text-gray-700">Producto:</span>
            <p class="text-gray-900">{{ $producto->producto }}</p>
        </div>

        <div>
            <span class="font-bold text-gray-700">Descripción:</span>
            <p class="text-gray-900">{{ $producto->descripcion }}</p>
        </div>

        <div>
            <span class="font-bold text-gray-700">Unidades:</span>
            <p class="text-gray-900">{{ $producto->unidades }}</p>
        </div>

        <div>
            <span class="font-bold text-gray-700">Precio:</span>
            <p class="text-green-600 font-bold text-lg">
                ${{ number_format($producto->precio, 2) }}
            </p>
        </div>

    </div>

    <div class="mt-8">

        <a href="{{ route('productos.index') }}"
           class="bg-gray-600 text-white px-5 py-2 rounded hover:bg-gray-700">

            Regresar

        </a>

    </div>

</div>
```

</body>
</html>
