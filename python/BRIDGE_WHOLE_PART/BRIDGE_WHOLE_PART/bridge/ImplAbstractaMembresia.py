from datetime import date, datetime
from BRIDGE_WHOLE_PART.bridge.ImplementadorProductoCine import ImplementadorProductoCine
from BRIDGE_WHOLE_PART.whole_part.DatosCliente import DatosCliente

class ImplAbstractaMembresia(ImplementadorProductoCine):
    
    datosCliente : DatosCliente
    fechaVencimiento : date
    
    def __init__(self) -> None:
        super().__init__()
    
    def completarProductoCine(self, datos):
        self.completarMembresia(datos)
    
    def mostrarProductoCine(self):
        self.mostrarMembresia()
    
    def completarMembresia(self, datos):
        datosCliente = DatosCliente()
        datosCliente.setDatosCliente(datos[0],datos[1],datos[2],datos[3],datos[4])
        self.datosCliente = datosCliente
        self.fechaVencimiento = datetime.today
    
    def mostrarMembresia(self):
        pass