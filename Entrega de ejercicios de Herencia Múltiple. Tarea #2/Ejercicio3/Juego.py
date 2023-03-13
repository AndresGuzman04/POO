from Jugador1 import Jugador1
from Jugador1 import pooh
from Jugador2 import Jugador2
from Jugador2 import goku
class Juego(Jugador2, Jugador1):
    def __init__(self):
        pass
    def Golpea(self, jugador):
        self.jugador = jugador

        if jugador == pooh.nombre:
            goku.vida = goku.vida - 30
            return (" {} {}% ------ {} {}%").format(pooh.nombre, pooh.vida, goku.nombre, goku.vida)
        elif jugador == goku.nombre:
            pooh.vida = pooh.vida - 30
            return (" {} {}% ------ {} {}%").format(goku.nombre, goku.vida, pooh.nombre, pooh.vida)
        else:
            return "Error"

juego1 = Juego()

print (juego1.Golpea(pooh.nombre))
