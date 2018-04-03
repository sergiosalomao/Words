<?php include 'cabecalho.php' ?>
<html>
<body >
        
<?php 
$nivel = 0;
$corretas = 0;
$erradas = 0;
$respondidas = 0;
$totalpalavras = 0;
$exp = 0;
$tempototal = 0;
$id = 0;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
};
if (isset($_GET['totalpalavras'])) {
    $totalpalavras = $_GET['totalpalavras'];
};
if (isset($_GET['respondidas'])) {
    $respondidas = $_GET['respondidas'];
};
if (isset($_GET['corretas'])) {
    $corretas = $_GET['corretas'];
};
if (isset($_GET['erradas'])) {
    $erradas = $_GET['erradas'];
};
if (isset($_GET['nivel'])) {
    $nivel = $_GET['nivel'];
};
if (isset($_GET['exp'])) {
    $exp = $_GET['exp'];
};
if (isset($_GET['tempototal'])) {
    $tempototal = $_GET['tempototal'];
};

?>

    <div class="container">

    <?php include 'menu.php' ?>

    <!-- Conteudo -->
    
  <div class="container">
    <p>Ensine Words as palavras que quer aprender!!</p> 
    <form method="post" action="salvaPalavras.php">
         <div class="form-group">
            <!-- cx ingles -->
              <textarea class="form-control campo-padrao" rows="5" id="cx-ingles" name="ingles" placeholder="Palavras em Ingles" >a
about
all
also
and
as
at
be
because
but
by
can
come
could
day
do
even
find
first
for
from
get
give
go
have
he
her
here
him
his
how
I
if
in
into
it
its
just
know
like
look
make
man
many
me
more
my
new
no
not
now
of
on
one
only
or
other
our
out
people
say
see
she
so
some
take
tell
than
that
the
their
them
then
there
these
they
thing
think
this
those
time
to
two
up
use
very
want
way
we
well
what
when
which
who
will
with
would
year
you
your</textarea>
       
    </div>

     <div class="form-group">
          <!-- cx portugues -->
          <textarea class="form-control campo-padrao" rows="5" id="cx-portugues" name="portugues" placeholder="Traducao das palavras acima" >uma
sobre
todos
tambem
e
como
a
estar
porque
mas
de
posso
venha
poderia
dia
faz
ate
encontrar
primeiro
para
a partir de
obter
dar
ir
ter
ele
dela
aqui
ele
dele
como
eu
e se
dentro
para dentro
isto
esta
somente
conhecer
gostar
veja
faco
homem
muitos
mim
mais
meu
novo
nao
nao
agora
do
em
1
so
ou
outros
nosso
fora
pessoas
dizer
vejo
ela
assim
alguns
levar
contar
do que
aquele
a
deles
eles
entao
ha
estes
eles
coisa
pensar
esta
essa
tempo
para
dois
acima
usar
muito
quer
caminho
nos
bem
o que
quando
qual
quem
vai
com
seria
ano
voce
seu</textarea>
    </div>
        <button id="gravar" type="submit" class="btn btn-success btn-sm">Gravar</button>
        <button type="button" class="btn btn-secondary btn-sm" onclick="history.back(1)">Voltar</button>
    </form>
    
</div> <!--container-->
  <!-- arquivos Boootstrap -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>