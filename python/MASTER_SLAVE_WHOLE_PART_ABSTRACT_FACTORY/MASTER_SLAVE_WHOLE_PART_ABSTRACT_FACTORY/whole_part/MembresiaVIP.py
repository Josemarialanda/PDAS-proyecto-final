from MASTER_SLAVE_WHOLE_PART_ABSTRACT_FACTORY.whole_part.DatosBeneficios import DatosBeneficios
from datetime import datetime
from .DatosBeneficios import DatosBeneficios
from .Membresia import Membresia

class MembresiaVIP(Membresia):
    
    datosBeneficios = DatosBeneficios
    
    def __init__(self, datosCliente, datosBenficios):
        self.datosCliente = datosCliente
        self.datosBeneficios = datosBenficios
        self.fechaVencimiento = datetime.today