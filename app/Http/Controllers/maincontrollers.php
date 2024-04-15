<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class maincontrollers extends Controller
{
    public function index()
    {
        $productos = [
            'Electricidad' => [
                ['nombre' => 'Lámpara LED de Escritorio', 'descripcion' => 'Una lámpara de escritorio con tecnología LED que ofrece una iluminación brillante y ajustable. Perfecta para estudiar o trabajar en espacios con poca luz. ', 'precio' => 25],
                ['nombre' => 'Aspiradora Robotizada', 'descripcion' => 'Una aspiradora inteligente que limpia automáticamente tu hogar. Equipada con sensores para evitar obstáculos y programable para limpiar en horarios específicos.', 'precio' => 200],
                ['nombre' => 'Cafetera de Goteo Programable','descripcion' => 'Prepara café fresco todas las mañanas con esta cafetera programable. Puedes configurarla para que comience a preparar café justo antes de despertarte. ', 'precio' => 50]
            ],
            'Fontanería' => [
                ['nombre' => 'Fregadero de Acero Inoxidable', 'descripcion' => 'Fregadero de cocina fabricado en acero inoxidable resistente a la corrosión y fácil de limpiar. Viene con accesorios de montaje y desagüe.', 'precio' => 150],
                ['nombre' => 'Inodoro de Dos Piezas', 'descripcion' => 'Un inodoro completo con tanque y taza, diseñado para un fácil montaje en baños residenciales. Incluye accesorios de montaje. ', 'precio' => 200],
                ['nombre' => 'Grifo Monomando para Fregadero', 'descripcion' => 'Un grifo de cocina con un solo mando que permite regular el flujo de agua caliente y fría. Fabricado en acero inoxidable resistente a la corrosión.', 'precio' => 50]
            ],
            'Carpintería' => [
                ['nombre' => 'Sierra Circular Eléctrica', 'descripcion' => 'na herramienta eléctrica indispensable para cortar tableros de madera con precisión. Equipada con una hoja de sierra afilada y ajustable para cortes angulares. ', 'precio' => 200],
                ['nombre' => 'Juego de Brocas para Madera (18 piezas)', 'descripcion' => 'Un conjunto de brocas de alta calidad diseñadas específicamente para perforar agujeros en madera. Incluye una variedad de tamaños para adaptarse a diferentes proyectos. ', 'precio' => 20],
                ['nombre' => 'Lijadora Orbital Eléctrica', 'descripcion' => 'Una lijadora eléctrica que facilita el lijado de superficies de madera para obtener un acabado suave y uniforme. Perfecta para preparar la madera antes de pintar, barnizar o encerar', 'precio' => 0.75]
            ]

        ];
        
        return view('main', compact('productos'));
    }
    
}
