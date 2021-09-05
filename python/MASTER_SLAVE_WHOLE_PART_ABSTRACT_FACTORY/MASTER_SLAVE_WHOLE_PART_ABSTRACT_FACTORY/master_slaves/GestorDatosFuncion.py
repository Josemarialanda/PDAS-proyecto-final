from ..whole_part.DatosFuncion import DatosFuncion

class GestorDatosFuncion:
    
    datosFuncion = DatosFuncion()
    
    def preparaDatosFuncion(self, asiento, horario, pelicula):
        self.datosFuncion.setDatosFuncion(asiento, horario, pelicula)
        return self.datosFuncion