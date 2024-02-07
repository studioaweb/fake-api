<?php

$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);

switch ($uri_segments[3]) {

    case "get_order_home":
        $endpoints = array(
            ['endpoint' => 'highlight_large/'],
            ['endpoint' => 'channels/1'],
            ['endpoint' => 'ads_mega_banner/1'],
            ['endpoint' => 'live_now/'],
            ['endpoint' => 'highlight_medium/'],
            ['endpoint' => 'store/'],
            ['endpoint' => 'series/1'],
            ['endpoint' => 'playlist/1'],
            ['endpoint' => 'ads_medium_banner/1'],
            ['endpoint' => 'upcoming_events/'],
            ['endpoint' => 'celebrities/'],
            ['endpoint' => 'ads_medium_banner/2']
        );
        echo str_replace("\/", "/", json_encode($endpoints, JSON_UNESCAPED_UNICODE));
        break;

    case "highlight_large":
        $item1 = array(
            'id' => 1,
            'title' => 'PBR RIDGE RIDER',
            'short_description' => 'Acompanhe a maior competição do rodeio ao vivo.',
            'is_live' => true,
            'is_purchased' => false,
            'url_checkout' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.19926350538',
            'watch' => false,
            'subscribe' => false,
            'text_button_primary' => 'COMPRAR',
            'text_button_secondary' => 'VER DESCRIÇÃO COMPLETA',
            'full_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a tortor nunc. Praesent cursus suscipit nulla et volutpat. Donec pretium enim in purus ultrices, a vehicula nisi mollis.',
            'date_time' => '15/03 | 18:00',
            'media' => array(
                'trailer' => 'http://.../xxx.m3u8',
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/highlight_large_1080x1920/highlight_large_1080x1920_01.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $item2 = array(
            'id' => 2,
            'title' => 'PBR UTB 23/24 | Chicago, IL | Round 2',
            'short_description' => 'Acompanhe a maior competição do rodeio ao vivo.',
            'is_live' => false,
            'is_purchased' => false,
            'url_checkout' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.19926350538',
            'watch' => false,
            'subscribe' => true,
            'text_button_primary' => 'ASSINAR',
            'text_button_secondary' => 'VER DESCRIÇÃO COMPLETA',
            'full_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a tortor nunc. Praesent cursus suscipit nulla et volutpat. Donec pretium enim in purus ultrices, a vehicula nisi mollis.',
            'date_time' => '15/03 | 18:00',
            'media' => array(
                'trailer' => 'http://.../xxx.m3u8',
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/fake-api/highlight_large_1080x1920/highlight_large_1080x1920_02.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $item3 = array(
            'id' => 3,
            'title' => 'TEAM SERIES CHEYENNE',
            'short_description' => 'Acompanhe a maior competição do rodeio ao vivo.',
            'is_live' => false,
            'is_purchased' => true,
            'url_checkout' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.19926350538',
            'watch' => true,
            'subscribe' => false,
            'text_button_primary' => 'ASSINAR',
            'text_button_secondary' => 'VER DESCRIÇÃO COMPLETA',
            'full_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a tortor nunc. Praesent cursus suscipit nulla et volutpat. Donec pretium enim in purus ultrices, a vehicula nisi mollis.',
            'date_time' => '15/03 | 18:00',
            'media' => array(
                'trailer' => 'http://.../xxx.m3u8',
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/fake-api/highlight_large_1080x1920/highlight_large_1080x1920_03.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        echo str_replace("\/", "/", json_encode(array($item1, $item2, $item3), JSON_UNESCAPED_UNICODE));
        break;

    case "channels":
        $full_object = array(
            'id' => 1,
            'section' => array(
                'title' => 'Canais',
                'see_more' => 'Ver todos »'
            )
        );
        $item1 = array(
            'id' => 1,
            'title' => 'FESTA DE COLORADO',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/channels_405x720/channels_405_720_01.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $item2 = array(
            'id' => 2,
            'title' => '30 ANOS DE BARRETOS',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/channels_405x720/channels_405_720_02.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $item3 = array(
            'id' => 3,
            'title' => 'EXPO LONDRINA',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/channels_405x720/channels_405_720_03.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $item4 = array(
            'id' => 4,
            'title' => 'COLORADO + FINAIS',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/channels_405x720/channels_405_720_04.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $full_object['items'] = array($item1, $item2, $item3, $item4);
        echo str_replace("\/", "/", json_encode($full_object, JSON_UNESCAPED_UNICODE));
        break;

    case "ads_mega_banner":
        $banner = array(
            'id' => 1,
            'src' => 'https://ads.xstreaming.com.br?_dnid=15&t=1706907361'
        );
        echo str_replace("\/", "/", json_encode($banner, JSON_UNESCAPED_UNICODE));
        break;

    case "live_now":
        $full_object = array(
            'section' => array(
                'title' => 'ao vivo agora',
                'see_more' => 'Ver todos »'
            )
        );
        $item1 = array(
            'id' => 1,
            'title' => 'MEGA RODEIO MARAU',
            'time' => 'A partir das 18h',
            'is_purchased' => false,
            'url_checkout' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.19926350538',
            'watch' => false,
            'subscribe' => false,
            'text_button' => 'COMPRAR',
            'media' => array(
                'logo' => 'https://studioaweb.com.br/xstreaming/images/0_icons/icon_brtvmax_118x64_white.png',
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/live_now_720x405/live_now_720x405_01.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $item2 = array(
            'id' => 2,
            'title' => 'COLORADO',
            'time' => 'A partir das 18h',
            'is_purchased' => false,
            'url_checkout' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.19926350538',
            'watch' => false,
            'subscribe' => true,
            'text_button' => 'ASSINAR',
            'media' => array(
                'logo' => 'https://studioaweb.com.br/xstreaming/images/0_icons/icon_brtvmax_118x64_white.png',
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/live_now_720x405/live_now_720x405_02.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $item3 = array(
            'id' => 3,
            'title' => 'CRP ARENA DREAMS',
            'time' => 'A partir das 15h30',
            'is_purchased' => true,
            'url_checkout' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.19926350538',
            'watch' => true,
            'subscribe' => false,
            'text_button' => 'ASSISTIR',
            'media' => array(
                'logo' => 'https://studioaweb.com.br/xstreaming/images/0_icons/icon_youtube_118x64.png',
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/live_now_720x405/live_now_720x405_03.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $item4 = array(
            'id' => 4,
            'title' => 'EXPOAQUI',
            'time' => 'A partir das 15h30',
            'is_purchased' => true,
            'url_checkout' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.19926350538',
            'watch' => true,
            'subscribe' => false,
            'text_button' => 'ASSISTIR',
            'media' => array(
                'logo' => 'https://studioaweb.com.br/xstreaming/images/0_icons/icon_youtube_118x64.png',
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/live_now_720x405/live_now_720x405_04.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );

        $full_object['items'] = array($item1, $item2, $item3, $item4);
        echo str_replace("\/", "/", json_encode($full_object, JSON_UNESCAPED_UNICODE));
        break;

    case "highlight_medium":
        $full_object = array(
            'section' => array(
                'title' => 'Destaques',
                'see_more' => 'Ver todos »'
            )
        );
        $item1 = array(
            'id' => 1,
            'title' => 'PBR RIDGE RIDER',
            'short_description' => 'Loren ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'is_purchased' => false,
            'url_checkout' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.19926350538',
            'watch' => false,
            'subscribe' => true,
            'text_button' => 'ASSINAR',
            'date_time' => '15/03 | 18:00',
            'media' => array(
                'trailer' => 'http://.../xxx.m3u8',
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/highlight_medium_1080x1720/highlight_medium_1080x1720_01.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $item2 = array(
            'id' => 2,
            'title' => 'TEAM SERIES CHEYENNE',
            'short_description' => 'Loren ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'is_purchased' => false,
            'url_checkout' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.19926350538',
            'watch' => false,
            'subscribe' => false,
            'text_button' => 'COMPRAR',
            'date_time' => '15/03 | 18:00',
            'media' => array(
                'trailer' => 'http://.../xxx.m3u8',
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/highlight_medium_1080x1720/highlight_medium_1080x1720_02.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $item3 = array(
            'id' => 3,
            'title' => 'PBR UTB 23/24 | Chicago, IL | Round 2',
            'short_description' => 'Loren ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'is_purchased' => false,
            'url_checkout' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.19926350538',
            'watch' => false,
            'subscribe' => true,
            'text_button' => 'ASSINAR',
            'date_time' => '15/03 | 18:00',
            'media' => array(
                'trailer' => 'http://.../xxx.m3u8',
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/highlight_medium_1080x1720/highlight_medium_1080x1720_03.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $full_object['items'] = array($item1, $item2, $item3);
        echo str_replace("\/", "/", json_encode(array($full_object), JSON_UNESCAPED_UNICODE));
        break;

    case "store":
        $full_object = array(
            'section' => array(
                'title' => 'Loja Oficial',
                'see_more' => 'Ver todos »',
                'url' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.1992635053',
            )
        );
        $item1 = array(
            'id' => 1,
            'title' => 'BOTA TEXANA',
            'price' => 'R$ 129,99',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/store_720x720/store_720x720_01.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $item2 = array(
            'id' => 2,
            'title' => 'CINTO MASTER WRANGLER',
            'price' => 'R$ 81,00',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/store_720x720/store_720x720_02.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $item3 = array(
            'id' => 3,
            'title' => 'CHAPÉU LONG HORN',
            'price' => 'R$ 119,90',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/store_720x720/store_720x720_03.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $item4 = array(
            'id' => 4,
            'title' => 'CALÇA JEANS RODEIO',
            'price' => 'R$ 73,97',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/store_720x720/store_720x720_04.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );

        $full_object['items'] = array($item1, $item2, $item3, $item4);
        echo str_replace("\/", "/", json_encode($full_object, JSON_UNESCAPED_UNICODE));
        break;

    case "series":
        $main_section = array(
            'id' => 1,
            'section' => array(
                'title' => 'SUPER PACOTE BARRETÃO',
                'short_description' => 'Loren ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'url_checkout' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.19926350538',
                'is_purchased' => false,
                'watch' => false,
                'subscribe' => false,
                'text_button_primary' => 'COMPRAR',
                'text_button_secondary' => 'VER DESCRIÇÃO COMPLETA',
                'full_description' => 'Loren ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Loren ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'title_box' => 'Todos os episódios',
                'media' => array(
                    'background' => 'https://studioaweb.com.br/xstreaming/images/series_background_1080x1882/series_background_1080x1882.jpg'
                )
            )
        );
        $main_section['items'] = array(
            array(
                'id' => 1,
                'title' => 'Temporada 2021'
            ),
            array(
                'id' => 2,
                'title' => 'Temporada 2022'
            ),
            array(
                'id' => 3,
                'title' => 'Temporada 2023'
            )
        );

        $s1_item1 = array(
            'id' => 1,
            'title' => 'Transmissão 1',
            'short_description' => 'Prova do laço',
            'duration' => '45 minutos',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/series_thumbs_480x480/series_thumbs_480x480_01.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );

        $s1_item2 = array(
            'id' => 2,
            'title' => 'Transmissão 2',
            'short_description' => 'Prova dos Tambores',
            'duration' => '45 minutos',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/series_thumbs_480x480/series_thumbs_480x480_02.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );

        $s1_item3 = array(
            'id' => 3,
            'title' => 'Transmissão 3',
            'short_description' => 'Rodeio em Touros',
            'duration' => '45 minutos',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/series_thumbs_480x480/series_thumbs_480x480_03.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );

        $s1_item4 = array(
            'id' => 4,
            'title' => 'Transmissão 4',
            'short_description' => 'Rodeio em Cavalos',
            'duration' => '45 minutos',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/series_thumbs_480x480/series_thumbs_480x480_04.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );

        $main_section['items'][0]['items'] = array($s1_item1, $s1_item2, $s1_item3, $s1_item4);

        $s2_item1 = array(
            'id' => 1,
            'title' => 'Transmissão 1',
            'short_description' => 'Prova do laço',
            'duration' => '45 minutos',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/series_thumbs_480x480/series_thumbs_480x480_05.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );

        $s2_item2 = array(
            'id' => 2,
            'title' => 'Transmissão 2',
            'short_description' => 'Prova dos Tambores',
            'duration' => '45 minutos',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/series_thumbs_480x480/series_thumbs_480x480_06.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );

        $s2_item3 = array(
            'id' => 3,
            'title' => 'Transmissão 3',
            'short_description' => 'Rodeio em Touros',
            'duration' => '45 minutos',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/series_thumbs_480x480/series_thumbs_480x480_07.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );

        $s2_item4 = array(
            'id' => 4,
            'title' => 'Transmissão 4',
            'short_description' => 'Rodeio em Cavalos',
            'duration' => '45 minutos',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/series_thumbs_480x480/series_thumbs_480x480_08.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );

        $main_section['items'][1]['items'] = array($s2_item1, $s2_item2, $s2_item3, $s2_item4);

        $s3_item1 = array(
            'id' => 1,
            'title' => 'Transmissão 1',
            'short_description' => 'Prova do laço',
            'duration' => '45 minutos',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/series_thumbs_480x480/series_thumbs_480x480_09.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );

        $s3_item2 = array(
            'id' => 2,
            'title' => 'Transmissão 2',
            'short_description' => 'Prova dos Tambores',
            'duration' => '45 minutos',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/series_thumbs_480x480/series_thumbs_480x480_10.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );

        $s3_item3 = array(
            'id' => 3,
            'title' => 'Transmissão 3',
            'short_description' => 'Rodeio em Touros',
            'duration' => '45 minutos',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/series_thumbs_480x480/series_thumbs_480x480_11.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );

        $s3_item4 = array(
            'id' => 4,
            'title' => 'Transmissão 4',
            'short_description' => 'Rodeio em Cavalos',
            'duration' => '45 minutos',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/series_thumbs_480x480/series_thumbs_480x480_12.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );

        $main_section['items'][2]['items'] = array($s3_item1, $s3_item2, $s3_item3, $s3_item4);

        // echo '<pre>';
        // print_r($main_section);
        // die();

        echo str_replace("\/", "/", json_encode($main_section, JSON_UNESCAPED_UNICODE));
        break;

    case "playlist":
        $full_object = array(
            'section' => array(
                'id' => 1,
                'title' => 'Destaques do Público'
            )
        );
        $item1 = array(
            'id' => 1,
            'title' => 'CHAYENNE • PBR',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/playlists_405x720/playslists_405x720_01.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $item2 = array(
            'id' => 2,
            'title' => 'OUTLAW • PBR',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/playlists_405x720/playslists_405x720_02.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $item3 = array(
            'id' => 3,
            'title' => 'STAMPEDE • PBR',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/playlists_405x720/playslists_405x720_03.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $item4 = array(
            'id' => 4,
            'title' => 'GAMBLER DAYS • PBR',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/playlists_405x720/playslists_405x720_04.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $item5 = array(
            'id' => 5,
            'title' => 'RIDGE RIDER • PBR',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/playlists_405x720/playslists_405x720_05.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );


        $full_object['items'] = array($item1, $item2, $item3, $item4, $item5);
        echo str_replace("\/", "/", json_encode($full_object, JSON_UNESCAPED_UNICODE));
        break;

    case "ads_medium_banner":
        if ($uri_segments[4] == 1) {
            $banner = array(
                'id' => 1,
                'src' => 'https://studioaweb.com.br/xstreaming/images/ads_medium_banner_1080x720/ads_medium_banner_1080x1080_01.jpg'
            );
            echo str_replace("\/", "/", json_encode($banner, JSON_UNESCAPED_UNICODE));
        }
        if ($uri_segments[4] == 2) {
            $banner = array(
                'id' => 1,
                'src' => 'https://studioaweb.com.br/xstreaming/images/ads_medium_banner_1080x720/ads_medium_banner_1080x1080_02.jpg'
            );
            echo str_replace("\/", "/", json_encode($banner, JSON_UNESCAPED_UNICODE));
        }
        break;

    case "upcoming_events":
        $full_object = array(
            'section' => array(
                'title' => 'Próximos Eventos',
                'see_more' => 'Ver todos »'
            )
        );
        $item1 = array(
            'id' => 1,
            'date_time' => '15/03',
            'media' => array(
                'logo' => 'https://studioaweb.com.br/xstreaming/images/0_icons/icon_brtvmax_118x64_white.png',
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/upcoming_events_405x720/upcoming_events_405x720_01.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $item2 = array(
            'id' => 2,
            'date_time' => '19/05',
            'media' => array(
                'logo' => 'https://studioaweb.com.br/xstreaming/images/0_icons/icon_brtvmax_118x64_white.png',
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/upcoming_events_405x720/upcoming_events_405x720_02.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $item3 = array(
            'id' => 3,
            'date_time' => '18/08',
            'media' => array(
                'logo' => 'https://studioaweb.com.br/xstreaming/images/0_icons/icon_brtvmax_118x64_white.png',
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/upcoming_events_405x720/upcoming_events_405x720_03.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $item4 = array(
            'id' => 4,
            'date_time' => '25/08',
            'media' => array(
                'logo' => 'https://studioaweb.com.br/xstreaming/images/0_icons/icon_brtvmax_118x64_white.png',
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/upcoming_events_405x720/upcoming_events_405x720_04.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $item5 = array(
            'id' => 5,
            'date_time' => '29/09',
            'media' => array(
                'logo' => 'https://studioaweb.com.br/xstreaming/images/0_icons/icon_brtvmax_118x64_white.png',
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/upcoming_events_405x720/upcoming_events_405x720_05.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $item6 = array(
            'id' => 6,
            'date_time' => '06/10',
            'media' => array(
                'logo' => 'https://studioaweb.com.br/xstreaming/images/0_icons/icon_brtvmax_118x64_white.png',
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/upcoming_events_405x720/upcoming_events_405x720_06.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );

        $full_object['items'] = array($item1, $item2, $item3, $item4, $item5, $item6);
        echo str_replace("\/", "/", json_encode($full_object, JSON_UNESCAPED_UNICODE));
        break;

    case "celebrities":
        $full_object = array(
            'section' => array(
                'id' => 1,
                'title' => 'Personalidades',
                'see_more' => 'Ver todos »'
            )
        );
        $item1 = array(
            'id' => 1,
            'name' => 'JOHN ABRAHAN',
            'profession' => 'Ator',
            'url' => '',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/celebrities_720x720/celebrities_720x720_01.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $item2 = array(
            'id' => 2,
            'name' => 'LEENA BURTON',
            'profession' => 'Atriz',
            'url' => '',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/celebrities_720x720/celebrities_720x720_02.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $item3 = array(
            'id' => 3,
            'name' => 'LORINA WILLIANS',
            'profession' => 'Ator',
            'url' => '',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/celebrities_720x720/celebrities_720x720_03.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );
        $item4 = array(
            'id' => 4,
            'name' => 'DAVINA DECOROUS',
            'profession' => 'Atriz',
            'url' => '',
            'media' => array(
                'thumbs' => array(
                    'app' => 'https://studioaweb.com.br/xstreaming/images/celebrities_720x720/celebrities_720x720_04.jpg',
                    'web' => 'https://studioaweb.com.br/xstreaming/images/'
                )
            )
        );

        $full_object['items'] = array($item1, $item2, $item3, $item4);
        echo str_replace("\/", "/", json_encode($full_object, JSON_UNESCAPED_UNICODE));
        break;



    default:
        echo "Aguardando endpoint";
}
