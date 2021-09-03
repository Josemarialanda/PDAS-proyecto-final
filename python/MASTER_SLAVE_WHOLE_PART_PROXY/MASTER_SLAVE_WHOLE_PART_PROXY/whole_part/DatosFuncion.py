from datetime import date 

class DatosFuncion:
    
    asiento  : str
    horario  : date
    pelicula : str
    
    def setDatosFuncion(self, asiento : str,
                              horario : date,
                              pelicula : str):
        self.asiento  = asiento
        self.horario  = horario
        self.pelicula = pelicula