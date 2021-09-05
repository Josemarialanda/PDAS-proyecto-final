from ..whole_part.DatosCliente import DatosCliente

class GestorDatosCliente:
    
    datosCliente = DatosCliente()
    
    def preparaDatosCliente(self, nombres, apellidoPaterno,
                                  apellidoMaterno, edad,
                                  tipoCliente):
        self.datosCliente.setDatosCliente(nombres, apellidoPaterno,
                                    apellidoMaterno, edad, tipoCliente)
        return self.datosCliente