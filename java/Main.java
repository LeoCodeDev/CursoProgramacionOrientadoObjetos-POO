class Main {
    public static void main(String[] args) {
        System.out.println("Hola Mundo");
        UberX uberX = new UberX("AMQ123", new Account("leopoldo martinez", "005512282"),"Frod", "Raptor");
        uberX.setPassenger(4);
        uberX.printDatacar();
        
        UberVan uberVan = new UberVan("XRT-450", new Account("Samantha Martinez", "v42052891"));
        uberVan.setPassenger(6);
        uberVan.printDatacar();

        Car car2 = new Car("VDS077", new Account("vericar de Espiritu Santo", "20770147"));
        car2.passenger = 4;
        car2.printDatacar();
    }
}