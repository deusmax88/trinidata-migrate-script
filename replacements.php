<?php
return [
    'ОрганГосВластиИлиМестногоСамоуправления' => [
        'Руководитель' => 'ФИОРуководителя',
        'Сайт' => 'ВебСайтВладельцаОбъекта',
        'ЭлектроннаяПочта' => 'Email'
    ],

    'ОГИБДД' => [
        'ОГИБДДВид' => 'ТипПодразделения',
        'ОбслуживаемыеРайоны' => 'ОбслуживаемыеТерритории',
        'ТелефонНачальника' => 'ТелефонРуководителя',
    ],

    'ОтделыПолиции' => [
        'НомерОтдела' => 'КодНомерПодразделения',
    ],

    'ПожарнаяЧастьМчс' => [
        'НачальникОгпс' => 'ФИОРуководителя',
    ],

    'ОВИРУГ' => [
        'ОписаниеРежимаРаботы' => 'РежимРаботыОбъекта',
    ],

    'УчреждениеЗдравоохранения' => [
        'Руководитель' => 'ФИОРуководителя',
        'Сайт' => 'ВебСайтВладельцаОбъекта',
        'ЭлектроннаяПочта' => 'Email',
    ],

    'УчреждениеОбразования' => [
        'Директор' => 'ФИОРуководителя',
        'Сайт' => 'ВебСайтВладельцаОбъекта',
        'ЭлектроннаяПочта' => 'Email',
    ],

    'КоммерческаяИнфраструктура' => [
        'Количество персонала' => 'ЧисленностьПерсонала', // Сомнения по поводу начального атрибута
        'Форма собственности' => 'ФормаСобственности', // Сомнения по поводу начального атрибута
    ],

    'Гостиница' => [
        'ОписаниеХарактераДеятельности' => 'ОписаниеХарактераДеятельности', // Одно и тоже - нет?
    ],

    'ТорговоеПредприятие' => [
        'СредняяЧисленностьРаботников' => 'ЧисленностьПерсонала',
    ],

    'РозничныйРынок' => [
        'НомерИДатаРазрешения' => 'НомерИДатаРазрешительногоДокумента',
        'ОписаниеРежимаРаботы' => 'РежимРаботыОбъекта',
        'СрокДействияРазрешения' => 'СрокДействияРазрешительногодокумента',
    ],

    'СпортивноеУчреждение' => [
        'ПлощадьОбъекта' => 'ПлощадьКвМ',
        'Статус' => 'СтатусОбъекта',
    ],

    'СоциальнаяАптека' => [
        'РайонГорода' => 'расположенВРайоне',
    ],

    'УчреждениеСоциальногоОбслуживания' => [
        'ОписаниеРежимаРаботы' => 'РежимРаботыОбъекта',
    ],

    'УчреждениеПоДеламМолодежи' => [
        'КраткоеНаименование' => 'НаименованиеОбъектаКраткое',
    ],

    'ОтделениеПочтовойСвязи' => [
        'ОписаниеРежимаРаботы' => 'РежимРаботыОбъекта',
    ],

    'СадовоПарковоеПредприятие' => [
        'КраткоеНаименование' => 'НаименованиеОбъектаКраткое',
    ],

    'АттракционноеОборудование' => [
        'ПлощадьОбъекта' => 'ПлощадьКвМ',
    ],

    'ТранспортныйПарк' => [
        'ТипТранспортныхСредств' => 'ВидТранспорта',
    ],

    'ЖилищноеАгентство' => [
        'КраткоеНаименование' => 'НаименованиеОбъектаКраткое',
    ],

    'УстройстваВидеонаблюденияГородскогоМониторинговогоЦентра' => [
        'ДатаИВремяОбновления' => 'ДатаИВремяАктуализацииДанных',
        'ИдентификаторКамерыГвцн' => 'ИдентификаторКамеры',
        'ТипВидеокамеры' => 'ТипКамеры',
        'ПотокRtsp' => 'ПотокКамеры',
        'УголОбзора' => 'УголОбзора',
        'СостояниеВидеокамеры' => 'СостояниеКамеры',
    ],

    'ФоторадарныйКомплекс' => [
        'НомерФк' => 'НомерКамеры',
    ],

    'ТерминалГражданинПолиция' => [
        'НомерТерминала' => 'НомерКамеры',
    ],

    'КамераАсЛесоохранитель' => [
        'ИдентификаторКамерыАСЛесохранитель' => 'ИдентификаторКамеры',
        'ПотокRtmp' => 'ПотокКамеры',
        'ТипВидеокамеры' => 'ТипКамеры',
    ],

    'КамераАСЛеснойДозор' => [
        'ДатаИВремяИзменения' => 'ДатаИВремяАктуализацииДанных',
        'ИдентификаторКамерыАСЛеснойДозор' => 'ИдентификаторКамеры',
        'МодельУстройства' => 'МодельКамеры',
        'НазваниеТипаКамеры' => 'ТипКамеры',
        'ОписаниеМестаУстановки' => 'ОписаниеМестаУстановки',
        'СостояниеВидеокамеры' => 'СостояниеКамеры',
    ],

    'ПОО' => [
        'ДатаИВремяОбновления' => 'ДатаИВремяАктуализацииДанных',
        'ПлощадьОбъекта' => 'ПлощадьКвМ',
        'ПользовательВнесшийИзменения' => 'ФИОРаботникаОтветственногоЗаАктуализациюДанных',
        'РуководительОбъекта' => 'ФИОРуководителя',
        'ТелефонРуководителя' => 'ТелефонРуководителя', // Одно и тоже - нет?
        'ФаксРуководителя' => 'Факс',
        'ЧисленностьПерсонала' => 'ЧисленностьПерсонала', // Одно и тоже - нет?
    ],

    'МестоПроведенияМассовыхМероприятий' => [
        'ДатаИВремяОбновления' => 'ДатаИВремяАктуализацииДанных',
        'ПлощадьМестаПроведенияММТекст' => 'ПлощадьОбъектаПодробно',
        'ПлощадьМестаПроведенияММ' => 'ПлощадьКвМ',
        'ПользовательВнесшийИзменения' => 'ФИОРаботникаОтветственногоЗаАктуализацию',
    ],

    'УчастникРеагирования' => [
        'ИННОрганизации' => 'ИНН',
        'КППОрганизации' => 'КПП',
        'ОГРНОрганизации' => 'ОГРН',
        'ОКПООрганизации' => 'ОКПО',
    ]

];
