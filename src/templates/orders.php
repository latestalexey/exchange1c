<?php print '<?xml version="1.0" encoding="windows-1251"?>'; ?>
<КоммерческаяИнформация ВерсияСхемы="2.03" ДатаФормирования="2007-10-30">
    <?php foreach ($orders as $order) : ?>
        <Документ>
            <Ид><?php echo $order->id; ?></Ид>
            <Номер><?php echo $order->number; ?></Номер>
            <Дата><?php echo $order->date; ?></Дата>
            <ХозОперация>Заказ товара</ХозОперация>
            <Роль>Продавец</Роль>
            <Валюта>руб</Валюта>
            <Курс>1</Курс>
            <Сумма><?php echo $order->total; ?></Сумма>
            <Контрагенты>
                <Контрагент>
                    <Ид>1#admin# admin</Ид>
                    <Наименование>admin</Наименование>
                    <Роль>Покупатель</Роль>
                    <ПолноеНаименование>admin</ПолноеНаименование>
                    <Фамилия>Иванов</Фамилия>
                    <Имя>admin</Имя>
                    <АдресРегистрации>
                        <Представление>ггг</Представление>
                        <АдресноеПоле>
                            <Тип>Почтовый индекс</Тип>
                            <Значение>1111</Значение>
                        </АдресноеПоле>
                        <АдресноеПоле>
                            <Тип>Улица</Тип>
                            <Значение>ггг</Значение>
                        </АдресноеПоле>
                    </АдресРегистрации>
                    <Контакты/>
                    <Представители>
                        <Представитель>
                            <Контрагент>
                                <Отношение>Контактное лицо</Отношение>
                                <Ид>b342955a9185c40132d4c1df6b30af2f</Ид>
                                <Наименование>admin</Наименование>
                            </Контрагент>
                        </Представитель>
                    </Представители>
                </Контрагент>
            </Контрагенты>
            <Время><?php echo $order->time; ?></Время>
            <?php if (isset($order->comment) && !empty($order->comment)) : ?>
                <Комментарий><?php echo $order->comment; ?></Комментарий>
            <?php endif; ?>
            <Товары>
                <?php foreach ($order->products as $product) : ?>
                    <Товар>
                        <Ид><?php echo $product->id; ?></Ид>
                        <Наименование><?php echo $product->name; ?></Наименование>
                        <БазоваяЕдиница Код="796" НаименованиеПолное="Штука" МеждународноеСокращение="PCE">шт</БазоваяЕдиница>
                        <ЦенаЗаЕдиницу><?php echo $product->price; ?></ЦенаЗаЕдиницу>
                        <Количество><?php echo $product->count; ?></Количество>
                        <Сумма><?php echo $product->total; ?></Сумма>
                        <ЗначенияРеквизитов>
                            <ЗначениеРеквизита>
                                <Наименование>ВидНоменклатуры</Наименование>
                                <Значение>Товар</Значение>
                            </ЗначениеРеквизита>
                            <ЗначениеРеквизита>
                                <Наименование>ТипНоменклатуры</Наименование>
                                <Значение>Товар</Значение>
                            </ЗначениеРеквизита>
                        </ЗначенияРеквизитов>
                    </Товар>
                <?php endforeach; ?>
            </Товары>
            <ЗначенияРеквизитов>
                <ЗначениеРеквизита>
                    <Наименование>Метод оплаты</Наименование>
                    <Значение>Наличный расчет</Значение>
                </ЗначениеРеквизита>
                <ЗначениеРеквизита>
                    <Наименование>Заказ оплачен</Наименование>
                    <Значение>false</Значение>
                </ЗначениеРеквизита>
                <ЗначениеРеквизита>
                    <Наименование>Доставка разрешена</Наименование>
                    <Значение>false</Значение>
                </ЗначениеРеквизита>
                <ЗначениеРеквизита>
                    <Наименование>Отменен</Наименование>
                    <Значение>false</Значение>
                </ЗначениеРеквизита>
                <ЗначениеРеквизита>
                    <Наименование>Финальный статус</Наименование>
                    <Значение>false</Значение>
                </ЗначениеРеквизита>
                <ЗначениеРеквизита>
                    <Наименование>Статус заказа</Наименование>
                    <Значение>[N] Принят</Значение>
                </ЗначениеРеквизита>
                <ЗначениеРеквизита>
                    <Наименование>Дата изменения статуса</Наименование>
                    <Значение>2007-10-30 15:19:27</Значение>
                </ЗначениеРеквизита>
            </ЗначенияРеквизитов>
        </Документ>
    <?php endforeach; ?>
</КоммерческаяИнформация>
