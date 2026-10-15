class Libro {
    private array $capitulos = [];

    public function __construct(private string $titulo) {}

    // Composición: El libro tiene la responsabilidad de instanciar el capítulo[cite: 3]
    public function crearCapitulo(string $titulo): Capitulo {
        $capitulo = new Capitulo($titulo);
        $this->capitulos[] = $capitulo;
        return $capitulo;
    }
}