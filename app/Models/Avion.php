class Avion {
    private array $vuelos = [];

    public function __construct(private string $matricula) {}

    // Asociación bidireccional: El avión registra el vuelo
    public function asignarVuelo(Vuelo $vuelo): void {
        $this->vuelos[] = $vuelo;
    }
}