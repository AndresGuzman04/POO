class Estudiante:
    carrera = "Desarrollo de Software"
    def __init__(self, nombre, codigo):
        self.nombre = nombre
        self.codigo = codigo
    def InfoEstudiante(self):
        return "Estudiante: {} - {} - {}".format(self.nombre, self.codigo, Estudiante.carrera)

estudiante1 = Estudiante("Pedro", "u202201")
estudiante2 = Estudiante("Juan", "u202202")