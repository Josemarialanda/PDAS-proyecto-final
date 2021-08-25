public class GestorReservacion {
    //Atributos
    private Reservacion reservacionSala = new Reservacion();
    DatosCliente datosCliente; 
    DatosCompra datosCompra;
    DatosFuncion datosFuncion;

    //Constructor 
    public GestorReservacion(){
        //invocaSubordinados(nombre, apellidoP, apellidoM, edad, tipoC, numTarjeta, diaC, mesC, anioC, asiento, dia, mes, anio, pelicula);
    }

    //Métodos
    public void invocaSubordinados(String nombre, String apellidoP, String apellidoM, int edad, String tipoC, String numTarjeta, int diaC, int mesC, int anioC, String asiento, int dia, int mes, int anio, String pelicula){
        datosCliente = GestorDatosCliente.preparaDatosCliente(nombre, apellidoP, apellidoM, edad, tipoC); 
        datosCompra = GestorDatosCompra.preparaDatosCompra(numTarjeta, diaC, mesC, anioC);
        datosFuncion = GestorDatosFuncion.preparaDatosFuncion(asiento, dia, mes, anio, pelicula);
        
        creaReservacion();

        ProxyAutorizacionPago pago = new ProxyAutorizacionPago();
        pago.preparaCargo(datosFuncion);
        boolean resultado = pago.verificacionCargo();
        if(resultado == true){
            System.out.println("RESERVACION EXITOSA");
        }
        else{
            System.out.println("LA RESERVACION FALLO");
        }
    }
    
    public Reservacion unirResultados(){
        return reservacionSala;
    }

    public void creaReservacion(){
        reservacionSala.setDatosCliente(datosCliente);
        reservacionSala.setDatosCompra(datosCompra);
        reservacionSala.setDatosFuncion(datosFuncion);

    }
}
