const car = new Car('AMD017',new Account(015,'Leopoldo Martinez', '005512273', 'alb.mar.cta@gmail.com','******'),5)

const uber = new UberX('DFX-032',new Account(012,'Vericar De Espiritu Santo','120956','veri1206@gmail.com','********'),'Ford','Raptor')
uber.passenger = 4

car.printDataCar()
uber.printDataCar()
