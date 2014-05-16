<html>
<head>
<title>Eric's Egypt Project</title>
<script type="text/javascript">
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET", "defhint.php?q=" + str, true);
  xmlhttp.send();
}
</script>

<style>
body
{
color:white;
</style>
</head>
<body background="img/xpyramid.png">
<center>
<div style="font-size:50px;color:blue">
Eric's Egyptian God/Goddess Dictionary!
</div>
</center>
<br>
<form method="get">
<center>
<div id="txtHint"></div>
<input type='text' name='search'size=40 style='height:40px;font-size:18px;' onkeyup="showHint(this.value)"/> 
<input type='submit' name='submit' value='Press for Definition' style='height:45px;width:160px;font-size:14px;font-style:bold;background-color:yellow;color:blue;'/>
</center>
</form>
<hr>
<div>
<?php

$answers = array(

	"amun" => array("Amun is shown wearing a ram's head, and its symbolic animal is a ram. A temple was built in Thebes to honor him. He was also considered one the most powerful gods, and when he combined with Ra, he was even more powerful.",
        "xamun.gif"),
	
	"anubis" => array("Anubis is the god of the dead and the embalming (meaning bring back alive). He's shown wearing the head of Jackal, and a Jackal is also Anubis's official animal. Priests also wore a Jackal head during mummification events, since Anubis was the god of the dead.",	
	"xanubis.gif"),

	
	"aten" => array("Aten is shown as a disk with rays, as which the end are hands. During the reign of Akhataten, he made the \"king\" of gods. His official city lies in Hermopolis.",
	"xaten.gif"),
	
	
	"atum" => array("Atum is the creator god. His name means \"the all\", or \"perfection\". He's called the creator god because he rose from the waters of Nun (Dark waters of chaos), and created one of the first gods, Shu and Tefnut. He wears a double crown",
	"xatum.gif"),
	
	
	"bastet" => array("Bastet is a protective goddess, meaning she protected the people, and the king. Her symbol is a cat and she wears a cat's head. Bastet was the daughter of Ra, and a temple was built in Bubastis to honor her.",
	"xbastet.gif"),
	
	
	"bes" => array("Bes is usually shown as an ugly dwarf, but he was believed to protect people against scorpion and snake bites. He was also the protector of babies, pregnent women, and family.",
	"xbes.gif"),                  
	
	
	"geb" => array("Geb is the god of the Earth, and is shown lying under Nut, the goddess of the sky. Geb and Nut are siblings and couples. He is the father of Osiris, Isis, Seth, and Nephthis. Some people believed that Geb's laughter were earthquakes.", 
	"xgeb.gif"),
        
	
	"hapy" => array("Hapy is the god of the Nile, and inundation. He is shown with a pot belly and a water plant on its head. Hapy brought floods to the Nile every year, so farmers could get there crops.",
	"xhapy.gif"),
	
	
	"hapi" => array("Hapi is the god of the Nile, and inundation. He is shown with a pot belly and a water plant on its head. Hapi brought floods to the Nile every year, so farmers could get there crops.",
	"xhapy.gif"),
	
	
	"hathor" => array("Hathor is the goddes of love and joy. She is sometimes thought as the mother of pharaohs. Her animal is the cow and is shown with the ears of a cow. She is married to Horus. Her temple was built in Dendra.",
	"xhathor.gif"),
	
	
	"horus" => array("Horus is shown wearing a hawk's head. He is married to Hathor. He is the god of the sky. His parents are Osiris and Isis. There was a temple built in Edfu to honor him. Horus was the most well known ruler of Egypt.",
	"xhorus.gif"),
	
	
	"isis" => array("Isis is the wife of Osiris and the mom of Horus. She is often seen with Horus on her lap. She wears a headdress the shape of a throne. She also is shown witha pair of cow horns and a sun disk on top.",
	"xisis.gif"),
	
	
	"khepri" => array("Khepri's symbolic animal is the Scarab Beetle and is shown wearing a Scarab Beetle hat. He is the god of creation, the movement of the sun, and rebirth.",
	"xkhepri.gif"),
	
	
	"khnum" => array("Khnum is shown as a curly-horned ram. He molded humans on a potter's wheel and created them. He is the god of the Inundation.",
	"xkhunum.gif"),


	"ma'at" => array("Ma'at is the goddess of truth, order, and justice. She has a feather on her head. She is associated with the balance of the Earth, making sure it is in balance. Her father is Ra, the sun god.",
	"xmaat.gif"),
	
	
	"maat" => array("Maat is the goddess of truth, order, and justice. She has a feather on her head. She is associated with the balance of the Earth, making sure it is in balance. Her father is Ra, the sun god.",
	"xmaat.gif"),
	
	
	"nephthis" => array("Nepthis is a protective goddess of the dead. She is the sister of Isis, Osiris, and Seth. She is the mom of Anubis. She wears a headdress with her name on it.",
	"xnephthis.gif"),
	
	
	"nephthys" => array("Nepthys is a protective goddess of the dead. She is the sister of Isis, Osiris, and Seth. She is the mom of Anubis. She wears a headdress with her name on it.",
	"xnephthis.gif"),
	
	
	"nun" => array("Nun is shown as a man carrying a boat, but is usually just dark waters of chaos and nothingness. It was the only thing on earth before land. He is associated with the chaos at the edge of the universe.",
	"xnun.gif"),
	
	
	"nut" => array("Nut is the goddess of the sky. Her body arches over her brother/husband, Geb. She is shown wearing stars on her body. She is the mom of Isis, Osiris, Seth, and Nephthis. They believed she swallowed Ra when the sun sets, and later rebirths him in the morning.",
	"xnut.gif"),
  	
	
	"osiris" => array("Osiris is the god of ressurection, fertility, and thegod of the dead, or the ruler of the underworld. He is shown as a mummified man wearing a white cone-like headdress with feathers. He is the brother/husband of Isis. He is also the brother of Seth, and Nephthis. They believed he gave the people barley. A temple was built in Abydos to honor him.",
	"xosiris.gif"),
	
	
	"ptah" => array("Ptah is the god of craftsmen. He is wrapped in a tight white cloak, carrying a staff. In a creation myth, he spoke the words, and the world came to be.",
	"xptah.gif"),
	
	
	"ra-harakhte" => array("Ra-harakhte is shown with a hawk's head, and wears a headdress with sun disks. He is a combination of Horus and Ra. Since Ra wasthe god of the sun and Horus was the god of the sky. They thought Ra-harakhte was the god of the rising-sun.",
	"xraharakhte.gif"),
	
	
	"raharakhte" => array("Raharakhte is shown with a hawk's head, and wears a headdress with sun disks. He is a combination of Horus and Ra. Since Ra wasthe god of the sun and Horus was the god of the sky. They thought Raharakhte was the god of the rising-sun.",
	"xraharakhte.gif"),
	
	
	"ra" => array("Ra is the god of the sun and has a hawk's head, with a headdress with sun disks. People belived that Ra was swallowed at night by Nut and later Nut will rebirth Ra in the mornung. They believed Ra was in ram form when he was in the underworld, after being swallowed by Nut.",
	"xraharakhte.gif"),
	
	
	"sekhmet" => array("Sekhmet is known as \"The Powerful One\". She is shown with the head of a lionness, with a white dress, and a yellow circle on top of her head. She is the goddess of war. ",
	"xsekhmet.gif"),
	
	
	"seshat" => array("Seshat is shown wearing a panther skin dress and a star headdress. Seshat is the goddess of writing and measurement.",
	"xseshat.gif"),

	
	"seth" => array("Seth is the god of chaos and represents anything that threatens harmony in Egypt. He is the brother of Isis and Osiris. He is also the brother/husband of Nephthys. He became ruler after he killed his brother Osiris, but Horus defeated Seth to regain his father's throne.",
	"xseth.gif"),

	
	"shu" => array("Shu wears a headdress with feathers. He is the god of the air. He helped hold up Nut so the earth and sky don't connect together.",
        "xshu.gif"),	

	
	"sobek" => array("Sobek is shown with the head of a crocodile. He wears a headdress with feathers and a sun disk. He is the god of the Nile. He was connected with the Nile, and protected the king. People kept live crocodiles in temples to honor him.",
	"xsobek.gif"),

	
	"tawaret" => array("Tawaret is shown with the head of a hippo. Arms and legs of a lion, back and tail of a crocodile, and stomach of a pregnent woman. She protected women who are pregnent or are in childbirth. People honored him in homes, not temples.",
	"xtawaret.gif"),

	
	"tefnut" => array("Tefnut is the god of moisture. She is shown with a lion head. Tefnut was one of the first goddesses around. She is the wife of Shu, and the mom of Nut and Geb.",
	"xsekhmet.gif"),

	
	"thoth" => array("Thoth is shown with an Ibis head, holding a palette. His animals are the Ibis and the Babboon. He is the god of writing and knowlegde. He was connected with the moon, and gave the gift of heiroglyphic writing.",
	"xthoth.gif")
	
 );

if ( isset($_GET['search']) ) {
  //echo $_GET['search'];
  $key = strtolower($_GET['search']);
  if ( !empty($answers[$key]) ) {
    echo "<table width=80% align='center'><tr>";
    echo "<td width=20% rowspan=2><img src='img/".$answers[$key][1]."' width=100% height=100%/></td>";
    echo "<td width=10% rowspan=2>&nbsp;</td>";
    echo "<td width=70% height=20% valign=top><h1>".ucfirst($key)."</h1></td>\n";
    echo "</tr>";
    echo "<tr>";
    echo "<td width=70% valign=top style='font-size:25px;'>".$answers[$key][0]."</td>";
    echo "</tr></table>\n";
  }
  else {
	  echo "derp";
  }
}
?>
</div>

<hr>
<div><u>Reference:</u></div>
<div>
<ul>
<li>Gods and Goddesses - Ancient Egypt<br>
http://www.ancientegypt.co.uk/gods/explore/main.html</li>
<li>Background image - <br>
http://www.dragoart.com/tuts/15284/1/1/how-to-draw-the-pyramids-of-giza,-pyramids-of-giza.htm</li>
</ul>
</div>

<?php include_once('../inc/footer.html'); ?>
</body>
</html>
