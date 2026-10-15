class Oracion {
    private array $palabras = [];

    // Agregación: La palabra se crea de forma independiente y se agrega a la oración
    public function agregarPalabra(Palabra $palabra): void {
        $this->palabras[] = $palabra;
    }
}