from BRIDGE_WHOLE_PART.bridge.ImplementadorProductoCine import ImplementadorProductoCine
from BRIDGE_WHOLE_PART.whole_part.DatosCliente import DatosCliente
from BRIDGE_WHOLE_PART.whole_part.reservacion.DatosCompra import DatosCompra
from BRIDGE_WHOLE_PART.whole_part.reservacion.DatosFuncion import DatosFuncion

class ImplAbstractaReservacion(ImplementadorProductoCine):
    
    datosCliente : DatosCliente
    datosCompra  : DatosCompra
    datosFuncion : DatosFuncion
    
    def __init__(self) -> None:
        pass
    
    def completarProductoCine(self, datos):
        self.completarReservacion(datos)
    
    def mostrarProductoCine(self):
        self.mostrarReservacion()
    
    def completarReservacion(self, datos):
        datosCliente = DatosCliente()
        datosCliente.setDatosCliente(datos[0],datos[1],datos[2],datos[3],datos[4])
        datosCompra = DatosCompra()
        datosCompra.setDatosCompra(datos[5],datos[6])
        datosFuncion = DatosFuncion()
        datosFuncion.setDatosFuncion(datos[7],datos[8],datos[9])
        
        self.datosCliente = datosCliente
        self.datosCompra  = datosCompra
        self.datosFuncion = datosFuncion
    
    def mostrarReservacion(self):
        pass