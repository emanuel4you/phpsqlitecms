<?php
// phpSQLiteCMS Bulgarian language pack
// Created: 04.03.2014
// Last modified: 04.03.2014

# meta
$lang['lang'] =                          'bg';
$lang['charset'] =                       'utf-8';
$lang['locale'] =                        array('bg_BG.utf8','bg','bul');
$lang['time_format'] =                   '%Y-%m-%d, %H:%M';
$lang['time_format_full'] =              '%A, %B %d, %Y, %H:%M';
$lang['dir'] =                           'ltr';

# admin menu
$lang['admin_menu_home'] =               'Начална';
$lang['admin_menu_admin'] =              'Администрация';
$lang['admin_menu_page_overview'] =      'Страници';
$lang['admin_menu_new_page'] =           'Нова страница';
$lang['admin_menu_logout'] =             'Излизане';
$lang['admin_menu_edit_page'] =          'Редактиране';
$lang['admin_menu_delete_page'] =        'Изтриване';
$lang['cancel'] =                        'Отказ';
$lang['admin_menu_delete_page_conf'] =   'Изтриване на тази страница?';
$lang['administration'] =                'Администрация';
$lang['submit_button_ok'] =              '&nbsp;OK&nbsp;';
$lang['submit_button_delete'] =          'Изтриване!';
$lang['edit'] =                          'редактиране';
$lang['delete'] =                        'изтриване';
$lang['drag_and_drop'] =                 'преместване (drag and drop)';
$lang['move_up'] =                       'преместване нагоре';
$lang['move_down'] =                     'преместване надолу';
$lang['database_error'] =                'Няма връзка с базата данни - моля опитайте по-късно!';
$lang['error_headline'] =                'Грешка!';
$lang['caution'] =                       'Внимание!';
$lang['invalid_request'] =               'Невалидна заявка!';
$lang['cache_cleared'] =                 'Кешът е изчистен.';

# main
$lang['admin_menu_page_overview'] =      'Страници';
$lang['admin_menu_create_page'] =        'Нова страница';
$lang['admin_menu_edit_menus'] =         'Менюта';
$lang['admin_menu_edit_galleries'] =     'Фотогалерии';
$lang['admin_menu_edit_notes'] =         'Бележки';
$lang['admin_menu_edit_gcb'] =           'Глобални блокове';
$lang['admin_menu_edit_comments'] =      'Коментари';
$lang['admin_menu_filemanager'] =        'Файл мениджър';
$lang['admin_menu_spam_protection'] =    'Спам защита';
$lang['admin_menu_user_administr'] =     'Потребители';
$lang['admin_menu_clear_cache'] =        'Изчистване на кеша';
$lang['admin_menu_edit_userdata'] =      'Смяна на парола';
$lang['admin_menu_settings'] =           'Настройки';
$lang['admin_menu_backup'] =             'Резервно копие';

# login
$lang['login'] =                         'Вход (админ, редактори)';
$lang['login_failed'] =                  'Непознат потребител или грешна парола!';
$lang['login_username'] =                'Име:';
$lang['login_password'] =                'Парола:';
$lang['login_submit'] =                  'Вход';

# content
$lang['wysiwyg_label'] =                 'WYSIWYG';
$lang['enable_wysiwyg_editor'] =         'WYSIWYG режим';
$lang['disable_wysiwyg_editor'] =        'Text режим';
$lang['change_edit_mode_notice'] =       'Внимание! Настоящите промени няма да бъдат съхранени при смяна на режима на редактиране!';
$lang['values_comma_separated'] =        'разделени със запетая';
$lang['page_overview'] =                 'Страници';
$lang['create_new_page'] =               'Нова страница';
$lang['create_new_page_headline'] =      'Нова страница';
$lang['edit_page_headline'] =            'Редактиране на страница: [page]';

$lang['invalid_page_type'] =             'Невалиден тип страница!';
$lang['time_invalid'] =                  'Невалидно време на създаване!';
$lang['last_modified_invalid'] =         'Невалидно време на последна промяна!';
$lang['error_page_name_empty'] =         'Липсва url адрес!';
$lang['error_page_name_spec_chars'] =    'URL aдресът на страницата съдържа невалидни символи или празни пространства!';
$lang['error_page_name_alr_exists'] =    'Има страница със същия url адрес!';
$lang['error_no_title'] =                'Липсва заглавие!';

$lang['page_name_marking'] =             'URL aдрес на страницата';
$lang['title_marking'] =                 'Заглавие';
$lang['no_pages'] =                      'Няма страници.';
$lang['content_marking'] =               'Съдържание';
$lang['sidebars_marking'] =              'Странични панели';
$lang['properties_marking'] =            'Свойства';
$lang['include_marking'] =               'Включване';
$lang['page_notes_marking'] =            'Бележки';
$lang['help_marking'] =                  'Помощ';
$lang['edit_page_name_marking'] =        'URL:';
$lang['edit_page_title_marking'] =       'Заглавие (head):';
$lang['edit_title_marking'] =            'Заглавие:';
$lang['edit_headline_marking'] =         'Подзаглавие:';
$lang['edit_content_marking'] =          'Съдържание:';
$lang['edit_formatting'] =               'автоформатиране';
$lang['edit_sidebar_1_marking'] =        'Страничен панел 1:';
$lang['edit_sidebar_2_marking'] =        'Страничен панел 2:';
$lang['edit_sidebar_3_marking'] =        'Страничен панел 3:';
$lang['breadcrumbs'] =                   'Breadcrumbs навигация:';
$lang['edit_time_marking'] =             'Дата на създаване:';
$lang['edit_last_modified_marking'] =    'Дата на последна промяна:';
$lang['edit_time_format'] =              'YYYY-MM-DD HH:MM:SS';
$lang['edit_display_time'] =             'Показване на дата:';
$lang['edit_display_time_label'] =       'показване на датата на страницата';
$lang['edit_description_marking'] =      'Описание (head):';
$lang['edit_keywords_marking'] =         'Ключови думи (head):';
$lang['edit_sections_marking'] =         'Секции:';
$lang['edit_category_marking'] =         'Категория:';
$lang['edit_page_info_marking'] =        'Информация за страницата:';
$lang['edit_type_marking'] =             'Тип:';
$lang['edit_type_addition_marking'] =    'Параметър на типа';
$lang['edit_menus_marking'] =            'Менюта:';
$lang['edit_gcb_marking'] =              'Глобални блокове:';
$lang['edit_include_news'] =             'Включи новини:';
$lang['edit_template_marking'] =         'Шаблон:';
$lang['page_type_default'] =             'Нормална страница';
$lang['page_type_commentable'] =         'Страница с коментари';
$lang['page_type_overview'] =            'Обзорна страница';
$lang['page_type_news'] =                'Страница с новини';
$lang['page_type_simple_news'] =         'Опростена страница с новини';
$lang['page_type_gallery'] =             'Фотогалерия';
$lang['page_type_formmailer'] =          'Контактна форма';
$lang['page_type_redirect'] =            'Пренасочване';
$lang['page_type_language_redirect'] =   'Езиково пренасочване';
$lang['page_type_notes'] =               'Страница с бележки';
$lang['page_type_newsletter'] =          'Абониране за новини';
$lang['page_type_search'] =              'Търси';
$lang['page_type_rss_feed'] =            'RSS';
$lang['page_type_notes_rss_feed'] =      'RSS Бележки';
$lang['page_type_sitemap'] =             'XML Карта на сайта';
$lang['edit_include_in_marking'] =       'Включи в:';
$lang['edit_include_page_marking'] =     'Страница:';
$lang['edit_include_rss_marking'] =      'RSS:';
$lang['edit_include_sitemap_marking'] =  'XML Карта на сайта:';
$lang['edit_order_number_marking'] =     'Пореден №:';
$lang['edit_teaser_headline_marking'] =  'Тийзър заглавие:';
$lang['edit_teaser_marking'] =           'Тийзър:';
$lang['edit_include_link'] =             'Текст на линка:';
$lang['edit_teaser_img_marking'] =       'Тийзър изображение:';
$lang['edit_page_notes_marking'] =       'Бележки:';
$lang['edit_page_mode_edit'] =           'редактиране на страницата';
$lang['edit_page_mode_save_as_new'] =    'съхраняване като нова страница';
$lang['edit_page_send_pingbacks'] =      'Изпращане на pingbacks';
$lang['edit_page_submit'] =              'Съхрани';
$lang['delete_page_headline'] =          'Изтриване на страница';
$lang['delete_page_confirm'] =           'Изтриване на страницата с url адрес: <b>[page]</b>?';
$lang['delete_page_submit'] =            'OK - Изтрий';
$lang['comments'] =                      'Редактиране на коментарите';
$lang['page_doesnt_exist'] =             'Страницата, която търсите не съществува!';
$lang['no_authorization_edit'] =         'Нямате права да редактирате или изтриете тази страница!';
$lang['err_teaser_img_doesnt_exist'] =   'Тийзър изображението не съществува!';
$lang['thumbnail_button'] =              'Thumb.';
$lang['thumbnail_title'] =               'Вмъкване на thumbnail';
$lang['image_button'] =                  'Изображение';
$lang['image_title'] =                   'Вмъкване на изображение';
$lang['insert_html'] =                   'Вмъкване на HTML';
$lang['bold_button'] =                   'bold';
$lang['bold_button_title'] =             'Формат bold';
$lang['italic_button'] =                 'italic';
$lang['italic_button_title'] =           'Формат italic';
$lang['link_button'] =                   'Линк';
$lang['link_button_title'] =             'Вмъкване на линк';
$lang['link_target_m'] =                 'Адрес на линка (страница или URL):';
$lang['link_text_m'] =                   'Текст на линка (незадължителен):';
$lang['teaser_default_linkname'] =       'повече...';
$lang['created_marking'] =               'Създадена';
$lang['last_modified_marking'] =         'Последно променена';
$lang['views_marking'] =                 'Разгледана';
$lang['total_views'] =                   'Общо разглеждания след [time]:';
$lang['reset_views'] =                   'нулиране';
$lang['page_type_req_param'] =           'Типът страница изисква указване на параметър!';
$lang['page_language'] =                 'Език:';
$lang['page_language_default'] =         'по подразбиране';
$lang['page_content_type'] =             'Съдържание - Тип:';
$lang['page_content_type_exp'] =         'празно = text/html';
$lang['page_charset'] =                  'Кодиране:';
$lang['page_charset_exp'] =              'празно = кодиране по подразбиране [default_charset]';
$lang['template_variables'] =            'Променливи на шаблона (TV):';
$lang['edit_permission'] =               'Оторизирани редактори:';
$lang['edit_permission_general'] =       'всички редактори (регистрирани потребители) са оторизирани да редактират тази страница';
$lang['invalid_edit_auth_list'] =        'Моля, проверете списъка с оторизирани редактори - трябва да бъде изчистен поради несъществуващи потребители!';
$lang['status'] =                        'Статус:';
$lang['status_published_searchable'] =   'публикувана и включена в търсенето';
$lang['status_published'] =              'публикувана';
$lang['status_draft'] =                  'чернова';
$lang['optional'] =                      '(незадължително)';

# menus
$lang['menus'] =                         'Менюта';
$lang['default_menu'] =                  'меню по подразбиране';
$lang['set_default_menu'] =              'използвай като меню по подразбиране';
$lang['menu_already_exists'] =           'Има меню с това име!';
$lang['error_menu_spec_chars'] =         'Името на менюто съдържа невалидни символи или празни пространства!';
$lang['menu'] =                          'Меню';
$lang['no_menu'] =                       'Няма менюта.';
$lang['create_menu'] =                   'Ново меню';
$lang['menu_overview'] =                 'Менюта';
$lang['new_menu_hl'] =                   'Ново меню';
$lang['new_menu_name'] =                 'Ново меню:';
$lang['edit_menu_hl'] =                  'Редактиране на елементи от меню: <b>[menu]</b>';
$lang['menu_item_name'] =                'Име / Текст';
$lang['menu_item_title'] =               'Заглавие (hover текст)';
$lang['menu_item_link'] =                'Линк (страница или URL)';
$lang['menu_item_section'] =             'Секция';
$lang['menu_item_accesskey'] =           'Бърз клавиш (accesskey)';
$lang['menu_item_submenu'] =             'Подменю';
$lang['add_menu_item_submit'] =          'Добави елемент';
$lang['no_menu_item'] =                  'В менюто няма елементи.';
$lang['insert_menu_item'] =              'Добави елемент в менюто:';
$lang['menu_item_doesnt_exist'] =        'Елементът от менюто не съществува!';
$lang['edit_menu_item'] =                'Редактиране на елемента';
$lang['delete_menu_headline'] =          'Изтрий менюто';
$lang['delete_menu_confirm'] =           'Изтриване на това меню?';
$lang['delete_menu_name'] =              'Меню:';
$lang['delete_menu_submit'] =            'OK - Изтрий';

# gcb
$lang['gcb'] =                           'Глобални блокове съдържание';
$lang['gcb_identifier'] =                'Идентификатор';
$lang['gcb_content'] =                   'Съдържание';
$lang['add_gcb'] =                       'Нов блок';
$lang['no_gcb'] =                        'Няма създадени глобални блокове съдържание.';
$lang['add_gcb'] =                       'Нов блок';
$lang['edit_gcb'] =                      'Редактиране';
$lang['edit_gcb_identifier'] =           'Идентификатор:';
$lang['edit_gcb_content'] =              'Съдържание:';
$lang['edit_gcb_formatting'] =           'автоформатиране';
$lang['gcb_error_no_identifier'] =       'Не е посочен идентификатор!';
$lang['gcb_error_invalid_identifier'] =  'Идентификаторът съдържа невалидни символи или празни пространства!';
$lang['gcb_identifier_exists_error'] =   'Има глобален блок съдържание с този идентификатор!';
$lang['delete_gcb'] =                    'Изтриване';
$lang['delete_gcb_confirm'] =            'Изтриване на този глобален блок съдържание?';

# notes
$lang['notes'] =                         'Бележки';
$lang['note_section'] =                  'Раздел с бележки';
$lang['create_note_section'] =           'Нов раздел с бележки';
$lang['no_note_sections'] =              'Няма създадени раздели с бележки.';
$lang['note_section_name_m'] =           'Име на раздела с бележки:';
$lang['add_note'] =                      'Нова бележка';
$lang['no_notes'] =                      'В раздела няма създадени бележки - моля, създайте поне една бележка, за да бъде запазен разделът.';
$lang['edit_note'] =                     'Редактиране на бележка';
$lang['edit_note_title'] =               'Заглавие:';
$lang['edit_note_text'] =                'Текст:';
$lang['edit_note_link'] =                'Линк (страница или URL):';
$lang['edit_note_linkname'] =            'Текст на линка:';
$lang['edit_note_image'] =               'Изображение:';
$lang['delete_note_confirm'] =           'Изтриване на тази бележка?';
$lang['notes_title_hl'] =                'Заглавие';
$lang['notes_text_hl'] =                 'Текст';
$lang['notes_link_hl'] =                 'Линк';
$lang['notes_overview'] =                'Бележки';
$lang['delete_note_section'] =           'Изтриване на раздела с бележки';
$lang['delete_this_note_section'] =      'Изтриване на този раздел с бележки?';
$lang['delete_note_section_confirm'] =   'Изтриване на този раздел с бележки? ([note_section])';
$lang['delete_note_section_submit'] =    'OK - Изтрий';
$lang['error_note_sect_name_invalid'] =  'Името на раздела съдържа невалидни символи или празни пространства!';
$lang['note_section_already_ex'] =       'Има раздел с бележки с това име!';
$lang['notes_img_doesnt_exist'] =        'Изображението не съществува!';
$lang['edit_note_date_marking'] =        'Дата/Време:';
$lang['error_notes_no_title'] =          'Липсва заглавие!';
$lang['error_notes_no_text'] =           'Липсва текст!';
$lang['error_notes_time_invalid'] =      'Форматът на датата/времето е невалиден!';

# comments
$lang['comments'] =                      'Коментари';
$lang['photo_comments_enabled'] =        'Фото коментарите са разрешени ([[забраняване]]).';
$lang['photo_comments_disabled'] =       'Фото коментарите са забранени ([[разрешаване]]).';
$lang['edit_comment'] =                  'Редакция на коментара';
$lang['delete_comments'] =               'Изтриване на коментари';
$lang['comments_all_pages'] =            'Всички страници';
$lang['comments_all_photos'] =           'Всички снимки';
$lang['comments_page_c'] =               'Коментари на страници';
$lang['comments_photo_c'] =              'Фото коментари';
$lang['comments_count'] =                '[comments_total] коментара';
$lang['comments_previous_page'] =        'Предишна страница';
$lang['comments_next_page'] =            'Следваща страница';
$lang['no_comments'] =                   'Няма коментари.';
$lang['comments_page'] =                 'Страница';
$lang['comments_photo'] =                'Снимка';
$lang['comments_comment'] =              'Коментар';
$lang['comments_ip'] =                   'IP';
$lang['comments_name'] =                 'Име';
$lang['comments_time'] =                 'Дата';
$lang['toggle_selection'] =              'маркиране на всички';
$lang['comments_del_checked'] =          'изтриване на маркираните';
$lang['comments_delete_all'] =           'изтриване на всички';
$lang['delete_this_comment_confirm'] =   'Изтриване на този коментар?';
$lang['delete_all_comments_page'] =      'изтриване на всички коментари за [page]';
$lang['delete_all_comments_photo'] =     'изтриване на всички коментари за [photo]';
$lang['delete_checked_confirm'] =        'Изтриване на следните коментари? :';
$lang['delete_checked_confirm_subm'] =   'OK - Изтрий';
$lang['delete_all_page_comments'] =      'Изтриване на <b>всички</b> коментари за <b>всички</b> страници?';
$lang['delete_all_photo_comments'] =     'Изтриване на <b>всички</b> коментари за <b>всички</b> снимки?';
$lang['delete_all_comm_page_conf'] =     'Изтриване на <b>всички</b> коментари за <b>[page]</b>?';
$lang['delete_all_comments_subm'] =      'OK - Изтрий';
$lang['comments_name_m'] =               'Име:';
$lang['comments_email_hp_m'] =           'Имейл или сайт:';
$lang['report_spam'] =                   'Съобщаване за спам';
$lang['report_as_spam'] =                'изпращане на съобщение за спам';
$lang['report_spam_confirm'] =           'Изпращане на съобщение за спам до Akismet за този коментар?';
$lang['report_as_spam_submit'] =         'Съобщаване за спам';
$lang['report_as_spam_delete_submit'] =  'Съобщаване за спам и изтриване';
$lang['pingback'] =                      'Pingback';

# photos
$lang['photo_galleries'] =               'Фотогалерии';
$lang['new_gallery'] =                   'Нова фотогалерия';
$lang['edit_gallery'] =                  'Редактиране на фотогалерия: <b>[gallery]</b>';
$lang['edit_photo'] =                    'Редактиране на снимка от фотогалерията';
$lang['new_photo'] =                     'Добавяне на нова снимка във фотогалерията';
$lang['gallery_properties_hl'] =         'Свойства';
$lang['gallery_name_alr_exists'] =       'Има фотогалерия с това име!';
$lang['error_gallery_spec_chars'] =      'Името на фотогалерията съдържа невалидни символи или празни пространства!';
$lang['gallery'] =                       'Фотогалерия';
$lang['no_gallery'] =                    'Няма фотогалерии.';
$lang['create_new_gallery'] =            'Нова фотогалерия';
$lang['photo_overview'] =                'Снимки';
$lang['add_photo'] =                     'Добави снимка';
$lang['photo'] =                         'Снимка';
$lang['photo_nr'] =                      '№';
$lang['photo_title'] =                   'Заглавие';
$lang['photo_subtitle'] =                'Подзаглавие';
$lang['photo_description'] =             'Описание';
$lang['no_photo'] =                      'Няма снимки.';
$lang['delete_gallery'] =                'Изтриване на фотогалерия';
$lang['delete_gallery_confirm'] =        'Изтриване на тази фотогалерия?';
$lang['delete_gallery_submit'] =         'OK - Изтрий';
$lang['new_gallery_name'] =              'Име на фотогалерията:';
$lang['edit_photo_thumbnail'] =          'Thumbnail:';
$lang['edit_photo_normal'] =             'Снимка:';
$lang['edit_photo_large'] =              'Голяма снимка:';
$lang['edit_photo_size_flash'] =         '(само за *.swf/*.flv файлове)';
$lang['edit_photo_xlarge'] =             'Много големи снимки:';
$lang['edit_photo_title'] =              'Заглавие:';
$lang['edit_photo_subtitle'] =           'Подзаглавие:';
$lang['edit_photo_description'] =        'Описание:';
$lang['invalid_photo'] =                 'Снимката не е намерена!';
$lang['error_no_gallery'] =              'Не е посочена фотогалерия!';
$lang['error_no_thumbnail'] =            'Не е посочен thumbnail!';
$lang['error_no_photo'] =                'Не е посочена снимка!';
$lang['error_no_photo_title'] =          'Липсва заглавие!';
$lang['select_image'] =                  'маркиране на снимка';
$lang['err_photo_t_doesnt_exist'] =      'Thumbnail-ът не е намерен (грешно име или URL)!';
$lang['err_image_type'] =                'Thumbnail-ът трябва да е снимка (JPG/PNG/GIF формат)!';
$lang['err_photo_n_doesnt_exist'] =      'Снимката не е намерена (грешно име или URL)!';
$lang['err_photo_l_doesnt_exist'] =      'Голямата снимка не е намерена (грешно име или URL)!';
$lang['gallery_properties'] =            'Свойства на фотогалерията';
$lang['specify_photo_tpl_m'] =           'Снимка шаблон';
$lang['photos_per_row'] =                'Брой снимки на един ред';
$lang['delete_photo_confirm'] =          'Изтриване на тази снимка?';

# user
$lang['users'] =                         'Потребители';
$lang['user_name'] =                     'Име';
$lang['user_type'] =                     'Тип';
$lang['type_0'] =                        'редактор';
$lang['type_1'] =                        'админ';
$lang['last_login'] =                    'Последно влизане';
$lang['no_users'] =                      'Няма потребителски профили.';
$lang['create_user_account'] =           'Нов потребител';
$lang['user_name_m'] =                   'Потребителско име:';
$lang['pw_m'] =                          'Парола:';
$lang['pw_conf_m'] =                     'Повтори паролата:';
$lang['delete_user'] =                   'Изтриване на потребителски профил';
$lang['delete_user_confirm'] =           'Изтриване на този потребител?';
$lang['delete_user_submit'] =            'OK - Изтрий';
$lang['edit_userdata'] =                 'Редактиране на потребителски данни';
$lang['edit_userdata_name'] =            'Потребителско име:';
$lang['edit_userdata_type'] =            'Тип:';
$lang['change_pw_old'] =                 'Стара парола:';
$lang['change_pw_new'] =                 'Нова парола:';
$lang['change_pw_new_conf'] =            'Повтори новата парола:';
$lang['change_pw_note'] =                '(незадължително - единствено ако искате да я промените)';
$lang['error_username_special_chars'] =  'Потребителското име съдържа невалидни символи или празни пространства!';
$lang['error_username_alr_exists'] =     'Има потребител с това име!';
$lang['error_pw_doesnt_comply'] =        'Паролата не съвпада с повторно въведената!';
$lang['error_form_uncomplete'] =         'Не са попълнени всички полета!';
$lang['error_pw_wrong'] =                'Грешна парола!';
$lang['invalid_user_type'] =             'Невалиден тип потребител!';
$lang['rights_limitation_imposs'] =      'Не е възможно да ограничите потребителските си права!';
$lang['del_yourself_imposs'] =           'Не е възможно да изтриете собствения си потребителски профил!';
$lang['userdata_saved_message'] =        'Информацията за потребителя е съхранена.';

#filemanager
$lang['filemanager'] =                   'Файл мениджър';
$lang['upload_file'] =                   'Качване на файл';
$lang['directory'] =                     'Директория:';
$lang['no_files'] =                      'Няма файлове.';
$lang['file'] =                          'Файл';
$lang['file_type'] =                     'Тип';
$lang['file_size'] =                     'Размер (KB)';
$lang['file_date'] =                     'Дата';
$lang['delete_file'] =                   'Изтриване на файл';
$lang['delete_file_confirm'] =           'Изтриване на този файл?';
$lang['delete_file_submit'] =            'OK - Изтриване';
$lang['delete_file_error'] =             'Изтриването на този файл не е възможно!';
$lang['file_legend'] =                   'Файл';
$lang['upload_file_link'] =              'Качи файл';
$lang['upload_file_label'] =             'Файл:';
$lang['upload_directory_label'] =        'Качи в директория:';
$lang['overwrite_file'] =                'презаписване при файл със същото име';
$lang['image_options'] =                 'Снимки - опции';
$lang['upload_file_submit'] =            'Качи файла';
$lang['filename_on_server'] =            'Име, с което файлът да бъде запаметен на сървъра:';
$lang['filename_server_same'] =          'оставете празно, ако не искате да промените името на файла';
$lang['upload_file_exists'] =            'Има файл с това име!';
$lang['error_no_file'] =                 'Няма избран файл за качване!';
$lang['upload_ok'] =                     'Файлът е качен успешно.';
$lang['delete_image_confirm'] =          'Изтриване на тази снимка?';
$lang['delete_image_submit'] =           'OK - Изтрий';
$lang['delete_image_cancel'] =           'Отказ';
$lang['upload_image_exists'] =           'Има снимка с това име!';
$lang['upload_overwrite_image'] =        'презаписване при снимка със същото име';
$lang['dont_manipulate_image'] =         'Качване на снимката без промяна';
$lang['manipulate_image'] =              'Промяна на снимката:';
$lang['resize'] =                        'Преоразмеряване:';
$lang['resize_width'] =                  'широчина';
$lang['resize_height'] =                 'височина';
$lang['compression'] =                   'компресия';
$lang['compression_jpg_only'] =          '(само за JPG снимки)';
$lang['image_name_on_server'] =          'Име, с което снимката да бъде запаметена на сървъра:';
$lang['image_name_server_same'] =        '(оставете празно, ако не искате да промените името на снимката)';
$lang['error_no_image'] =                'Няма избрана снимка за качване!';
$lang['invalid_image_format'] =          'Невалиден формат на снимката ([format])!';
$lang['invalid_image_name'] =            'Невалидно име на снимката!';
$lang['invalid_compression_value'] =     'Стойността за компресия трябва да бъде между 1 и 100!';
$lang['create_thumbnail'] =              'Създаване на thumbnail:';

# settings
$lang['settings'] =                      'Настройки';
$lang['advanced_settings'] =             'Разширени настройки';
$lang['settings_website_title'] =        'Заглавие на сайта';
$lang['settings_website_subtitle'] =     'Подзаглавие';
$lang['settings_author'] =               'Автор';
$lang['settings_website_address'] =      'URL';
$lang['settings_email'] =                'Имейл';
$lang['settings_index_page'] =           'Начална страница';
$lang['settings_error_page'] =           'Error страница';
$lang['default_page_language'] =         'Език по подразбиране на страниците';
$lang['admin_language'] =                'Език на административната част';
$lang['settings_caching'] =              'Кеширане';
$lang['settings_caching_enabled'] =      'кеширането е разрешено';
$lang['settings_name'] =                 'Име';
$lang['settings_value'] =                'стойност / значение';
$lang['add_new_setting_var'] =           'Добавяне на нов параметър в настройките';
$lang['error_settings_spec_chars'] =     'Параметърът съдържа невалидни символи или празни пространства!';
$lang['delete_setting_confirm'] =        'Изтриване на този параметър от настройките?';
$lang['settings_saved'] =                'Настройките са съхранени';

# spam protection
$lang['spam_protection'] =               'Спам защита';
$lang['akismet'] =                       'Akismet';
$lang['akismet_desc'] =                  'Akismet спам защита';
$lang['akismet_key'] =                   'Wordpress API ключ:';
$lang['akismet_entry_check'] =           'проверка на коментарите';
$lang['akismet_mail_check'] =            'проверка на контактни форми';
$lang['banned_ips'] =                    'Блокирани IP адреси';
$lang['banned_ips_desc'] =               'IP адреси, които нямат достъп. Може да се блокира цяла подмрежа (напр.: 10.10.1.*) или да се използва CIDR формат (напр.: 10.10.1.32/27). По един IP адрес или подмрежа на ред.';
$lang['banned_user_agents'] =            'Блокирани ботове според браузърите (user agents)';
$lang['banned_user_agents_desc'] =       'Списък с имената на ботовете (подниз на съответния user agent), които са лишени от достъп. По един на ред.';
$lang['not_accepted_words'] =            'Забранени думи';
$lang['not_accepted_words_desc'] =       'Думи или домейни, които са забранени в коментари или имейли. По една дума или домейн на ред.';
$lang['spam_protection_submit'] =        'OK - Съхрани';
$lang['spam_protection_saved'] =         'Настройките на спам защитата са съхранени.';
$lang['error_own_ip_banned'] =           'Опитвате се да забраните Вашия IP адрес!';
$lang['error_own_user_agent_banned'] =   'Опитвате се да забраните Вашия браузър (user agent)!';

# insert_image
$lang['insert_image'] =                  'Вмъкване на снимка';
$lang['select_image_title'] =            'Вмъкване на снимка';
$lang['insert_image_button'] =           'Вмъкни снимката';
$lang['insert_thumbnail_button'] =       'Вмъкни thumbnail-а';
$lang['default_image_alt'] =             'Снимка';
$lang['upload_submit'] =                 'OK - Качи снимката';
$lang['upload_image'] =                  'Качване на снимка';
$lang['upload_image_marking'] =          'Избери снимка:';
$lang['available_images'] =              'Налични снимки';
$lang['no_images'] =                     'Няма качени снимки.';
$lang['insert_thumbnail'] =              'Вмъкване на thumbnail';
$lang['thumbnail_select_gallery'] =      'Избери фотогалерия:';
$lang['insert_image_label'] =            'Вмъкване на снимка';
$lang['insert_thumbnail_label'] =        'Вмъкване на thumbnail';
$lang['insert_gallery_label'] =          'Вмъкване на фотогалерия';
$lang['insert_image_class'] =            'CSS клас:';
$lang['insert_image_alt'] =              'ALT текст:';
$lang['insert_image_width_height'] =     'Широчина/Височина:';
$lang['delete_error'] =                  'Грешка при изтриването!';
$lang['upload_error'] =                  'Грешка при качването - моля, проверете атрибутите и правата за запис на папките "img" и "media"!';

# backup
$lang['backup'] =                        'Резервно копие';
$lang['create_backup'] =                 'Създаване на резервно копие';
$lang['delete_this_backup_section'] =    'Наистина ли искате да изтриете гръб?';
$lang['no_backup_sections'] =            'Все още няма архиви';
?>
