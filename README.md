# Дипломна работа 46156рКН - Expansio
<p align="center">
  <img width="460" height="400" src="https://github.com/GeorgievAtWork/UnibitBachelors/blob/main/src/assets/images/logo.png">
</p>
<p align="center">Това уеб приложение е част от техническата разработка към дипломнмата работа към степен Бакалавър, изработена от Георги Георгиев - 46156рКН</p><br>

## Идея
**Expansio** е онлайн платформа за обучение. Специалното на платформата е, че не са нужни регистрация или каквито и да е потребителски данни. Всеки може да се възползва от съдържанието, предлагано напълно безплатно от преподаватели в областта. Видеоуроците са подредени по категории, като сайта не съдържа допълнителни страници, което го прави лек и бърз.Потребителят само трябва да избере категория и видеоурок и да натисне бутона "Play". Информацията за преподавателите, както и страница с данни за тях могат да се достъпят също лесно, като това става от секцията "Преподаватели" или директно от хипервръзката под съответния им видеоурок. 


## Реализация
**Expansio** е мулти-контейнерно приложение, реализирано в облака, включващо множество технологии. Реализира се посредством три **Docker шаблона**, включващи APACHE HTTP сървър + PHP, MySQL сървър и Alpine контейнер, който прави резервни копия на базата данни всеки ден в полунощ. Те могат да бъдат намерени както следва:<br>
[46156r-php-apache](https://hub.docker.com/r/ge0rg1ev/46156r-php-apache) <br>
[46156r-sql](https://hub.docker.com/r/ge0rg1ev/46156r-sql) <br>
[46156r-backup](https://hub.docker.com/r/ge0rg1ev/46156r-backup) <br>

За "вдигането" на цялата среда е използван **Docker-compose**, който реализира трите **Docker** контейнера, като "закача" нужните папки, отваря нужните портове и подсигурява мрежовата комуникация между тях. Всичко това се случва в **Amazon Web Services EC2 Linux** инстанция, на чиито публичен IP адрес е достъпен сайта.

## Използвани технологии
**Front-end** частта на проекта е реализирана посредством:
- **HTML5** - за markup;
- **CSS** - за стилизиране:
  - *Bootstrap* - за responsive дизайн,
  - *FontAwesome* - за иконки;
- **JS** - за функционалност в браузъра:
  - *AOS.js* - за анимации
  - *Video.js* - за видео възпроизвеждане
  - *JQuery* - за фунционалност
  - *Bootstrap* - за responsive дизайн

**Back-end** частта или server-side логиката, както и базата данни са реализирани чрез:
- **PHP** - за генериране на динамични страници, управление на БД и сървърни изчисления и логика;
- **Apache** - за хостинг на PHP
- **MySQL** - за бази данни
       
От гледна точка на **архитектура и хостинг** са използвани следните технологии:
- **Docker** - за контейнер engine;
- **Docker-compose** - за единно стартиране на мулти-контейнерната среда;
- **Dockerhub** - за хостване на Docker Image-ите, които реализират приложението
- **Amazon Web Services(AWS)** и по-точно **Elastic Compute Cloud(EC2)** - за виртуализация на средата и high availability хостинг.

## Предпоставки
За успешното стартиране на **Expansio** са нужни:
- Docker - [Link](https://docs.docker.com/get-docker/)
- Docker-compose - [Link](https://docs.docker.com/compose/install/)

## Стартиране и инсталация
```bash
git clone https://github.com/GeorgievAtWork/UnibitBachelors.git
cd docker-compose
docker-compose up -d
```

## Достъпване на приложението
След успешното стартиране на трите контейнера, **Expansio** е достъпен на порт 80 от публичният IP адрес на машината на която е стартиран. Резервните копия генерирани от c-backup контейнера могат да бъдат намерени в /var/lib/docker/volumes/\*/_data/ , като имената им са с формата **DATE_backup.sql**
