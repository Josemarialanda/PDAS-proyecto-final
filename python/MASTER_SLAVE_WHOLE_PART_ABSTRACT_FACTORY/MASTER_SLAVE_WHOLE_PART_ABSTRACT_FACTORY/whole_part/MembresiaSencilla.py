from datetime import date, datetime
from .DatosCliente import DatosCliente
from .Membresia import Membresia

class MembresiaSencilla(Membresia):
    
    datosCliente = DatosCliente()
    fechaVencimiento : date
    
    def __init__(self, datosCliente):
        self.datosCliente = datosCliente
        self.fechaVencimiento = datetime.today
    
    def gestionarMembresia(self):
        print("Hacer gestion de membresia sencilla")