<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 07.01.2018
 * Time: 23:22
 */

return
    [
        'title' => 'Учебный Laravel',
        //PHP
        'Server time' => 'Серверное время',
        'pti_1' => 'Это страница с простыми действиями над данными с использованием <b>Php</b> функций.
        Например, вы можете ввести некоторые числа или буквы в поле ниже и нажать <b>Массив</b>. Введенная строка будет преобразована
        в массив.',
        'pti_2' => '<i>Введите числа и (или) буквы через пробел, запятую или точку и нажмите <b>Массив</b></i>',
        'Array' => 'Массив',
        'pti_3' => '<i>Также вы можете нажать на ссылку <b>Действия над файлами</b>, чтобы перейти на страницу для работы с тестовым файлом. 
Там вы сможете выполнить некоторые действия над файлом и его содержимым</i>',
        'Entered data' => 'Введенные данные',
        'Convertion to an array' => 'Преобразование в массив',
        'Array sorting' => 'Сортировка массива',
        'Reverse array sorting' => 'Обратная сортировка массива',
        'Array shuffling' => 'Перемешивание массива',
        'The first element of array' => 'Первый элемент массива',
        'The last element of array' => 'Последний элемент массива',
        'Swap the keys and values' => 'Замена местами ключей и значений',
        'Combine array elements Array shuffling in a string' => 'Объединение элементов массива <b><i>Перемешивание массива</i></b> в строку',
        'Actions with files' => 'Действия над файлами',
        'Content of testing file' => 'Содержимое тестового файла',
        'You can edit content of test file at field below (click Edit content)' => 'Вы можете отредактировать содержимое тестового файла в поле ниже (нажмите<b> Редактировать содержимое </b>)',
        'Edit content' => 'Редактировать содержимое',
        'At this field you can edit content of testing file' => 'В этом поле вы можете отредактировать содержимое тестового файла',
        'Save changes' => 'Сохранить изменения',
        'To check the result you can download the test file before editing, and then after that, and compare them. Download' =>
            'Для проверки результата, вы можете скачать тестовый файл до вненсения изменений, а затем после, и сравнить их. Скачать',
        'here' => 'здесь',
        'Also you can create text file with random name specifying its at field below (without extension).' =>
            'Также, можете создать текстовый файл с произвольным именем, задав его в поле ниже (без расширения).',
        'File name' => 'Имя файла',
        'Create file' => 'Создать файл',



        //MySQL
        'This is example of interaction with database via Eloquent ORM' => 'Это пример взаимодействия с базой данных посредством Eloquent ORM',
        'mti_1' => 'Вы можете добавить записи в таблицу базы данных вручную, используя форму ниже (нажмите <b>Создать пользователя</b>)
или загрузить тестовые данные нажатием на кнопку "Загрузка тестовых данных"! Тестовые данные загружаються с помощью Seed класса. Поля таблицы, 
такие как "Name", "Surname" заполняются данными из соответствующих массивов в случайном порядке. Поле "Age" - случайное целочисленное число
в диапазоне от 18 до 99.',
        'Loading of test data' => 'Загрузка тестовых данных',
        'Create user' => 'Создать пользователя',
        'Name' => 'Имя',
        'Surname' => 'Фамилия',
        'Age' => 'Возраст',
        'Add User' => 'Добавить пользователя',
        'Update record' => 'Обновить запись',
        'mti_2' =>'Вы можете выполнять некоторые простые действия над записями в таблице базы данных, такие как <b><i>удаление</i></b>, 
<b><i>редактирование</i></b> и <b><i>групповое удаление</i></b>. Также, если вы пожелаете, можете очистить таблицу полностью, нажав кнопку
<b><i>Очистить таблицу</i></b>',
        'Date of register' => 'Дата регистрации',
        'Actions' => 'Действия',
        'Select All' => 'Выбрать все',
        'Delete selected records' => 'Удалить выбранные записи',
        'Clear table' => 'Очистить таблицу',
        'Are you sure?' => 'Вы уверены?',
        'This action will delete all records from table and reset the auto-incrementing ID to zero. Do you want to continue anyway?' =>
            'Это действие удалит все записи из таблицы и сбросит авто-инкрементное поле ID в ноль. Все равно хотите продолжить?',
        'Close' => 'Закрыть',
        'Delete record' => 'Удалить запись',
        'Search' => 'Поиск',
        'Test data was loaded successfully!!!' => 'Тестовые данные загружены успешно!!!',
        'User' => 'Пользователь',
        'has been updated successful!' => 'успешно обновлен!',
        'has been deleted successful!' => 'успешно удален!',
        'has been added successful!' => 'успешно добавлен',
        'User has been added successful!' => 'Пользователь успешно добавлен!',
        'All records have been successfully deleted!' => 'Все записи успешно удалены!',
        'Users group has been deleted successful!' => 'Группа пользователей успешно удалена!',

        //Ajax
        'Get data from database via ajax query' => 'Получить данные из базы данных с помощью ajax запроса',
        'Clicking by button Get data will be sent ajax query to database for retrieving all records.' =>
            'Нажатие на кнопку <i><b>Получить данные</b></i> отправит ajax запрос к базе данных для извлечения всех записей.',
        'Get data' => 'Получить данные',
        'Data storage to database via ajax' => 'Сохранение данных в базу данных посредством ajax',
        'On the form below(click Create user) you can add users to database via ajax' =>
            'В форме, представленной ниже, (нажмите <i><b>Создать пользователя</b></i>) вы можете добавлять пользователей в базу данных ajax запросами',

    ];