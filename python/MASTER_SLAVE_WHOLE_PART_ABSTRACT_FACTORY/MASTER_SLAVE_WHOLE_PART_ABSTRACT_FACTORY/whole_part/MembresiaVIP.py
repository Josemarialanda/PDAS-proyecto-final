from MASTER_SLAVE_WHOLE_PART_ABSTRACT_FACTORY.whole_part.DatosBeneficios import DatosBeneficios
from datetime import date, datetime
from .DatosCliente import DatosCliente
from .DatosBeneficios import DatosBeneficios
from .Membresia import Membresia

class MembresiaVIP(Membresia):
    
    datosCliente    = DatosCliente()
    datosBeneficios = DatosBeneficios
    fechaVencimiento : date
    
    def __init__(self, datosCliente, datosBenficios):
        self.datosCliente = datosCliente
        self.datosBeneficios = datosBenficios
        self.fechaVencimiento = datetime.today
    
    def gestionarMembresia(self):
        print("Hacer gestion de membresia VIP")