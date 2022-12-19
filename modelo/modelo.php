
<?php
class Libro {
  // Properties
  public $isbn;
  public $titulo;
  public $autor;
  public $fecha;

  function __construct($isbn, $titulo) {
    $this->isbn = $isbn;
    $this->titulo = $titulo;
  }

  // Methods
  function set_isbn($isbn) {
    $this->isbn = $isbn;
  }
  function get_isbn() {
    return $this->isbn;
  }

  function set_titulo($titulo) {
    $this->titulo = $titulo;
  }
  function get_titulo() {
    return $this->titulo;
  }
  
  function set_autor($autor) {
    $this->autor = $autor;
  }
  function get_autor() {
    return $this->autor;
  }

  function set_fecha($fecha) {
    $this->fecha = $fecha;
  }
  function get_fecha() {
    return $this->fecha;
  }
}




class Socio {
  // Properties
  public $nombre;
  public $apellidos;
  public $dni;
  public $telefono;
  public $direccion;

  function __construct($nombre, $apellidos, $dni, $telefono, $direccion) {
    $this->nombre = $nombre;
    $this->apellidos = $apellidos;
    $this->dni = $dni;
    $this->telefono = $telefono;
    $this->direccion = $direccion;
  }

  // Methods
  function set_nombre($nombre) {
    $this->nombre = $nombre;
  }
  function get_nombre() {
    return $this->nombre;
  }
  function set_apellidos($apellidos) {
    $this->apellidos = $apellidos;
  }
  function get_apellidos() {
    return $this->apellidos;
  }
  function set_dni($dni) {
    $this->dni = $dni;
  }
  function get_dni() {
    return $this->dni;
  }
  function set_telefono($telefono) {
    $this->telefono = $telefono;
  }
  function get_telefono() {
    return $this->telefono;
  }
  function set_direccion($direccion) {
    $this->direccion = $direccion;
  }
  function get_direccion() {
    return $this->direccion;
  }
}

?>
