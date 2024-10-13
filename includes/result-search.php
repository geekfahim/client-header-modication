<?php
// Set the content type to application/json so that the client treats this as JSON.
header('Content-Type: application/json');

require_once "fr.php";

$data = [
    [
        "id" => "1",
        "photo" => "/assets/images/header/linux_header.svg",
        "titre" => "VPS KVM LINUX",
        "desc" => $language["headercloudslidervpsxeon1desc"],
        "href" => "/vps/vps?lang=" . $language['htmlLang'],
        "keywords" =>  ["VPS", "KVM", "Linux VPS", "Virtual Private Server", "Linux Hosting", "High Performance VPS", "Secure VPS", "Linux Server", "KVM Technology"]
    ],
    [
        "id" => "2",
        "photo" => "/assets/images/header/windows_header.svg",
        "titre" => $language["headercloudslidervpswindows"],
        "desc" => $language["headercloudslidervpswindowsdesc"],
        "href" => "/vps/vps-windows?lang=" . $language['htmlLang'],
        "keywords" => ["Vps Windows", "Windows", "Vps", "anti ddos"]
    ],
    [
        "id" => "3",
        "photo" => "/assets/images/header/vps_stockage_header.svg",
        "titre" => $language["headercloudslidervpsstorage"],
        "desc" => $language["headercloudslidervpsstoragedesc"],
        "href" => "/vps/vps-storage?lang=" . $language['htmlLang'],
        "keywords" => ["Vps Stockage", "Vps", "Vps Stockage", "Storage", "Storage VPS"]
    ],
    [
        "id" => "4",
        "photo" => "/assets/images/header/rvd_vps_header.svg",
        "titre" => $language["up13"],
        "desc" => $language["up14"],
        "href" => "/budget-reseller-vps?lang=" . $language['htmlLang'],
        "keywords" => ["Revendeur vps", "Vps Reseller", "Vps", "Revendeur", "Reseller"]
    ],
    [
        "id" => "5",
        "photo" => "/assets/images/header/rvd_vps_header.svg",
        "titre" => $language["up15"],
        "desc" => $language["up16"],
        "href" => "/evolue-reseller-vps?lang=" . $language['htmlLang'],
        "keywords" => ["Revendeur VPS", "Vps Reseller", "Vps", "Revendeur", "Reseller"]
    ],
    [
        "id" => "6",
        "photo" => "/assets/images/header/intel_core_header.svg",
        "titre" => $language["fh03"],
        "desc" => $language["fh04"],
        "href" => "/dedicated/dedicated-server-intel?lang=" . $language['htmlLang'],
        "keywords" => ["Intel Dedicated Server", "High-Performance Server", "Dedicated Intel Hosting", "Server Hosting", "Dedicated Hardware", "Enterprise Server", "Intel Powered Server", "Customizable Server", "Reliable Dedicated Server"]
    ],
    [
        "id" => "7",
        "photo" => "/assets/images/header/intel_core_header.svg",
        "titre" => $language["headerdedicatedslideramdryzentittle"],
        "desc" => $language["headerdedicatedslideramdryzendesc"],
        "href" => "/dedicated/dedicated-server-ryzen?lang=" . $language['htmlLang'],
        "keywords" => ["Ryzen Dedicated Server", "High-Performance Server", "Dedicated Ryzen Hosting", "Server Hosting", "Dedicated Hardware", "Enterprise Server", "Ryzen Powered Server", "Customizable Server", "Reliable Dedicated Server"]
    ],
    [
        "id" => "8",
        "photo" => "/assets/images/header/dedicated_budget_header.svg",
        "titre" => $language["up21"],
        "desc" => $language["up22"],
        "href" => "/dedicated/dedicated-server-budget?lang=" . $language['htmlLang'],
        "keywords" => ["Budget Dedicated Server", "High-Performance Server", "Dedicated Budget Hosting", "Server Hosting", "Dedicated Hardware", "Enterprise Server", "Budget Powered Server", "Customizable Server", "Reliable Dedicated Server"]
    ],
    [
        "id" => "9",
        "photo" => "/assets/images/header/intel_xeon_header.svg",
        "titre" => $language["headerdedicatedsliderxeonv4tittle"],
        "desc" => $language["headerdedicatedsliderxeonv42desc"],
        "href" => "/dedicated/dedicated-server-xeon?lang=" . $language['htmlLang'],
        "keywords" => ["Xeon Dedicated Server", "High-Performance Server", "Dedicated Xeon Hosting", "Server Hosting", "Dedicated Hardware", "Enterprise Server", "Xeon Powered Server", "Customizable Server", "Reliable Dedicated Server"]
    ],
    [
        "id" => "10",
        "photo" => "/assets/images/header/amd_epyc_header.svg",
        "titre" => $language["headerwebsliderdedicatedserveramdepyc"],
        "desc" => $language["headerwebsliderdedicatedserveramdepycdesc"],
        "href" => "/dedicated/dedicated-server-epyc?lang=" . $language['htmlLang'],
        "keywords" => ["epyc Dedicated Server", "High-Performance Server", "Dedicated epyc Hosting", "Server Hosting", "Dedicated Hardware", "Enterprise Server", "epyc Powered Server", "Customizable Server", "Reliable Dedicated Server"]
    ],
    [
        "id" => "11",
        "photo" => "/assets/images/header/dedicated_flatrate_header.svg",
        "titre" => $language["up24"],
        "desc" => $language["up25"],
        "href" => "/dedicated/dedicated-server-flatrate?lang=" . $language['htmlLang'],
        "keywords" => ["flatrate Dedicated Server", "High-Performance Server", "Dedicated flatrate Hosting", "Server Hosting", "Dedicated Hardware", "Enterprise Server", "flatrate Powered Server", "Customizable Server", "Reliable Dedicated Server"]
    ],
    [
        "id" => "12",
        "photo" => "/assets/images/header/dedicated_flatrate_header.svg",
        "titre" => $language["up24"],
        "desc" => $language["up25"],
        "href" => "/dedicated/dedicated-server-flatrate?lang=" . $language['htmlLang'],
        "keywords" => ["flatrate Dedicated Server", "High-Performance Server", "Dedicated flatrate Hosting", "Server Hosting", "Dedicated Hardware", "Enterprise Server", "flatrate Powered Server", "Customizable Server", "Reliable Dedicated Server"]
    ],
    [
        "id" => "13",
        "photo" => "/assets/images/header/web_header.svg",
        "titre" => $language["headerwebsliderpleskweboofers"],
        "desc" => $language["headerwebsliderpleskweboofersdesc"],
        "href" => "/web/web?lang=" . $language['htmlLang'],
        "keywords" => ["flatrate Dedicated Server", "High-Performance Server", "Dedicated flatrate Hosting", "Server Hosting", "Dedicated Hardware", "Enterprise Server", "flatrate Powered Server", "Customizable Server", "Reliable Dedicated Server"]
    ],
    [
        "id" => "14",
        "photo" => "/assets/images/header/web_header.svg",
        "titre" => $language["headerwebsliderpleskweboofers"],
        "desc" => $language["headerwebsliderpleskweboofersdesc"],
        "href" => "/web/web?lang=" . $language['htmlLang'],
        "keywords" => ["flatrate Dedicated Server", "High-Performance Server", "Dedicated flatrate Hosting", "Server Hosting", "Dedicated Hardware", "Enterprise Server", "flatrate Powered Server", "Customizable Server", "Reliable Dedicated Server"]
    ],
];

// Encode the data array to JSON and print it.
echo json_encode($data);
