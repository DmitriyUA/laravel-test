<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 07.01.2018
 * Time: 23:21
 */

return
    [
        'title' => 'Laravel trainig',

        //PHP
        'ser_time' => 'Server time',
        'pti_1' => 'This is a page with simple actions with data using <b>Php</b> functions.
        For example, you can enter some numbers or letters in field below and click <b>Array</b>. Input string will be 
        converted to an array.',
        'pti_2' => '<i>Enter the numbers and (or) letters through the space, comma or point and click button
        <b>Array</b></i>',
        'pti_3' => '<i>Also you can click the link <b>File</b> to go to the page for work with testing file. There you can make some actions with file
        and it`s contents.</i>',
        'p_array' => 'Array',
        'en_data' => 'Entered data',
        'ct_arr' => 'Convertion to an array',
        'arr_sort' => 'Array sorting',
        'rarr_sort' => 'Reverse array sorting',
        'arr_shuf' => 'Array shuffling',
        'f_elem' => 'The first element of array',
        'l_elem' => 'The last element of array',
        'swap' => 'Swap the keys and values',
        'combine' => 'Combine array elements <b><i>Array shuffling</i></b> in a string',
        'edfile' => 'File',
        'filecont' => 'Content of testing file',
        'fti_1' => 'You can edit content of test file at field below (click<b> Edit content </b>)',
        'fti_2' => 'At this field you can edit content of testing file',
        'fti_3' => 'To check the result you can download the test file before editing, and then after that, and compare them. Download',
        'here' => 'here',
        'save' => 'Save changes',
        'edcont' => 'Edit content',


        //MySQL
        'mysql_title' => 'This is example of interaction with database via Eloquent ORM',
        'mti_1' => 'You can add records to database manually using the form below (click <b>Create user</b>) or load testing data
                    by clicking button "Loading of test data"! Test data is loaded via Seed class. The table fields such as
                    "Name", "Surname" are filled with data from the corresponding arrays in random order.
Field "Age" - integer random number in the range 18 and 99.',
        'ltdata' => 'Loading of test data',
        'cr_usr' => 'Create user',
        'name' => 'Name',
        'surname' => 'Surname',
        'age' => 'Age',
        'add_usr' => 'Add User',
        'mti_2' =>'You can perform some simple actions on records in the table of database such as <b><i>delete</i></b>, <b><i>edit</i></b>
                   and <b><i>group deletation</i></b>. Also if you wish, you can clear table completely by clicking <b><i>Clear table</i></b>',
        'mti_3' =>'This action will delete all records from table and reset the auto-incrementing ID to zero. Do you want to continue anyway?',
        'doreg' => 'Date of register',
        'actions' => 'Actions',
        'sel_all' => 'Select All',
        'del_sel_gr' => 'Delete selected records',
        'clr_tbl' => 'Clear table',
        'confirm_del' => 'Are you sure?',
        'close' => 'Close',
        'del_rec' => 'Delete record',
        'search' => 'Search',
        'test data was loaded successfully!!!' => 'Test data was loaded successfully!!!',
        'User' => 'User',
        'has been updated successful!' => 'has been updated successful!',
        'has been deleted successful!' => 'has been deleted successful!',
        'has been added successful!' => 'has been added successful!',
        'User has been added successful!' => 'User has been added successful!',
        'All records have been successfully deleted!' => 'All records have been successfully deleted!',
        'Users group has been deleted successful!' => 'Users group has been deleted successful!',


        //Ajax
        'a_gdat' => 'Get data from database via ajax query',
        'ait_1' => 'Clicking by button <i><b>Get data</b></i> will be sent ajax query to database for retrieving all records.',
        'get_data' => 'Get data',
        'data_strg' => 'Data storage to database via ajax',
        'ati_2' => 'On the form below(click <i><b>Create user</b></i>) you can add users to database via ajax',

    ];