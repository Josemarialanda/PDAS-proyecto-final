from datetime import date
from .DatosCliente import DatosCliente
from ..ProductoCine import ProductoCine

class Membresia(ProductoCine):
    
    datosCliente = DatosCliente()
    fechaVencimiento : date
    
    def gestionarProductoCine(self):
        print("hacer gestion de membresia")