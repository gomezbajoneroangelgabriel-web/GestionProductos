<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<body class="bg-gradient-to-br from-slate-100 to-blue-100 min-h-screen"
      style="font-family: 'Poppins', sans-serif;">

    <div class="container mx-auto mt-10">

        <div class="bg-white shadow-2xl rounded-2xl p-8 border border-gray-100">

            @if(session('success'))

                 <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">

                     {{ session('success') }}

                 </div>

            @endif

            <div class="flex justify-between items-center mb-6">

                <h1 class="text-3xl font-bold text-gray-800">
                    Gestión de Productos
                </h1>
                

                <a href="{{ route('productos.create') }}"
                   class="bg-blue-600 text-white px-5 py-2 rounded-xl hover:bg-blue-700 transition">
                    + Nuevo Producto
                </a>

            </div>
            <form action="{{ route('productos.index') }}"
                method="GET"
                class="mb-6">

                <div class="flex gap-2">

                    <input
                        type="text"
                        name="buscar"
                        value="{{ request('buscar') }}"
                        placeholder="Buscar producto o descripción..."
                        class="flex-1 border rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">

                    <button
                        type="submit"
                        class="bg-blue-600 text-white px-5 py-2 rounded-xl hover:bg-blue-700">

                        Buscar

                    </button>

                    <a href="{{ route('productos.index') }}"
                    class="bg-gray-500 text-white px-5 py-2 rounded-xl hover:bg-gray-600">

                        Limpiar

                    </a>

                </div>

            </form>

            <table class="w-full overflow-hidden rounded-xl">

                <thead>
                    <tr class="bg-slate-800 text-white">

                        <th class="border p-3">Imagen</th>
                        <th class="border p-3">Producto</th>
                        <th class="border p-3">Descripción</th>
                        <th class="border p-3">Unidades</th>
                        <th class="border p-3">Precio</th>
                        <th class="border p-3">Acciones</th>

                    </tr>
                </thead>

                <tbody>

                    @forelse($productos as $producto)

                        <tr class="text-center">

                            <td class="border p-3">
                                @if($producto->imagen)

                                    <img
                                        src="{{ asset('storage/' . $producto->imagen) }}"
                                        alt="{{ $producto->producto }}"
                                        class="w-20 h-20 object-cover rounded mx-auto">

                                @else

                                    <span class="text-gray-500">
                                        Sin imagen
                                    </span>

                                @endif
                            </td>

                            <td class="border p-3">
                                {{ $producto->producto }}
                            </td>

                            <td class="border p-3">
                                {{ $producto->descripcion }}
                            </td>

                            <td class="border p-3">
                                {{ $producto->unidades }}
                            </td>

                            <td class="border p-3">
                                ${{ $producto->precio }}
                            </td>

                            <td class="border p-3">

                                <a href="{{ route('productos.show', $producto->id) }}"
                                   class="bg-blue-500 text-white px-3 py-1 rounded">
                                    Ver
                                </a>

                                <a href="{{ route('productos.edit', $producto->id) }}"
                                   class="bg-yellow-500 text-white px-3 py-1 rounded">
                                    Editar
                                </a>

                                <form action="{{ route('productos.destroy', $producto->id) }}"
                                      method="POST"
                                      class="inline">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                        onclick="return confirm('¿Deseas eliminar este producto?')"
                                        class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">
                                    Eliminar
                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="6"
                                class="border p-4 text-center text-gray-500">

                                No hay productos registrados.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</body>
</html>