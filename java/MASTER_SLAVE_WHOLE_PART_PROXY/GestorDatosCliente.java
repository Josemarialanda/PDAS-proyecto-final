public class GestorDatosCliente {
    //Atributos
    private static DatosCliente datosCliente = new DatosCliente();

    //Constructor
    public GestorDatosCliente(){}

    //Métodos
    static DatosCliente preparaDatosCliente(String nombre, String apellidoP, String apellidoM, int edad, String tipoC){
        datosCliente.setDatosCliente(nombre, apellidoP, apellidoM, edad, tipoC);
        return datosCliente;
    }
}
