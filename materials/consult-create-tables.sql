drop table if exists askpost;

create table askpost
(
    id int(10) unsigned auto_increment,
    title varchar(128) not null,
    post text not null,
    date_post datetime NOT NULL DEFAULT NOW(),
    user_id int(10) not null,
    state int(2) not null default 0,
    primary key (id),
    foreign key (user_id) references user (id) on delete restrict on update cascade
) engine = InnoDB character set = utf8 collate utf8_unicode_ci;

drop table if exists askpostfile;

create table askpostfile
(
    id int(10) unsigned auto_increment,
    origin_name varchar(64) not null,
    server_name varchar(32) not null,
    extention varchar(10) null,
    description varchar(128) null,
    path varchar(128) not null,
    askpost_id int(10) unsigned not null,
    user_id int(10) not null,
    primary key (id),
    foreign key (askpost_id) references askpost (id) on delete restrict on update cascade,
    foreign key (user_id) references user (id) on delete restrict on update cascade
) engine = InnoDB character set = utf8 collate utf8_unicode_ci;

insert into askpost (title, post, user_id) values ('Треба розірвати шлюб так, щоб квартира дісталась мені', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim 
                            ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', 1);
insert into askpost (title, post, user_id) values ('wwwwЯк вивчитися на програміста: основна таємниця айтішної освіти', 'Свій перший сайт я написав на третьому курсі. Нашому «мистецькому об’єднанню» потрібно було своє представництво в інтернеті, де ми мали викладати вірші, відео з перфоменсів і маніфести постмодернізму, який помер. В нашому об’єднанні були поети, режисери, оператори і актори, а програмістом був чомусь я один. Тож вибору особливого не було: я сів і почав писати сайт.
На той момент я не знав PHP, не уявляв собі, «що відбувається між тим, як натиснути кнопку Ентер, і тим, як гугл покаже тобі форму пошуку». Не знав патернів програмування, різниці між SOLID і GRASP, абстрактним класом та інтерфейсом. Я був жахливим програмістом і прекрасно це розумів, але діватись було нікуди — я сів і почав писати код.
Сайт у мене також вийшов жахливий. На щастя, початкового коду не збереглося — після чергового «апгрейду» з AJAX чатом на сервер проліз вірус і заразив, окрім нашого, ще з десяток сусідніх площадок. Після інциденту з вірусом із безкоштовного сервера нас погнали, а код (його єдину існуючу копію) витерли під нуль. Часом я мрію, щоб таке ж сталося з усіма іншими моїми старими проектами.
Код був написаний на Смарті та грішив усіма можливими помилками початківця. Тим не менше, один з моїх колег по «об’єднанню» зумів здати його чи то як лабораторну, чи то навіть як курсову роботу. Інший знайомий попросив мій код як основу для свого «стартапу», мовляв, його теперішня версія трохи поступається у функціоналі. Після двох літрів пива я вмовив показати, що в нього було на той момент. Він відкрив єдиний файл проекту. Верхнім рядком там стояв class Articles і дві фігурні дужки, 
більше у файлі не було взагалі нічого. «Ух ти», — сказав я йому, — «в тебе на один клас більше, ніж в мене!»', 2);


