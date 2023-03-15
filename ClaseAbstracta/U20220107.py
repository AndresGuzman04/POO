from abc import ABC, abstractmethod


class Andres(ABC):
    nombre = "Andres"
    carrera = "Software"

    @abstractmethod
    def Estudiar(self):
        pass
    @abstractmethod
    def JugarFutbol(self):
        pass

class Lunes(Andres):
    pass
    def Estudiar(self):
        return "El lunes {} Estudia {} a las 10:40 AM".format(self.nombre, self.carrera)
    def JugarFutbol(self):
        return "El lunes {} Juega Fubol a las 04:00 PM".format(self.nombre)

class Miercoles(Andres):
    pass
    def Estudiar(self):
        return "El miercoles {} Estudia {} a las 10:40 AM".format(self.nombre, self.carrera)
    def JugarFutbol(self):
        return "El miercoles {} Juega Fubol a las 04:00 PM".format(self.nombre)
    
class Domingo(Andres):
    pass
    def Estudiar(self):
        return "El domingo {} Estudia {} a las 07:00 AM".format(self.nombre, self.carrera)
    def JugarFutbol(self):
        return "El domingo {} Juega Fubol a las 12:00 del medio dia".format(self.nombre)
    
lunes1 = Lunes()
print(lunes1.Estudiar() + "\n" + lunes1.JugarFutbol())

miercoles1 = Miercoles()
print(miercoles1.Estudiar() + "\n" + miercoles1.JugarFutbol())

domingo1 = Domingo()
print(domingo1.Estudiar() + "\n" + domingo1.JugarFutbol())