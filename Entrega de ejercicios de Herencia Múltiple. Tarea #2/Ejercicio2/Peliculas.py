from Categorias import Categorias 
from Categorias import accion
from Categorias import comedia
from Categorias import terror
class Peliculas(Categorias):
    scream = "Scream 6"
    johnWick = "Jhon Wick 4"
    superMario = "Super Mario Bros"
    def AccionLista():
        return (" {}: \n {}").format(accion.categoria, Peliculas.johnWick)
    def ComediaLista():
        return (" {}: \n {}").format(comedia.categoria, Peliculas.superMario)
    def TerrorLista():
        return (" {}: \n {}").format(terror.categoria, Peliculas.scream)

