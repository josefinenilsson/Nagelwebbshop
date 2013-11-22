# Webb och Databaser, TWDK13

# Projekt

Huvudidé: Bygg en webshop. Välj själv vad som skall säljas, hitta en nisch som ni tycker om. Webshoppen skall ha en användarvänlig och tilltalande layoit.

Nedan följer kriterier för vad som måste uppfyllas för en viss betygsnivå.

##### För betyg 3:
- Inloggningsfunktion skall finnas.
- Man skall kunna bläddra mellan produkter som ligger i olika kategorier.
- Kategorierna kan vara statiska (admin behöver inte kunna redigera)


KONTON
- Konton skall ha olika accessnivå beroende på om man är admin eller kund.
- Konton skall kunna skapas och tas bort av administratör, men nya kudner ska kunna skapa sina egna konton via hemsidan.
- Produkter skall kunna läggas till och tas bort av administratör, egenskaper som skall finnas är Namn, beskrivning, pris, kategori.

KUNDKORG
- En kundkorg skall finnas där man kan se produkter, antal, moms (25%) och summan av sin
beställning.

ORDER
- En order skall innehålla datum och tid, köpare och IP‐adress på den som beställde
- En order skall i sin tur vara uppbyggd av en eller flera orderrader
- Administratören skall kunna se alla ordrar som lagts i systemet.


PRODUKTER
- Alla produkter skall ha en representativ produktbild (alla produkter kan ha samma bild).
- Shoppen skall vara säljande. Den skall ge ett bra intryck och lämpligt upplagd beroende på vad
som säljs. (Anders R eller motsvarande kikar på designen)
- Projeket skall vara målgruppsanpassat och funktionellt.

DATABASEN
- Databasen skall vara ”acceptabelt” professionell. 
- Projektgruppen skall ha tagit fram en ER‐modell för databasen där entitetstyper, sambandstyper och deras begränsningar framgår.
- Databasen skall vara implementerad på ett vettigt sätt med lämpliga val av primärnycklar och
främmande nycklar.
- Databasen skall undvika att lagra onödig redundant information (dvs normaliserad till 3:e normalformen. Viss redundans måste alltid finnas i form av främmande nycklar i tabellerna.)
- Projektet dokumenteras dock krävs ingen formell projektrapport. Dokumentationen skall innehålla all den kod som producerats samt dokumentation om databasen(ER‐modeller, mm). Glöm inte bort att infoga bra kommentarer i den kod som skrivs. All dokumentation skall lämnas in via ping‐pong.


##### För betyg 4 (förutom samtliga punkter för betyg 3):

- Bygg en snygg, hierarkisk, struktur för produkterna som använder databasen. Menyhierarkin
skall vara redigerbar för administratören.
- Transaktioner skall användas där flera databasfrågor hör ihop.- Sidan skall se likadan ut i Internet Explorer, Firefox och Chrome.
- Klasser skall användas för användare, ordrar, orderrader och produkter. Fler klasser får givetvis
användas.
- Lägg till en egenskap för produkter: vikt. I webshoppens kundkorg skall vikten summeras och
visas. Kostnaden för vikten skall adderas till totalpriset. Kostnad för olika viktklasser skall vara
redigerbart via admingränssnittet.
- Användare skall kunna sortera och filtrera i orderhistoriken för webbutiken.
- En projektrapport skall lämnas som på ett överskådligt sätt redovisar projektarbetets upplägg,
hur det färdiga resultatet blivit, vad var och en i gruppen bidragit med till det färdiga resultatet samt gruppens gemensamma summering och reflexion över resultat och genomfört arbete. Projektrapporten lämnas in via ping‐pong.

##### För betyg 5 (förutom samtliga punkter för betyg 3 och 5):

- Registrering av konton mha Captcha
- Bilder ska kunna laddas upp av admin, script skall automatiskt kontrollera och storleksändra. För
detta kan t.ex. GD användas.
- Användare ska kunna ändra sin information när dom är inloggade. Nya lösenord skall kunna
sättas, förutsatt att man matar in det gamla lösenordet.
- Databaskopplingen skall göras genom att använda en databasklass. Databasklassen skall ärva
klassen ”Mysqli” och lämpliga funktioner för databashantering skall finnas, t.ex. SaveUser(),
saveProduct(), getUserByID() osv.
- Administratören skall kunna annullera en order. Serien av ordrar får aldrig brytas, det måste
finnas en konsekvent serie av ordernummer.
- Webshoppen skall ha stöd för flera valutor. Använd EURO som bas. En växlingskurs som kan
redigeras av administratören räknar sedan om priset för SEK, NOK och USD.
- Administratören skall kunna ta fram och presentera på lämpligt sätt uppgifter på
försäljningsstatistik (antal gjorda ordrar, summa belopp för dessa ordrar, medelvärde, minsta resp. största orderbelopp) under en viss tidsperiod för de olika produkterna i en viss produktkategori. Dessa uppgifter tas fram från databasen med lämpliga SQL‐frågor.

# Projektupplägg och redovisning

Varje projektgrupp skall bestå av 3 medlemmar. Det finns (tomma) projektgrupper i pingpong‐aktiviteten för kursen. Ni kan själva lägga in er i dessa projektgrupper. Projektet redovisas med en muntlig redovisning i slutet på kursen, prel. Torsdag 12/12 kl. 09:00 – 11:45. Tre grupper redovisar åt gången ungefär 15 min per grupp. Redovisningen är informell och går till så att examinatorerna besöker varje grupp. Gruppen beskriver sin applikation och demonstrera vid dator och beskriver också sitt arbete med projektet (inga powerpoint presentationer). Examinatorerna kan ställa frågor på olika detaljer.

# Individuell betygsättning i grupp

Efter redovisning av projektet och inlämning av projektdokumentation samt ev. projektrapport får varje betygsgrupp en poängsumma. Summan skall sedan fördelas mellan studenterna, av studenterna själva. Den fördelning av summan som gruppen kommer fram till utgör ett betygsförslag som lämnas till kursansvarig, som sedan fastställer betyget med förslaget som grund.
Ingen student kan få mindre än 2 poäng. 2 poäng innebär underkänt. Ingen student kan få mer än 5 poäng. Gruppen kan inte få mer än 5 multiplicerat med antalet gruppmedlemmar. (dvs för en grupp med tre medlemmar kommer den totala poängsumman att ligga mellan 6 och 15).

Exempel för en grupp om 3 personer:

Projektet tilldelas 13 poäng. Betygsfördelningsförslag från studenterna:

Student A: 4
Student B: 4
Student C: 5

(Projektgruppen kan givetvis välja samma betygsnivå för samtliga medlemmar i gruppen. I exemplet skulle det betyda att alla studenterna får betyget 4).

Om kursansvarig inte ser anledning till att ändra betygen blir studenternas betyg enligt förslaget.

Modellen syftar till att ingen student skall kunna åka snålskjuts på andra studenters kunskap. Studenterna måste också motivera sin prestation mot sina medarbetare och våga säga till om någon gruppmedlem inte bidragit till gruppens framgång. Kontroversiell modell, men nyttig och fungerar.
