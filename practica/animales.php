<?php
    class Animal{
        public function roar(){
            echo "El";
        }
        public function abecedario(){
            echo "abcd";
        }
    }

    class Gato extends Animal{
        public $nombre;
        public function __construct($nombre){
            $this->nombre = $nombre;
        }
        public function roar(){
            echo $this->nombre."Miaguea, Miau!!";
        }
    }

    class Perro extends Animal{
        public $nombre;
        public function __construct($nombre){
            $this->nombre=$nombre;
        }
        public function roar(){
            echo $this->nombre."Ladra, Wau!";
        }
    }

    class Vaca extends Animal{
        public $nombre;
        public function __construct($nombre){
            $this->nombre=$nombre;
        }
        public function roar(){
            echo $this->nombre."Le hace MU!!";
        }
    }
    class abecedario extends Animal{
        public $nombre;
        public function __construct($nombre){
            $this->nombre=$nombre;
        }
        public function roar(){
            echo $this->nombre.": a, b, c, d, e, f, g, h, i, j, k, l, m, n, ñ, o, p, q, r, s, t, u, v, w, x, y, z";
        }
    }

    function roarAnimal(Animal $animal){
        $animal->roar();
    }

    $gato = new Gato("gato");
    $perro = new Perro("perro");
    $vaca = new Vaca("vaca");
    $abecedario = new abecedario("Abecedario:");

if (isset($_POST['gato'])) {
?>
<script>
    var msg = new SpeechSynthesisUtterance("<?php roarAnimal($gato) ?>")
    window.speechSynthesis.speak(msg);
</script>
<?php
}
else if (isset($_POST['perro'])) {
?>
<script>
    var msg = new SpeechSynthesisUtterance("<?php roarAnimal($perro) ?>")
    window.speechSynthesis.speak(msg);
</script>
<?php
}
else if (isset($_POST['vaca'])) {
?>
<script>
    var msg = new SpeechSynthesisUtterance("<?php roarAnimal($vaca) ?>")
    window.speechSynthesis.speak(msg);
</script>
<?php
}
else if (isset($_POST['abecedario'])) {
    ?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php roarAnimal($abecedario) ?>")
        window.speechSynthesis.speak(msg);
    </script>
    <?php
    }
    ?>