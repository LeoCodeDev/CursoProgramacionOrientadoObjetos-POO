from car import Car
from account import Account

if __name__ == "__main__":
    print('Hola Mundo')


    car = Car("amd123", Account("leopoldo martinez", "01234"))
    print(vars(car))
    print(vars(car.driver))

    car2 = Car("intel451", Account("Daniel Martinez", "43210"))
    print(vars(car2))
    print(vars(car2.driver))