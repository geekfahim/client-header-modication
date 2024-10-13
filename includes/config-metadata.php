<?php
// Listes Of URL
$urlKeyVPS1 = "https://rw-hosting.com/vps/vps?lang=" . $language["htmlLang"];
$urlKeyVPS2 = "https://rw-hosting.com/vps/vps-windows?lang=" . $language["htmlLang"];
$urlKeyVPS3 = "https://rw-hosting.com/vps/vps-kvm?lang=" . $language["htmlLang"];
$urlKeyVPS4 = "https://rw-hosting.com/vps/vps-game?lang=" . $language["htmlLang"];
$urlKeyVPS5 = "https://rw-hosting.com/vps/vps-storage?lang=" . $language["htmlLang"];

$urlKeyDedicated1 = "https://rw-hosting.com/dedicated/dedicated-server-intel?lang=" . $language["htmlLang"];
$urlKeyDedicated2 = "https://rw-hosting.com/dedicated/dedicated-server-ryzen?lang=" . $language["htmlLang"];
$urlKeyDedicated3 = "https://rw-hosting.com/dedicated/dedicated-server-xeon?lang=" . $language["htmlLang"];
$urlKeyDedicated4 = "https://rw-hosting.com/dedicated/dedicated-server-epyc?lang=" . $language["htmlLang"];
$urlKeyDedicated5 = "https://rw-hosting.com/dedicated/dedicated-server-flatrate?lang=" . $language["htmlLang"];
$urlKeyDedicated6 = "https://rw-hosting.com/dedicated/amd-ryzen-9-7950x?lang=" . $language["htmlLang"];

// .fr Domain 
$FRurlKeyVPS1 = "https://rw-hosting.fr/vps/vps?lang=" . $language["htmlLang"];
$FRurlKeyVPS2 = "https://rw-hosting.fr/vps/vps-windows?lang=" . $language["htmlLang"];
$FRurlKeyVPS3 = "https://rw-hosting.fr/vps/vps-kvm?lang=" . $language["htmlLang"];
$FRurlKeyVPS4 = "https://rw-hosting.fr/vps/vps-game?lang=" . $language["htmlLang"];
$FRurlKeyVPS5 = "https://rw-hosting.fr/vps/vps-storage?lang=" . $language["htmlLang"];

$FRurlKeyDedicated1 = "https://rw-hosting.fr/dedicated/dedicated-server-intel?lang=" . $language["htmlLang"];
$FRurlKeyDedicated2 = "https://rw-hosting.fr/dedicated/dedicated-server-ryzen?lang=" . $language["htmlLang"];
$FRurlKeyDedicated3 = "https://rw-hosting.fr/dedicated/dedicated-server-xeon?lang=" . $language["htmlLang"];
$FRurlKeyDedicated4 = "https://rw-hosting.fr/dedicated/dedicated-server-epyc?lang=" . $language["htmlLang"];
$FRurlKeyDedicated5 = "https://rw-hosting.fr/dedicated/dedicated-server-flatrate?lang=" . $language["htmlLang"];
$FRurlKeyDedicated6 = "https://rw-hosting.fr/dedicated/amd-ryzen-9-7950x?lang=" . $language["htmlLang"];



$metadata = [
    $urlKeyVPS1 => [        
        "structured_data" => [
            "@context" => "http://schema.org/",
            "@type" => "Product",
            "name" => $language["StructureDATA_header_vps_page1_rwh_1"],
            "description" => $language["StructureDATA_header_vps_page1_rwh_2"],
            "url" => $urlKeyVPS1,
            "sku" => "vps",
            "mpn" => "vps",
            "image" => ["https://rw-hosting.com/assets/images/logos/logorw_txt.webp"],
            "brand" => [
                "@type" => "Brand",
                "name" => "RW-Hosting"
            ],
            "review" => [
                "@type" => "Review",
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => "4.8",
                    "bestRating" => "5"
                ],
                "author" => [
                    "@type" => "Organization",
                    "name" => "RW-Hosting"
                ]
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.8",
                "ratingCount" => "253"
            ],
            "offers" => [
                "@type" => "AggregateOffer",
                "lowPrice" => "3.59",
                "highPrice" => "59.99",
                "priceCurrency" => "EUR",
                "offerCount" => "6",
                "availability" => "http://schema.org/InStock",
                "url" => $urlKeyVPS1
            ],
            "manufacturer" => [
                "@type" => "Organization",
                "name" => "RW-Hosting"
            ]
        ]
    ],

    $urlKeyVPS2 => [        
        "structured_data" => [
            "@context" => "http://schema.org/",
            "@type" => "Product",
            "name" => $language["StructureDATA_header_vps_page2_rwh_1"],
            "description" => $language["StructureDATA_header_vps_page2_rwh_2"],
            "url" => $urlKeyVPS2,
            "sku" => "vps-windows",
            "mpn" => "vps-windows",
            "image" => ["https://rw-hosting.com/assets/images/logos/logorw_txt.webp"],
            "brand" => [
                "@type" => "Brand",
                "name" => "RW-Hosting"
            ],
            "review" => [
                "@type" => "Review",
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => "4.8",
                    "bestRating" => "5"
                ],
                "author" => [
                    "@type" => "Organization",
                    "name" => "RW-Hosting"
                ]
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.8",
                "ratingCount" => "253"
            ],
            "offers" => [
                "@type" => "AggregateOffer",
                "lowPrice" => "3.59",
                "highPrice" => "59.99",
                "priceCurrency" => "EUR",
                "offerCount" => "6",
                "availability" => "http://schema.org/InStock",
                "url" => $urlKeyVPS2
            ],
            "manufacturer" => [
                "@type" => "Organization",
                "name" => "RW-Hosting"
            ]
        ]
    ],

    $urlKeyVPS3 => [        
        "structured_data" => [
            "@context" => "http://schema.org/",
            "@type" => "Product",
            "name" => $language["StructureDATA_header_vps_page5_rwh_1"],
            "description" => $language["StructureDATA_header_vps_page5_rwh_2"],
            "url" => $urlKeyVPS3,
            "sku" => "vps-kvm",
            "mpn" => "vps-kvm",
            "image" => ["https://rw-hosting.com/assets/images/logos/logorw_txt.webp"],
            "brand" => [
                "@type" => "Brand",
                "name" => "RW-Hosting"
            ],
            "review" => [
                "@type" => "Review",
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => "4.8",
                    "bestRating" => "5"
                ],
                "author" => [
                    "@type" => "Organization",
                    "name" => "RW-Hosting"
                ]
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.8",
                "ratingCount" => "253"
            ],
            "offers" => [
                "@type" => "AggregateOffer",
                "lowPrice" => "3.59",
                "highPrice" => "59.99",
                "priceCurrency" => "EUR",
                "offerCount" => "6",
                "availability" => "http://schema.org/InStock",
                "url" => $urlKeyVPS3
            ],
            "manufacturer" => [
                "@type" => "Organization",
                "name" => "RW-Hosting"
            ]
        ]
    ],

    $urlKeyVPS4 => [        
        "structured_data" => [
            "@context" => "http://schema.org/",
            "@type" => "Product",
            "name" => $language["StructureDATA_header_vps_page3_rwh_1"],
            "description" => $language["StructureDATA_header_vps_page3_rwh_2"],
            "url" => $urlKeyVPS3,
            "sku" => "vps-game",
            "mpn" => "vps-game",
            "image" => ["https://rw-hosting.com/assets/images/logos/logorw_txt.webp"],
            "brand" => [
                "@type" => "Brand",
                "name" => "RW-Hosting"
            ],
            "review" => [
                "@type" => "Review",
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => "4.8",
                    "bestRating" => "5"
                ],
                "author" => [
                    "@type" => "Organization",
                    "name" => "RW-Hosting"
                ]
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.8",
                "ratingCount" => "253"
            ],
            "offers" => [
                "@type" => "AggregateOffer",
                "lowPrice" => "3.59",
                "highPrice" => "59.99",
                "priceCurrency" => "EUR",
                "offerCount" => "6",
                "availability" => "http://schema.org/InStock",
                "url" => $urlKeyVPS3
            ],
            "manufacturer" => [
                "@type" => "Organization",
                "name" => "RW-Hosting"
            ]
        ]
    ],


    $urlKeyVPS5 => [        
        "structured_data" => [
            "@context" => "http://schema.org/",
            "@type" => "Product",
            "name" => $language["StructureDATA_header_vps_page8_rwh_1"],
            "description" => $language["StructureDATA_header_vps_page8_rwh_2"],
            "url" => $urlKeyVPS5,
            "sku" => "vps-storage",
            "mpn" => "vps-storage",
            "image" => ["https://rw-hosting.com/assets/images/logos/logorw_txt.webp"],
            "brand" => [
                "@type" => "Brand",
                "name" => "RW-Hosting"
            ],
            "review" => [
                "@type" => "Review",
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => "4.8",
                    "bestRating" => "5"
                ],
                "author" => [
                    "@type" => "Organization",
                    "name" => "RW-Hosting"
                ]
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.8",
                "ratingCount" => "253"
            ],
            "offers" => [
                "@type" => "AggregateOffer",
                "lowPrice" => "3.59",
                "highPrice" => "59.99",
                "priceCurrency" => "EUR",
                "offerCount" => "6",
                "availability" => "http://schema.org/InStock",
                "url" => $urlKeyVPS5
            ],
            "manufacturer" => [
                "@type" => "Organization",
                "name" => "RW-Hosting"
            ]
        ]
    ],


    $urlKeyDedicated1 => [        
        "structured_data" => [
            "@context" => "http://schema.org/",
            "@type" => "Product",
            "name" => $language["StructureDATA_header_dedicated_page3_rwh_1"],
            "description" => $language["StructureDATA_header_dedicated_page3_rwh_2"],
            "url" => $urlKeyDedicated1,
            "sku" => "dedicated-server-intel",
            "mpn" => "dedicated-server-intel",
            "image" => ["https://rw-hosting.com/assets/images/logos/logorw_txt.webp"],
            "brand" => [
                "@type" => "Brand",
                "name" => "RW-Hosting"
            ],
            "review" => [
                "@type" => "Review",
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => "4.8",
                    "bestRating" => "5"
                ],
                "author" => [
                    "@type" => "Organization",
                    "name" => "RW-Hosting"
                ]
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.8",
                "ratingCount" => "153"
            ],
            "offers" => [
                "@type" => "AggregateOffer",
                "lowPrice" => "114.99",
                "highPrice" => "249.99",
                "priceCurrency" => "EUR",
                "offerCount" => "6",
                "availability" => "http://schema.org/InStock",
                "url" => $urlKeyDedicated1
            ],
            "manufacturer" => [
                "@type" => "Organization",
                "name" => "RW-Hosting"
            ]
        ]
    ],

    $urlKeyDedicated2 => [        
        "structured_data" => [
            "@context" => "http://schema.org/",
            "@type" => "Product",
            "name" => $language["StructureDATA_header_dedicated_page2_rwh_1"],
            "description" => $language["StructureDATA_header_dedicated_page2_rwh_2"],
            "url" => $urlKeyDedicated2,
            "sku" => "dedicated-server-ryzen",
            "mpn" => "dedicated-server-ryzen",
            "image" => ["https://rw-hosting.com/assets/images/logos/logorw_txt.webp"],
            "brand" => [
                "@type" => "Brand",
                "name" => "RW-Hosting"
            ],
            "review" => [
                "@type" => "Review",
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => "4.8",
                    "bestRating" => "5"
                ],
                "author" => [
                    "@type" => "Organization",
                    "name" => "RW-Hosting"
                ]
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.8",
                "ratingCount" => "253"
            ],
            "offers" => [
                "@type" => "AggregateOffer",
                "lowPrice" => "99.99",
                "highPrice" => "299.99",
                "priceCurrency" => "EUR",
                "offerCount" => "6",
                "availability" => "http://schema.org/InStock",
                "url" => $urlKeyDedicated2
            ],
            "manufacturer" => [
                "@type" => "Organization",
                "name" => "RW-Hosting"
            ]
        ]
    ],

    $urlKeyDedicated3 => [        
        "structured_data" => [
            "@context" => "http://schema.org/",
            "@type" => "Product",
            "name" => $language["StructureDATA_header_dedicated_page5_rwh_1"],
            "description" => $language["StructureDATA_header_dedicated_page5_rwh_2"],
            "url" => $urlKeyDedicated3,
            "sku" => "dedicated-server-xeon",
            "mpn" => "dedicated-server-xeon",
            "image" => ["https://rw-hosting.com/assets/images/logos/logorw_txt.webp"],
            "brand" => [
                "@type" => "Brand",
                "name" => "RW-Hosting"
            ],
            "review" => [
                "@type" => "Review",
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => "4.8",
                    "bestRating" => "5"
                ],
                "author" => [
                    "@type" => "Organization",
                    "name" => "RW-Hosting"
                ]
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.8",
                "ratingCount" => "253"
            ],
            "offers" => [
                "@type" => "AggregateOffer",
                "lowPrice" => "74.99",
                "highPrice" => "399.99",
                "priceCurrency" => "EUR",
                "offerCount" => "6",
                "availability" => "http://schema.org/InStock",
                "url" => $urlKeyDedicated3
            ],
            "manufacturer" => [
                "@type" => "Organization",
                "name" => "RW-Hosting"
            ]
        ]
    ],
    $urlKeyDedicated4 => [        
        "structured_data" => [
            "@context" => "http://schema.org/",
            "@type" => "Product",
            "name" => $language["StructureDATA_header_dedicated_page1_rwh_1"],
            "description" => $language["StructureDATA_header_dedicated_page1_rwh_2"],
            "url" => $urlKeyDedicated4,
            "sku" => "dedicated-server-adm-epyc",
            "mpn" => "dedicated-server-adm-epyc",
            "image" => ["https://rw-hosting.com/assets/images/logos/logorw_txt.webp"],
            "brand" => [
                "@type" => "Brand",
                "name" => "RW-Hosting"
            ],
            "review" => [
                "@type" => "Review",
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => "4.8",
                    "bestRating" => "5"
                ],
                "author" => [
                    "@type" => "Organization",
                    "name" => "RW-Hosting"
                ]
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.8",
                "ratingCount" => "253"
            ],
            "offers" => [
                "@type" => "AggregateOffer",
                "lowPrice" => "74.99",
                "highPrice" => "399.99",
                "priceCurrency" => "EUR",
                "offerCount" => "6",
                "availability" => "http://schema.org/InStock",
                "url" => $urlKeyDedicated4
            ],
            "manufacturer" => [
                "@type" => "Organization",
                "name" => "RW-Hosting"
            ]
        ]
    ],

    $urlKeyDedicated5 => [        
        "structured_data" => [
            "@context" => "http://schema.org/",
            "@type" => "Product",
            "name" => $language["StructureDATA_header_dedicated_page1_rwh_1"],
            "description" => $language["StructureDATA_header_dedicated_page1_rwh_2"],
            "url" => $urlKeyDedicated5,
            "sku" => "dedicated-server-adm-epyc",
            "mpn" => "dedicated-server-adm-epyc",
            "image" => ["https://rw-hosting.com/assets/images/logos/logorw_txt.webp"],
            "brand" => [
                "@type" => "Brand",
                "name" => "RW-Hosting"
            ],
            "review" => [
                "@type" => "Review",
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => "4.8",
                    "bestRating" => "5"
                ],
                "author" => [
                    "@type" => "Organization",
                    "name" => "RW-Hosting"
                ]
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.8",
                "ratingCount" => "253"
            ],
            "offers" => [
                "@type" => "AggregateOffer",
                "lowPrice" => "399.99",
                "highPrice" => "599.99",
                "priceCurrency" => "EUR",
                "offerCount" => "6",
                "availability" => "http://schema.org/InStock",
                "url" => $urlKeyDedicated5
            ],
            "manufacturer" => [
                "@type" => "Organization",
                "name" => "RW-Hosting"
            ]
        ]
    ],

    $urlKeyDedicated6 => [        
        "structured_data" => [
            "@context" => "http://schema.org/",
            "@type" => "Product",
            "name" => $language["StructureDATA_header_dedicated_page7_rwh_1"],
            "description" => $language["StructureDATA_header_dedicated_page7_rwh_2"],
            "url" => $urlKeyDedicated6,
            "sku" => "dedicated-server-adm-epyc",
            "mpn" => "dedicated-server-adm-epyc",
            "image" => ["https://rw-hosting.com/assets/images/logos/logorw_txt.webp"],
            "brand" => [
                "@type" => "Brand",
                "name" => "RW-Hosting"
            ],
            "review" => [
                "@type" => "Review",
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => "4.8",
                    "bestRating" => "5"
                ],
                "author" => [
                    "@type" => "Organization",
                    "name" => "RW-Hosting"
                ]
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.8",
                "ratingCount" => "253"
            ],
            "offers" => [
                "@type" => "AggregateOffer",
                "lowPrice" => "399.99",
                "highPrice" => "599.99",
                "priceCurrency" => "EUR",
                "offerCount" => "6",
                "availability" => "http://schema.org/InStock",
                "url" => $urlKeyDedicated6
            ],
            "manufacturer" => [
                "@type" => "Organization",
                "name" => "RW-Hosting"
            ]
        ]
    ],

  
    // French Part 

    $FRurlKeyVPS1 => [        
        "structured_data" => [
            "@context" => "http://schema.org/",
            "@type" => "Product",
            "name" => $language["StructureDATA_header_vps_page1_rwh_1"],
            "description" => $language["StructureDATA_header_vps_page1_rwh_2"],
            "url" => $FRurlKeyVPS1,
            "sku" => "vps",
            "mpn" => "vps",
            "image" => ["https://rw-hosting.fr/assets/images/logos/logorw_txt.webp"],
            "brand" => [
                "@type" => "Brand",
                "name" => "RW-Hosting"
            ],
            "review" => [
                "@type" => "Review",
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => "4.8",
                    "bestRating" => "5"
                ],
                "author" => [
                    "@type" => "Organization",
                    "name" => "RW-Hosting"
                ]
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.8",
                "ratingCount" => "253"
            ],
            "offers" => [
                "@type" => "AggregateOffer",
                "lowPrice" => "3.59",
                "highPrice" => "59.99",
                "priceCurrency" => "EUR",
                "offerCount" => "6",
                "availability" => "http://schema.org/InStock",
                "url" => $FRurlKeyVPS1
            ],
            "manufacturer" => [
                "@type" => "Organization",
                "name" => "RW-Hosting"
            ]
        ]
    ],

    $FRurlKeyVPS2 => [        
        "structured_data" => [
            "@context" => "http://schema.org/",
            "@type" => "Product",
            "name" => $language["StructureDATA_header_vps_page2_rwh_1"],
            "description" => $language["StructureDATA_header_vps_page2_rwh_2"],
            "url" => $FRurlKeyVPS2,
            "sku" => "vps-windows",
            "mpn" => "vps-windows",
            "image" => ["https://rw-hosting.fr/assets/images/logos/logorw_txt.webp"],
            "brand" => [
                "@type" => "Brand",
                "name" => "RW-Hosting"
            ],
            "review" => [
                "@type" => "Review",
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => "4.8",
                    "bestRating" => "5"
                ],
                "author" => [
                    "@type" => "Organization",
                    "name" => "RW-Hosting"
                ]
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.8",
                "ratingCount" => "253"
            ],
            "offers" => [
                "@type" => "AggregateOffer",
                "lowPrice" => "3.59",
                "highPrice" => "59.99",
                "priceCurrency" => "EUR",
                "offerCount" => "6",
                "availability" => "http://schema.org/InStock",
                "url" => $FRurlKeyVPS2
            ],
            "manufacturer" => [
                "@type" => "Organization",
                "name" => "RW-Hosting"
            ]
        ]
    ],

    $FRurlKeyVPS3 => [        
        "structured_data" => [
            "@context" => "http://schema.org/",
            "@type" => "Product",
            "name" => $language["StructureDATA_header_vps_page5_rwh_1"],
            "description" => $language["StructureDATA_header_vps_page5_rwh_2"],
            "url" => $FRurlKeyVPS3,
            "sku" => "vps-kvm",
            "mpn" => "vps-kvm",
            "image" => ["https://rw-hosting.fr/assets/images/logos/logorw_txt.webp"],
            "brand" => [
                "@type" => "Brand",
                "name" => "RW-Hosting"
            ],
            "review" => [
                "@type" => "Review",
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => "4.8",
                    "bestRating" => "5"
                ],
                "author" => [
                    "@type" => "Organization",
                    "name" => "RW-Hosting"
                ]
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.8",
                "ratingCount" => "253"
            ],
            "offers" => [
                "@type" => "AggregateOffer",
                "lowPrice" => "3.59",
                "highPrice" => "59.99",
                "priceCurrency" => "EUR",
                "offerCount" => "6",
                "availability" => "http://schema.org/InStock",
                "url" => $FRurlKeyVPS3
            ],
            "manufacturer" => [
                "@type" => "Organization",
                "name" => "RW-Hosting"
            ]
        ]
    ],

    $FRurlKeyVPS4 => [        
        "structured_data" => [
            "@context" => "http://schema.org/",
            "@type" => "Product",
            "name" => $language["StructureDATA_header_vps_page3_rwh_1"],
            "description" => $language["StructureDATA_header_vps_page3_rwh_2"],
            "url" => $FRurlKeyVPS4,
            "sku" => "vps-game",
            "mpn" => "vps-game",
            "image" => ["https://rw-hosting.fr/assets/images/logos/logorw_txt.webp"],
            "brand" => [
                "@type" => "Brand",
                "name" => "RW-Hosting"
            ],
            "review" => [
                "@type" => "Review",
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => "4.8",
                    "bestRating" => "5"
                ],
                "author" => [
                    "@type" => "Organization",
                    "name" => "RW-Hosting"
                ]
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.8",
                "ratingCount" => "253"
            ],
            "offers" => [
                "@type" => "AggregateOffer",
                "lowPrice" => "3.59",
                "highPrice" => "59.99",
                "priceCurrency" => "EUR",
                "offerCount" => "6",
                "availability" => "http://schema.org/InStock",
                "url" => $FRurlKeyVPS4
            ],
            "manufacturer" => [
                "@type" => "Organization",
                "name" => "RW-Hosting"
            ]
        ]
    ],


    $FRurlKeyVPS5 => [        
        "structured_data" => [
            "@context" => "http://schema.org/",
            "@type" => "Product",
            "name" => $language["StructureDATA_header_vps_page8_rwh_1"],
            "description" => $language["StructureDATA_header_vps_page8_rwh_2"],
            "url" => $FRurlKeyVPS5,
            "sku" => "vps-storage",
            "mpn" => "vps-storage",
            "image" => ["https://rw-hosting.fr/assets/images/logos/logorw_txt.webp"],
            "brand" => [
                "@type" => "Brand",
                "name" => "RW-Hosting"
            ],
            "review" => [
                "@type" => "Review",
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => "4.8",
                    "bestRating" => "5"
                ],
                "author" => [
                    "@type" => "Organization",
                    "name" => "RW-Hosting"
                ]
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.8",
                "ratingCount" => "253"
            ],
            "offers" => [
                "@type" => "AggregateOffer",
                "lowPrice" => "3.59",
                "highPrice" => "59.99",
                "priceCurrency" => "EUR",
                "offerCount" => "6",
                "availability" => "http://schema.org/InStock",
                "url" => $FRurlKeyVPS5
            ],
            "manufacturer" => [
                "@type" => "Organization",
                "name" => "RW-Hosting"
            ]
        ]
    ],


    $FRurlKeyDedicated1 => [        
        "structured_data" => [
            "@context" => "http://schema.org/",
            "@type" => "Product",
            "name" => $language["StructureDATA_header_dedicated_page3_rwh_1"],
            "description" => $language["StructureDATA_header_dedicated_page3_rwh_2"],
            "url" => $FRurlKeyDedicated1,
            "sku" => "dedicated-server-intel",
            "mpn" => "dedicated-server-intel",
            "image" => ["https://rw-hosting.fr/assets/images/logos/logorw_txt.webp"],
            "brand" => [
                "@type" => "Brand",
                "name" => "RW-Hosting"
            ],
            "review" => [
                "@type" => "Review",
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => "4.8",
                    "bestRating" => "5"
                ],
                "author" => [
                    "@type" => "Organization",
                    "name" => "RW-Hosting"
                ]
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.8",
                "ratingCount" => "153"
            ],
            "offers" => [
                "@type" => "AggregateOffer",
                "lowPrice" => "114.99",
                "highPrice" => "249.99",
                "priceCurrency" => "EUR",
                "offerCount" => "6",
                "availability" => "http://schema.org/InStock",
                "url" => $FRurlKeyDedicated1
            ],
            "manufacturer" => [
                "@type" => "Organization",
                "name" => "RW-Hosting"
            ]
        ]
    ],

    $FRurlKeyDedicated2 => [        
        "structured_data" => [
            "@context" => "http://schema.org/",
            "@type" => "Product",
            "name" => $language["StructureDATA_header_dedicated_page2_rwh_1"],
            "description" => $language["StructureDATA_header_dedicated_page2_rwh_2"],
            "url" => $FRurlKeyDedicated2,
            "sku" => "dedicated-server-ryzen",
            "mpn" => "dedicated-server-ryzen",
            "image" => ["https://rw-hosting.fr/assets/images/logos/logorw_txt.webp"],
            "brand" => [
                "@type" => "Brand",
                "name" => "RW-Hosting"
            ],
            "review" => [
                "@type" => "Review",
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => "4.8",
                    "bestRating" => "5"
                ],
                "author" => [
                    "@type" => "Organization",
                    "name" => "RW-Hosting"
                ]
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.8",
                "ratingCount" => "253"
            ],
            "offers" => [
                "@type" => "AggregateOffer",
                "lowPrice" => "99.99",
                "highPrice" => "299.99",
                "priceCurrency" => "EUR",
                "offerCount" => "6",
                "availability" => "http://schema.org/InStock",
                "url" => $FRurlKeyDedicated2
            ],
            "manufacturer" => [
                "@type" => "Organization",
                "name" => "RW-Hosting"
            ]
        ]
    ],

    $FRurlKeyDedicated3 => [        
        "structured_data" => [
            "@context" => "http://schema.org/",
            "@type" => "Product",
            "name" => $language["StructureDATA_header_dedicated_page5_rwh_1"],
            "description" => $language["StructureDATA_header_dedicated_page5_rwh_2"],
            "url" => $FRurlKeyDedicated3,
            "sku" => "dedicated-server-xeon",
            "mpn" => "dedicated-server-xeon",
            "image" => ["https://rw-hosting.fr/assets/images/logos/logorw_txt.webp"],
            "brand" => [
                "@type" => "Brand",
                "name" => "RW-Hosting"
            ],
            "review" => [
                "@type" => "Review",
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => "4.8",
                    "bestRating" => "5"
                ],
                "author" => [
                    "@type" => "Organization",
                    "name" => "RW-Hosting"
                ]
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.8",
                "ratingCount" => "253"
            ],
            "offers" => [
                "@type" => "AggregateOffer",
                "lowPrice" => "74.99",
                "highPrice" => "399.99",
                "priceCurrency" => "EUR",
                "offerCount" => "6",
                "availability" => "http://schema.org/InStock",
                "url" => $FRurlKeyDedicated3
            ],
            "manufacturer" => [
                "@type" => "Organization",
                "name" => "RW-Hosting"
            ]
        ]
    ],
    $FRurlKeyDedicated4 => [        
        "structured_data" => [
            "@context" => "http://schema.org/",
            "@type" => "Product",
            "name" => $language["StructureDATA_header_dedicated_page1_rwh_1"],
            "description" => $language["StructureDATA_header_dedicated_page1_rwh_2"],
            "url" => $FRurlKeyDedicated4,
            "sku" => "dedicated-server-adm-epyc",
            "mpn" => "dedicated-server-adm-epyc",
            "image" => ["https://rw-hosting.fr/assets/images/logos/logorw_txt.webp"],
            "brand" => [
                "@type" => "Brand",
                "name" => "RW-Hosting"
            ],
            "review" => [
                "@type" => "Review",
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => "4.8",
                    "bestRating" => "5"
                ],
                "author" => [
                    "@type" => "Organization",
                    "name" => "RW-Hosting"
                ]
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.8",
                "ratingCount" => "253"
            ],
            "offers" => [
                "@type" => "AggregateOffer",
                "lowPrice" => "74.99",
                "highPrice" => "399.99",
                "priceCurrency" => "EUR",
                "offerCount" => "6",
                "availability" => "http://schema.org/InStock",
                "url" => $FRurlKeyDedicated4
            ],
            "manufacturer" => [
                "@type" => "Organization",
                "name" => "RW-Hosting"
            ]
        ]
    ],

    $FRurlKeyDedicated5 => [        
        "structured_data" => [
            "@context" => "http://schema.org/",
            "@type" => "Product",
            "name" => $language["StructureDATA_header_dedicated_page1_rwh_1"],
            "description" => $language["StructureDATA_header_dedicated_page1_rwh_2"],
            "url" => $FRurlKeyDedicated5,
            "sku" => "dedicated-server-adm-epyc",
            "mpn" => "dedicated-server-adm-epyc",
            "image" => ["https://rw-hosting.fr/assets/images/logos/logorw_txt.webp"],
            "brand" => [
                "@type" => "Brand",
                "name" => "RW-Hosting"
            ],
            "review" => [
                "@type" => "Review",
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => "4.8",
                    "bestRating" => "5"
                ],
                "author" => [
                    "@type" => "Organization",
                    "name" => "RW-Hosting"
                ]
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.8",
                "ratingCount" => "253"
            ],
            "offers" => [
                "@type" => "AggregateOffer",
                "lowPrice" => "399.99",
                "highPrice" => "599.99",
                "priceCurrency" => "EUR",
                "offerCount" => "6",
                "availability" => "http://schema.org/InStock",
                "url" => $FRurlKeyDedicated5
            ],
            "manufacturer" => [
                "@type" => "Organization",
                "name" => "RW-Hosting"
            ]
        ]
    ],

    $FRurlKeyDedicated6 => [        
        "structured_data" => [
            "@context" => "http://schema.org/",
            "@type" => "Product",
            "name" => $language["StructureDATA_header_dedicated_page7_rwh_1"],
            "description" => $language["StructureDATA_header_dedicated_page7_rwh_2"],
            "url" => $FRurlKeyDedicated6,
            "sku" => "dedicated-server-adm-epyc",
            "mpn" => "dedicated-server-adm-epyc",
            "image" => ["https://rw-hosting.fr/assets/images/logos/logorw_txt.webp"],
            "brand" => [
                "@type" => "Brand",
                "name" => "RW-Hosting"
            ],
            "review" => [
                "@type" => "Review",
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => "4.8",
                    "bestRating" => "5"
                ],
                "author" => [
                    "@type" => "Organization",
                    "name" => "RW-Hosting"
                ]
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => "4.8",
                "ratingCount" => "253"
            ],
            "offers" => [
                "@type" => "AggregateOffer",
                "lowPrice" => "399.99",
                "highPrice" => "599.99",
                "priceCurrency" => "EUR",
                "offerCount" => "6",
                "availability" => "http://schema.org/InStock",
                "url" => $FRurlKeyDedicated6
            ],
            "manufacturer" => [
                "@type" => "Organization",
                "name" => "RW-Hosting"
            ]
        ]
    ],
];
?>
