from Categorias import Categorias
from Categorias import accion
from Categorias import comedia
from Categorias import terror
from Peliculas import Peliculas

class Cliente(Peliculas, Categorias):
    def __init__(self, nombre):
        self.nombre = nombre
    
    def ListarCategoria(self, categoria):
        self.categoria = categoria

        if categoria == accion.categoria:
            return " Cliente: {} \n Categoria Seleccionada: \n {}".format(self.nombre, Peliculas.AccionLista())
        
        elif categoria == terror.categoria:
            return " Cliente: {} \n Categoria Seleccionada: \n {}".format(self.nombre, Peliculas.TerrorLista())
        
        elif categoria == comedia.categoria:
            return " Cliente: {} \n Categoria Seleccionada: \n {}".format(self.nombre, Peliculas.ComediaLista())
        
        else:
            return "Error"

cliente1 = Cliente("Pedro")
print (cliente1.ListarCategoria(accion.categoria))
