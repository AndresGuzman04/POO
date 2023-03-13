class Materia:
    def __init__(self, nombre, codigo):
        self.nombre = nombre
        self.codigo = codigo
    def InfoMateria(self):
        return "Materia: {} - {}".format(self.nombre, self.codigo)

materia1 = Materia("Mate",1021)
materia2 = Materia("Progra", 1022)
materia3 = Materia("Metodos", 1023)