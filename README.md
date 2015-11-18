#PlayVad
Detta är ett repository för mitt slutprojekt i kursen "Internetpublicering II och webbdesign" som läses på 25% fart HT 2015.
Repot går ut på att med hjälp av html5 och css skapa en lätttillgänglig webbplats.
Som utgångspunkt för att påvisa detta ska en webbplats med syfte att förklarar de största aktörerna inom streaming av film och tv, vad de erbjuder, om smarta appar finns, vad tjänsten kostar osv.

##SCSS
För styling används scss som sedan konverteras till vanlig css med hjälp av programmet CodeKit. Scss används för att det är enklare och flexiblare än vanlig css då exempelvis variabler och mixins (funktioner) kan användas för enklare återanvändning.

###Förklaring för SCSS strukturen
I `/css` finns en hel del olika scss-filer som alla importeras av huvud-filen style.scss som i sin tur konverteras med hjälp av CodeKit till ren csskod i form av style.css. Här nedan följer lite info om hur det hela är upplagt:
####variables.scss och mixins.Scss
Dessa två filer är tänkt att innehålla alla tänkbara variabler och mixins (funktioner) som sedan de andra filerna kan använda sig av. Skapa inga variabler i de andra filerna utan försök hålla strukturen med separata filer för variabler och mixins. Dessa två filer importeras i alla de andra filerna för att de ska kunna nyttjas.
####header.scss och footer.scss
Som kanske namnen avslöjar innehåller dessa styling för header respektive footer. Header har hand om styling för navigeringen och navigeringsloggan. Footer har hand om foten längst ned på webbplatsen med copyright informationen
####text.scss
Denna fil är tänk att innehålla all styling som rör olika texter på ett generellt sätt. Det kan vara line-hight på article-taggar eller generella styling-regler för olika headers. Ingen specifik styling ska ske i denna fil och med det menas att exempelvis specifik styling för .wrapper h1 inte hör hemma i denna fil, sådan styling ska istället ske i filen för wrappers.
Styling för diverse <span> for finnas i denna fil.
####fullwidth-images.scss
Denna fil innehåller styling för de stora bildfält som är ett genomgående fenomen på hela webbplatsen. Märk att i skrivande stund innehåller dessa element headings och denna styling befinner sig i denna fil just för att det inte är genrella text-styling regler.
####structural.scss
Denna fil innehåller alla strukturella regler för diverse wrapper containers av <div> webplatsen använder sig av. Denna fil förlitar sig mycket på två olika mixins som skapar antingen fullscreen div eller nonfullscreen div som dessutom tar en variabel som argument som bestämmer vilken bredd div-elementet ska ha.
Först deklareras genrella regler för .wrapper och sedan ska antingen klassen .fullscreen-div eller .nonfullscreen-div läggas till i klassdeklarationen för div-elementet beroende på om elementet ska vara fullscreen eller ej.
Generella klasser för floating och extra utrymme finns också i denna fil då det är strukturell styling det handlar om.
