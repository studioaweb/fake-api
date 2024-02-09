<?php

$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
$base_url = 'https://studioaweb.com.br/xstreaming/fake-api/';

define('BASE_URL', $base_url);

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
          'thumbs' => array(
            'app' => BASE_URL . 'images/highlight_large_1080x1920/highlight_large_1080x1920_01.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'fake-api/highlight_large_1080x1920/highlight_large_1080x1920_02.jpg',
            'web' => BASE_URL . 'images/'
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
          'thumbs' => array(
            'app' => BASE_URL . 'fake-api/highlight_large_1080x1920/highlight_large_1080x1920_03.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/channels_405x720/channels_405_720_01.jpg',
            'web' => BASE_URL . 'images/'
          )
        )
      );
      $item2 = array(
        'id' => 2,
        'title' => '30 ANOS DE BARRETOS',
        'url' => BASE_URL . 'channels/2/get_endpoints',
        'media' => array(
          'thumbs' => array(
            'app' => BASE_URL . 'images/channels_405x720/channels_405_720_02.jpg',
            'web' => BASE_URL . 'images/'
          )
        )
      );
      $item3 = array(
        'id' => 3,
        'title' => 'EXPO LONDRINA',
        'url' => BASE_URL . 'channels/3/get_endpoints',
        'media' => array(
          'thumbs' => array(
            'app' => BASE_URL . 'images/channels_405x720/channels_405_720_03.jpg',
            'web' => BASE_URL . 'images/'
          )
        )
      );
      $item4 = array(
        'id' => 4,
        'title' => 'COLORADO + FINAIS',
        'url' => BASE_URL . 'channels/4/get_endpoints',
        'media' => array(
          'thumbs' => array(
            'app' => BASE_URL . 'images/channels_405x720/channels_405_720_04.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/live_now_720x405/live_now_720x405_01.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/live_now_720x405/live_now_720x405_02.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/live_now_720x405/live_now_720x405_03.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/live_now_720x405/live_now_720x405_04.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/highlight_medium_1080x1720/highlight_medium_1080x1720_01.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/highlight_medium_1080x1720/highlight_medium_1080x1720_02.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/highlight_medium_1080x1720/highlight_medium_1080x1720_03.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/store_720x720/store_720x720_01.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/store_720x720/store_720x720_02.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/store_720x720/store_720x720_03.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/store_720x720/store_720x720_04.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/series_thumbs_480x480/series_thumbs_480x480_01.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/series_thumbs_480x480/series_thumbs_480x480_02.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/series_thumbs_480x480/series_thumbs_480x480_03.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/series_thumbs_480x480/series_thumbs_480x480_04.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/series_thumbs_480x480/series_thumbs_480x480_05.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/series_thumbs_480x480/series_thumbs_480x480_06.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/series_thumbs_480x480/series_thumbs_480x480_07.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/series_thumbs_480x480/series_thumbs_480x480_08.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/series_thumbs_480x480/series_thumbs_480x480_09.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/series_thumbs_480x480/series_thumbs_480x480_10.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/series_thumbs_480x480/series_thumbs_480x480_11.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/series_thumbs_480x480/series_thumbs_480x480_12.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/playlists_405x720/playslists_405x720_01.jpg',
            'web' => BASE_URL . 'images/'
          )
        )
      );
      $item2 = array(
        'id' => 2,
        'title' => 'OUTLAW • PBR',
        'url' => BASE_URL . 'video/2/get_endpoints',
        'media' => array(
          'thumbs' => array(
            'app' => BASE_URL . 'images/playlists_405x720/playslists_405x720_02.jpg',
            'web' => BASE_URL . 'images/'
          )
        )
      );
      $item3 = array(
        'id' => 3,
        'title' => 'STAMPEDE • PBR',
        'url' => BASE_URL . 'video/3/get_endpoints',
        'media' => array(
          'thumbs' => array(
            'app' => BASE_URL . 'images/playlists_405x720/playslists_405x720_03.jpg',
            'web' => BASE_URL . 'images/'
          )
        )
      );
      $item4 = array(
        'id' => 4,
        'title' => 'GAMBLER DAYS • PBR',
        'url' => BASE_URL . 'video/4/get_endpoints',
        'media' => array(
          'thumbs' => array(
            'app' => BASE_URL . 'images/playlists_405x720/playslists_405x720_04.jpg',
            'web' => BASE_URL . 'images/'
          )
        )
      );
      $item5 = array(
        'id' => 5,
        'title' => 'RIDGE RIDER • PBR',
        'url' => BASE_URL . 'video/5/get_endpoints',
        'media' => array(
          'thumbs' => array(
            'app' => BASE_URL . 'images/playlists_405x720/playslists_405x720_05.jpg',
            'web' => BASE_URL . 'images/'
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
          'id' => 1,
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
        'date_time' => '15/03',
        'media' => array(
          'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
          'thumbs' => array(
            'app' => BASE_URL . 'images/upcoming_events_405x720/upcoming_events_405x720_01.jpg',
            'web' => BASE_URL . 'images/'
          )
        )
      );
      $item2 = array(
        'id' => 2,
        'date_time' => '19/05',
        'media' => array(
          'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
          'thumbs' => array(
            'app' => BASE_URL . 'images/upcoming_events_405x720/upcoming_events_405x720_02.jpg',
            'web' => BASE_URL . 'images/'
          )
        )
      );
      $item3 = array(
        'id' => 3,
        'date_time' => '18/08',
        'media' => array(
          'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
          'thumbs' => array(
            'app' => BASE_URL . 'images/upcoming_events_405x720/upcoming_events_405x720_03.jpg',
            'web' => BASE_URL . 'images/'
          )
        )
      );
      $item4 = array(
        'id' => 4,
        'date_time' => '25/08',
        'media' => array(
          'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
          'thumbs' => array(
            'app' => BASE_URL . 'images/upcoming_events_405x720/upcoming_events_405x720_04.jpg',
            'web' => BASE_URL . 'images/'
          )
        )
      );
      $item5 = array(
        'id' => 5,
        'date_time' => '29/09',
        'media' => array(
          'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
          'thumbs' => array(
            'app' => BASE_URL . 'images/upcoming_events_405x720/upcoming_events_405x720_05.jpg',
            'web' => BASE_URL . 'images/'
          )
        )
      );
      $item6 = array(
        'id' => 6,
        'date_time' => '06/10',
        'media' => array(
          'logo' => BASE_URL . 'images/0_icons/icon_brtvmax_118x64_white.png',
          'thumbs' => array(
            'app' => BASE_URL . 'images/upcoming_events_405x720/upcoming_events_405x720_06.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/celebrities_720x720/celebrities_720x720_01.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/celebrities_720x720/celebrities_720x720_02.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/celebrities_720x720/celebrities_720x720_03.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/celebrities_720x720/celebrities_720x720_04.jpg',
            'web' => BASE_URL . 'images/'
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
        ['endpoint' => 'upcoming_events/upcoming_events/']
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
            'app' => BASE_URL . 'images/live_now_720x405/live_now_720x405_01.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/live_now_720x405/live_now_720x405_02.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/live_now_720x405/live_now_720x405_03.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/live_now_720x405/live_now_720x405_04.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/series_thumbs_480x480/series_thumbs_480x480_01.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/series_thumbs_480x480/series_thumbs_480x480_01.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/series_thumbs_480x480/series_thumbs_480x480_01.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/series_thumbs_480x480/series_thumbs_480x480_01.jpg',
            'web' => BASE_URL . 'images/'
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
        ['endpoint' => 'channels/1/live_now/']
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
            'app' => BASE_URL . 'images/highlight_medium_1080x1720/highlight_medium_1080x1720_01.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/highlight_medium_1080x1720/highlight_medium_1080x1720_02.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/highlight_medium_1080x1720/highlight_medium_1080x1720_03.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/live_now_720x405/live_now_720x405_01.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/live_now_720x405/live_now_720x405_02.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/live_now_720x405/live_now_720x405_03.jpg',
            'web' => BASE_URL . 'images/'
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
            'app' => BASE_URL . 'images/live_now_720x405/live_now_720x405_04.jpg',
            'web' => BASE_URL . 'images/'
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
