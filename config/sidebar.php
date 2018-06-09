<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */

    'menu' => [
        [
            'icon' => 'fa fa-table',
            'title' => 'Списки серверов',
            'url' => 'javascript:;',
            'caret' => true,
            'sub_menu' => [[
                'url' => '/admin/servers',
                'title' => 'Все сервера'
            ],[
                'url' => 'javascript:;',
                'title' => 'Сервера по играм',
                'sub_menu' => [[
                    'url' => '/admin/servers/aion',
                    'title' => 'Aion'
                ],[
                    'url' => '/admin/servers/jade',
                    'title' => 'Jade Dynasty'
                ],[
                    'url' => '/admin/servers/lineage',
                    'title' => 'Lineage 2'
                ],[
                    'url' => '/admin/servers/mu',
                    'title' => 'Mu Online'
                ],[
                    'url' => '/admin/servers/perfect',
                    'title' => 'Perfect World'
                ],[
                    'url' => '/admin/servers/rf',
                    'title' => 'RF Online'
                ],[
                    'url' => '/admin/servers/wow',
                    'title' => 'World Of Warcraft'
                ],[
                    'url' => '/admin/servers/other',
                    'title' => 'Online'
                ]]
            ]]
        ]
//        ,[
//        'icon' => 'fa fa-th-large',
//        'title' => 'Dashboard',
//        'url' => 'javascript:;',
//        'caret' => true,
//        'sub_menu' => [[
//            'url' => '/admin/dashboard/v1',
//            'title' => 'Dashboard v1'
//        ],[
//            'url' => '/admin/dashboard/v2',
//            'title' => 'Dashboard v2'
//        ]]
//    ],[
//        'icon' => 'fa fa-hdd',
//        'title' => 'Email',
//        'url' => 'javascript:;',
//        'badge' => '10',
//        'sub_menu' => [[
//            'url' => '/admin/email/inbox',
//            'title' => 'Inbox'
//        ],[
//            'url' => '/admin/email/compose',
//            'title' => 'Compose'
//        ],[
//            'url' => '/admin/email/detail',
//            'title' => 'Detail'
//        ]]
//    ],[
//        'icon' => 'fab fa-simplybuilt',
//        'title' => 'Widgets',
//        'label' => 'NEW',
//        'url' => '/admin/widget'
//    ],[
//        'icon' => 'fa fa-gem',
//        'title' => 'UI Elements',
//        'url' => 'javascript:;',
//        'label' => 'NEW',
//        'caret' => true,
//        'sub_menu' => [[
//            'url' => '/admin/ui/general',
//            'title' => 'General',
//            'highlight' => true
//        ],[
//            'url' => '/admin/ui/typography',
//            'title' => 'Typography'
//        ],[
//            'url' => '/admin/ui/tabs-accordions',
//            'title' => 'Tabs & Accordions'
//        ],[
//            'url' => '/admin/ui/unlimited-nav-tabs',
//            'title' => 'Unlimited Nav Tabs'
//        ],[
//            'url' => '/admin/ui/modal-notification',
//            'title' => 'Modal & Notification',
//            'highlight' => true
//        ],[
//            'url' => '/admin/ui/widget-boxes',
//            'title' => 'Widget Boxes'
//        ],[
//            'url' => '/admin/ui/media-object',
//            'title' => 'Media Object'
//        ],[
//            'url' => '/admin/ui/buttons',
//            'title' => 'Buttons',
//            'highlight' => true
//        ],[
//            'url' => '/admin/ui/icons',
//            'title' => 'Icons'
//        ],[
//            'url' => '/admin/ui/simple-line-icons',
//            'title' => 'Simple Line Ioncs'
//        ],[
//            'url' => '/admin/ui/ionicons',
//            'title' => 'Ionicons'
//        ],[
//            'url' => '/admin/ui/tree-view',
//            'title' => 'Tree View'
//        ],[
//            'url' => '/admin/ui/language-bar-icon',
//            'title' => 'Language Bar & Icon'
//        ],[
//            'url' => '/admin/ui/social-buttons',
//            'title' => 'Social Buttons'
//        ],[
//            'url' => '/admin/ui/intro-js',
//            'title' => 'Intro JS'
//        ]]
//    ],[
//        'img' => '/assets/img/logo/logo-bs4.png',
//        'title' => 'Bootstrap 4',
//        'url' => '/admin/bootstrap-4',
//        'label' => 'NEW'
//    ],[
//        'icon' => 'fa fa-list-ol',
//        'title' => 'Form Stuff',
//        'url' => 'javascript:;',
//        'label' => 'NEW',
//        'caret' => true,
//        'sub_menu' => [[
//            'url' => '/admin/form/elements',
//            'title' => 'Form Elements',
//            'highlight' => true
//        ],[
//            'url' => '/admin/form/plugins',
//            'title' => 'Form Plugins',
//            'highlight' => true
//        ],[
//            'url' => '/admin/form/slider-switcher',
//            'title' => 'Form Slider + Switcher'
//        ],[
//            'url' => '/admin/form/validation',
//            'title' => 'Form Validation'
//        ],[
//            'url' => '/admin/form/wizards',
//            'title' => 'Wizards'
//        ],[
//            'url' => '/admin/form/wizards-validation',
//            'title' => 'Wizards + Validation'
//        ],[
//            'url' => '/admin/form/wysiwyg',
//            'title' => 'WYSIWYG'
//        ],[
//            'url' => '/admin/form/x-editable',
//            'title' => 'X-Editable'
//        ],[
//            'url' => '/admin/form/multiple-file-upload',
//            'title' => 'Multiple File Upload'
//        ],[
//            'url' => '/admin/form/summernote',
//            'title' => 'Summernote'
//        ],[
//            'url' => '/admin/form/dropzone',
//            'title' => 'Dropzone'
//        ]]
//    ],[
//        'icon' => 'fa fa-table',
//        'title' => 'Tables',
//        'url' => 'javascript:;',
//        'caret' => true,
//        'sub_menu' => [[
//            'url' => '/admin/table/basic',
//            'title' => 'Basic'
//        ],[
//            'url' => 'javascript:;',
//            'title' => 'Managed Tables',
//            'sub_menu' => [[
//                'url' => '/admin/table/manage/default',
//                'title' => 'Default'
//            ],[
//                'url' => '/admin/table/manage/autofill',
//                'title' => 'Autofill'
//            ],[
//                'url' => '/admin/table/manage/buttons',
//                'title' => 'Buttons'
//            ],[
//                'url' => '/admin/table/manage/colreorder',
//                'title' => 'ColReorder'
//            ],[
//                'url' => '/admin/table/manage/fixed-column',
//                'title' => 'Fixed Column'
//            ],[
//                'url' => '/admin/table/manage/fixed-header',
//                'title' => 'Fixed Header'
//            ],[
//                'url' => '/admin/table/manage/keytable',
//                'title' => 'KeyTable'
//            ],[
//                'url' => '/admin/table/manage/responsive',
//                'title' => 'Responsive'
//            ],[
//                'url' => '/admin/table/manage/rowreorder',
//                'title' => 'RowReorder'
//            ],[
//                'url' => '/admin/table/manage/scroller',
//                'title' => 'Scroller'
//            ],[
//                'url' => '/admin/table/manage/select',
//                'title' => 'Select'
//            ],[
//                'url' => '/admin/table/manage/combine',
//                'title' => 'Extension Combination'
//            ]]
//        ]]
//    ],[
//        'icon' => 'fa fa-star',
//        'title' => 'Frontend',
//        'url' => 'javascript:;',
//        'caret' => true,
//        'sub_menu' => [[
//            'url' => 'javascript:;',
//            'title' => 'One Page Parallax'
//        ],[
//            'url' => 'javascript:;',
//            'title' => 'Blog'
//        ],[
//            'url' => 'javascript:;',
//            'title' => 'Forum'
//        ],[
//            'url' => 'javascript:;',
//            'title' => 'E-Commerce'
//        ]]
//    ],[
//        'icon' => 'fa fa-envelope',
//        'title' => 'Email Template',
//        'url' => 'javascript:;',
//        'caret' => true,
//        'sub_menu' => [[
//            'url' => '/admin/email-template/system',
//            'title' => 'System Template'
//        ],[
//            'url' => '/admin/email-template/newsletter',
//            'title' => 'Newsletter Template'
//        ]]
//    ],[
//        'icon' => 'fa fa-chart-pie',
//        'title' => 'Chart',
//        'url' => 'javascript:;',
//        'caret' => true,
//        'sub_menu' => [[
//            'url' => '/admin/chart/flot',
//            'title' => 'Flot Chart'
//        ],[
//            'url' => '/admin/chart/morris',
//            'title' => 'Morris Chart'
//        ],[
//            'url' => '/admin/chart/js',
//            'title' => 'Chart JS'
//        ],[
//            'url' => '/admin/chart/d3',
//            'title' => 'd3 Chart'
//        ]]
//    ],[
//        'icon' => 'fa fa-calendar',
//        'title' => 'Calendar',
//        'url' => '/admin/calendar'
//    ],[
//        'icon' => 'fa fa-map',
//        'title' => 'Map',
//        'url' => 'javascript:;',
//        'caret' => true,
//        'sub_menu' => [[
//            'url' => '/admin/map/vector',
//            'title' => 'Vector Map'
//        ],[
//            'url' => '/admin/map/google',
//            'title' => 'Google Map'
//        ]]
//    ],[
//        'icon' => 'fa fa-image',
//        'title' => 'Gallery',
//        'url' => 'javascript:;',
//        'caret' => true,
//        'sub_menu' => [[
//            'url' => '/admin/gallery/v1',
//            'title' => 'Gallery v1'
//        ],[
//            'url' => '/admin/gallery/v2',
//            'title' => 'Gallery v2'
//        ]]
//    ],[
//        'icon' => 'fa fa-cogs',
//        'title' => 'Page Options',
//        'url' => 'javascript:;',
//        'caret' => true,
//        'sub_menu' => [[
//            'url' => '/admin/page-option/page-blank',
//            'title' => 'Blank Page'
//        ],[
//            'url' => '/admin/page-option/page-with-footer',
//            'title' => 'Page with Footer'
//        ],[
//            'url' => '/admin/page-option/page-without-sidebar',
//            'title' => 'Page without Sidebar'
//        ],[
//            'url' => '/admin/page-option/page-with-right-sidebar',
//            'title' => 'Page with Right Sidebar'
//        ],[
//            'url' => '/admin/page-option/page-with-minified-sidebar',
//            'title' => 'Page with Minified Sidebar'
//        ],[
//            'url' => '/admin/page-option/page-with-two-sidebar',
//            'title' => 'Page with Two Sidebar'
//        ],[
//            'url' => '/admin/page-option/page-full-height',
//            'title' => 'Full Height Content'
//        ],[
//            'url' => '/admin/page-option/page-with-wide-sidebar',
//            'title' => 'Page with Wide Sidebar'
//        ],[
//            'url' => '/admin/page-option/page-with-light-sidebar',
//            'title' => 'Page with Light Sidebar'
//        ],[
//            'url' => '/admin/page-option/page-with-mega-menu',
//            'title' => 'Page with Mega Menu'
//        ],[
//            'url' => '/admin/page-option/page-with-top-menu',
//            'title' => 'Page with Top Menu'
//        ],[
//            'url' => '/admin/page-option/page-with-boxed-layout',
//            'title' => 'Page with Boxed Layout'
//        ],[
//            'url' => '/admin/page-option/page-with-mixed-menu',
//            'title' => 'Page with Mixed Menu'
//        ],[
//            'url' => '/admin/page-option/boxed-layout-with-mixed-menu',
//            'title' => 'Boxed Layout with Mixed Menu'
//        ],[
//            'url' => '/admin/page-option/page-with-transparent-sidebar',
//            'title' => 'Page with Transparent Sidebar'
//        ]]
//    ],[
//        'icon' => 'fa fa-gift',
//        'title' => 'Extra',
//        'url' => 'javascript:;',
//        'caret' => true,
//        'sub_menu' => [[
//            'url' => '/admin/extra/timeline',
//            'title' => 'Timeline'
//        ],[
//            'url' => '/admin/extra/coming-soon',
//            'title' => 'Coming Soon Page'
//        ],[
//            'url' => '/admin/extra/search-result',
//            'title' => 'Search Results'
//        ],[
//            'url' => '/admin/extra/invoice',
//            'title' => 'Invoice'
//        ],[
//            'url' => '/admin/extra/error-page',
//            'title' => '404 Error Page'
//        ],[
//            'url' => '/admin/extra/profile',
//            'title' => 'Profile Page'
//        ]]
//    ],[
//        'icon' => 'fa fa-key',
//        'title' => 'Login & Register',
//        'url' => 'javascript:;',
//        'caret' => true,
//        'sub_menu' => [[
//            'url' => '/admin/login/v1',
//            'title' => 'Login'
//        ],[
//            'url' => '/admin/login/v2',
//            'title' => 'Login v2'
//        ],[
//            'url' => '/admin/login/v3',
//            'title' => 'Login v3'
//        ],[
//            'url' => '/admin/register/v3',
//            'title' => 'Register v3'
//        ]]
//    ],[
//        'icon' => 'fa fa-cube',
//        'title' => 'Version',
//        'url' => 'javascript:;',
//        'label' => 'NEW',
//        'caret' => true,
//        'sub_menu' => [[
//            'url' => 'javascript:;',
//            'title' => 'HTML'
//        ],[
//            'url' => 'javascript:;',
//            'title' => 'AJAX'
//        ],[
//            'url' => 'javascript:;',
//            'title' => 'ANGULAR JS'
//        ],[
//            'url' => 'javascript:;',
//            'title' => 'ANGULAR JS 5'
//        ],[
//            'url' => 'javascript:;',
//            'title' => 'LARAVEL',
//            'highlight' => true
//        ],[
//            'url' => 'javascript:;',
//            'title' => 'MATERIAL DESIGN'
//        ],[
//            'url' => 'javascript:;',
//            'title' => 'APPLE DESIGN'
//        ],[
//            'url' => 'javascript:;',
//            'title' => 'TRANSPARENT DESIGN'
//        ]]
//    ],[
//        'icon' => 'fa fa-medkit',
//        'title' => 'Helper',
//        'url' => 'javascript:;',
//        'caret' => true,
//        'sub_menu' => [[
//            'url' => '/admin/helper/css',
//            'title' => 'Predefined CSS Classes'
//        ]]
//    ],[
//        'icon' => 'fa fa-align-left',
//        'title' => 'Menu Level',
//        'url' => 'javascript:;',
//        'caret' => true,
//        'sub_menu' => [[
//            'url' => 'javascript:;',
//            'title' => 'Menu 1.1',
//            'sub_menu' => [[
//                'url' => 'javascript:;',
//                'title' => 'Menu 2.1',
//                'sub_menu' => [[
//                    'url' => 'javascript:;',
//                    'title' => 'Menu 3.1',
//                ],[
//                    'url' => 'javascript:;',
//                    'title' => 'Menu 3.2'
//                ]]
//            ],[
//                'url' => 'javascript:;',
//                'title' => 'Menu 2.2'
//            ],[
//                'url' => 'javascript:;',
//                'title' => 'Menu 2.3'
//            ]]
//        ],[
//            'url' => 'javascript:;',
//            'title' => 'Menu 1.2'
//        ],[
//            'url' => 'javascript:;',
//            'title' => 'Menu 1.3'
//        ]]
    ]
];
