@extends('pages.layout')

@php
$appLink = '<a href="' . $googleUrl . '">' . $appNameTranslated . '</a>';
@endphp

@section('content')
    <div class="container" style="margin: 30px auto;">
        <h1 class="text-center">Политика приватности</h1>
        <h5 class="text-center" style="margin-bottom: 25px">{!! $appLink !!}</h5>
        <p>
            Приложение {!! $appLink !!} обслуживается и предоставляется компанией <a href="/">BODev.pro</a>.
            Если вы установите и будете использовать
            данное приложение, мы сможем собирать те данные о вас, которые вы самолично выберите нам предоставлять. В
            настоящей Политике конфиденциальности приводятся сведения о том, как именно используются данные, собранные
            нашими приложениями, а также о том, куда вы можете обратиться в случае каких-либо вопросов или сомнений.
            Если вы получили доступ к данному приложению через сайт третьего лица, такое лицо также может собирать
            данные о
            вас. В этом случае вам следует ознакомиться с условиями использования и политикой конфиденциальности
            программного обеспечения и сайта данного лица перед установкой и использованием приложения, чтобы узнать о
            том,
            как будут использоваться собранные данные.
        </p>
        <h3>1. Какие виды данных мы собираем?</h3>
        <p>
            При регистрации в некоторых наших приложениях, мы можем попросить вас предоставить такие данные, как имя,
            имя
            пользователя, адрес электронной почты, возраст, пол. В наших приложениях могут проводиться дополнительные
            опросы, в ходе которых вам будет предложено выразить свое мнение о различных продуктах и услугах. Если вы
            загрузите какие-либо материалы посредством наших приложений, мы автоматически получим сведения о вашем
            оборудовании. Перед тем как передавать нам персональные данные любых других лиц (к примеру, в рамках акций
            «пригласи друга»), заручитесь их согласием. Следите за тем, чтобы предоставляемые вами данные были точны и
            актуальны, и своевременно обновляйте их в случае изменений.
        </p>
        <h3>2. Что мы делаем с собранными данными?</h3>
        <p>
            Мы используем собранные данные в следующих целях:<br>
            - для обеспечения функционирования наших приложений, а также предоставления вам информации и услуг, включая,
            без ограничения, загружаемые материалы, чаты, рекламные акции и конкурсы; <br>
            - для оказания вам услуг технической поддержки;<br>
            - для внутреннего анализа и исследований в целях улучшения наших продуктов и услуг;<br>
            - для отправки вам новостей и маркетинговой информации о продуктах и услугах BODev, а также предложениях,
            продуктах и услугах избранных сторонних компаний, но только в пределах, разрешенных действующим
            законодательством или указанных вами (см. раздел «Как отказаться от подписки» ниже);<br>
            - для обнаружения и предотвращения случаев мошенничества и злоупотребления нашими приложениями или услугами.
        </p>
        <h3>3. Кто еще может получить доступ к вашим данным?</h3>
        <p>
            Мы сотрудничаем со сторонними компаниями в области рекламы и сбора статистики в наших приложениях. Эти
            компании
            собирают статистическую информацию о использовании приложения и имеют право использовать ваши персональные
            данные только в том объеме, который необходим для оказания нам соответствующих услуг.<br>
            Некоторые из таковых компаний могут обрабатывать ваши данные в США, Японии и других странах за пределами
            Европейской экономической зоны. Законы о защите данных, принятые в этих странах, могут отличаться от таковых
            в
            Европейской экономической зоне. Если вы не хотите, чтобы ваши данные передавались подобным образом,
            воздержитесь
            от использования наших приложений.<br>
            В исключительных обстоятельствах мы можем раскрыть ваши персональные данные по требованию законодательства,
            а
            также в целях защиты себя или третьих лиц от ущерба и противоправных действий. В случае продажи или
            реструктуризации нашего бизнеса ваши данные могут быть переданы вместе с ним.<br>
            Политику приватности Appodeal можете найти по ссылке: <br>
            <a href="https://www.appodeal.com/privacy-policy" target="_blank" rel="nofollow noopener">
                https://www.appodeal.com/privacy-policy
            </a>
        </p>
        <h3>4. Безопасность</h3>
        <p>
            Мы принимаем коммерчески оправданные меры по защите ваших персональных данных. В число этих мер входят
            процессы
            и процедуры, направленные на снижение рисков несанкционированного доступа к вашим данным или разглашения
            таковых. Однако мы не гарантируем полного исключения злоупотреблений вашими персональными данными со стороны
            нарушителей. Храните пароли для ваших учетных записей в безопасном месте и не разглашайте их третьим лицам.
            Если
            вам станет известно о несанкционированном использовании вашего пароля или ином нарушении безопасности,
            немедленно свяжитесь с нами.<br>
            Форумы, чаты и другие области сообщества игроков, доступные с помощью наших приложений, являются публичными.
            В
            таких областях не следует разглашать информацию, позволяющую установить вашу личность или личность любого
            другого лица. Мы не несем ответственности за безопасность и защиту данных, разглашенных вами в таких
            областях.
        </p>

        <h3>5. Контактная информация</h3>
        <p>
            По общим вопросам обращайтесь в службу поддержки пользователей
            по адресу <a href="mailto:support@bodev.pro">support@bodev.pro</a>.
        </p>
    </div>
@endsection
