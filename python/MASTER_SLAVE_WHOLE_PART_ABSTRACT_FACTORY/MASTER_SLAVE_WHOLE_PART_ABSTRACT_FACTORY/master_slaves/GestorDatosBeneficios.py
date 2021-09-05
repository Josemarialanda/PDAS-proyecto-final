from ..whole_part.DatosBeneficios import DatosBeneficios

class GestorDatosBeneficios:
    
    datosBeneficios = DatosBeneficios()
    
    def preparaDatosBeneficios(self, beneficios):
        self.datosBeneficios.setDatosBeneficios(beneficios)
        return self.datosBeneficios
