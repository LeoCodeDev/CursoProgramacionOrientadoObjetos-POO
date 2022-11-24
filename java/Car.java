public class Car {
    protected String license;
    protected Account driver;
    protected Integer passenger;

    public Car(String license, Account driver){
        this.license = license;
        this.driver = driver;
    }

    void printDatacar() {
        if(passenger == 4){
            System.out.println(
                "license " + license +
                ", driver " + driver.name +
                "Passengers:" + passenger);
        }
    }

    public Integer getPassenger(){
        return passenger;
    }

    public void setPassenger( Integer passenger){
        if(passenger == 4){
            this.passenger = passenger;
        }else{
            System.out.println("Necesitas asignar 4 pasajeros");
        }
    }

    public String getLicense() {
        return license;
    }

    public void setLicense(String license) {
        this.license = license;
    }

    public Account getDriver() {
        return driver;
    }

    public void setDriver(Account driver) {
        this.driver = driver;
    }

    
}
