from datetime import date 

class DatosFuncion:
    
    asiento  : str
    horario  : date
    pelicula : str
    
    def setDatosFuncion(self, asiento,
                              horario,
                              pelicula):
        self.asiento  = asiento
        self.horario  = horario
        self.pelicula = pelicula