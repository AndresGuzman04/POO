from Smartphone import Smartphone

class Iphone(Smartphone):
    pass
    def VerFacebook(self):
        return "Estas viendo facebook en un {} de ${}".format(self.modelo, self.precio)
    
iphonex = Iphone("Iphone X", 230)

print(iphonex.VerFacebook())