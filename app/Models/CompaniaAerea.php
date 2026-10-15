class CompaniaAerea {
    private array $aviones = [];

    public function __construct(private string $nombre) {}

    public function agregarAvion(Avion $avion): void {
        $this->aviones[] = $avion;
    }
}