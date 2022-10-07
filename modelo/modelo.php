
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

  function set_fehca($fehca) {
    $this->fehca = $fehca;
  }
  function get_fehca() {
    return $this->fehca;
  }
}




class Socio {
  // Properties
  public $nombre;
  public $apellidos;
  public $dni;
  public $telefono;
  public $direccion;

  function __construct($isbn, $titulo) {
    $this->nombre = $nombre;
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

  function set_fehca($fehca) {
    $this->fehca = $fehca;
  }
  function get_fehca() {
    return $this->fehca;
  }
}

?>
