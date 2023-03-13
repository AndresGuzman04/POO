from Estudiante import Estudiante
from Estudiante import estudiante1
from Estudiante import estudiante2
from Materias import Materia
from Materias import materia1
from Materias import materia2
from Materias import materia3

class Notas(Estudiante, Materia):
    def __init__(self):
        pass
    def AgregarNotas(self, estudiante, materia, laboratorio, parcial):
        self.estudiante = estudiante
        self.materia = materia
        self.labortorio = laboratorio
        self.parcial = parcial

        notaFinal = laboratorio * .60 + parcial * .40

        return "{} \n {} \n Laboratorio: {} \n Parcial: {} \n Nota Final: {}\n".format(estudiante, materia, laboratorio, parcial, notaFinal)

notasCiclo1 = Notas()
print(notasCiclo1.AgregarNotas(estudiante1.InfoEstudiante(), materia1.InfoMateria(), 8, 8))
print(notasCiclo1.AgregarNotas(estudiante1.InfoEstudiante(),materia2.InfoMateria(), 5, 10))

