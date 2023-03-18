@extends('app')
@section('content')
    <div class="body-inner">
    <section class="profile-content">
        <div class="profile-image" style="background-image:url({{asset("/img/aboutus.png")}})">
            <div class="profile-name">
            </div>
        </div>
        <div class="profile-bio">
            <h3>О нас</h3>
            <br/>
            <p>
                Здравствуйте!
                Мы рады приветствовать вас на нашем сайте знакомств!
                Мы - команда профессионалов, которые страстно желают помочь людям найти значимые связи и построить
                долгосрочные отношения. Наша миссия заключается в создании безопасной и гостеприимной среды, где
                одинокие
                люди могут встречаться, общаться и узнавать друг друга без какого-либо давления или осуждения.
                Мы считаем, что знакомства в Интернете должны быть веселыми, легкими и доступными для всех. Именно
                поэтому
                мы разработали нашу платформу удобной, интуитивно понятной и оснащенной инновационными функциями,
                которые
                облегчают поиск идеальной пары.
                Наша команда состоит из опытных разработчиков, дизайнеров и специалистов по поддержке клиентов, которые
                неустанно работают над тем, чтобы ваши знакомства в Интернете были плавными и приятными. Мы всегда
                прислушиваемся к вашим отзывам и предложениям, чтобы улучшить наши услуги и сделать ваш опыт еще лучше.
                На нашем сайте знакомств мы ценим вашу конфиденциальность и безопасность. Мы используем новейшие
                технологии
                шифрования и передовые протоколы безопасности для защиты вашей личной информации и обеспечения
                безопасного и
                надежного знакомства в Интернете.
                Спасибо, что выбрали наш сайт знакомств. Мы надеемся, что вы найдете то, что ищете, и желаем вам всего
                наилучшего в ваших поисках любви и общения!
            </p>
            <div class="m-t-60">
                <div class="p-progress-bar-container title-up small extra-small color">
                    <div class="p-progress-bar" data-percent="100" data-delay="100" data-type="%">
                        <div class="progress-title">Мужчины</div>
                    </div>
                </div>
                <div class="p-progress-bar-container title-up small extra-small color">
                    <div class="p-progress-bar" data-percent="94" data-delay="200" data-type="%">
                        <div class="progress-title">Женщины</div>
                    </div>

                </div>
            </div>
            <hr>
            <p>Выше описана статистика пользователей</p>
        </div>
    </section>
    <!-- end: SECTION FULLSCREEN -->
</div> <!-- end: Body Inner -->
@endsection
