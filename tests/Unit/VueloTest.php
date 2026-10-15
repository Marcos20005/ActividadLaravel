use App\Models\Aeropuerto;
use App\Models\CompaniaAerea;
use App\Models\Avion;
use App\Models\Vuelo;

test('instanciar la clase Vuelo con sus asociaciones', function () {
    // 1. Instanciar los aeropuertos (asociaciones unidireccionales)
    $origen = new Aeropuerto('SJO', 'Juan Santamaría');
    $destino = new Aeropuerto('LIR', 'Daniel Oduber Quirós');
    
    // 2. Instanciar el avión (para la asociación bidireccional)
    $compania = new CompaniaAerea('Avianca');
    $avion = new Avion('TI-1234');
    $compania->agregarAvion($avion);

    // 3. Instanciar la clase Vuelo
    $vuelo = new Vuelo('AV104', $origen, $destino, $avion);

    // 4. Verificación con Pest
    expect($vuelo)->toBeInstanceOf(Vuelo::class);
});