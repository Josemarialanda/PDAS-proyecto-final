import java.util.Date;
import java.util.GregorianCalendar;

public class DatosCompra{
    //Atributos
    private String numeroTarjeta;
    private Date fechaVencimiento;

    //Contructor
    public DatosCompra(){}

    //Métodos
    public void setDatosCompra(String numTarjeta, int dia, int mes, int anio){
        this.numeroTarjeta = numTarjeta;
        GregorianCalendar cal = new GregorianCalendar(anio, mes-1, dia);
        fechaVencimiento = cal.getTime();
    }

    public String getDatosCompra(){
        return "\nINFORMACION DE COMPRA | NUMERO DE TARJETA: " + numeroTarjeta + " | FECHA DE VENCIMIENTO: " + fechaVencimiento; 
    }
}
