<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Povesti</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../tehnweb/lab3.css">
</head>
<body>
<div class="header">
  <h1>Povești de Ion Creangă</h1>
  <p>Descoperă lumea minunată a poveștilor</p>
</div>
<nav>
<div class="nav-center">
<div class="nav-header">
<button class="nav-toggle"><i class="fas fa-bars"></i></button>
</div>
<ul class="links">
  <li>
  <a href="../tehnweb/ex.html">Acasă</a>
  </li>
  <li>
  <a href = "https://www.youtube.com/watch?v=HFCL3Jh4FaU" target="_blank"> Videoclipul poveștii </a>
  </li>
  <li>
  <a href="../tehnweb/tehnweb1/rezumat.html" target = "_blank">Rezumatul poveștii </a>
  </li>
</ul>
</div>
</nav>
<div class="row">
  <div class="side">
    <h2>Despre Ion Creangă</h2>
    <a href="https://ro.wikipedia.org/wiki/Ion_Creangă" target="_blank">

<img src="../tehnweb/tehnweb1/ion.jpg" alt = "Ion Creanga" style="float:left">
</a>
    <p>Data nașterii lui Ion Creangă este incertă. El însuși afirmă în Fragment de biografie că s-ar fi născut la 1 martie 1837. O altă variantă o reprezintă data de 10 iunie 1839, conform unei mitrici (condici) de nou-născuți din Humulești, publicată de Gh. Ungureanu.[6]

        Creangă a mai avut încă șapte frați și surori: Zahei, Maria, Ecaterina, Ileana, Teodor, Vasile și Petre. Ultimii trei au murit în copilărie, iar Zahei, Maria și Ileana în 1919.
        
        Tinerețea lui Creangă este bine cunoscută publicului larg prin prisma operei sale capitale Amintiri din copilărie. În 1847 începe școala de pe lângă biserica din satul natal. Fiu de țăran, este pregătit mai întâi de dascălul din sat, după care mama sa îl încredințează bunicului matern ("tatăl mamei, bunicu-meu David Creangă din Pipirig"), David Creangă, care-l duce pe valea Bistriței, la Broșteni, unde continuă școala. În 1853 este înscris la Școala Domnească de la Târgu Neamț sub numele Ștefănescu Ion, unde îl are ca profesor pe părintele Isaia Teodorescu (Popa Duhu). După dorința mamei, care voia să-l facă preot, este înscris la Școala catihetică din Fălticeni ("fabrica de popi"). Aici apare sub numele de Ion Creangă, nume pe care l-a păstrat tot restul vieții. După desființarea școlii din Fălticeni, este silit să plece la Iași, absolvind cursul inferior al Seminarului teologic "Veniamin Costachi" de la Socola.</p>
      </div>
      <div class='tabel'>
        <table>
    <tr>
        <th> Alte povesti </th>
        <th> Anul publicării </th>
        <th> Imagine </th>
    </tr>
    <tr>
        <td><a href="https://www.povesti-pentru-copii.com/ion-creanga/punguta-cu-doi-bani.html" target="_blank"> Punguța cu doi bani </a></td>
        <td> 1875 </td>
        <td><img src="../tehnweb/tehnweb1/punguta.jpg" width = "200" height= "200" alt = "puguta cu doi bani"></img></td>
    </tr>
    <tr>
        <td><a href="https://www.povesti-pentru-copii.com/ion-creanga/capra-cu-trei-iezi.html"target="_blank"> Capra cu trei iezi </td>
        <td> 1875 </td>
        <td> <img src="../tehnweb/tehnweb1/capra.jpg"width = "200" height= "200" alt = "capra"> </img></td>
    </tr>
    <tr>
        <td><a href="https://www.povesti-pentru-copii.com/ion-creanga/ivan-turbinca.html"target="_blank"> Ivan Turbincă </td>
        <td> 1878 </td>
        <td><img src ="../tehnweb/tehnweb1/ivan1.jpg" width = "200" height= "200" alt = "ivan turbinca"  ></img></td>
    </tr>
</table>
  </div>
  </div>
  <div class='button'>
    <button onclick="toggle()" id="sideButton">Doresc sa ascund povestea</button>
  </div>
  <div class="main" id ='main'>
    <h1 style="text-align:center;"> Păcală</h1>
    <h5 style = "text-align:center;">de Ion Creangă</h5>
    <p id ='image'>Personajul principal al povestii</p>
    <img src="../tehnweb/tehnweb1/pacala.jpg"alt="Pacala" style="float:left"onmouseover = "display(this)" onmouseout = "revert()">
    <p> Un negustor, umblând prin mai multe sate şi oraşe, ca să cumpere grâu, păpuşoi şi altele, într-o zi ajunse la un pod şi când era să treacă văzu un om care se odihnea acolo: acesta era Păcală. Negustorul, voind să afle ceva de la el, ca orice negustor, se apropie de dânsul şi-l întrebă:</p>
    <p> – De unde eşti, măi creştine?</p>

    <p>– Ia din sat de la noi, răspunse Păcală.</p>

    <p>– Din care sat de la voi?</p>

    <p>– Iaca de acolo, tocmai de sub acel mal, arătând negustorului cu mâna spre un deal. </p>

    <p>– Bine, dar ce sat e acela? Eu nu-l ştiu.</p>

    <p>– Ei! cum să nu-l ştii; e satul nostru, şi eu de acolo vin.</p>

    <p>– Nu aşa, măi prostule. Eu te-ntreb: acel sat pe a cui moşie este şi cum îi botezat?</p>

   <p>– Doamne! da’ nu ştii că moşiile sunt boiereşti şi asta-i a cuconului nostru, ce şede la Bucureşti? Iar satu-l botează popa într-o căldăruşă cu apă, cum îi scrie lui în cărţi.</p> 

    <p>Negustorul, privindu-l lung, zise în sine: Mă! aista-i chiar Păcală.</p>

    <p>– Dar cum te cheamă pe tine?</p>

    <p>– Iaca! ce mă întreabă. Mă cheamă ca pe oricare: vină-ncoace, ori vin-aici!

    Negustorul începu a-şi face cruce ca de naiba şi iar îl întrebă:</p>

    <p>– Dar cu chemarea împreună cum te mai strigă?</p>

    <p>– Iaca aşa: vino! u! mă! răspunse Păcală.</p>

   <p> Negustorul începu atunci a râde şi zise: ce prost! Apoi îl mai întrebă:</p>

    <p>– Dar ce bucate se fac acolo la voi?</p>

    <p>– Mai mult terciu cu mămăligă mâncăm, zise Păcală.</p>

    <p>– Înţelege-mă, prostule! Nu te întreb de bucate ferte.

        – D-apoi de care bucate mă-ntrebi?</p>

   <p> – Te-ntreb dacă s-au făcut la voi grâu, orz şi altele.</p>

   <p> – Da, s-au făcut până la brâu, răspunse Păcală.</p>

    <p>– Nu te-ntreb de înălţime, că doar n-am nevoie de paie pentru boi, ci aş voi să ştiu ce feliu este la voi grăuntele orzului.</p>

    <p>– Să-ţi spun, dacă nu ştii, zise Păcală. Grăuntele orzului este lungăreţ, îmbrăcat c-o coajă cam gălbie şi c-o ţapă în vârf.</p>

    <p>– Bine, ştiu de astea; dar spune-mi ce fel se vinde, că aş voi să cumpăr şi eu.</p>

    <p>– De! nu ştii dumnia-ta ce fel? Unul dă grâul ori orzul, şi altul îi dă bani: galbeni, napoleoni ori altăceva.</p>

    <p>– Nu mă-nţeleseşi nici asta; eu te-ntreb: cum se dă?</p>

    <p>– Bre! Nici asta n-o ştii. Să-ţi spun eu: iei baniţa ori dimerlia şi pui în ea pân-o umpli cu vârf, apoi cu coada lopeţii o razi ş-o torni în sac, pe urmă iarăşi o umpli şi tot asemine faci.</p>

    <p>– Eu nu te-ntreb asta, om fără cap ce eşti!</p>

    <p>– Dar ce fel mă-ntrebi? zise Păcală.</p>

    <p>– Cu ce preţ se vinde chila ori baniţa; câţi lei?</p>

    <p>- Aşa cum te-nvoieşti; şi câţi lei dai atâta iei.</p>

    <p>Negustorul, supărat, îl mai întrebă:</p>

    <p>– Neghiobi ca tine mai sunt acolo-n sat?</p>

    <p>– U! hu! este badea Muşat, badea Stan, Neagu, Voicu, Florea, Soare, badea Bran, Coman şi alţii.</p>

    <p>– Ho! mă, destul! Dar cine este mai mare decât toţi la voi în sat?</p>

    <p>– Cine-i mai mare? Badea Chiţu; el este mai nalt decât toţi; e atât de lung, încât mai n-ajungi cu mâna la umărul său.</p>

    <p>– Bre! proastă lighioaie mai eşti! Nu te-ntreb aşa.</p>

    <p>– Dar cum? zise Păcală.</p>
    

    <p>– Eu îţi zic: pe cine ascultaţi voi aici în sat?</p>

    <p>– I! ha! auzi vorbă! Ascultăm pe lăutarul moş Bran; când începe să cânte, tot satul stă cu ochii şi urechile ţintă la el.</p>

    <p>– Nu zic aşa, măi nătărăule! Răspunde-mi odată cum te-ntreb.</p>

    <p>– Ei, cum?</p>

    <p>– Eu te-ntreb de cine aveţi frică aici în sat mai mult.</p>

    <p>– Văleu, maică! Ia, de buhaiul lui moş popa, mare frică mai avem, mămulică. Când vine sara de la păscut, fugim de el care încotro apucăm; că atât e de înfricoşat, de gândeşti că e turbat; când începe să mugească, sparie chiar şi copiii din sat.</p>

    <p>– Mă! da’! ce namilă de om eşti tu? Nu cumva eşti vrun duh rău, frate cu Mează-noapte sau cu Spaima-pădurei?</p>

    <p>– Ei, Doamne! De ce mă-ntrebi, când mă priveşti? Ce? Nu mă vezi că-s om ca şi dumniata: cu cap, cu ochi, gură, nas, mâni şi cu picioare, mă mişc şi mă uit ca toţi.</p>

    <p>– Aşa te văd şi eu, dar ai minte şi simţire abia ca un dobitoc. Ia spune-mi, zău: aveţi butnari sau dogari în sat la voi?</p>

    <p>– Avem.</p>

    <p>– Na cinci bani, şi du-te să-ţi puie doagele ce-ţi lipsesc.</p>

    <p>Prostia din născare, leac în lume nu mai are; ea este o uricioasă boală, ce nu se vindecă în şcoale, ba nici în spitale.

</p>
  </div>
</div>

<div class="footer">
  <h2>Contact</h2>
  <p>mihail.ghimp@iis.utm.md</p>
</div>
<script src="../tehnweb/lab3.js"></script>
</body>
</html>
