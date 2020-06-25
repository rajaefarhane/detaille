<script language="javascript">
var valeur=1;
function modifier(increment) {

    valeur+=increment;
    document.getElementById('text').value=valeur;
    document.getElementById('text').value=valeur;


}
function somme(){
       var nbr1, nbr2, sum;
       var prix=6;
       nbr1 = Number(document.getElementById('totale').value);
       nbr2 = Number(document.getElementById('nbr').value);
       sum = (prix * nbr2);
       document.getElementById('totale').innerHTML = sum;

   }
</script>
<script language="javascript">

function recherch() {
      document.getElementById("imagerech").style.display = "none";
      document.getElementById("barre").style.display = "block";
      var span = document.getElementById('navbare') // L'élément du DOM
span.style.fontSize = '15px' // Font-size à 15px


    }

</script>
<script language="javascript">

function ouvrirFermerSpoiler() {
      document.getElementById("panier").style.display = "block";
      document.getElementById("textpanier").style.display = "none";

    }


</script>
<script language="javascript">


function suivant() {
            var str = document.getElementById("numero2").innerHTML;
            var res = str.replace(/22/gi, "21");
            document.getElementById("numero2").innerHTML = res;

            var str1 = document.getElementById("nomdepa3").innerHTML;
            var res1 = str1.replace(/Les côtes d'armor/gi, "la Côte-d’Or");
            document.getElementById("nomdepa3").innerHTML = res1;

            var str2 = document.getElementById("departementttslider").innerHTML;
            var res2 = str2.replace(/21/gi, "20");
            document.getElementById("departementttslider").innerHTML = res2;

            var str3 = document.getElementById("nomdepa2").innerHTML;
            var res3 = str3.replace(/la Côte-d’Or/gi, "La Seine et Marne");
            document.getElementById("nomdepa2").innerHTML = res3;

            var str4 = document.getElementById("numero1").innerHTML;
            var res4 = str4.replace(/20/gi, "19");
            document.getElementById("numero1").innerHTML = res4;

            var str5 = document.getElementById("nomdepa1").innerHTML;
            var res5 = str5.replace(/La Seine et Marne/gi, "Corrèze");
            document.getElementById("nomdepa1").innerHTML = res5;
}
function precedent() {
            var str = document.getElementById("numero2").innerHTML;
            var res = str.replace(/21/gi, "22");
            document.getElementById("numero2").innerHTML = res;

            var str1 = document.getElementById("nomdepa3").innerHTML;
            var res1 = str1.replace(/la Côte-d’Or/gi, "Côtes-d'Armor");
            document.getElementById("nomdepa3").innerHTML = res1;

            var str2 = document.getElementById("departementttslider").innerHTML;
            var res2 = str2.replace(/20/gi, "21");
            document.getElementById("departementttslider").innerHTML = res2;

            var str3 = document.getElementById("nomdepa2").innerHTML;
            var res3 = str3.replace(/La Seine et Marne/gi, "la Côte-d’Or");
            document.getElementById("nomdepa2").innerHTML = res3;

            var str4 = document.getElementById("numero1").innerHTML;
            var res4 = str4.replace(/19/gi, "20");
            document.getElementById("numero1").innerHTML = res4;

            var str5 = document.getElementById("nomdepa1").innerHTML;
            var res5 = str5.replace(/Corrèze/gi, "La Seine et Marne");
            document.getElementById("nomdepa1").innerHTML = res5;
}

</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
