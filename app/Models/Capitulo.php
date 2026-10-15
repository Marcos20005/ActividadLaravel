class Capitulo {
    private array $parrafos = [];

    public function __construct(private string $titulo) {}

    // Composición: El capítulo tiene la responsabilidad de instanciar el párrafo[cite: 3]
    public function crearParrafo(): Parrafo {
        $parrafo = new Parrafo();
        $this->parrafos[] = $parrafo;
        return $parrafo;
    }
}