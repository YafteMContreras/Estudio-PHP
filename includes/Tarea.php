<?php
class Tarea{
	public function __construct(
		public string $titulo,
		public readonly int $id = 0,
		public int $prioridad = 1,
		public bool $completada = false
	) {}

	public function textoPrioridad() : string {
		return match($this->prioridad){
			1 => "Alta", 2 => "Media", 3 => "Baja",
		};
	}
}


?>
