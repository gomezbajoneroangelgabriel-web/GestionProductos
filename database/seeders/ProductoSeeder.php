<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productos = [

            [
            'producto' => 'Laptop HP 15',
            'descripcion' => 'Laptop HP 15 pulgadas con procesador Intel Core i5.',
            'unidades' => 15,
            'precio' => 12500.00,
            'imagen' => 'productos/laptop-hp.jpg',
            ],

            [
            'producto' => 'Laptop Lenovo IdeaPad',
            'descripcion' => 'Laptop Lenovo IdeaPad para uso profesional y académico.',
            'unidades' => 10,
            'precio' => 11800.00,
            'imagen' => 'productos/laptop-lenovo.jpg',
            ],

            [
            'producto' => 'Monitor Samsung 24"',
            'descripcion' => 'Monitor Full HD de 24 pulgadas',
            'unidades' => 15,
            'precio' => 3299.99,
            'imagen' => 'productos/monitor-samsung.jpg',
            ],

            [
            'producto' => 'Monitor LG 27"',
            'descripcion' => 'Monitor IPS Full HD de 27 pulgadas',
            'unidades' => 12,
            'precio' => 4599.99,
            'imagen' => 'productos/monitor-lg.jpg',
            ],

            [
            'producto' => 'Teclado Mecánico Redragon',
            'descripcion' => 'Teclado RGB mecánico para gaming',
            'unidades' => 25,
            'precio' => 899.99,
            'imagen' => 'productos/teclado.jpg',
            ],

            [
            'producto' => 'Mouse Logitech G203',
            'descripcion' => 'Mouse gamer RGB de alta precisión',
            'unidades' => 30,
            'precio' => 699.99,
            'imagen' => 'productos/mouse-g203.jpg',
            ],

            [
            'producto' => 'Mouse Inalámbrico Logitech',
            'descripcion' => 'Mouse inalámbrico para oficina',
            'unidades' => 20,
            'precio' => 499.99,
            'imagen' => 'productos/mouse-inalambrico.jpg',
            ],

            [
            'producto' => 'Audífonos HyperX Cloud II',
            'descripcion' => 'Audífonos gamer con sonido envolvente',
            'unidades' => 14,
            'precio' => 1899.99,
            'imagen' => 'productos/audifonos.jpg',
            ],

            [
            'producto' => 'Webcam Logitech C920',
            'descripcion' => 'Cámara web Full HD para videollamadas',
            'unidades' => 18,
            'precio' => 1499.99,
            'imagen' => 'productos/webcam.jpg',
            ],

            [
            'producto' => 'Disco SSD Kingston 1TB',
            'descripcion' => 'Unidad SSD SATA de 1TB',
            'unidades' => 22,
            'precio' => 1299.99,
            'imagen' => 'productos/ssd-1tb.jpg',
            ],

            [
            'producto' => 'Memoria USB Kingston 64GB',
            'descripcion' => 'Memoria USB 3.2 de alta velocidad',
            'unidades' => 40,
            'precio' => 199.99,
            'imagen' => 'productos/usb-64gb.jpg',
            ],

            [
            'producto' => 'Impresora Epson EcoTank',
            'descripcion' => 'Impresora multifuncional con tanque de tinta',
            'unidades' => 7,
            'precio' => 4999.99,
            'imagen' => 'productos/impresora.jpg',
            ],

            [
            'producto' => 'Router TP-Link AX1800',
            'descripcion' => 'Router WiFi 6 de alto rendimiento',
            'unidades' => 11,
            'precio' => 1799.99,
            'imagen' => 'productos/router.jpg',
            ],

            [
            'producto' => 'Bocina JBL Flip 6',
            'descripcion' => 'Bocina Bluetooth portátil resistente al agua',
            'unidades' => 9,
            'precio' => 2499.99,
            'imagen' => 'productos/bocina-jbl.jpg',
            ],

            [
            'producto' => 'Tablet Samsung Galaxy Tab A9',
            'descripcion' => 'Tablet Android para estudio y entretenimiento',
            'unidades' => 13,
            'precio' => 5499.99,
            'imagen' => 'productos/tablet.jpg',
            ],

            [
            'producto' => 'Smartwatch Amazfit Bip 5',
            'descripcion' => 'Reloj inteligente con monitoreo de salud',
            'unidades' => 16,
            'precio' => 1799.99,
            'imagen' => 'productos/smartwatch.jpg',
            ],

            [
            'producto' => 'Cámara de Seguridad TP-Link',
            'descripcion' => 'Cámara WiFi para monitoreo doméstico',
            'unidades' => 20,
            'precio' => 999.99,
            'imagen' => 'productos/camara-seguridad.jpg',
            ],

            [
            'producto' => 'Regulador Koblenz',
            'descripcion' => 'Protección eléctrica para equipos electrónicos',
            'unidades' => 28,
            'precio' => 799.99,
            'imagen' => 'productos/regulador.jpg',
            ],

            [
            'producto' => 'Disco Duro Externo Seagate 2TB',
            'descripcion' => 'Almacenamiento portátil USB 3.0',
            'unidades' => 17,
            'precio' => 1799.99,
            'imagen' => 'productos/disco-externo.jpg',
            ],

            [
            'producto' => 'Silla Gamer Cougar',
            'descripcion' => 'Silla ergonómica para largas sesiones de trabajo',
            'unidades' => 6,
            'precio' => 4299.99,
            'imagen' => 'productos/silla-gamer.jpg',
            ]


        ];

        foreach ($productos as $producto) {
            Producto::create($producto);
        }
    }
}