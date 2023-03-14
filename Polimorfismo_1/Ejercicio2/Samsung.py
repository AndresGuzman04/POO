from Smartphone import Smartphone

class Samsung(Smartphone):
    pass
    def VerFacebook(self):
        return "Estas viendo facebook en un {} de ${}".format(self.modelo, self.precio)

s10plus = Samsung("S10 Plus", 420)
print(s10plus.VerFacebook())