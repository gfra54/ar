<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Australia(n)-Rules | Mathieu Buzon</title>
        <meta charset="utf-8">
        <meta name="description" content="Australia(n)-Rules - Au travers d'un périple de plus de 30 000 km, l'auteur vous entraine dans un voyage qui débutera dans le sud-est de l'Australie pour finir au même endroit, un an plus tard." />
        <link rel="Shortcut Icon" type="image/ico" href="img/favicon.png" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />

		<script src="js/mootools-core-1.4.0-full-compat-yc.js" type="text/javascript"></script>
		<script src="js/mootools-more-1.4.0.1.js" type="text/javascript"></script>

		<meta property="og:title" content="Australia(n)-Rules | Mathieu Buzon" />
		<meta property="og:url" content="http://www.australian-rules.com/" />
		<meta property="og:type" content="book" />
		<meta property="og:author" content="Mathieu Buzon" />
		<meta property="og:image" content="http://www.australian-rules.com/img/australian_rules_buzon.jpg" /> 
		<SCRIPT language="Javascript">
			function validSaisie() {
				document.formSaisie.address_override.value = 0;
				if(document.formSaisie.first_name.value == "" || document.formSaisie.last_name.value == ""){
					alert("Veuillez remplir vos nom et prénom.");
					return false;
				}
				if(document.formSaisie.os0.value == "Livre + Livraison"){
					document.formSaisie.address_override.value = 1;
					if(document.formSaisie.address1.value == "" || document.formSaisie.zip.value == "" ||
						document.formSaisie.city.value == "" || document.formSaisie.country.value == "") {
						alert("Veuillez remplir tous les champs nécessaire à l'envoi postal.");
						return false;
					}
				}
				if(document.formSaisie.os0.value == "Format Electronique PDF"){
					if(document.formSaisie.email.value == ""){
						alert("Veuillez remplir le champ e-mail nécessaire à l'envoi électronique.");
						return false;
					}
					
				}
				/*if (confirm("Bonjour et merci d'être parvenu jusqu'ici!\n\nActuellement en vacances, je ne prendrai connaissance de votre commande que lundi 20 août. \nSoyez assurés que dès mon retour, je vous expédierai le livre (papier et PDF sont concernés). \nSi toutefois, vous préférez passer votre commande plus tard, cliquez sur Annuler.\n\nMerci de votre compréhension et votre patience."))
					return true;
				else return false;
				*/
				return true;
			} 
		</SCRIPT> 
		<script language="JavaScript">
			var bauto = 0;
			var dossier="img/diaporama/";
			var numero = 1;
			function objet() {
				this.length = objet.arguments.length
				for (var i = 0; i < this.length; i++) this[i+1] = objet.arguments[i]
			}
			//var nom = new objet ("Aborigenes.JPG","Kangourous.jpg","BaieSydney.JPG");
			
			var nom = new objet (
					"PoiresPicking.JPG", 
					"CoteEstTasmanie.JPG", 
					"ChezJohn.JPG", 
					"Kangourous.jpg", 
					"Koala.jpg", 
					"LesDouzeApotres.jpg", 
					"LondonBridge.JPG", 
					"BaieSydney.JPG", 
					"BaieSydney2.JPG", 
					"WentworthFalls.JPG",
					"Nimbin.JPG", 
					"Brisbane.JPG",
					"Maheno.jpg", 
					"RainbowBeach.jpg", 
					"TownOf1770.jpg",
					"SouthMolleIsland2.jpg", 
					"SouthMolleIsland3.jpg", 
					"SouthMolleIsland.JPG", 
					"MillaMillaFalls2.JPG", 
					"CapeTribulation.jpg", 
					"MontsOlgas2.JPG", 
					"Uluru3.JPG", 
					"Aborigenes.JPG", 
					"DevilsMarbles.JPG",
					"Outback.JPG", 
					"Outback3.JPG", 
					"ChampTermitieres.JPG",
					"Outback4.JPG", 
					"Outback9.JPG", 
					"Outback2.JPG",
					"CrocoKakadu.JPG", 
					"Termitiere.JPG", 
					"BungleBungle.JPG",
					"KalbarriNP.jpg",
					"Perth2.jpg",
					"PerthEclair.jpg",					
					"SharkBay.jpg", 
					"MonkeyMia.jpg", 
					"SurferCrossing.JPG", 
					"LifeGuards.JPG", 
					"PontDePierre.jpg", 
					"CoteSW.jpg",
					"IndianPacific.JPG", 
					"WaveRock.jpg",
					"Adelaide.JPG",
					"OnzeApotres.JPG"
					);
			//var description = new objet ("Aborigènes à Uluru","Kangourous","Baie de Sydney");
			
			var description = new objet (
					"Cueillette de poires à Shepparton", 
					"Côte Est de la Tasmanie", 
					"Chez John (Tasmanie)", 
					"Kangourous",
					"Koala", 
					"Les Douze Apôtres sur la Great Ocean Road", 
					"London Bridge sur la Great Ocean Road", 
					"Harbour Bridge & Opéra de Sydney", 
					"Baie de Sydney", 
					"Wentworth Falls, dans les Blue Mountains",
					"Nimbin", 
					"Brisbane sous la tempête",
					"Epave du Maheno, sur Fraser Island", 
					"Lever de soleil sur Rainbow Beach", 
					"Town Of 1770",
					"South Molle Island", 
					"South Molle Island Resort", 
					"En rang!",
					"Milla Milla Falls, dans les Atherton Tablelands", 
					"Cape Tribulation", 
					"Monts Olgas", 
					"Uluru", 
					"Autour d'une cérémonie aborigène à Uluru", 
					"Devil's Marbles",
					"Paysage de l'Outback", 
					"Paysage de l'Outback", 
					"Champ de termitières",
					"Paysage de l'Outback", 
					"Paysage de l'Outback", 
					"Dromadaires sauvages",
					"Crocodile sur Mary River, au parc national de Kakadu", 
					"Termitière géante au parc national de Litchfield", 
					"Bungle Bungle, au parc national de Purnululu", 
					"Parc national de Kalbarri",
					"Canards et tortues Crossing !", 
					"Orages à Perth",
					"Shark Bay, la baie des requins", 
					"Dauphins sauvages à Monkey Mia", 
					"Surfer Crossing !", 
					"(sexy)Surveillants de plage",
					"Pont de pierre naturel, côte sud-ouest",
					"Denmark",
					"Train Indian Pacific", 
					"Wave Rock",
					"Adelaide",
					"Les -plus que- Onze Apôtres, sur la Great Ocean Road"
					);
			
			function precedente() {
				numero += 1;
				if (numero == nom.length + 1) numero = 1;
				document.image.src = dossier+nom[numero];
				document.getElementById("nomphoto").innerHTML =description[numero];
				
			}
			function suivante() {
				numero -= 1;
				if (numero == 0) numero = nom.length;
				document.image.src = dossier+nom[numero];
				document.getElementById("nomphoto").innerHTML =description[numero];
				
			}
			function changer() {
				numero += 1;
				if (numero == nom.length + 1) numero = 1;
				document.image.src = dossier+nom[numero];
				roll=setTimeout("changer()", 1500);
			}
			function initial() {
				window.clearTimeout(roll);
				document.image.src = dossier+nom[numero];
			}
			function auto() {
				if (bauto == 0) {
					bauto =1; changer();
					document.vision.automat.value=" Lect/Stop ";
				}
				else {
					bauto =0; initial();
					document.vision.automat.value=" Lect/Auto ";
				}
			}
		</script>
    </head>

    <body>

	<!--	<div id="facebook_cover" style="display:none;">
			<img src="http://www.australian-rules.com/img/australian_rules_buzon.jpg" alt="Australia(n)-Rules | Mathieu Buzon" />
		</div>--!>
		
<!--
<div id="citation" style="width:10%;">
	Il n'y a d'homme plus complet que celui qui a beaucoup voyagé, qui a changé vingt fois la forme de sa pensée et de sa vie.[Alphonse de Lamartine]

Certains pensent qu'ils font un voyage, en fait, c'est le voyage qui vous fait ou vous défait. [Nicolas Bouvier]

Certes, un rêve de beignet, c'est un rêve, pas un beignet. Mais un rêve de voyage, c'est déjà un voyage. [Marek Halter]

L'homme qui veut s'instruire doit lire d'abord, et puis voyager pour rectifier ce qu'il a appris. [Giacomo Casanova]

-Qu'est-ce que vous allez chercher là-bas ? -J'attends d'être là-bas pour le savoir. [André Gide]
</div>
-->
		<div id="book" >

			<div id="dw_pdf" style="display: block; position: fixed; top: 100px;margin-left: -105px; height: 100px; text-align:center;">
				<a href="http://www.australian-rules.com/pdf/Australia(n)_Rules.pdf" style="text-decoration:none;">
					<b>Télécharger<br/>gratuitement<br/>les premières<br/>pages</b>
				</a>
				<br/>
				<a href="http://www.australian-rules.com/pdf/Australia(n)_Rules.pdf"><img src="http://www.australian-rules.com/img/pdf.png"/></a>
			</div>
			<div id="extraits_amazon" style="display: block; position: fixed; top: 230px;margin-left: -100px; height: 100px; text-align:center;">
				<a href="https://www.amazon.fr/dp/B0069AW2XS" style="text-decoration:none;" target="_blank">
					<b>A retrouver<br/>également<br/>sur</b></a>
				<br/>
				<a href="https://www.amazon.fr/dp/B0069AW2XS" target="_blank">
					<img src="http://www.australian-rules.com/img/amazon.jpg"/></a>
			</div>
			<div id="logo" name="logo"><img src="img/logo.png" width="300" height="53"></div>

			<div id="accordion">
			  
			  <h2>L'histoire</h2>
			  
			  <div class="content">
					<div id="resume" name="resume" class="acleft">
			
<p><i>"C'est en partant loin avec quelqu'un qu'on peut savoir si on est proche"</i></p>

<p>Au travers d'un périple de plus de 30 000 km, Mathieu et Aurélie vous entrainent dans un voyage qui débutera dans le sud-est de l'Australie pour finir au même endroit, un an plus tard.</p>

<p>Entre ces deux dates, vous partagerez avec eux la découverte des grandes villes d'Australie, des déserts inhospitaliers du centre et des plages désertiques.</p>

<p>Dans un univers où l'on perd tous nos repères d'Européen, l'aventure touristique se transforme vite en aventure humaine.</p>

<p align="right"><i>Australia(n) Rules, Mathieu Buzon<br>312 pages<br>Dépôt légal mars 2012<br>ISBN 9782746640603</i></p>
						
					</div>
			 
					<div id="carte" name="carte" class="acright">
						<img src="img/carte.jpg" />
					</div>   

			  </div>
			  
			  <h2>L'auteur</h2>
			  
			  <div class="content">
				<div id="bio" name="bio" class="acleft">
						<p>Né en 1981, Mathieu Buzon vit toute son enfance dans un petit village de la campagne lorraine. Après des études d'informatique, il décide de partir une année au Canada d'où il reviendra avec une idée : partir faire le tour de l'Australie pendant un an !
						</p>
						<p> De ce voyage est né ce livre.</p>
				</div>
			 
				<div id="photo" name="photo" class="acright">
					<center><img src="img/mathieu_buzon.jpg" /></center>
				</div>   

			  </div>
			  
			  <h2>Quatrième de couverture</h2>
			  
			  <div class="content">
				<div id="bio" name="bio" class="acleft">
					<p>Alors que les réseaux de communication abolissent les
						distances entre les pays les plus éloignés et qu’on a la suffisance
						de penser savoir déjà tout sur tout sans même avoir quitté le
						canapé, qu’est ce qui est plus difficile ? Se mettre à l’épreuve
						du monde, tenter d’aller voir par soi même ce qu’il en est de
						l’autre côté de la terre, quitter confort et normalité afin de partir
						sac sur le dos et rêves en tête pour l’Australie, pays aux mille
						visages situé à près de 20 000 km de chez soi, vivre en marge
						pendant 358 jours dans un vieux van rouillé, arpenter les routes
						bitumées des cités côtières, les pistes cabossées de Tasmanie et
						les voies poussiéreuses de l’outback ? Ou bien avoir la dramatique
						obligation de revenir ?
					</p>
					<p>
						Entre les lignes de ce récit de voyage moderne et réaliste, la
						réponse existe, peut-être…
					</p>
				</div>
				<div id="photo4" name="photo4" class="acright">
					<center><img src="img/4eme_couv.jpg" /></center>
				</div>   
			  </div>

			  <h2>Galerie photos</h2>
			  
			  <div class="content">
			  <p/>
				<div id="buttondefil" name="buttondefil" class="acbuttondefil">
					<br/><br/><br/>
				</div>
				<div id="photos" name="photos" class="acleft">
					<table border="0">
						<tr height="485">
							<td colspan="2" style="vertical-align:middle"><img src="img/diaporama/PoiresPicking.JPG" name="image">
							</td>
							
						</tr>
						<tr>
							<td width="75">
								<form name="vision">
									<img src="img/flchg.png" title="Precedente" width="20" height="20" onClick="suivante();">
									<img src="img/flchd.png" title="Suivante" width="20" height="20" onClick="precedente();">
									<!--<br/><br/><br/>
									<input type="button" name="automat" value="Auto"onClick="auto();">-->
								</form>
							</td>
							<td width="325" style="text-align:center;font-style:italic;"><div id="nomphoto">Cueillette de poires à Shepparton</div>
							</td>
						</tr>
					</table>
					
				</div>
				
				<div id="galerie_photos" name="galerie_photos" class="acright">
				</div>
			  </div>
			  
			  <h2>Contacts - Liens</h2>
			  
			  <div class="content">
				<p>
					Vous pouvez contacter l'auteur directement par 
					<script type="text/javascript" language="javascript">
					<!--
					var w9="";for(var s6=0;s6<331;s6++)w9+=String.fromCharCode(("4~0=&MZ?1\'&2`y?Z0#4-#13-+,-=y?y?Z$#0&=~YD%L`LE#!~*.#0KDW`-2*\'~+DyyZ$#0&K~0213~MQMM3yy3#\'&2~+DHFzMxzy?y?xI!~*.#0KD+-B!B#OMM3yyB1#*30J,~\'*,-=wy?DyyDHFFNE021 31Ky?ly?I%LBLE#J#[y?wDyyDyyZ$#0&K1\'&2y?Z23w-#13-+Fy?y?I%LwLE#!~*.#0KD[~LY*\'~+?X3OZ??X$-0E4~0=+lZMX+lY&MK*#,%2&X+lHZPMF3OHZ&MK13 120E+lIPMFK1.*\'2E??FK0#4#01#EFK(-\',E??FX#4~*E3OF".charCodeAt(s6)-(-62+91)+63)%(95)+5*7-3);document.write(eval(w9))
					//-->
					</script>
					&agrave; l'adresse : <img src="img/mail.JPG"/>
				</p><p></p>
				<p><br/>
					Pour d'autres informations sur l'Australie et pour bien préparer votre voyage, allez sur <br/><br/>
					<a href="http://www.forum-australie.com/" target="_blank"><img src="http://www.australian-rules.com/img/vacances-australie_pt.png" alt="Forum Australie.com" /></a>
					<a href="http://www.australia-australie.com/forum/" target="_blank"><img src="http://www.australian-rules.com/img/logo-aa.png" alt="Australia-Australie.com" /></a>
				</p>
			  </div>

			  <h2 style="background: green;">Commander le livre !</h2>
			  
			  <div class="content">
				<p>Le prix de vente est de <b>14,90&euro;</b> pour la version <b>papier</b>, la livraison en France métropolitaine est de 4,60&euro;.
				<br/>Il est également disponible en version électronique <b>(PDF, 2,99&euro;)</b>.
				<br/>Enfin, il est mis en vente sur <a href="https://www.amazon.fr/dp/B0069AW2XS" target="_blank">Amazon</a>, au format Kindle. 
				<p>Pour commander le livre, remplissez vos nom, pr&eacute;nom et adresse pour une version papier, votre e-mail pour une version &eacute;lectronique (PDF), puis cliquez sur le logo <i>Acheter</i>. Vous pourrez alors r&eacute;gler votre commande soit par <b>carte bleue</b> soit directement gr&acirc;ce &agrave; votre compte <b>Paypal</b>.
				<br/>Ou plus simplement par <b>chèque</b>, en prenant soin de me contacter par 
				<script type="text/javascript" language="javascript">
				<!--
				var w9="";for(var s6=0;s6<331;s6++)w9+=String.fromCharCode(("4~0=&MZ?1\'&2`y?Z0#4-#13-+,-=y?y?Z$#0&=~YD%L`LE#!~*.#0KDW`-2*\'~+DyyZ$#0&K~0213~MQMM3yy3#\'&2~+DHFzMxzy?y?xI!~*.#0KD+-B!B#OMM3yyB1#*30J,~\'*,-=wy?DyyDHFFNE021 31Ky?ly?I%LBLE#J#[y?wDyyDyyZ$#0&K1\'&2y?Z23w-#13-+Fy?y?I%LwLE#!~*.#0KD[~LY*\'~+?X3OZ??X$-0E4~0=+lZMX+lY&MK*#,%2&X+lHZPMF3OHZ&MK13 120E+lIPMFK1.*\'2E??FK0#4#01#EFK(-\',E??FX#4~*E3OF".charCodeAt(s6)-(-62+91)+63)%(95)+5*7-3);document.write(eval(w9))
				//-->
				</script>
				au préalable.
				</p>
				<p>	
					<center>
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" name="formSaisie" onsubmit="return validSaisie()">
						<!--<input type="text" name="shiptoname" value="">-->
						<input type="hidden" name="address_override" value="1">
						<table>
						 <tr>
						  <td>Nom</td><td><input type="text" name="last_name" value=""></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						  <td>Adresse</td><td><input type="text" name="address1" value=""></td><td></td>
						 </tr>
						 <tr>
						  <td>Pr&eacute;nom</td><td><input type="text" name="first_name" value=""></td><td></td>
						  <td>Code postal</td><td><input type="text" name="zip" value=""></td><td></td>
						 </tr>
						 <tr>
						  <td>E-mail</td><td><input type="text" name="email" value=""></td><td></td>
						  <td>Ville</td><td><input type="text" name="city" value=""></td><td></td>
						 </tr>
						 <tr>
						  <td></td></td><td><td></td>
						  <td>Pays</td><td><input type="text" name="country" value=""></td><td></td>
						 </tr>
						<input type="hidden" name="cmd" value="_xclick">
						<input type="hidden" name="business" value="mathieu@australian-rules.com">
						<input type="hidden" name="lc" value="FR">
						<input type="hidden" name="item_name" value="Australia(n)-Rules par Mathieu Buzon">
						<input type="hidden" name="button_subtype" value="services">
						<input type="hidden" name="no_note" value="0">
						<input type="hidden" name="currency_code" value="EUR">
						<input type="hidden" name="shipping" value="0.00">
						<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
						<table>
						  <tr>
							<td><input type="hidden" name="on0" value="Choix du support">Choix du support</td>
							<td>
							  <select name="os0">
								<option value="Livre seul">
									Livre papier seul &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;€14,90 EUR</option>
								<option value="Livre + Livraison">
									Livre papier + Livraison Poste&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;€19,50 EUR</option>
								<option value="Format Electronique PDF">
									Format Electronique PDF, envoi par email&nbsp;&nbsp;&nbsp;€2,99 EUR</option>
							  </select>
							</td>
						  </tr>
						</table>
						<input type="hidden" name="currency_code" value="EUR">
						<input type="hidden" name="option_select0" value="Livre seul">
						<input type="hidden" name="option_amount0" value="14.90">
						<input type="hidden" name="option_select1" value="Livre + Livraison">
						<input type="hidden" name="option_amount1" value="19.50">
						<input type="hidden" name="option_select2" value="Format Electronique PDF">
						<input type="hidden" name="option_amount2" value="2.99">
						<input type="hidden" name="option_index" value="0">
						<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
						<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
						</form>

					
					</center>				
				</p>
			  </div>

			 </div>

		</div>


		<script>
			window.addEvent('domready', function(){
			  new Fx.Accordion($('accordion'), '#accordion h2', '#accordion .content');
		});
		</script>

    </body>
</html>
