from Animales import Animales
from Animales import pancho
class Gato(Animales):
    pass
    def Comer(self):
        return "{} es un gato de raza {} y le gusta comer".format(self.nombre, self.raza)

gato1 = Gato(pancho.nombre, pancho.raza)
print (gato1.Comer())