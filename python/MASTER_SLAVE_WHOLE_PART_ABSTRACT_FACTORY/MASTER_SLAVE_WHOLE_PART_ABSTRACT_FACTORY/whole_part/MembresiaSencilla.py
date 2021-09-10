from datetime import datetime
from .Membresia import Membresia

class MembresiaSencilla(Membresia):
    
    def __init__(self, datosCliente):
        self.datosCliente = datosCliente
        self.fechaVencimiento = datetime.today
