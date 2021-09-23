from BRIDGE_WHOLE_PART.bridge.ImplAbstractaMembresia import ImplAbstractaMembresia
from BRIDGE_WHOLE_PART.whole_part.DatosBeneficios import DatosBeneficios

class MembresiaVIP(ImplAbstractaMembresia):
    
    datosBeneficios = DatosBeneficios()
    
    def __init__(self):
        pass
    
    def completarMembresia(self, datos):
        super().completarMembresia(datos[:-1])
        self.datosBeneficios.setDatosBeneficios(datos[-1])
    
    def mostrarMembresia(self):
        print(
        f'''
        Reservación:
        
        Datos cliente:
            Nombres          : {self.datosCliente.nombres}
            Apellido paterno : {self.datosCliente.apellidoPaterno}
            Apellido materno : {self.datosCliente.apellidoMaterno}
            Edad             : {self.datosCliente.edad}
            Tipo de cliente  : {self.datosCliente.tipoCliente}
            
        Beneficios   : {self.datosBeneficios.beneficios}
            
        '''
        )