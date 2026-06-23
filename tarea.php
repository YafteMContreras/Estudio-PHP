<?php
// Función que crea tareas
function crearTarea(string $titulo, int $prioridad = 1, bool $completada = false) : array{
        return["titulo" => $titulo, "prioridad" => $prioridad, "completada" => $completada];
}

$tareas = [[crearTarea("Estudiar PHP", 2)] , [crearTarea("Terminar proyecto")], [crearTarea("Leer documentación", 3, true)]];

var_dump($tareasCreadas);


// Agrega texto de prioridad
foreach ($tareas as &$tarea){
	$tarea["textoPrioridad"] = match($tarea["prioridad"]){
		1 => "Alta",
		2 => "Media",
		3 => "Baja",
	};
}

unset($tarea);

// Ordena el arreglo por prioridad ascendente
usort($tareas, fn($a, $b) => $a["prioridad"] <=> $b["prioridad"]);
//var_dump($tareas);

// Separa la lista en completadas y pendientes
$completadas = array_filter($tareas, fn($a) => $a["estado"] === "Completada");
$completadas = array_values($completadas);
var_dump($completadas);

$pendientes = array_filter($tareas, fn($a) => $a["estado"] === "Pendiente");
$pendientes = array_values($pendientes);
//var_dump($pendientes);

// Imprime las listas
echo "Tareas completadas: " . count($completadas) . "\n";
foreach ($completadas as $tarea){
	echo "id: {$tarea['id']}; titulo: {$tarea['titulo']}; prioridad: {$tarea['textoPrioridad']}\n";
}

echo "Tareas pendientes: " . count($pendientes) . "\n";
foreach ($pendientes as $tarea){
	echo "id: {$tarea['id']}; titulo: {$tarea['titulo']}; prioridad: {$tarea['textoPrioridad']}\n";
}

?>
