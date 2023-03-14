class Animales:
    def __init__(self, nombre, raza):
        self.nombre = nombre
        self.raza = raza
    def Comer(self):
        return "Los animales comen"

pancho = Animales("pancho", "Angora")

kaiser = Animales("Kaiser", "Aguacatero")