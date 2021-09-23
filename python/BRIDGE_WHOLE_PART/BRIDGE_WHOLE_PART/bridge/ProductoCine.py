from abc import ABC, abstractmethod

class ProductoCine(ABC):
    
    tipoProductoCine : int
    
    def __init__(self, tipoProductoCine) -> None:
        self.tipoProductoCine = tipoProductoCine
    
    @abstractmethod
    def crearProductoCine(self):
        pass