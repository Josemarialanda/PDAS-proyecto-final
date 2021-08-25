import java.util.Date;
import java.util.GregorianCalendar;

public class DatosFuncion {
    //Atributos
    private String asiento;
    private Date hora;
    private String pelicula;

    //Constructor
    public DatosFuncion(){}

    //Métodos
    public void setDatosFuncion(String asiento, int dia, int mes, int anio, String pelicula){
        this.asiento = asiento;
        GregorianCalendar cal = new GregorianCalendar(anio, mes-1, dia);
        hora = cal.getTime();
        this.pelicula = pelicula;
    }

    public String getDatosFuncion(){
        return "\nDATOS DE LA FUNCION | ASIENTO: " + asiento + " | HORA: " + hora + " | PELICULA: " + pelicula;
    }
}
