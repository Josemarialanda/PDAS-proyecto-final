public class GestorDatosFuncion {
    //Atributos
    private static DatosFuncion datosFuncion = new DatosFuncion();

    //Constructor
    public GestorDatosFuncion(){}

    //Métodos
    static DatosFuncion preparaDatosFuncion(String asiento, int dia, int mes, int anio, String pelicula){
        datosFuncion.setDatosFuncion(asiento, dia, mes, anio, pelicula);
        return datosFuncion;
    }
}
