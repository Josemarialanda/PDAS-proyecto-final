from abc import ABC, abstractmethod

class ImplementadorProductoCine(ABC):
    
    def __init__(self) -> None:
        pass
    
    @abstractmethod
    def completarProductoCine(self, datos):
        pass
    
    @abstractmethod
    def mostrarProductoCine(self):
        pass