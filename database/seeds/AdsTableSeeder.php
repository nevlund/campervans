<?php

use Illuminate\Database\Seeder;

class AdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ad = new \App\Ad([

        	'user_id' => '1',
        	'vehicle_id' => '2',
        	'listcategory_id' => '1',
        	'title' => 'Bavaria A71',
        	'description' => 'Bavaria A71, 2010, km 256000, 2985 kg egenvægt, 3500 kg totalvægt, 7 sengepladser, Fiat Ducato 2,3 JTD 130 HK. Helt nye hynder og betræk i bodelen, Nysynet, nye dæk, bremser, service, tandrem, vandpumpe. Markise, solseller på taget, udtag til udvendig bruser, cykelholder til 4 cykler, aftageligt træk til 2000 kg.',
			'year'=> '2010',
			'fueltype'=> 'diesel',
			'color'=> 'hvid',
			'price'=> '295000',
			'image'=> 'bavaria-a71.jpg',		

        ]);
        $ad->save();

        $ad = new \App\Ad([

        	'user_id' => '1',
        	'vehicle_id' => '3',
        	'listcategory_id' => '1',
        	'title' => 'Benimar Benivan',
        	'description' => 'Super lækker Benivan som er Ready to Drive. Fremhævet ekstraudstyr som er monteret inklusiv i prisen Thule markise, er Thule cykelholder, Solceller mm EN VAN SOM SKAL OPLEVES, 6 gear, airc., fartpilot, el-ruder, armlæn, kopholder, stofindtræk, airbag, hvide blink, servo, abs, mørktonede ruder i bag, dobbeltseng, spildevandstank, varmtvand, toiletrum, cassettetoilet, Brusebund, Bruser, Myggenet, Markise, Cykelstativ, Batteri, Batterilader, LED lys, Motor: FIAT Euro 6 engine - -2,3L - 140HP, Aircondition: CAB manuel aircondition, Fartpilot, Centrallås m. Fjernb, Justerbart rat, Køleskab: 80L, Vinduer: dobbelt glas, Dør med vindue, Indgangstrin, Senge indretning: dobbeltseng, Remi i forrude, Varme:, Truma combi diesel 4000W, Belysning Inde: Led, Belysning Ude: Truma combi diesel 4000W, Solceller: Led, Dør med myggenet, Mere komfortabel kabineform, Soft closing udtræksskuffer, Cykelanhænger med plads til 2, nøglefri betjening',
			'year'=> '2020',
			'fueltype'=> 'diesel',
			'color'=> 'hvid',
			'price'=> '559900',
			'image'=> 'benimar-benivan.jpg',		

        ]);
        $ad->save();

        $ad = new \App\Ad([

        	'user_id' => '1',
        	'vehicle_id' => '4',
        	'listcategory_id' => '1',
        	'title' => 'Bravia 599',
        	'description' => 'SPAR OVER 45.000 Nypris over 430.000,- Helt fejlfri Fritidsbil fra 8/4-2019, unde 6.0 meter, lav vægtafgift kun 3400,- pr halvår. Monteret med følgende udstyr Basis pakke, Chassis pakke , Fartpilot, A/C, radio, markise, cykelholder, Combi køleskab m/fryser, Bruser med varmt og kold vand, Truma gasvarme, plisse gardiner, og meget andet, Vi tager gerne din personbil eller autocamper i nytte',
			'year'=> '2016',
			'fueltype'=> 'diesel',
			'color'=> 'rød',
			'price'=> '489900',
			'image'=> 'bravia599.jpg',		

        ]);
        $ad->save();

        $ad = new \App\Ad([

            'user_id' => '1',
            'vehicle_id' => '5',
            'listcategory_id' => '1',
            'title' => 'Euramobil Terrestra 650 EB',
            'description' => 'Euramobil Terrestra 650 EB, 2013, km 92000, 2800 kg egenvægt, 3500 kg totalvægt, 4 sengepladser,
                Vor EURAMOBIL TERRESTRA 650 EB sælges og er klar for køber til nye oplevelser
                Bilen er nysynet, service er lige gennemført og gastest ligeledes,
                Helt nye bagdæk og kun lidt brugte dæk foran.
                EURONORM 4, må køre overalt
                Bilen er indregistreret første gang i 2013 og kun en ejer
                Bilen har kørt ca. 92.000 km og alle service mv. gennemført
                Bilen er på ALKO chassis og med dobbeltbund. Helårsbil.
                Der er monteret markise, parabol, tv, inverter,solcelle, 2 batterier i bodelen til brug herfor, gasalarm,
                reservehjul, støttefødder, cykelholder, NAVIGATION OG BAKKAMERA
                Alt er særdeles velholdt
                Bilen står i Tyskland på tyske plader
                Pris d.kr. 359.900',
            'year'=> '2013',
            'fueltype'=> 'diesel',
            'color'=> 'hvid',
            'price'=> '359900',
            'image'=> 'euramobil.jpg',      

        ]);
        $ad->save();

        $ad = new \App\Ad([

            'user_id' => '2',
            'vehicle_id' => '6',
            'listcategory_id' => '1',
            'title' => 'Fiat Ducato 35',
            'description' => 'Bemærk Dette er en 3,0 med 160 hk. Model Bavaria, med Lækker indretning/udstyr til 6 pers. Toilet, Separat brusekabine, Gasvarmeanlæg, Gaskomfur, Emhætte, Køle/fryseskab, Klædeskab, Skorum, Spisebord til 5/6 pers, Værdiboks, 6 sovepladser+sidepladser, Markise, Stor bagagerum, Alkove med dobbeltseng+2 køjesenge i bag+opredning til 2 i dobbeltseng i midten, Cykelholder+2 flotte cykler, Bakkamera, 2 gasflasker, Komplet serviceudstyr+gryder-m.m. (Drej nøglen og kør på ferie) Leveres nyserviceret. Næsten nye dæk+Batteri. Flot og velholdt! Finansiering tilbydes-også uden udbetaling!! EFTERÅRSTILBUD - NEDSAT MED KR 20.000',
            'year'=> '2010',
            'fueltype'=> 'diesel',
            'color'=> 'hvid',
            'price'=> '278000',
            'image'=> 'fiat-ducato.jpg',      

        ]);
        $ad->save();

        $ad = new \App\Ad([

            'user_id' => '2',
            'vehicle_id' => '7',
            'listcategory_id' => '1',
            'title' => 'Ford Bürstner',
            'description' => 'Super velholdt aldrig udlejning, klar til ferieturen, Bürstner, 4 personers, med køkken, køleskab, fryser & ovn, koldt & varme vand, drejbar fører sæder, halvanden mands seng, Markise, cykelstativ, m.v. airc., el-ruder, el-spejle, 6 gear, fjernb. c.lås, fartpilot, startspærre, læderrat, cd/radio, db. airbags, abs, bemærk km kun 80.000 og bilen er med helt ny motor, da tidligere ejer fik kørt den tør for olie, super velholdt. ring for besigtigelse.',
            'year'=> '2008',
            'fueltype'=> 'diesel',
            'color'=> 'hvid',
            'price'=> '359900',
            'image'=> 'ford-burstner.jpg',      

        ]);
        $ad->save();

        $ad = new \App\Ad([

            'user_id' => '2',
            'vehicle_id' => '8',
            'listcategory_id' => '1',
            'title' => 'Hobby Optima T65 HKM',
            'description' => 'KØJESENGE - HÆVE-/SÆNKE DOBBELTSENG - VINKELKØKKEN - STOR SIDDEOMRÅDE
Pris KR: 595.950,- Standardudstyret omfatter bl.a: Citroën 2,2 L Blue-HDI 120 HK med start-/stop teknologi, 6-trins gearkasse, 90 L dieseltank + 20 L AdBlue-tank, manuelt klimaanlæg i førerhuset, dæktrykkontrol, for-kofanger og dørhåndtag lakeret i karrosserifarve, fartpilot, tagvindue i førerhus, højdejusterbare "captains chairs", mørklægning til for-og sideruder, insektnet i indgangsdør, elektrisk indgangstrin, 140 L Dometic slim-tower køleskab, 3 kogeblus med el-tænding, koldskumsmadrasser med GOODSIDE lameller, TRUMA Combi 6 varmer med 10 L varmtvandsbeholder.
Extra udstyr på denne model: Citroën 2,2 L Blue-HDI 140 HK motor KR: 9.623,-
16" stålfælge KR: 2.606,- Forberedt til solceller KR: 1.310,- Forberedt til bakkamera KR: (936,- Forberedt til SAT KR: 936,- Xtra hynde til siddegruppe KR: 3.154,- TV holder til fladskærm KR: 4.090,- TV tilslutning KR: 735,- Tågelygter KR: 2.606,-
IALT KR: 621.946,-',
            'year'=> '2020',
            'fueltype'=> 'diesel',
            'color'=> 'hvid',
            'price'=> '595900',
            'image'=> 'hobby-optima.jpg',      

        ]);
        $ad->save();

             $ad = new \App\Ad([

            'user_id' => '2',
            'vehicle_id' => '8',
            'listcategory_id' => '1',
            'title' => 'Hobby Optima T70 E',
            'description' => 'NEDSAT KR: 50.000,-
                Normalpris incl udstyr KR: 889.900,-
                Nu KR: 839.900,-

                FABRIKSNY 2019 HOBBY OPTIMA T70 E PREMIUM.

                På lager til omgående levering.

                EXTRA UDSTYR PÅ DENNE MODEL:
                Førerhuslakering grå.
                Alufælge.
                150 HK Motor.
                Automatgear.
                Klimaanlæg førerhus.
                Tågelygter.
                L-siddegruppe med søjlebord.
                Extra hynde til siddegruppe.
                Forberedt til solaranlæg.
                Varme TRUMA Combi 6 E.

                Tager gerne bil, campingvogn i bytte.

                ÅBENT EFTER AFTALE.


                www.hobbyinfo.dk

                TRÆFFES EFTER AFTALE.',
            'year'=> '2019',
            'fueltype'=> 'diesel',
            'color'=> 'hvid',
            'price'=> '839900',
            'image'=> 'hobby-optima-2.jpg',      

        ]);
        $ad->save();

        $ad = new \App\Ad([

            'user_id' => '2',
            'vehicle_id' => '9',
            'listcategory_id' => '1',
            'title' => 'Hymer Hymercar',
            'description' => 'SPARE OVER 60.000, NYPRIS 630.000- Grøn ejerafgigt 4200,-Hymercar Free med hævetag, 4 gode sovepladser, helt fin stand.Af udstyr kan nævnes Hævetag med soveplads til 2 personer, Kompressor køleskab, Radio, Fartpilot, A/C, Markise Cykelholder, Truma conbi 4 varmer og varmt vand, En rigtig god familie Fritidsbil, kom og se og prøve, Vi tager gerne din personbil eller autocamper i bytte.',
            'year'=> '2019',
            'fueltype'=> 'diesel',
            'color'=> 'hvid',
            'price'=> '569900',
            'image'=> 'hymer-hymarcar.jpg',      

        ]);
        $ad->save();

        $ad = new \App\Ad([

            'user_id' => '2',
            'vehicle_id' => '10',
            'listcategory_id' => '2',
            'title' => 'Mercedes V250 d',
            'description' => 'BILEN ER PÅ VEJ HJEM:
                Fabriksny Mercedes Benz Marco Polo 2019 facelift.
                Marco Polo fås med 3 stærke og effektive dieselmotorvarianter, med automatgearkasse 9G-TRONIC PLUS som standard og firehjulstræk 4MATIC som ekstraudstyr.
                Marco Polo V220d 163 HK Aut starter fra kr. 549.900,-

                Den viste udgave her er med baghjulstræk og 190 HK

                Uddrag af standardudstyr I bilen
                Bestoling til 4 personer (5. sæde er ekstraudstyr)
                Multifunktions-læderrat
                Indfarvede kofangere
                Komfort affjedring
                Bakkamera
                Luksus midterkonsol og opbevaring
                Oliefyr med timer
                Sædevarme fører og passager
                Regnsensor
                Belyst trin for fører og passager
                17” komfortdæk 235-55-17

                Uddrag af standardudstyr i camperdelen
                Ekstra batteri med skillerelæ for camperdelen
                Drejesæder foran
                Klapbord integreret i rum ved skydedøren
                Central-betjeningsenhed/kontrolpanel med batteritilstand, ude- og inde temperatur, køleboksens drift tilstand samt vandindhold i frisk- og spildevandstank
                Gardiner i bag samt mørktonede ruder
                Gaskomfur
                40L Køleboks',
            'year'=> '2019',
            'fueltype'=> 'diesel',
            'color'=> 'hvid',
            'price'=> '683318',
            'image'=> 'mercedes-marco-polo.jpg',      

        ]);
        $ad->save();

        $ad = new \App\Ad([

            'user_id' => '2',
            'vehicle_id' => '10',
            'listcategory_id' => '2',
            'title' => 'Mercedes V220 d',
            'description' => 'BILEN ER PÅ VEJ HJEM:
                Fabriksny Mercedes Benz Marco Polo 2019 facelift.
                Marco Polo fås med 3 stærke og effektive dieselmotorvarianter, med automatgearkasse 9G-TRONIC PLUS som standard og firehjulstræk 4MATIC som ekstraudstyr.
                Marco Polo V220d 163 HK Aut starter fra kr. 549.900,-

                Den viste udgave her er med baghjulstræk og 190 HK

                Uddrag af standardudstyr I bilen
                Bestoling til 4 personer (5. sæde er ekstraudstyr)
                Multifunktions-læderrat
                Indfarvede kofangere
                Komfort affjedring
                Bakkamera
                Luksus midterkonsol og opbevaring
                Oliefyr med timer
                Sædevarme fører og passager
                Regnsensor
                Belyst trin for fører og passager
                17” komfortdæk 235-55-17

                Uddrag af standardudstyr i camperdelen
                Ekstra batteri med skillerelæ for camperdelen
                Drejesæder foran
                Klapbord integreret i rum ved skydedøren
                Central-betjeningsenhed/kontrolpanel med batteritilstand, ude- og inde temperatur, køleboksens drift tilstand samt vandindhold i frisk- og spildevandstank
                Gardiner i bag samt mørktonede ruder
                Gaskomfur
                40L Køleboks',
            'year'=> '2019',
            'fueltype'=> 'diesel',
            'color'=> 'hvid',
            'price'=> '592000',
            'image'=> 'mercedes-marco-polo-2.jpg',      

        ]);
        $ad->save();

        $ad = new \App\Ad([

            'user_id' => '2',
            'vehicle_id' => '11',
            'listcategory_id' => '1',
            'title' => 'Mercedes V220 d',
            'description' => 'SPAR OVER 50.000,- Denne Roadcar har en nypris inkl udstyr på 593.000 kun kørt 21.000 fra 6/2019., Helt fejlfri, 2 enkel senge, Af udstyr kan nævnes Basic-pakke, Chassis-pakke, Fartpilot, A/C, Markise, Cykelholder, Radio, Komproserkøleskab, Bruser med kold og varmt vand, Truma combi 4 gasvarmer, Grøn ejerafgift 4.200,- pr halvår, Skal ses og prøves Vi tager gerne Personbil eller autocamper i bytte.',
            'year'=> '2019',
            'fueltype'=> 'diesel',
            'color'=> 'blå',
            'price'=> '549900',
            'image'=> 'roadcar.jpg',      

        ]);
        $ad->save();

        $ad = new \App\Ad([

            'user_id' => '2',
            'vehicle_id' => '12',
            'listcategory_id' => '1',
            'title' => 'Peugeot Boxer 335',
            'description' => 'Model T700EB som er spækket med udstyr og koster kun 3850 kr i halvårlig afgift!

                CAMPING INFO: Stor seng i bag, som fungerer som både enkelt- og dobbeltseng. Sænkeseng i for, hvilket giver 4 gode sovepladser. Bilen har 4 selepladser. Udstyret med Dometic klimaanlæg, TV med DVD afspiller, cykelholder til 2 cykler (kan udvides til flere cykler), stor garage i bag, 130 liter køleskab, 12 liter fryser, Truma Combi 6 varme og varmtvand, 4 gasblus, gasovn og pizzaovn, 115 liter vandbeholder, stort forbrugsbatteri, stor Thule markise, LED lys i kabine, safetybox til penge, pas etc., og meget mere!

                BIL INFO: Udstyret med fuldautomatisk klimaanlæg, læderrat, fartpilot, komfortsæder med multijustering, Alpine radioenhed med bakkamera, apple carplay og android auto.

                Egenvægt 2910 kg og totalvægt på 3500 kg. Altså til almindelig kørekort. Bilen måler 743/230/291 cm.

                Bilen koster kun 3850 kr i halvårlig afgift og kører reelt 11-12 km/l. Her har du stor komfort og meget billig ejerskab af en næsten ny topudstyret camper!

                6 gear, 16" alufælge, fuldaut. klima, fjernb. c.lås, fartpilot, kørecomputer, infocenter, startspærre, højdejust. forsæde, el-ruder, el-spejle m/varme, bakkamera, håndfrit til mobil, bluetooth, android auto, apple carplay, armlæn, læderrat, automatisk lys, db. airbags, abs, antispin, servo, ikke ryger, service ok, diesel partikel filter.

                OBS OBS: Bilen står ikke på adressen. RING i god tid for fremvisning.',
            'year'=> '2018',
            'fueltype'=> 'diesel',
            'color'=> 'hvid',
            'price'=> '639900',
            'image'=> 'peugeout-boxer.jpg',      

        ]);
        $ad->save();

          $ad = new \App\Ad([

            'user_id' => '2',
            'vehicle_id' => '13',
            'listcategory_id' => '2',
            'title' => 'VW California 2,0 TDi 199 Ocean DSG 4M 4d',
            'description' => 'aut., aut.gear/tiptronic, alu., airc., fjernb. c.lås, parkeringssensor, fartpilot, kørecomputer, infocenter, startspærre, el-ruder, el-spejle m/varme, automatisk start/stop, bakkamera, adaptiv fartpilot, navigation, håndfrit til mobil, multifunktionsrat, bluetooth, armlæn, stofindtræk, kopholder, læderrat, led forlygter, db. airbags, abs, antispin, esp, servo, indfarvede kofangere.',
            'year'=> '2019',
            'fueltype'=> 'diesel',
            'color'=> 'grå',
            'price'=> '789900',
            'image'=> 'vw-california-tdi.jpg',      

        ]);
        $ad->save();

        $ad = new \App\Ad([

            'user_id' => '2',
            'vehicle_id' => '13',
            'listcategory_id' => '2',
            'title' => 'VW California 2,0 TDi 150 Ocean DSG 4d',
            'description' => 'aut., aut.gear/tiptronic, airc., fjernb. c.lås, parkeringssensor, kørecomputer, infocenter, startspærre, højdejust. forsæde, el-ruder, el-spejle m/varme, bakkamera, adaptiv fartpilot, automatisk start/stop, multifunktionsrat, navigation, bluetooth, håndfrit til mobil, armlæn, kopholder, stofindtræk, læderrat, led forlygter, db. airbags, abs, antispin, esp, servo, indfarvede kofangere, aftag. træk.',
            'year'=> '2019',
            'fueltype'=> 'diesel',
            'color'=> 'grå',
            'price'=> '710900',
            'image'=> 'vw-california-2.jpg',      

        ]);
        $ad->save();

        $ad = new \App\Ad([

            'user_id' => '2',
            'vehicle_id' => '13',
            'listcategory_id' => '2',
            'title' => 'VW California 2,0 TDi 150 Ocean DSG 4d',
            'description' => 'T6.1 CALIFORNIA - Den HELT NYE model.
                På vej hjem til hurtig levering.
                Bilen forventes i butikken i december måned.

                California i OCEAN udgave der som standard indeholder:
                - LED for- og baglygter
                - App-Connect
                - DAB+ radiomodtagelse
                - We Connect
                - e-Call
                - Sidevindsassistent
                - 3 Zonet automatisk klimaanlæg
                - Stor åbning i fronten af teltduegn
                - Kabinefyr med fjernbetjening
                - Dobbelt laminerede ruder i bo-delen
                - Automatisk åbning/lukning af hævetaget
                - Sædevarme i forstolene
                - Lakerede spejle og håndtag
                - Hjælpeluk på skydedør og bagklap
                - Dæmpbar LED lys i køkken, tag og bagklap
                - LED lys i skabene
                - Tågeforlygte',
            'year'=> '2020',
            'fueltype'=> 'diesel',
            'color'=> 'grøn',
            'price'=> '642000',
            'image'=> 'vw-california-3.jpg',      

        ]);
        $ad->save();

        $ad = new \App\Ad([

            'user_id' => '2',
            'vehicle_id' => '13',
            'listcategory_id' => '2',
            'title' => 'VW Grand California',
            'description' => 'Den nye GRAND California og i den lange model 680. 2 selepladser, 4 siddepladser og to sovepladser. Kan dermed køres på almindeligt kørekort.

Bilen er koksmetal. De viste billeder er illustrationer.

PÅ VEJ HJEM OG LANDER HER I BUTIKKEN 1. OKTOBER. DEN FØRST I DANMARK OG KLAR TIL LEVERING.

RING DIREKTE TIL THOMAS YDE FOR FLERE OPLYSNINGER. TLF. 22326368 ELLER MAIL THYD@VW-AARHUS.DK

aut.gear/tiptronic, fuldaut. klima, 2 zone klima, fjernb. c.lås, infocenter, udv. temp. måler, regnsensor, sædevarme, højdejust. forsæde, el-ruder, el-spejle m/varme, bakkamera, adaptiv fartpilot, automatisk start/stop, dæktryksmåler, navigation, multifunktionsrat, håndfrit til mobil, bluetooth, android auto, apple carplay, armlæn, kopholder, læderrat, tågelygter, led forlygter, automatisk lys, kurvelys, lane assist, blindvinkelsassistent, automatisk nødbremsesystem, tonede ruder, diesel partikel filter.',
            'year'=> '2020',
            'fueltype'=> 'diesel',
            'color'=> 'hvid',
            'price'=> '842000',
            'image'=> 'vw-california-grand.jpg',      

        ]);
        $ad->save();

    }
}
