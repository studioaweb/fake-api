<?php

$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);

//echo $uri_segments[0]; // for www.example.com/user/account you will get 'user'
//echo "<pre>";

//print_r($uri_segments);


switch ($uri_segments[3]) {
    case "get_order_home":
      echo "[
        {
            'endpoint': 'highlight_large/'
        },
        {
            'endpoint': 'channels/1'
        },
        {
            'endpoint': 'ads_mega_banner/1'
        },
        {
            'endpoint': 'live_now/'
        },
        {
            'endpoint': 'highlight_medium/'
        },
        {
            'endpoint': 'store/'
        },
        {
            'endpoint': 'series/1'
        },
        {
            'endpoint': 'playlist/1'
        },
        {
            'endpoint': 'ads_medium_banner/1'
        },
        {
            'endpoint': 'upcoming_events/'
        },
        {
            'endpoint': 'celebrities/'
        },
        {
            'endpoint': 'ads_medium_banner/2'
        }
        ]";
      break;
    case "highlight_large":
      echo "[
        {
            'id': 1,
            'title': 'PBR RIDGE RIDER',
            'short_description': 'Acompanhe a maior competição do rodeio ao vivo.',
            'is_live': true,
            'is_purchased': false,
            'watch': false,
            'subscribe': false,
            'text_button_primary': 'COMPRAR',
            'text_button_secondary': 'VER DESCRIÇÃO COMPLETA',
            'full_description': 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a tortor nunc. Praesent cursus suscipit nulla et volutpat. Donec pretium enim in purus ultrices, a vehicula nisi mollis.',
            'date_time': '15/03 | 18:00',
            'media': {
                'trailer': 'http://.../xxx.m3u8',
                'thumbs': {
                    'app': 'https://studioaweb.com.br/xstreaming/images/highlight_large_1080x1920/highlight_large_1080x1920_01.jpg',
                    'web': 'https://studioaweb.com.br/xstreaming/images/'
                }
            }
        }

        {
            'id': 2,
            'title': 'PBR UTB 23/24 | Chicago, IL | Round 2',
            'short_description': 'Acompanhe a maior competição do rodeio ao vivo.',
            'is_live': false,
            'is_purchased': false,
            'watch': false,
            'subscribe': true,
            'text_button_primary': 'ASSINAR',
            'text_button_secondary': 'VER DESCRIÇÃO COMPLETA',
            'full_description': 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a tortor nunc. Praesent cursus suscipit nulla et volutpat. Donec pretium enim in purus ultrices, a vehicula nisi mollis.',
            'date_time': '15/03 | 18:00',
            'media': {
                'trailer': 'http://.../xxx.m3u8',
                'thumbs': {
                    'app': 'https://studioaweb.com.br/xstreaming/images/highlight_large_1080x1920/highlight_large_1080x1920_02.jpg',
                    'web': 'https://studioaweb.com.br/xstreaming/images/'
                }
            }
        },
        {
            'id': 3,
            'title': 'TEAM SERIES CHEYENNE',
            'short_description': 'Acompanhe a maior competição do rodeio ao vivo.',
            'is_live': false,
            'is_purchased': true,
            'watch': true,
            'subscribe': false,
            'text_button_primary': 'ASSINAR',
            'text_button_secondary': 'VER DESCRIÇÃO COMPLETA',
            'full_description': 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a tortor nunc. Praesent cursus suscipit nulla et volutpat. Donec pretium enim in purus ultrices, a vehicula nisi mollis.',
            'date_time': '15/03 | 18:00',
            'media': {
                'trailer': 'http://.../xxx.m3u8',
                'thumbs': {
                    'app': 'https://studioaweb.com.br/xstreaming/images/highlight_large_1080x1920/highlight_large_1080x1920_03.jpg',
                    'web': 'https://studioaweb.com.br/xstreaming/images/'
                }
            }
        }

        ]";
      break;
    case "channels":
      echo "[
        {
            'id': 1,
            'section': {
                'title': 'Canais',
                'see_more': 'Ver todos »'
            },
            'items': [
                {
                    'id': 1,
                    'title': 'FESTA DE COLORADO',
                    'media': {
                        'thumbs': {
                            'app': 'https://studioaweb.com.br/xstreaming/images/channels_405x720/channels_405_720_01.jpg',
                            'web': 'https://studioaweb.com.br/xstreaming/images/'
                        }
                    }
                },
                {
                    'id': 2,
                    'title': '30 ANOS DE BARRETOS',
                    'media': {
                        'thumbs': {
                            'app': 'https://studioaweb.com.br/xstreaming/images/channels_405x720/channels_405_720_02.jpg',
                            'web': 'http://.../yyy.webp'
                        }
                    }
                },
                {
                    'id': 3,
                    'title': 'EXPO LONDRINA',
                    'media': {
                        'thumbs': {
                            'app': 'https://studioaweb.com.br/xstreaming/images/channels_405x720/channels_405_720_03.jpg',
                            'web': 'http://.../yyy.webp'
                        }
                    }
                },
                {
                    'id': 4,
                    'title': 'COLORADO + FINAIS',
                    'media': {
                        'thumbs': {
                            'app': 'https://studioaweb.com.br/xstreaming/images/channels_405x720/channels_405_720_04.jpg',
                            'web': 'http://.../yyy.webp'
                        }
                    }
                }
            ]
        }
      ]";
      break;
        case "live_now":
      echo "[D]";
      break;
    case "ads_mega_banner":
      echo "{
        'id': 1,
        'src': 'https://ads.xstreaming.com.br?_dnid=15&t=1706907361'
        }";
      break;
    case "ads_mega_banner":
      echo "{
        'id': 1,
        'src': 'https://ads.xstreaming.com.br?_dnid=15&t=1706907361'
        }";
      break;
    default:
      echo "F";
  }

?>