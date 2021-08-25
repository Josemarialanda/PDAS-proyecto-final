public class Reservacion {
    //Atributos
    private DatosCliente datosCliente;
    private DatosCompra datosCompra;
    private DatosFuncion datosFuncion;

    //Constructor
    public Reservacion(){}

    //Métodos
    public String mostrarReservacion(){
        return datosCliente.getDatosCliente() + datosCompra.getDatosCompra() + datosFuncion.getDatosFuncion();
    }

    public void setDatosCliente(DatosCliente dc){
        this.datosCliente = dc;
    }

    public void setDatosCompra(DatosCompra dcc){
        this.datosCompra = dcc;
    }

    public void setDatosFuncion(DatosFuncion df){
        this.datosFuncion = df;
    }
}
