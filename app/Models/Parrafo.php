class Parrafo {
    private array $oraciones = [];

    // Composición: El párrafo tiene la responsabilidad de instanciar la oración[cite: 3]
    public function crearOracion(): Oracion {
        $oracion = new Oracion();
        $this->oraciones[] = $oracion;
        return $oracion;
    }
}