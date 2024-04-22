<script setup>
import {onMounted, ref} from "vue";
import { Head, Link, useForm } from '@inertiajs/vue3';
let name = ref(),
    phone = ref(),
    city = ref(),
    coupon = ref();

let statusForm = ref()

const sendForm = () => {
    axios.post('/api/v1/telegram/notification', {
        name: name.value,
        phone: phone.value,
        city: city.value,
        coupon: coupon.value
    }).then(res => {
        statusForm.value = true
    }).catch(error => {
        console.log(error)
        statusForm.value = false
    })
}

</script>

<template>
    <div class="backgroung-userinfo"></div>
    <main>

        <section>
            <div class="flex">
                <div class="header">
                    <img src="img/logo.webp" alt="Logo" class="logo">
                    <Link class="header_link" href="#contacts">Обратная связь</Link>
<!--                    <Link class="header_link" href="/news">Новости</Link>-->
                </div>

                <div class="title_div">
                    <h1 class="title">
                        Запустим современный сайт доставки для вашего бизнеса.
                    </h1>
                    <img src="img/iphone.webp" alt="APp Screen" class="iphone">
                </div>
                <p>Продавайте онлайн без комиссий за заказы,
                    Гости смогут сделать заказ и оплатить его прямо на сайте — неважно, доставка или заказ с собой.</p>
                <div class="contact_links">
                    <Link href="tel:+79939036654" class="header_link">+7 993 903 6654</Link>
                    <Link href="#price" class="header_link">Прайс-лист</Link>
                </div>
            </div>

            <div class="flex fli">

                <img src="img/bga.webp" alt="Cart BG" class="cart_img">
                <div class="flex_blocks">

                    <Link :href="route('news')" class="cart_block" style="background: #d6caff;" >

                        <h3>Интересные статьи</h3>
                        <img src="img/features.webp" alt="features" class="bcart_img">
                        <p>Подробнее</p>
                    </Link>
                    <div class="cart_block" style="background: #cbffdb;"
                         onclick="location.href='https://demo.qfood.site';">

                        <h3>Демо</h3>
                        <img src="img/demo-site.webp" alt="demo" class="bcart_img">

                        <p>Вы можете посмотреть каким будет ваш будущий сайт</p>
                    </div>

                </div>

            </div>

        </section>
        <hr style="margin-left: auto;">
        <section class="functional_block" id="system-info">
            <div class="title_block">
                <h2>О системе</h2>
            </div>
            <div class="block_items">
                <a href="#">Личный кабинет пользователя</a>
                <a href="#">Современный дизайн</a>
                <a href="#">Промокоды</a>
                <a href="#">Накопительная бонусная система</a>
                <a href="#">Умный расчет доставки</a>
                <a href="#">Публикация историй</a>
                <a href="#">Уведомление о заказах в мессенджерах</a>
                <a href="#">Тикет система</a>
            </div>
            <div class="title_block">
                <h2>Технологии</h2>
            </div>
            <div class="block_items">
                <a href="#">VueJs</a>
                <a href="#">Laravel</a>
            </div>
            <div class="title_block">
                <h2>Интеграции</h2>
            </div>
            <div class="block_items">
                <a href="#">ЮКасса</a>
                <a href="#">Tinkoff Pay</a>
                <a href="#">Alfa Pay</a>
                <a href="#">SMSPilot</a>
                <a href="#">Telegram</a>
            </div>
        </section>
        <hr>
        <div class="qprice" id="price">
            <div class="qprice__header">
                <div class="qprice__logo-wrapper">
                    <img src="https://qfood.site/img/logo.webp" alt="qprice" class="qprice__logo">
                </div>

            </div>

            <div class="qprice__subheader-wrapper">
                <div class="qprice__subheader">
                    <h1 class="qprice__username">Прайс-лист</h1>
                    <span class="qprice__help-text">Доступна оплата частями</span>
                </div>
            </div>

            <div class="qprice__cart">
                <h2 class="qprice__cart-title">Выгодно:</h2>

                <ul class="qprice__cart-list">
                    <li class="qprice__cart-item">
                        <span class="qprice__index">1</span>
                        <span class="qprice__item-name">Лицензия</span>
                        <span class="qprice__item-price">39 500₽</span>
                    </li>

                    <li class="qprice__cart-item">
                        <span class="qprice__index">2</span>
                        <span class="qprice__item-name">Сервер</span>
                        <span class="qprice__item-price">400₽/мес</span>
                    </li>

                    <li class="qprice__cart-item">
                        <span class="qprice__index">3</span>
                        <span class="qprice__item-name">Домен</span>
                        <span class="qprice__item-price">от 120₽/год</span>
                    </li>

                    <li class="qprice__cart-item">
                        <span class="qprice__cart-total">сумма</span>
                        <span class="qprice__item-price">39 900₽</span>
                    </li>
                </ul>
            </div>

            <div class="qprice__footer" onclick="location.href='https://t.me/qfood_manager';">
                <p> Написать менеджеру в Telegram </p>
                <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 48 48" fill="none"
                     style="width: 24px;height: 24px;background: white;padding: 13px;border-radius: 12px;border: 1px solid #c9c9c9;">
                    <path
                        d="M41.4193 7.30899C41.4193 7.30899 45.3046 5.79399 44.9808 9.47328C44.8729 10.9883 43.9016 16.2908 43.1461 22.0262L40.5559 39.0159C40.5559 39.0159 40.3401 41.5048 38.3974 41.9377C36.4547 42.3705 33.5408 40.4227 33.0011 39.9898C32.5694 39.6652 24.9068 34.7955 22.2086 32.4148C21.4531 31.7655 20.5897 30.4669 22.3165 28.9519L33.6487 18.1305C34.9438 16.8319 36.2389 13.8019 30.8426 17.4812L15.7331 27.7616C15.7331 27.7616 14.0063 28.8437 10.7686 27.8698L3.75342 25.7055C3.75342 25.7055 1.16321 24.0823 5.58815 22.459C16.3807 17.3729 29.6555 12.1786 41.4193 7.30899Z"
                        fill="#000000"/>
                </svg>
            </div>
        </div>

        <section class="functional_block form_s" id="contacts">
            <div class="title_block">
                <h2>Обратная связь</h2>
            </div>

            <div id="success-message" v-if="statusForm">
                <p>Заявка успешно отправлена!</p>
            </div>
            <div id="contact-form" v-if="!statusForm">
                <input type="text" placeholder="Имя" v-model="name" name="name" required>
                <input type="text" placeholder="Номер телефона" v-model="phone" name="phone" required>
                <input type="text" placeholder="Ваш город" v-model="city" name="city" required>
                <input type="text" placeholder="Промокод" v-model="coupon" name="promo" required>
                <button type="button" @click="sendForm">Оставить заявку</button>
                <img src="img/contact.webp" alt="contact_icon" class="contact_icon">
            </div>
        </section>
        <br>
    </main>
</template>
