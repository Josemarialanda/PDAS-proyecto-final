from ..whole_part.DatosCompra import DatosCompra

class GestorDatosCompra:
    
    datosCompra = DatosCompra()
    
    def preparaDatosCompra(self, numeroTarjeta, fechaVencimiento) -> DatosCompra:
        self.datosCompra.setDatosCompra(numeroTarjeta, fechaVencimiento)
        return self.datosCompra