class Car{
    constructor(license,driver,passenger){
        this.license = license
        this.driver = driver
        this.passenger = passenger
    }

    printDataCar(){
        console.log(this.driver)
        console.log(this.driver.name)
        console.log(this.driver.document)
    }
}