public interface IAtorizacionPago {
    //Atributos
    Reservacion reservacion = new Reservacion();
    DatosCompra datosCompara = new DatosCompra();
    DatosFuncion datosFuncion = new DatosFuncion();

    //Métodos
    void solicitaAutorizacionPago(Cargo cargo);
}
