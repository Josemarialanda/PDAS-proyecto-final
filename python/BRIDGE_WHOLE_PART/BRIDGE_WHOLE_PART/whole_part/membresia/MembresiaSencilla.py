from BRIDGE_WHOLE_PART.bridge.ImplAbstractaMembresia import ImplAbstractaMembresia

class MembresiaSencilla(ImplAbstractaMembresia):
    
    def __init__(self):
        pass

    def completarMembresia(self, datos):
        super().completarMembresia(datos)
    
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
        '''
        )