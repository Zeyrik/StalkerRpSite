<x-main-layout>
    <x-slot name='title'>История</x-slot>
    <x-slot name='content'>
        <div>
            <h3 class="mb-3 text-white text-4xl">Лор</h3>
            <div class="flex flex-col items-center">
                @foreach ($data as $paragraph)
                <div>
                    <h4>{{ $paragraph->title }}</h4>
                    <p>{{ $paragraph->text }}</p>
                    <div>
                        @if (!isset($paragraph->image_1) && !isset($paragraph->image_2) && !isset($paragraph->image_3))
                            <div class="grid grid-cols-3 gap-5">
                                <img src="{{ $paragraph->image_1 }}">
                                <img src="{{ $paragraph->image_2 }}">
                                <img src="{{ $paragraph->image_3 }}">
                            </div>
                        @elseif(!isset($$paragraph->image_1) && !isset($paragraph->image_2))
                            <div class=" grid grid-cols-2 gap-5">
                                <img src="{{ $paragraph->image_1 }}">
                                <img src="{{ $paragraph->image_2 }}">
                            </div>
                        @elseif(!isset($paragraph->image_1))

                        @endif
                    </div>
                </div>
                 @endforeach
            </div>

        </div>





        {{-- <div class="text-white flex flex-col items-center">
                <img class="w-[200px] mb-5" src="https://stalkerdayz.com/client/images/logo3.png" alt="">
            <div class="flex items-center">
                <p>В результате аварии 26 апреля 1986 года на Чернобыльской АЭС. Из-за выбросов радиации из 30-километровой зоны были эвакуированы люди. Так называемая «зона отчуждения» так же была огорожена и находилось под охраной. Это и дало начало испытаниям ученных в этой зоне. Безлюдная территория больших размеров — идеальные условия, при том, что несколько энергоблоков ЧАЭС еще находились в эксплуатации. Так была создана сеть лабораторий, обозначаемых буквой “X”. В этих лабораториях ученые изучали теорию о ноосфере — информационной оболочке Земли. В ходе их испытаний был создан мощный пси-излучатель.</p>
                <img class="w-[400px]" src="https://stalker-mods.su/_ph/1/373450711.jpg">
            </div>
                <p class="mb-5">
                В результате аварии 26 апреля 1986 года на Чернобыльской АЭС. Из-за выбросов радиации из 30-километровой зоны были эвакуированы люди. Так называемая «зона отчуждения» так же была огорожена и находилось под охраной. Это и дало начало испытаниям ученных в этой зоне. Безлюдная территория больших размеров — идеальные условия, при том, что несколько энергоблоков ЧАЭС еще находились в эксплуатации. Так была создана сеть лабораторий, обозначаемых буквой “X”. В этих лабораториях ученые изучали теорию о ноосфере — информационной оболочке Земли. В ходе их испытаний был создан мощный пси-излучатель.10 июня 2006 года один из экспериментов выходит из под контроля. Зону охватила вспышка невероятной яркости. Наступила полная тишина, небо озарилось багровыми облаками, произошёл страшный грохот и земля содрогнулась. Многие люди внутри периметра погибли. Правительственные войска полностью оцепили территорию по периметру. Спасательные операции проводились с трудом из-за поднявшейся аномальной активности. Большинство выживших осталось внутри периметра. Сформировывается ОКСОП (Объединенный Контингент Сил Охраны Периметра), в состав которого входят представители вооруженных сил стран СНГ. В закрытый периметр начинают проникать незаконные лица с целью получения выгоды и исследования зоны, так называемые «Сталкера». Вслед за сталкерами-одиночками за исследование Зоны принимаются учёные. Организуются экспедиции, появляются мобильные лаборатории внутри Периметра. Несмотря на военный контроль, сталкерство принимает всё больший размах. Центр Зоны всё ещё остаётся недостижимой целью, путь закрывает «Выжигатель мозгов» — неизвестное пока явление, действие которого концентрируется в районе леса к северу от «Армейских складов». Этот последний рубеж получил название Барьер. Однако каждый сталкер мечтает беспрепятственно пройти за него, ходят слухи о нетронутых территориях — «Клондайке» артефактов, появляются легенды об Исполнителе желаний — кристалле внеземного происхождения, находящегося на ЧАЭС и якобы ставшего причиной образования Зоны. Доступная часть Зоны исследована почти полностью. Сталкерство достигло своего пика, окончательно сформировались сталкерские группировки. Самые крупные из них — «Долг», сформировавшийся из бывших военных и добровольцев, «Свобода», состоявшая из сталкеров-анархистов, — начинают противоборство за влияние в Зоне. Свои интересы проявляют и военные, охраняющие периметр, бандиты, зарабатывающие на ограблениях сталкеров, а также иностранные государства в лице наёмников. На «Свалке» в кучах радиоактивного мусора сталкеры стали находить много полезного оборудования, формируются группы , а через местных торговцев осуществляется сбыт артефактов и поставки оружия.</p>
        <div class="flex flex-col items-center">
            <p class="mb-5">В конце августа 2011 года, группа сталкеров во главе со Стрелком проникает к блокам ЧАЭС. Реакцией на вторжение явился сверхвыброс, послуживший «спусковым крючком» для начала войны группировок. Он изменил облик Зоны: обширные аномальные поля закрыли доступ на некоторые территории, заперев находящихся там людей, другие, ранее неизвестные, наоборот, открылись. Одним из таких мест стал покинутый город Лиманск, за который сразу начали бороться «Долг» и «Свобода». Группировка «Долг» на своей базе в НИИ «Агропром» подверглась атаке мутантов из подземелий и перестала уделять внимание усилению бандитов. В Тёмной долине группировка «Свобода» также стала объектом нападений, на её членов охотились наёмники.</p>
            
            <div class="grid gap-5 grid-cols-3">
                <img class="" src="http://pic.rutubelist.ru/video/79/cf/79cfccd2d63700bdc5f0c4cebac6d79b.jpg">
                <img class="" src="https://kartinkof.club/uploads/posts/2023-05/1683325082_kartinkof-club-p-kartinki-stalker-dolg-1.jpg">
                <img class="" src="https://celes.club/uploads/posts/2022-10/1667223214_42-celes-club-p-stalker-banditi-art-krasivo-45.jpg">
            </div>
            
        </div>
                


            <p class="mb-5">Воспользовавшись проблемами «Долга», бандиты прочно обосновались на Свалке — своеобразном перекрестке дорог, и пожинали свою долю в промысле искателей всякого мусора на Свалке. Вытесненные со Свалки одиночки стали концентрироваться на Кордоне, где держался нейтралитет с военными, пока их командир не решил заключить сделку с паханами бандитов. В результате одиночки вступили в конфликт.</p>
        
            
        <div class="flex items-center mb-5">
            <img class="w-[400px] mr-5" src="http://klublady.ru/uploads/posts/2022-07/1658617809_59-klublady-ru-p-tatu-stalker-monolit-foto-59.jpg">
            <p class="">Для предотвращения попыток проникновения «О-Сознание» вербует путём зомбирования группировку «Монолит», которая незадолго до сверхвыброса прорвалась в центр Зоны. Члены группировки выступали за неприкосновенность Зоны и верили в божественную сущность Исполнителя желаний — Монолита, а после зомбирования стали агрессивно настроены ко всем остальным сталкерам.</p>
        </div>
            <p class="mb-5">Во время сверхвыброса военные на складах понесли большие потери, а через некоторое время со стороны Выжигателя стали приходить агрессивно настроенные отряды группировки «Монолит», что ещё больше осложнило защиту Барьера. Оставшиеся военные были вынуждены отступить на базу, а защитой Барьера занялись сталкера. Почти сразу армейской базой заинтересовалась «Свобода», захотевшая иметь стратегически важное положение, близкое к центру Зоны, и, несмотря на проблемы, направила туда свои отряды. Таким образом, силы группировки оказались разрозненными. Пока основные силы базировались недалеко на старой пожарной станции , самые опытные отряды ,с завидным ,упорством пытались удержать Армейские склады , но в итоге были вынуждены отступить к основному месту базирования ,понеся при этом большие потери.</p>
    <p class="mb-5">К 2014 году Зона пришла в относительное спокойствие: территории были поделены на сферы влияния. Группа опытных сталкеров вместе с научными сотрудниками и передовым отрядом военных закончила консервацию лабораторий, дабы прекратить бесконечный поток мутантов из них, в следствие чего зона стала чуть безопаснее. «Долг» и «Свобода» полностью обосновались на своих базах и начали вести агитацию среди одиночек, дабы укрепиться и дальше вести борьбу за свои идеалы. «Братва» все так же подминает под себя всех, кто пытается пройти с Кордона на свалку, хоть зачастую и получает равносильный отпор из вольных сталкеров и, так называемых, «Нейтралов» - единственных кому не чужды человечность и забота о ближнем.</p>
    <p class="mb-5">В 2021 некая группа сталкеров на последнем дыхании добирается до бункера ученых. С конской дозой радиации и гниющими ранами, они бредят о некой тайной тропе, ведущей через реку Припять. Все присутствующие сразу поняли, что первый нашедший этот путь сможет разбогатеть и стать одним из самых влиятельных людей Зоны.</p>
    <p class="mb-5">Вскоре после этого инцидента, стало невозможно найти хоть одного присутствующего при тех событиях, а весь состав научной группы резко поменялся без всякой причины. Теперь каждый знает, что такой путь существует и каждый намерен оказаться там первым. Но только не всем удается вернуться из длительных ходок, не смотря на то, что каждый раз удается дойти все дальше и дальше.</p> --}}

</div>
    </x-slot>
</x-main-layout>