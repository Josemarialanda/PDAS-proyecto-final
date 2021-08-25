public class GestorDatosCompra{
    //Atributos
    private static DatosCompra datosCompra = new DatosCompra();

    //Constructor
    public GestorDatosCompra(){}
    
    //Métodos
    static DatosCompra preparaDatosCompra(String numTarjeta, int diaC, int mesC, int anioC){
        datosCompra.setDatosCompra(numTarjeta, diaC, mesC, anioC);
        return datosCompra;
    }
}
