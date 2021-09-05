from MASTER_SLAVE_WHOLE_PART_ABSTRACT_FACTORY.whole_part.MembresiaVIP import MembresiaVIP
from MASTER_SLAVE_WHOLE_PART_ABSTRACT_FACTORY.whole_part.MembresiaSencilla import MembresiaSencilla
from .ProductoCineFactory import ProductoCineFactory
from ..master_slaves.GestorDatosCliente     import GestorDatosCliente
from ..master_slaves.GestorDatosBeneficios  import GestorDatosBeneficios

class MembresiaFactory(ProductoCineFactory):
        
    def crearProductoCineSencillo(self,nombres,apellidoPaterno,
                       apellidoMaterno,edad,tipoCliente):
        datosCliente = GestorDatosCliente().preparaDatosCliente(nombres, apellidoPaterno, apellidoMaterno, edad, tipoCliente)
        return MembresiaSencilla(datosCliente)
    
    def crearProductoCineVIP(self,nombres,apellidoPaterno,
                       apellidoMaterno,edad,tipoCliente,beneficios):
        datosCliente    = GestorDatosCliente().preparaDatosCliente(nombres, apellidoPaterno, apellidoMaterno, edad, tipoCliente)
        datosBeneficios = GestorDatosBeneficios().preparaDatosBeneficios(beneficios)
        return MembresiaVIP(datosCliente,datosBeneficios)