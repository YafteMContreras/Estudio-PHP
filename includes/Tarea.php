<?php
public class Tarea{
	public function __construct(
		public readonly int $id = 0,
		public string $titulo,
		public int $prioridad = 1,
		public bool $completada = false
	) {}



}


?>
