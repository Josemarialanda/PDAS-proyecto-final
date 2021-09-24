from ABSTRACT_FACTORY_DECORATOR.reservacion.DatosFuncion import DatosFuncion
from ABSTRACT_FACTORY_DECORATOR.reservacion.DatosCompra import DatosCompra
from ABSTRACT_FACTORY_DECORATOR.reservacion.DatosCliente import DatosCliente
from ABSTRACT_FACTORY_DECORATOR.reservacion.Reservacion import Reservacion


class ReservacionSencilla(Reservacion):

    def __init__(self, datos) -> None:
        datosCliente  = DatosCliente()
        datosCliente.setDatosCliente(datos[0],datos[1],datos[2],datos[3],datos[4])
        datosCompra   = DatosCompra()
        datosCompra.setDatosCompra(datos[5],datos[6])
        datosFuncion = DatosFuncion()
        datosFuncion.setDatosFuncion(datos[7],datos[8],datos[9])
        super().__init__([datosCliente,datosCompra,datosFuncion])
    
    def mostrarReservacion(self):
        super().mostrarReservacion() 