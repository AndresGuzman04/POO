from Animales import Animales
from Animales import kaiser
class Perro(Animales):
    pass
    def Comer(self):
        return "{} es un perro de raza {} y le gusta comer".format(self.nombre, self.raza)

perro1 = Perro(kaiser.nombre, kaiser.raza)
print (perro1.Comer())