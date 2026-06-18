<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    public function index(Request $request)
    {
    $buscar = $request->buscar;

    $productos = Producto::where('producto', 'LIKE', "%{$buscar}%")
        ->orWhere('descripcion', 'LIKE', "%{$buscar}%")
        ->get();

    return view('productos.index', compact('productos', 'buscar'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'producto' => 'required|max:100',
        'descripcion' => 'required|max:255',
        'unidades' => 'required|integer|min:0',
        'precio' => 'required|numeric|min:0',
        'imagen' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
    ]);

    $datos = $request->all();

    if ($request->hasFile('imagen')) {

        $rutaImagen = $request->file('imagen')->store(
            'productos',
            'public'
        );

        $datos['imagen'] = $rutaImagen;
    }

    Producto::create($datos);

    return redirect()
        ->route('productos.index')
        ->with('success', 'Producto registrado correctamente');
}

    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }

    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'producto' => 'required|max:100',
            'descripcion' => 'required|max:255',
            'unidades' => 'required|integer|min:0',
            'precio' => 'required|numeric|min:0',
            'imagen' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $datos = $request->all();

        if ($request->hasFile('imagen')) {

            if ($producto->imagen) {
                Storage::disk('public')->delete($producto->imagen);
            }

            $rutaImagen = $request->file('imagen')->store(
                'productos',
                'public'
            );

            $datos['imagen'] = $rutaImagen;
        }

        $producto->update($datos);

        return redirect()
            ->route('productos.index')
            ->with('success', 'Producto actualizado correctamente');
    }

    public function destroy(Producto $producto)
    {
        if ($producto->imagen) {

            Storage::disk('public')->delete(
                $producto->imagen
            );

        }

        $producto->delete();

        return redirect()
            ->route('productos.index')
            ->with('success', 'Producto eliminado correctamente');
}
}