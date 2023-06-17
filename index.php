<?php
get_header();
?>
<body>
    <section class="construct_box">
        <div class="construct_wrapp">
            <div class="steps_wrap">
                <div class="title_steps content">
                    <h3>Онлайн-конструктор лифта</h3>
                    <h4>Оформление заказа</h4>
                </div>
                <div class="item_steps">
                    <div class="tabs">
                        <ul class="tabs__caption content">
                          <li class="link active">
                            Стены
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon/ellipse1.svg" alt="ellipse1">
                          </li>
                            
                          <li class="link content">
                            Потолок
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon/ellipse1.svg" alt="ellipse1">
                          </li>
                            
                          <li class="link content">
                            Готовая модель
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon/ellipse1.svg" alt="ellipse1">
                          </li>
                        </ul>
                        <div class="construct_content">
                            <div class="tabs_wrapp content">
                                <div class="tabs__content active">
                                    <h4>Выберите отделку стен</h4>
                                    <div class="construct_first_box">
                                        <div class="picture">
                                            <img class="lift" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/лифт.png" alt="lift">
                                            <div class="left_small_box">
                                                <div class="view1">
                                                    <p>Вид <br> спереди</p>
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>images/icon/cubeLift2.svg" alt="cubeLift2">
                                                </div>
                                                <div class="view2">
                                                    <p>Вид <br>сбоку</p>
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>images/icon/cubeLift.svg" alt="cubeLift">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="about">
                                            <div class="about_wrap">
                                                <div class="about_wrap_item">
                                                    <span class="gray"></span>
                                                    <h4>Серый</h4>
                                                </div>
                                                <div class="about_wrap_item">
                                                    <span class="yellow"></span>
                                                    <h4>Желтый</h4>
                                                </div>
                                                <div class="about_wrap_item">
                                                    <span class="blue"></span>
                                                    <h4>Синий</h4>
                                                </div>
                                                <div class="about_wrap_item">
                                                    <span class="metal"></span>
                                                    <h4>Нержавейка</h4>
                                                </div>
                                            </div>
                                            <div class="price_wall">
                                                <h4>Цена:</h4>
                                                <h2>500 000 руб.</h2>
                                                <div class="price_btn">
                                                    <button type="button" id="nextBtn">Далее</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="tabs__content">
                                    <h4>Выберите отделку потолка</h4>
                                    <div class="construct_first_box">
                                        <div class="picture">
                                            <img class="lift" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/лифт.png" alt="lift">
                                            <div class="left_small_box">
                                                <div class="view1">
                                                    <p>Вид <br> спереди</p>
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>images/icon/cubeLift2.svg" alt="cubeLift2">
                                                </div>
                                                <div class="view2">
                                                    <p>Вид <br>сбоку</p>
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>images/icon/cubeLift.svg" alt="cubeLift">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="about">
                                            <div class="about_wrap">
                                                <div class="about_wrap_item">
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>images/podves.png" alt="podves" aria-required="false">
                                                    <h4>Центральная панель</h4>
                                                </div>
                                                <div class="about_wrap_item">
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>images/podves.png" alt="podves" aria-required="false">
                                                    <h4>Подвес для ПСБ</h4>
                                                </div>
                                                <div class="about_wrap_item">
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>images/podves.png" alt="podves" aria-required="false">
                                                    <h4>Потолок подвесной</h4>
                                                </div>
                                                <div class="about_wrap_item">
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>images/podves.png" alt="podves" aria-required="false">
                                                    <h4>Потолок подвесной</h4>
                                                </div>
                                            </div>
                                            <div class="price_wall">
                                                <h4>Цена:</h4>
                                                <h2>600 000 руб.</h2>
                                                <div class="price_btn">
                                                    <button type="button" id="backBtn">Назад</button>
                                                    <button type="button" id="nextBtn">Далее</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="tabs__content">
                                    <h4>Посмотритие, как будет выглядеть ваш лифт</h4>
                                    <div class="construct_first_box">
                                        <div class="picture">
                                            <img class="lift" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/лифт.png" alt="lift">
                                            <div class="left_small_box">
                                                <div class="view1">
                                                    <p>Вид <br> спереди</p>
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>images/icon/cubeLift2.svg" alt="cubeLift2">
                                                </div>
                                                <div class="view2">
                                                    <p>Вид <br>сбоку</p>
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>images/icon/cubeLift.svg" alt="cubeLift">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="about">
                                            <h2>Вы выбрали:</h2>
                                            <div class="about_wrap">
                                                <div class="about_wrap_item">
                                                    <span class="gray"></span>
                                                    <h4>Серый</h4>
                                                </div>
                                                <div class="about_wrap_item">
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>images/podves.png" alt="podves" aria-required="false">
                                                    <h4>Центральная панель</h4>
                                                </div>
                                                <div class="price_wall">
                                                    <h4>Цена:</h4>
                                                    <h2>1 100 000 руб.</h2>
                                                    <div class="price_btn">
                                                        <button type="button" id="backBtn">Назад</button>
                                                        <button type="button" id="totalBtn">Оформить</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    get_footer();
?>

  