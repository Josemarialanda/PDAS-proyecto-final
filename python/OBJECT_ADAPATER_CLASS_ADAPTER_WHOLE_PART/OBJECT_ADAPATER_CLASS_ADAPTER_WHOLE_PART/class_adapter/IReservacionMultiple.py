from abc import ABC, abstractmethod

class IReservacionMultiple(ABC):
    
    @abstractmethod
    def agregarReservacion():
        pass
    
    @abstractmethod
    def getReservaciones():
        pass