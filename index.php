<?php
header("Access-Control-Allow-Origin: *");
header("HTTP/1.1 200 OK");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
$base_url = 'https://studioaweb.com.br/xstreaming/fake-api/';
$images_url = 'https://studioaweb.com.br/xstreaming/images/';

define('BASE_URL', $base_url);
define('IMAGES_URL', $images_url);

switch ($uri_segments[3]) {
    case "home":
        show_home($uri_segments);
        break;
    case "upcoming_events":
        show_upcoming_events($uri_segments);
        break;
    case "channels":
        show_channels($uri_segments);
        break;
    case "live_details":
        show_live_details($uri_segments);
        break;
    case "video_details":
        show_video_details($uri_segments);
        break;
    case "live_menu":
        show_live_menu($uri_segments);
        break;
    case "more_menu":
        show_more_menu($uri_segments);
        break;
}

function show_home($uri_segments)
{

    switch ($uri_segments[4]) {

        case "get_endpoints":
            $endpoints = array(
                ['endpoint' => 'home/highlight_large/'],
                ['endpoint' => 'home/channels/pbr'],
                ['endpoint' => 'home/ads_mega_banner/1'],
                ['endpoint' => 'home/live_now/'],
                ['endpoint' => 'home/highlight_medium/'],
                ['endpoint' => 'home/store/'],
                ['endpoint' => 'home/series/1'],
                ['endpoint' => 'home/playlist/1'],
                ['endpoint' => 'home/ads_medium_banner/1'],
                ['endpoint' => 'home/upcoming_events/'],
                ['endpoint' => 'home/celebrities/'],
                ['endpoint' => 'home/ads_medium_banner/2']
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
                    'background' => IMAGES_URL . 'highlight_large_1920x1080/highlight_large_1920x1080_01.jpg',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'highlight_large_1080x1920/highlight_large_1080x1920_01.jpg',
                        'web' => IMAGES_URL . 'highlight_large_thumbs_198x352/highlight_large_thumbs_198x352_01.jpg'
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
                    'background' => IMAGES_URL . 'highlight_large_1920x1080/highlight_large_1920x1080_02.jpg',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'highlight_large_1080x1920/highlight_large_1080x1920_02.jpg',
                        'web' => IMAGES_URL . 'highlight_large_thumbs_198x352/highlight_large_thumbs_198x352_02.jpg'
                    )
                )
            );
            $item3 = array(
                'id' => 3,
                'title' => 'TEAM SERIES CHEYENNE',
                'short_description' => 'Acompanhe a maior competição do rodeio ao vivo.',
                'is_live' => false,
                'is_purchased' => true,
                'url_checkout' => BASE_URL . 'fake-api/vide/1/get_endpoints',
                'watch' => true,
                'subscribe' => false,
                'text_button_primary' => 'ASSINAR',
                'text_button_secondary' => 'VER DESCRIÇÃO COMPLETA',
                'full_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a tortor nunc. Praesent cursus suscipit nulla et volutpat. Donec pretium enim in purus ultrices, a vehicula nisi mollis.',
                'date_time' => '15/03 | 18:00',
                'media' => array(
                    'trailer' => 'http://.../xxx.m3u8',
                    'background' => IMAGES_URL . 'highlight_large_1920x1080/highlight_large_1920x1080_03.jpg',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'highlight_large_1080x1920/highlight_large_1080x1920_03.jpg',
                        'web' => IMAGES_URL . 'highlight_large_thumbs_198x352/highlight_large_thumbs_198x352_03.jpg'
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
                )
            );
            $item1 = array(
                'id' => 1,
                'title' => 'FESTA DE COLORADO',
                'url' => BASE_URL . 'channels/1/get_endpoints',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'channels_405x720/channels_405_720_01.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item2 = array(
                'id' => 2,
                'title' => '30 ANOS DE BARRETOS',
                'url' => BASE_URL . 'channels/2/get_endpoints',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'channels_405x720/channels_405_720_02.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item3 = array(
                'id' => 3,
                'title' => 'EXPO LONDRINA',
                'url' => BASE_URL . 'channels/3/get_endpoints',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'channels_405x720/channels_405_720_03.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item4 = array(
                'id' => 4,
                'title' => 'COLORADO + FINAIS',
                'url' => BASE_URL . 'channels/4/get_endpoints',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'channels_405x720/channels_405_720_04.jpg',
                        'web' => IMAGES_URL
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
                    'see_more' => 'Ver todos »',
                    'url' => BASE_URL . 'live_now/get_endpoints'
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
                    'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_01.jpg',
                        'web' => IMAGES_URL
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
                    'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_02.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item3 = array(
                'id' => 3,
                'title' => 'CRP ARENA DREAMS',
                'time' => 'A partir das 15h30',
                'is_purchased' => true,
                'url_checkout' => BASE_URL . 'live_now/1/get_endpoints',
                'watch' => true,
                'subscribe' => false,
                'text_button' => 'ASSISTIR',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_youtube_118x64.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_03.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item4 = array(
                'id' => 4,
                'title' => 'EXPOAQUI',
                'time' => 'A partir das 15h30',
                'is_purchased' => true,
                'url_checkout' => BASE_URL . 'live_now/2/get_endpoints',
                'watch' => true,
                'subscribe' => false,
                'text_button' => 'ASSISTIR',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_youtube_118x64.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_04.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'highlight_medium_1080x1720/highlight_medium_1080x1720_01.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'highlight_medium_1080x1720/highlight_medium_1080x1720_02.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'highlight_medium_1080x1720/highlight_medium_1080x1720_03.jpg',
                        'web' => IMAGES_URL
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
                    'see_more' => 'Mais produtos »',
                    'url' => 'https://shopee.com.br',
                )
            );
            $item1 = array(
                'id' => 1,
                'title' => 'BOTA TEXANA',
                'price' => 'R$ 129,99',
                'url' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.1992635053',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'store_720x720/store_720x720_01.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item2 = array(
                'id' => 2,
                'title' => 'CINTO MASTER WRANGLER',
                'price' => 'R$ 81,00',
                'url' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.1992635053',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'store_720x720/store_720x720_02.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item3 = array(
                'id' => 3,
                'title' => 'CHAPÉU LONG HORN',
                'price' => 'R$ 119,90',
                'url' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.1992635053',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'store_720x720/store_720x720_03.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item4 = array(
                'id' => 4,
                'title' => 'CALÇA JEANS RODEIO',
                'price' => 'R$ 73,97',
                'url' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.1992635053',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'store_720x720/store_720x720_04.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );

            $full_object['items'] = array($item1, $item2, $item3, $item4);
            echo str_replace("\/", "/", json_encode($full_object, JSON_UNESCAPED_UNICODE));
            break;

            //TODO: planejamento futuro (v3)
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
                        'background' => BASE_URL . 'images/series_background_1080x1882/series_background_1080x1882.jpg'
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_01.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_02.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_03.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_04.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_05.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_06.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_07.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_08.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_09.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_10.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_11.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_12.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );

            $main_section['items'][2]['items'] = array($s3_item1, $s3_item2, $s3_item3, $s3_item4);


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
                'url' => BASE_URL . 'video/1/get_endpoints',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'playlists_405x720/playlists_405x720_01.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item2 = array(
                'id' => 2,
                'title' => 'OUTLAW • PBR',
                'url' => BASE_URL . 'video/2/get_endpoints',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'playlists_405x720/playlists_405x720_02.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item3 = array(
                'id' => 3,
                'title' => 'STAMPEDE • PBR',
                'url' => BASE_URL . 'video/3/get_endpoints',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'playlists_405x720/playlists_405x720_03.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item4 = array(
                'id' => 4,
                'title' => 'GAMBLER DAYS • PBR',
                'url' => BASE_URL . 'video/4/get_endpoints',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'playlists_405x720/playlists_405x720_04.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item5 = array(
                'id' => 5,
                'title' => 'RIDGE RIDER • PBR',
                'url' => BASE_URL . 'video/5/get_endpoints',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'playlists_405x720/playlists_405x720_05.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );


            $full_object['items'] = array($item1, $item2, $item3, $item4, $item5);
            echo str_replace("\/", "/", json_encode($full_object, JSON_UNESCAPED_UNICODE));
            break;

        case "ads_medium_banner":
            if ($uri_segments[5] == 1) {
                $banner = array(
                    'id' => 1,
                    'src' => 'https://ads.xstreaming.com.br/?_dnid=46&t=1707340941'
                );
                echo str_replace("\/", "/", json_encode($banner, JSON_UNESCAPED_UNICODE));
            }
            if ($uri_segments[5] == 2) {
                $banner = array(
                    'id' => 2,
                    'src' => 'https://ads.xstreaming.com.br/?_dnid=50&t=1707341210'
                );
                echo str_replace("\/", "/", json_encode($banner, JSON_UNESCAPED_UNICODE));
            }
            break;

        case "upcoming_events":
            $full_object = array(
                'section' => array(
                    'title' => 'Próximos Eventos',
                    'see_more' => 'Ver todos »',
                    'url' => BASE_URL . 'upcoming_events/get_endpoints'
                )
            );
            $item1 = array(
                'id' => 1,
                'title' => '',
                'date_time' => '15/03',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'upcoming_events_405x720/upcoming_events_405x720_01.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item2 = array(
                'id' => 2,
                'title' => '',
                'date_time' => '19/05',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'upcoming_events_405x720/upcoming_events_405x720_02.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item3 = array(
                'id' => 3,
                'title' => '',
                'date_time' => '18/08',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'upcoming_events_405x720/upcoming_events_405x720_03.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item4 = array(
                'id' => 4,
                'title' => '',
                'date_time' => '25/08',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'upcoming_events_405x720/upcoming_events_405x720_04.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item5 = array(
                'id' => 5,
                'title' => '',
                'date_time' => '29/09',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'upcoming_events_405x720/upcoming_events_405x720_05.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item6 = array(
                'id' => 6,
                'title' => '',
                'date_time' => '06/10',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'upcoming_events_405x720/upcoming_events_405x720_06.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );

            $full_object['items'] = array($item1, $item2, $item3, $item4, $item5, $item6);
            echo str_replace("\/", "/", json_encode($full_object, JSON_UNESCAPED_UNICODE));
            break;

            //TODO: planejamento futuro (v3)
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
                        'app' => IMAGES_URL . 'celebrities_720x720/celebrities_720x720_01.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'celebrities_720x720/celebrities_720x720_02.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'celebrities_720x720/celebrities_720x720_03.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'celebrities_720x720/celebrities_720x720_04.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );

            $full_object['items'] = array($item1, $item2, $item3, $item4);
            echo str_replace("\/", "/", json_encode($full_object, JSON_UNESCAPED_UNICODE));
            break;



        default:
            echo "Aguardando endpoint";
    }
}

function show_upcoming_events($uri_segments)
{
    switch ($uri_segments[4]) {

        case "get_endpoints":
            $endpoints = array(
                ['endpoint' => 'upcoming_events/live_now/'],
                ['endpoint' => 'upcoming_events/calendar/']
            );
            echo str_replace("\/", "/", json_encode($endpoints, JSON_UNESCAPED_UNICODE));
            break;
        case "live_now":
            $full_object = array(
                'section' => array(
                    'title' => 'ao vivo agora',
                    'see_more' => 'Ver todos »',
                    'url' => BASE_URL . 'live_now/get_endpoints'
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
                    'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_01.jpg',
                        'web' => IMAGES_URL
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
                    'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_02.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item3 = array(
                'id' => 3,
                'title' => 'CRP ARENA DREAMS',
                'time' => 'A partir das 15h30',
                'is_purchased' => true,
                'url_checkout' => BASE_URL . 'live_now/1/get_endpoints',
                'watch' => true,
                'subscribe' => false,
                'text_button' => 'ASSISTIR',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_youtube_118x64.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_03.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item4 = array(
                'id' => 4,
                'title' => 'EXPOAQUI',
                'time' => 'A partir das 15h30',
                'is_purchased' => true,
                'url_checkout' => BASE_URL . 'live_now/2/get_endpoints',
                'watch' => true,
                'subscribe' => false,
                'text_button' => 'ASSISTIR',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_youtube_118x64.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_04.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );

            $full_object['items'] = array($item1, $item2, $item3, $item4);
            echo str_replace("\/", "/", json_encode($full_object, JSON_UNESCAPED_UNICODE));
            break;
        case "calendar":
            $main_section = array(
                'section' => array(
                    'title' => 'Próximos Eventos',
                )
            );
            $main_section['items'] = array(
                array('id' => 1, 'title' => 'Janeiro'),
                array('id' => 2, 'title' => 'Fevereiro'),
                array('id' => 3, 'title' => 'Março'),
                array('id' => 4, 'title' => 'Abril'),
                array('id' => 5, 'title' => 'Maio'),
                array('id' => 6, 'title' => 'Junho'),
                array('id' => 7, 'title' => 'Julho'),
                array('id' => 8, 'title' => 'Agosto'),
                array('id' => 9, 'title' => 'Setembro'),
                array('id' => 10, 'title' => 'Outubro'),
                array('id' => 11, 'title' => 'Novembro'),
                array('id' => 12, 'title' => 'Dezembro'),
            );

            $event_item[0] = array(
                'id' => 1,
                'title' => 'PBR Stamped Days',
                'date_time' => '15/03 | 18:00',
                'is_purchased' => false,
                'url_checkout' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.19926350538',
                'watch' => false,
                'subscribe' => false,
                'text_button_primary' => 'COMPRAR',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_01.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $event_item[1] = array(
                'id' => 2,
                'title' => 'PBR Stamped Days',
                'date_time' => '15/03 | 18:00',
                'is_purchased' => false,
                'url_checkout' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.19926350538',
                'watch' => false,
                'subscribe' => true,
                'text_button_primary' => 'ASSINAR',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_01.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $event_item[2] = array(
                'id' => 3,
                'title' => 'PBR Stamped Days',
                'date_time' => '15/03 | 18:00',
                'is_purchased' => true,
                'url_checkout' => BASE_URL . 'video/3/get_endpoints',
                'watch' => true,
                'subscribe' => false,
                'text_button_primary' => 'ASSISTIR',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_01.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $event_item[3] = array(
                'id' => 4,
                'title' => 'PBR Stamped Days',
                'date_time' => '15/03 | 18:00',
                'is_purchased' => false,
                'url_checkout' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.19926350538',
                'watch' => false,
                'subscribe' => false,
                'text_button_primary' => 'COMPRAR',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_01.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );

            foreach ($main_section['items'] as $key => $item) {
                $main_section['items'][$key]['items'] = $event_item;
            }

            echo str_replace("\/", "/", json_encode($main_section, JSON_UNESCAPED_UNICODE));
            break;

        default:
            echo "Aguardando endpoint";
    }
}
function show_channels($uri_segments)
{
    switch ($uri_segments[5]) {

        case "get_endpoints":
            $endpoints = array(
                ['endpoint' => 'channels/1/highlight_medium/'],
                ['endpoint' => 'channels/1/live_now/'],
                ['endpoint' => 'channels/1/store/'],
                ['endpoint' => 'channels/1/playlist/1'],
                ['endpoint' => 'channels/1/ads_medium_banner/1'],
                ['endpoint' => 'channels/1/series/1'],
                ['endpoint' => 'channels/1/playlist/2'],
            );
            echo str_replace("\/", "/", json_encode($endpoints, JSON_UNESCAPED_UNICODE));
            break;

        case "highlight_medium":
            $full_object = array(
                'section' => array(
                    'title' => 'Destaques',
                )
            );
            $item1 = array(
                'id' => 1,
                'title' => 'BARRETOS: PROVAS COM CAVALOS',
                'short_description' => 'Loren ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'is_purchased' => false,
                'url_checkout' => BASE_URL . 'video/1/get_endpoints',
                'watch' => true,
                'subscribe' => false,
                'text_button' => 'ASSISTIR',
                'date_time' => '15/03 | 18:00',
                'media' => array(
                    'trailer' => 'http://.../xxx.m3u8',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'highlight_medium_1080x1720/highlight_medium_1080x1720_01.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item2 = array(
                'id' => 2,
                'title' => 'FINAIS DO RODEIO DE BARRETOS',
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
                        'app' => IMAGES_URL . 'highlight_medium_1080x1720/highlight_medium_1080x1720_02.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item3 = array(
                'id' => 3,
                'title' => 'ADRENALINA E POEIRA: MELHORES MOMENTOS DE BARRETOS 2022',
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
                        'app' => IMAGES_URL . 'highlight_medium_1080x1720/highlight_medium_1080x1720_03.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $full_object['items'] = array($item1, $item2, $item3);
            echo str_replace("\/", "/", json_encode(array($full_object), JSON_UNESCAPED_UNICODE));
            break;

        case "live_now":
            $full_object = array(
                'section' => array(
                    'title' => 'ao vivo agora',
                    'see_more' => 'Ver todos »',
                    'url' => BASE_URL . 'live_now/get_endpoints'
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
                    'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_01.jpg',
                        'web' => IMAGES_URL
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
                    'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_02.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item3 = array(
                'id' => 3,
                'title' => 'CRP ARENA DREAMS',
                'time' => 'A partir das 15h30',
                'is_purchased' => true,
                'url_checkout' => BASE_URL . 'live_now/1/get_endpoints',
                'watch' => true,
                'subscribe' => false,
                'text_button' => 'ASSISTIR',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_youtube_118x64.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_03.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item4 = array(
                'id' => 4,
                'title' => 'EXPOAQUI',
                'time' => 'A partir das 15h30',
                'is_purchased' => true,
                'url_checkout' => BASE_URL . 'live_now/2/get_endpoints',
                'watch' => true,
                'subscribe' => false,
                'text_button' => 'ASSISTIR',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_youtube_118x64.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_04.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );

            $full_object['items'] = array($item1, $item2, $item3, $item4);
            echo str_replace("\/", "/", json_encode($full_object, JSON_UNESCAPED_UNICODE));
            break;

        case "store":
            $full_object = array(
                'section' => array(
                    'title' => 'Loja Oficial',
                    'see_more' => 'Mais produtos »',
                    'url' => 'https://shopee.com.br',
                )
            );
            $item1 = array(
                'id' => 1,
                'title' => 'BOTA TEXANA',
                'price' => 'R$ 129,99',
                'url' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.1992635053',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'store_720x720/store_720x720_01.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item2 = array(
                'id' => 2,
                'title' => 'CINTO MASTER WRANGLER',
                'price' => 'R$ 81,00',
                'url' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.1992635053',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'store_720x720/store_720x720_02.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item3 = array(
                'id' => 3,
                'title' => 'CHAPÉU LONG HORN',
                'price' => 'R$ 119,90',
                'url' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.1992635053',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'store_720x720/store_720x720_03.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item4 = array(
                'id' => 4,
                'title' => 'CALÇA JEANS RODEIO',
                'price' => 'R$ 73,97',
                'url' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.1992635053',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'store_720x720/store_720x720_04.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );

            $full_object['items'] = array($item1, $item2, $item3, $item4);
            echo str_replace("\/", "/", json_encode($full_object, JSON_UNESCAPED_UNICODE));
            break;

            //TODO: planejamento futuro (v3)

        case "playlist":
            $full_object = array(
                'section' => array(
                    'id' => ($uri_segments[6]) ? $uri_segments[6] : 1,
                    'title' => ($uri_segments[6] == 1) ? 'Prova dos 3 Tambores' : 'Colorado dia 1'
                )
            );
            $item1 = array(
                'id' => 1,
                'title' => 'CHAYENNE • PBR',
                'url' => BASE_URL . 'video/1/get_endpoints',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'playlists_720x405/playlists_720x405_01.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item2 = array(
                'id' => 2,
                'title' => 'OUTLAW • PBR',
                'url' => BASE_URL . 'video/2/get_endpoints',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'playlists_720x405/playlists_720x405_02.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item3 = array(
                'id' => 3,
                'title' => 'STAMPEDE • PBR',
                'url' => BASE_URL . 'video/3/get_endpoints',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'playlists_720x405/playlists_720x405_03.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item4 = array(
                'id' => 4,
                'title' => 'GAMBLER DAYS • PBR',
                'url' => BASE_URL . 'video/4/get_endpoints',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'playlists_720x405/playlists_720x405_04.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item5 = array(
                'id' => 5,
                'title' => 'RIDGE RIDER • PBR',
                'url' => BASE_URL . 'video/5/get_endpoints',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'playlists_720x405/playlists_720x405_05.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );


            $full_object['items'] = array($item1, $item2, $item3, $item4, $item5);
            echo str_replace("\/", "/", json_encode($full_object, JSON_UNESCAPED_UNICODE));
            break;

        case "ads_medium_banner":
            if ($uri_segments[6] == 1) {
                $banner = array(
                    'id' => 1,
                    'src' => 'https://ads.xstreaming.com.br/?_dnid=46&t=1707340941'
                );
                echo str_replace("\/", "/", json_encode($banner, JSON_UNESCAPED_UNICODE));
            }
            if ($uri_segments[6] == 2) {
                $banner = array(
                    'id' => 2,
                    'src' => 'https://ads.xstreaming.com.br/?_dnid=50&t=1707341210'
                );
                echo str_replace("\/", "/", json_encode($banner, JSON_UNESCAPED_UNICODE));
            }
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
                        'background' => BASE_URL . 'images/series_background_1080x1882/series_background_1080x1882.jpg'
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_01.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_02.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_03.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_04.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_05.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_06.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_07.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_08.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_09.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_10.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_11.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_12.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );

            $main_section['items'][2]['items'] = array($s3_item1, $s3_item2, $s3_item3, $s3_item4);


            echo str_replace("\/", "/", json_encode($main_section, JSON_UNESCAPED_UNICODE));
            break;



        default:
            echo "Aguardando endpoint";
    }

}

function show_live_details($uri_segments)
{
    switch ($uri_segments[4]) {

        case "get_endpoints":
            $endpoints = array(
                ['endpoint' => 'live_details/player/'],
                ['endpoint' => 'live_details/content/'],
                ['endpoint' => 'live_details/store/'],
                ['endpoint' => 'live_details/ads_medium_banner/1'],
                ['endpoint' => 'live_details/live_now/'],
                ['endpoint' => 'live_details/upcoming_events/'],
                ['endpoint' => 'live_details/celebrities/'],
                ['endpoint' => 'live_details/ads_medium_banner/2']
            );
            echo str_replace("\/", "/", json_encode($endpoints, JSON_UNESCAPED_UNICODE));
            break;

        case "player":
            $player = array(
                'is_purchased' => true,
                'subscribe' => false,
                'text_button' => '',
                'url_checkout' => '',
                'player' => 'spalla',
                'iframe_src' => 'https://beyond.spalla.io/player/?video=018a10d2-dc8a-7b57-a187-18c48277f944&bar=1&aid=-1',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'live_now_720x405_01',
                        'web' => IMAGES_URL
                    )
                )
            );
            echo str_replace("\/", "/", json_encode($player, JSON_UNESCAPED_UNICODE));
            break;

        case "content":
            $details = array(
                    'date_time' => '18:25 - 20:30',
                    'title' => 'TRANSMISSÃO 1 - PROVA DO LAÇO',
                    'subtitle' => 'ESPORTE • 2021 • BRASIL',
                    'age_group' => BASE_URL . 'images/0_icons/icon_age_14_97x64',
                    'definition' => BASE_URL . 'images/0_icons/icon_1080p_97x64',
                    'full_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempus tempor egestas. Peilentesque feugiat nulla non libero pulvinar, nec consequat neque in condimentum tempor. Integer tincidunt arcu eu eros.',
                    'is_favorited' => false,
                    'is_watch_later' => false,
                    'details_button_primary' => 'INTERAGIR',
                    'details_button_secondary' => 'SAIBA MAIS',
                    'details_button_terciary' => 'ESTATÍSTICAS',
                );

            $chat = array(
                'iframe_src' => '',
                );

            $full_object['items'] = array($details, $chat);
            echo str_replace("\/", "/", json_encode($full_object, JSON_UNESCAPED_UNICODE));
            
            break;
        case "store":
            $full_object = array(
                'section' => array(
                    'title' => 'Loja Oficial',
                    'see_more' => 'Mais produtos »',
                    'url' => 'https://shopee.com.br',
                )
            );
            $item1 = array(
                'id' => 1,
                'title' => 'BOTA TEXANA',
                'price' => 'R$ 129,99',
                'url' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.1992635053',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'store_720x720/store_720x720_01.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item2 = array(
                'id' => 2,
                'title' => 'CINTO MASTER WRANGLER',
                'price' => 'R$ 81,00',
                'url' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.1992635053',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'store_720x720/store_720x720_02.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item3 = array(
                'id' => 3,
                'title' => 'CHAPÉU LONG HORN',
                'price' => 'R$ 119,90',
                'url' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.1992635053',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'store_720x720/store_720x720_03.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item4 = array(
                'id' => 4,
                'title' => 'CALÇA JEANS RODEIO',
                'price' => 'R$ 73,97',
                'url' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.1992635053',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'store_720x720/store_720x720_04.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );

            $full_object['items'] = array($item1, $item2, $item3, $item4);
            echo str_replace("\/", "/", json_encode($full_object, JSON_UNESCAPED_UNICODE));
            break;

        case "ads_medium_banner":
            if ($uri_segments[5] == 1) {
                $banner = array(
                    'id' => 1,
                    'src' => 'https://ads.xstreaming.com.br/?_dnid=46&t=1707340941'
                );
                echo str_replace("\/", "/", json_encode($banner, JSON_UNESCAPED_UNICODE));
            }
            if ($uri_segments[5] == 2) {
                $banner = array(
                    'id' => 2,
                    'src' => 'https://ads.xstreaming.com.br/?_dnid=50&t=1707341210'
                );
                echo str_replace("\/", "/", json_encode($banner, JSON_UNESCAPED_UNICODE));
            }
            break;

        case "live_now":
            $full_object = array(
                'section' => array(
                    'title' => 'ao vivo agora',
                    'see_more' => 'Ver todos »',
                    'url' => BASE_URL . 'live_now/get_endpoints'
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
                    'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_01.jpg',
                        'web' => IMAGES_URL
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
                    'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_02.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item3 = array(
                'id' => 3,
                'title' => 'CRP ARENA DREAMS',
                'time' => 'A partir das 15h30',
                'is_purchased' => true,
                'url_checkout' => BASE_URL . 'live_now/1/get_endpoints',
                'watch' => true,
                'subscribe' => false,
                'text_button' => 'ASSISTIR',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_youtube_118x64.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_03.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item4 = array(
                'id' => 4,
                'title' => 'EXPOAQUI',
                'time' => 'A partir das 15h30',
                'is_purchased' => true,
                'url_checkout' => BASE_URL . 'live_now/2/get_endpoints',
                'watch' => true,
                'subscribe' => false,
                'text_button' => 'ASSISTIR',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_youtube_118x64.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_04.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );

            $full_object['items'] = array($item1, $item2, $item3, $item4);
            echo str_replace("\/", "/", json_encode($full_object, JSON_UNESCAPED_UNICODE));
            break;

        case "upcoming_events":
            $full_object = array(
                'section' => array(
                    'title' => 'Próximos Eventos',
                    'see_more' => 'Ver todos »',
                    'url' => BASE_URL . 'upcoming_events/get_endpoints'
                )
            );
            $item1 = array(
                'id' => 1,
                'title' => '',
                'date_time' => '15/03',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'upcoming_events_405x720/upcoming_events_405x720_01.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item2 = array(
                'id' => 2,
                'title' => '',
                'date_time' => '19/05',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'upcoming_events_405x720/upcoming_events_405x720_02.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item3 = array(
                'id' => 3,
                'title' => '',
                'date_time' => '18/08',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'upcoming_events_405x720/upcoming_events_405x720_03.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item4 = array(
                'id' => 4,
                'title' => '',
                'date_time' => '25/08',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'upcoming_events_405x720/upcoming_events_405x720_04.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item5 = array(
                'id' => 5,
                'title' => '',
                'date_time' => '29/09',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'upcoming_events_405x720/upcoming_events_405x720_05.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item6 = array(
                'id' => 6,
                'title' => '',
                'date_time' => '06/10',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'upcoming_events_405x720/upcoming_events_405x720_06.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'celebrities_720x720/celebrities_720x720_01.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'celebrities_720x720/celebrities_720x720_02.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'celebrities_720x720/celebrities_720x720_03.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'celebrities_720x720/celebrities_720x720_04.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );

            $full_object['items'] = array($item1, $item2, $item3, $item4);
            echo str_replace("\/", "/", json_encode($full_object, JSON_UNESCAPED_UNICODE));
            break;

        default:
        echo "Aguardando endpoint";
    }
}

function show_video_details($uri_segments)
{
    switch ($uri_segments[4]) {

        case "get_endpoints":
            $endpoints = array(
                ['endpoint' => 'video_details/player/'],
                ['endpoint' => 'video_details/details/'],
                ['endpoint' => 'video_details/celebrities/'],
                ['endpoint' => 'video_details/related_videos/'],
                ['endpoint' => 'video_details/episodes/'],
                ['endpoint' => 'video_details/ads_medium_banner/1'],
                ['endpoint' => 'video_details/store'],
                ['endpoint' => 'video_details/ads_medium_banner/2']
            );
            echo str_replace("\/", "/", json_encode($endpoints, JSON_UNESCAPED_UNICODE));
            break;

        case "player":
            $player = array(
                'is_purchased' => true,
                'subscribe' => false,
                'text_button' => '',
                'url_checkout' => '',
                'player' => 'spalla',
                'iframe_url' => 'https://beyond.spalla.io/player/?video=018a10d2-dc8a-7b57-a187-18c48277f944&bar=1&aid=-1',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'store_720x720/store_720x720_01.jpg',
                        'web' => IMAGES_URL
                    )
                )
                );
            echo str_replace("\/", "/", json_encode($player, JSON_UNESCAPED_UNICODE));
            break;

        case "details":
            $details = array(
                'title' => 'TRANSMISSÃO 1 - PROVA OD LAÇO',
                'subtitle' => 'ESPORTE • 2021 • 1H32M • BRASIL',
                'age_group' => BASE_URL . 'images/0_icons/icon_age_14_97x64',
                'definition' => BASE_URL . 'images/0_icons/icon_1080p_97x64',
                'full_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempus tempor egestas. Peilentesque feugiat nulla non libero pulvinar, nec consequat neque in condimentum tempor. Integer tincidunt arcu eu eros.',
                'is_favorited' => false,
                'is_watch_later' => false
            );
            echo str_replace("\/", "/", json_encode($details, JSON_UNESCAPED_UNICODE));
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
                        'app' => IMAGES_URL . 'celebrities_720x720/celebrities_720x720_01.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'celebrities_720x720/celebrities_720x720_02.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'celebrities_720x720/celebrities_720x720_03.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'celebrities_720x720/celebrities_720x720_04.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );

            $full_object['items'] = array($item1, $item2, $item3, $item4);
            echo str_replace("\/", "/", json_encode($full_object, JSON_UNESCAPED_UNICODE));
            break;
        
        
        case "related_videos":

            $full_object = array(
                'section' => array(
                    'title' => 'Vídeos Relacionados',
                    
                )
            );

            $item1 = array(
                'id' => 1,
                'title' => 'PROVA DO LAÇO BARRETOS',
                'url' => BASE_URL . 'video/1/get_endpoints',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_01.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item2 = array(
                'id' => 2,
                'title' => 'RODEIO EM CAVALOS PBR',
                'url' => BASE_URL . 'video/2/get_endpoints',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_01.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item3 = array(
                'id' => 3,
                'title' => '3 TAMBORES MARAU',
                'url' => BASE_URL . 'video/3/get_endpoints',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_youtube_118x64.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_01.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item4 = array(
                'id' => 4,
                'title' => 'PBR: PROVA DO LAÇO',
                'url' => BASE_URL . 'video/4/get_endpoints',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_youtube_118x64.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_01.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );

            $full_object['items'] = array($item1, $item2, $item3, $item4);
            echo str_replace("\/", "/", json_encode($full_object, JSON_UNESCAPED_UNICODE));
            break;

        case "episodes":
            
            $main_section = array(
                'section' => array(
                    'title' => 'Outros Episódios',
                    'title_box' => 'Rodeio de Barretos'
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_01.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_02.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_03.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_04.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_05.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_06.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_07.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_08.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_09.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_10.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_11.jpg',
                        'web' => IMAGES_URL
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
                        'app' => IMAGES_URL . 'series_thumbs_480x480/series_thumbs_480x480_12.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );

            $main_section['items'][2]['items'] = array($s3_item1, $s3_item2, $s3_item3, $s3_item4);


            echo str_replace("\/", "/", json_encode($main_section, JSON_UNESCAPED_UNICODE));
            break;

        case "ads_medium_banner":
            if ($uri_segments[5] == 1) {
                $banner = array(
                    'id' => 1,
                    'src' => 'https://ads.xstreaming.com.br/?_dnid=46&t=1707340941'
                );
                echo str_replace("\/", "/", json_encode($banner, JSON_UNESCAPED_UNICODE));
            }
            if ($uri_segments[5] == 2) {
                $banner = array(
                    'id' => 2,
                    'src' => 'https://ads.xstreaming.com.br/?_dnid=50&t=1707341210'
                );
                echo str_replace("\/", "/", json_encode($banner, JSON_UNESCAPED_UNICODE));
            }
            break;

        case "store":
            $full_object = array(
                'section' => array(
                    'title' => 'Loja Oficial',
                    'see_more' => 'Mais produtos »',
                    'url' => 'https://shopee.com.br',
                )
            );
            $item1 = array(
                'id' => 1,
                'title' => 'BOTA TEXANA',
                'price' => 'R$ 129,99',
                'url' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.1992635053',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'store_720x720/store_720x720_01.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item2 = array(
                'id' => 2,
                'title' => 'CINTO MASTER WRANGLER',
                'price' => 'R$ 81,00',
                'url' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.1992635053',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'store_720x720/store_720x720_02.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item3 = array(
                'id' => 3,
                'title' => 'CHAPÉU LONG HORN',
                'price' => 'R$ 119,90',
                'url' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.1992635053',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'store_720x720/store_720x720_03.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item4 = array(
                'id' => 4,
                'title' => 'CALÇA JEANS RODEIO',
                'price' => 'R$ 73,97',
                'url' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.1992635053',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'store_720x720/store_720x720_04.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );

            $full_object['items'] = array($item1, $item2, $item3, $item4);
            echo str_replace("\/", "/", json_encode($full_object, JSON_UNESCAPED_UNICODE));
            break;

        
        default:
        echo "Aguardando endpoint";
    }

}

function show_live_menu($uri_segments)
{
    switch ($uri_segments[4]) {

        case "get_endpoints":
            $endpoints = array(
                ['endpoint' => 'live_menu/player/'],
                ['endpoint' => 'live_menu/details/'],
                ['endpoint' => 'live_menu/live_now']
            );
            echo str_replace("\/", "/", json_encode($endpoints, JSON_UNESCAPED_UNICODE));
            break;

        case "player":
            $player = array(
                'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                'title' => 'PBR | COLORADO 2023 | SEXTA-FEIRA',
                'is_purchased' => true,
                'subscribe' => false,
                'text_button' => '',
                'url_checkout' => '',
                'player' => 'spalla',
                'iframe_url' => 'https://beyond.spalla.io/player/?video=018a10d2-dc8a-7b57-a187-18c48277f944&bar=1&aid=-1',
                'media' => array(
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'store_720x720/store_720x720_01.jpg',
                        'web' => IMAGES_URL
                    )
                )
                );
            echo str_replace("\/", "/", json_encode($player, JSON_UNESCAPED_UNICODE));
            break;

        case "details":
            $details = array(
                'full_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempus tempor egestas. Peilentesque feugiat nulla non libero pulvinar, nec consequat neque in condimentum tempor. Integer tincidunt arcu eu eros.',
                'is_favorited' => false,
                'is_watch_later' => false,
                'text_button' => 'PROGRAMAÇÃO'
            );
            echo str_replace("\/", "/", json_encode($details, JSON_UNESCAPED_UNICODE));
            break;

        case "live_now":
            $full_object = array(
                'section' => array(
                    'title' => 'ao vivo agora'
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
                    'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_01.jpg',
                        'web' => IMAGES_URL
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
                'subscribe' => false,
                'text_button' => 'COMPRAR',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_02.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item3 = array(
                'id' => 3,
                'title' => 'CRP ARENA DREAMS',
                'time' => 'A partir das 15h30',
                'is_purchased' => true,
                'url_checkout' => BASE_URL . 'live_now/1/get_endpoints',
                'watch' => true,
                'subscribe' => false,
                'text_button' => 'ASSISTIR',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_youtube_118x64.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_03.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );
            $item4 = array(
                'id' => 4,
                'title' => 'EXPOAQUI',
                'time' => 'A partir das 15h30',
                'is_purchased' => true,
                'url_checkout' => BASE_URL . 'live_now/2/get_endpoints',
                'watch' => true,
                'subscribe' => false,
                'text_button' => 'ASSISTIR',
                'media' => array(
                    'logo' => BASE_URL . 'images/0_icons/icon_youtube_118x64.png',
                    'thumbs' => array(
                        'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_04.jpg',
                        'web' => IMAGES_URL
                    )
                )
            );

            $full_object['items'] = array($item1, $item2, $item3, $item4);
            echo str_replace("\/", "/", json_encode($full_object, JSON_UNESCAPED_UNICODE));
            break;

        default:
        echo "Aguardando endpoint";
    }
}

function show_more_menu($uri_segments)
{
    switch ($uri_segments[4]) {

        case "get_endpoints":
            $endpoints = array(
                ['endpoint' => 'more_menu/information'],
                ['endpoint' => 'more_menu/list'],
                ['endpoint' => 'more_menu/profile']
            );
            echo str_replace("\/", "/", json_encode($endpoints, JSON_UNESCAPED_UNICODE));
            break;

        case "information":
        $information = array(
            'title' => 'Informações',
            'banner' => array(
                    'app' => IMAGES_URL . 'celebrities_720x720/celebrities_720x720_01.jpg',
                    'web' => IMAGES_URL
            ),
            'details' => array(
                'title' => 'BRTVMAX',
                'description' => 'Esportes rurais ao vivo, informações e o maior acervo de imagens de rodeio',
                'icons' => array(
                    'title_icons' => 'SIGA A BRTVMAX NAS REDES SOCIAIS',
                    'facebook' => '',
                    'instagram' => '',
                    'x' => '',
                    'youtube' => '',
                    'tiktok' => ''
                ),
                'contact' => array(
                    'title_contact' => 'ENTRE EM CONTATO',
                    'email' => 'contato@brtvmax.com',
                    'whatsapp' => '+55 17 99771-8312'
                ),
                'links' => array (
                    'title_links' => 'LINKS',
                    'terms_of_use' => '',
                    'terms_of_service' => '',
                    'cookies_policy' => '',
                    'privacy_policy' => ''
                ),
                'newsletter' => array(
                    'title_newsletter' => 'INSCREVA-SE NA NEWSLETTER',
                    'text_field' => 'E-mail*',
                    'is_subscribed' => false
                ),
            ));
            
            $store = array(
            'section' => array(
                'title' => 'Loja Oficial',
                'see_more' => 'Mais produtos »',
                'url' => 'https://shopee.com.br',
            ));
            
                $store_item1 = array(
                    'id' => 1,
                    'title' => 'BOTA TEXANA',
                    'price' => 'R$ 129,99',
                    'url' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.1992635053',
                    'media' => array(
                        'thumbs' => array(
                            'app' => IMAGES_URL . 'store_720x720/store_720x720_01.jpg',
                            'web' => IMAGES_URL
                        )
                    )
                        );
                $store_item2 = array(
                    'id' => 2,
                    'title' => 'CINTO MASTER WRANGLER',
                    'price' => 'R$ 81,00',
                    'url' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.1992635053',
                    'media' => array(
                        'thumbs' => array(
                            'app' => IMAGES_URL . 'store_720x720/store_720x720_02.jpg',
                            'web' => IMAGES_URL
                        )
                    )
                        );
                $store_item3 = array(
                    'id' => 3,
                    'title' => 'CHAPÉU LONG HORN',
                    'price' => 'R$ 119,90',
                    'url' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.1992635053',
                    'media' => array(
                        'thumbs' => array(
                            'app' => IMAGES_URL . 'store_720x720/store_720x720_03.jpg',
                            'web' => IMAGES_URL
                        )
                    )
                        );
                $store_item4 = array(
                    'id' => 4,
                    'title' => 'CALÇA JEANS RODEIO',
                    'price' => 'R$ 73,97',
                    'url' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.1992635053',
                    'media' => array(
                        'thumbs' => array(
                            'app' => IMAGES_URL . 'store_720x720/store_720x720_04.jpg',
                            'web' => IMAGES_URL
                        )
                    )
                        );
                $store['store_items'] = array($store_item1, $store_item2, $store_item3, $store_item4);

                
            $upcoming_events = array(
                'section' => array(
                    'title' => 'Próximos Eventos',
                    'see_more' => 'Ver todos »',
                    'url' => BASE_URL . 'upcoming_events/get_endpoints'
                )
                );
                $event_item1 = array(
                    'id' => 1,
                    'date_time' => '15/03',
                    'media' => array(
                        'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                        'thumbs' => array(
                            'app' => IMAGES_URL . 'upcoming_events_405x720/upcoming_events_405x720_01.jpg',
                            'web' => IMAGES_URL
                        )
                    )
                        );
                $event_item2 = array(
                    'id' => 2,
                    'date_time' => '19/05',
                    'media' => array(
                        'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                        'thumbs' => array(
                            'app' => IMAGES_URL . 'upcoming_events_405x720/upcoming_events_405x720_02.jpg',
                            'web' => IMAGES_URL
                        )
                    )
                        );
                $event_item3 = array(
                    'id' => 3,
                    'date_time' => '18/08',
                    'media' => array(
                        'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                        'thumbs' => array(
                            'app' => IMAGES_URL . 'upcoming_events_405x720/upcoming_events_405x720_03.jpg',
                            'web' => IMAGES_URL
                        )
                    )
                        );
                $event_item4 = array(
                    'id' => 4,
                    'date_time' => '25/08',
                    'media' => array(
                        'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                        'thumbs' => array(
                            'app' => IMAGES_URL . 'upcoming_events_405x720/upcoming_events_405x720_04.jpg',
                            'web' => IMAGES_URL
                        )
                    )
                        );
                $event_item5 = array(
                    'id' => 5,
                    'date_time' => '29/09',
                    'media' => array(
                        'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                        'thumbs' => array(
                            'app' => IMAGES_URL . 'upcoming_events_405x720/upcoming_events_405x720_05.jpg',
                            'web' => IMAGES_URL
                        )
                    )
                        );
                $event_item6 = array(
                    'id' => 6,
                    'date_time' => '06/10',
                    'media' => array(
                        'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
                        'thumbs' => array(
                            'app' => IMAGES_URL . 'upcoming_events_405x720/upcoming_events_405x720_06.jpg',
                            'web' => IMAGES_URL
                        )
                    )
                        );

                $upcoming_events['events_items'] = array($event_item1, $event_item2, $event_item3, $event_item4, $event_item5, $event_item6);

                $full_object = array ($information, $store, $upcoming_events);

        echo str_replace("\/", "/", json_encode($full_object, JSON_UNESCAPED_UNICODE));
        break;

        case "list":
        $list = array(
            'title' => 'Minha Lista',
            'section' => array(
                'title' => 'ao vivo agora',
            )
        );
        $list_item1 = array(
            'id' => 1,
            'title' => 'MEGA RODEIO MARAU',
            'is_purchased' => false,
            'url_checkout' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.19926350538',
            'watch' => false,
            'subscribe' => false,
            'text_button' => 'COMPRAR',
            'full_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.',
            'media' => array(
                'thumbs' => array(
                    'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_01.jpg',
                    'web' => IMAGES_URL
                )
            )
        );
        $list_item2 = array(
            'id' => 2,
            'title' => 'COLORADO',
            'is_purchased' => false,
            'url_checkout' => 'https://shopee.com.br/kit-botina-mateira-rodeio-mais-cinto-country-i.387378180.19926350538',
            'watch' => false,
            'subscribe' => false,
            'text_button' => 'COMPRAR',
            'full_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.',
            'media' => array(
                'thumbs' => array(
                    'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_02.jpg',
                    'web' => IMAGES_URL
                )
            )
        );
        $list_item3 = array(
            'id' => 3,
            'title' => 'CRP ARENA DREAMS',
            'is_purchased' => true,
            'url_checkout' => BASE_URL . 'live_now/1/get_endpoints',
            'watch' => true,
            'subscribe' => false,
            'text_button' => 'ASSISTIR',
            'full_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.',
            'media' => array(
                'thumbs' => array(
                    'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_03.jpg',
                    'web' => IMAGES_URL
                )
            )
        );
        $list_item4 = array(
            'id' => 4,
            'title' => 'EXPOAQUI',
            'is_purchased' => true,
            'url_checkout' => BASE_URL . 'live_now/2/get_endpoints',
            'watch' => true,
            'subscribe' => false,
            'text_button' => 'ASSISTIR',
            'full_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.',
            'media' => array(
                'thumbs' => array(
                    'app' => IMAGES_URL . 'live_now_720x405/live_now_720x405_04.jpg',
                    'web' => IMAGES_URL
                )
            )
        );

        $list['items'] = array($list_item1, $list_item2, $list_item3, $list_item4);
        echo str_replace("\/", "/", json_encode($list, JSON_UNESCAPED_UNICODE));
        break;

        case "profile":
        $profile = array (
            'title' => 'Perfil',
            'picture' => '',
            'title_name' => 'NOME',
            'name' => 'Carla Andrade',
            'title_email' => 'E-MAIL',
            'email' => 'carla.andrade@gmail.com',
            'title_password' => 'SENHA',
            'password' => '******',
            'purshases' => array(
                'purchases_title' => 'COMPRAS E ASSINATURAS',
                $purshase1 = array ( 
                    'id' => 1,
                    'product' => 'Plano Etapa NY',
                    'date_time' => '25/01/2024',
                    'status' => 'Ativo'),
                $purshase2 = array ( 
                    'id' => 2,
                    'product' => 'Plano Mensal Fevereiro',
                    'date_time' => '01/02/2024',
                    'status' => 'Ativo'),
                $purshase3 = array ( 
                    'id' => 3,
                    'product' => 'Assinatura Plano Gold',
                    'date_time' => '25/11/2023',
                    'status' => 'Ativo'),
                $purshase4 = array ( 
                    'id' => 4,
                    'product' => 'PPV Colorado',
                    'date_time' => '25/03/2023',
                    'status' => 'Cancelado')
            )
        );
        $modal = array(
            'title' => 'EDITAR DADOS',
            'description' => 'Você pode alterar seus dados de cadastro nos campos abaixo, com exceção do e-mail',
            'title_name' => 'NOME',
            'name' => 'Carla Andrade',
            'title_email' => 'E-MAIL',
            'email' => 'carla.andrade@gmail.com',
            'title_password' => 'SENHA',
            'senha' => '******',
            'text_button' => 'SALVAR',
            'text_button_secondary' => 'CANCELAR'
        );
        $full_object = array(
            $full_object[0] = $profile,
            $full_object[1] = $modal,
        );

        echo str_replace("\/", "/", json_encode($full_object, JSON_UNESCAPED_UNICODE));
        break;
    }
}