class Vuelo {
    public function __construct(
        private string $numero,
        private Aeropuerto $origen,   // Asociación unidireccional
        private Aeropuerto $destino,  // Asociación unidireccional
        private Avion $avion          // Asociación bidireccional
    ) {
        // Al instanciar el vuelo, se establece la bidireccionalidad agregándolo al avión
        $this->avion->asignarVuelo($this);
    }
}