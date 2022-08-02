<?php

function is_bot($sistema){
 // bots de buscadores
    $bots = array(
         'Googlebot'
        , 'Baiduspider'
        , 'ia_archiver'
        , 'R6_FeedFetcher'
        , 'NetcraftSurveyAgent'
        , 'Sogou web spider'
        , 'bingbot'
        , 'Yahoo! Slurp'
        , 'facebookexternalhit'
        , 'PrintfulBot'
        , 'msnbot'
        , 'Twitterbot'
        , 'UnwindFetchor'
        , 'urlresolver'
        , 'Butterfly'
        , 'TweetmemeBot'
        , 'PaperLiBot'
        , 'MJ12bot'
        , 'AhrefsBot'
        , 'Exabot'
        , 'Ezooms'
        , 'YandexBot'
        , 'SearchmetricsBot'
        , 'picsearch'
        , 'TweetedTimes Bot'
        , 'QuerySeekerSpider'
        , 'ShowyouBot'
        , 'woriobot'
        , 'merlinkbot'
        , 'BazQuxBot'
        , 'Kraken'
        , 'SISTRIX Crawler'
        , 'R6_CommentReader'
        , 'magpie-crawler'
        , 'GrapeshotCrawler'
        , 'PercolateCrawler'
        , 'MaxPointCrawler'
        , 'R6_FeedFetcher'
        , 'NetSeer crawler'
        , 'grokkit-crawler'
        , 'SMXCrawler'
        , 'PulseCrawler'
        , 'Y!J-BRW'
        , '80legs'
        , 'Mediapartners-Google'
        , 'Spinn3r'
        , 'InAGist'
        , 'Python-urllib'
        , 'NING'
        , 'TencentTraveler'
        , 'Feedfetcher-Google'
        , 'mon.itor.us'
        , 'spbot'
        , 'Feedly'
        , 'bitlybot'
        , 'ADmantX'
        , 'Niki-Bot'
        , 'Pinterest'
        , 'python-requests'
        , 'DotBot'
        , 'HTTP_Request2'
        , 'linkdexbot'
        , 'A6-Indexer'
        , 'Baiduspider'
        , 'TwitterFeed'
        , 'Microsoft Office'
        , 'Pingdom'
        , 'BTWebClient'
        , 'KatBot'
        , 'SiteCheck'
        , 'proximic'
        , 'Sleuth'
        , 'Abonti'
        , '(BOT for JCE)'
        , 'Baidu'
        , 'Tiny Tiny RSS'
        , 'newsblur'
        , 'updown_tester'
        , 'linkdex'
        , 'baidu'
        , 'searchmetrics'
        , 'genieo'
        , 'majestic12'
        , 'spinn3r'
        , 'profound'
        , 'domainappender'
        , 'VegeBot'
        , 'terrykyleseoagency.com'
        , 'CommonCrawler Node'
        , 'AdlesseBot'
        , 'metauri.com'
        , 'libwww-perl'
        , 'rogerbot-crawler'
        , 'MegaIndex.ru'
        , 'ltx71'
        , 'Qwantify'
        , 'Traackr.com'
        , 'Re-Animator Bot'
        , 'Pcore-HTTP'
        , 'BoardReader'
        , 'omgili'
        , 'okhttp'
        , 'CCBot'
        , 'Java/1.8'
        , 'semrush.com'
        , 'feedbot'
        , 'CommonCrawler'
        , 'AdlesseBot'
        , 'MetaURI'
        , 'ibwww-perl'
        , 'rogerbot'
        , 'MegaIndex'
        , 'BLEXBot'
        , 'FlipboardProxy'
        , 'techinfo@ubermetrics-technologies.com'
        , 'trendictionbot'
        , 'Mediatoolkitbot'
        , 'trendiction'
        , 'ubermetrics'
        , 'ScooperBot'
        , 'TrendsmapResolver'
        , 'Nuzzel'
        , 'Go-http-client'
        , 'Applebot'
        , 'LivelapBot'
        , 'GroupHigh'
        , 'SemrushBot'
        , 'ltx71'
        , 'commoncrawl'
        , 'istellabot'
        , 'DomainCrawler'
        , 'cs.daum.net'
        , 'StormCrawler'
        , 'GarlikCrawler'
        , 'The Knowledge AI'
        , 'getstream.io/winds'
        , 'YisouSpider'
        , 'archive.org_bot'
        , 'semantic-visions.com'
        , 'FemtosearchBot'
        , '360Spider'
        , 'linkfluence.com'
        , 'glutenfreepleasure.com'
        , 'Gluten Free Crawler'
        , 'YaK/1.0'
        , 'Cliqzbot'
        , 'app.hypefactors.com'
        , 'axios'
        , 'semantic-visions.com'
        , 'webdatastats.com'
        , 'schmorp.de'
        , 'SEOkicks'
        , 'DuckDuckBot'
        , 'Barkrowler'
        , 'ZoominfoBot'
        , 'Linguee Bot'
        , 'Mail.RU_Bot'
        , 'OnalyticaBot'
        , 'Linguee Bot'
        , 'admantx-adform'
        , 'Buck/2.2'
        , 'Barkrowler'
        , 'Zombiebot'
        , 'Nutch'
        , 'SemanticScholarBot'
        , 'Jetslide'
        , 'scalaj-http'
        , 'XoviBot'
        , 'sysomos.com'
        , 'PocketParser'
        , 'newspaper'
        , 'serpstatbot'
        , 'MetaJobBot'
        , 'SeznamBot/3.2'
        , 'VelenPublicWebCrawler/1.0'
        , 'WordPress.com mShots'
        , 'adscanner'
        , 'BacklinkCrawler'
        , 'netEstate NE Crawler'
        , 'Astute SRM'
        , 'GigablastOpenSource/1.0'
        , 'DomainStatsBot'
        , 'Winds: Open Source RSS & Podcast'
        , 'dlvr.it'
        , 'BehloolBot'
        , '7Siters'
        , 'AwarioSmartBot'
        , 'Apache-HttpClient/5'
        , 'Seekport Crawler'
        , 'AHC/2.1'
        , 'eCairn-Grabber'
        , 'mediawords bot'
        , 'PHP-Curl-Class'
        , 'Scrapy'
        , 'curl/7'
        , 'Blackboard'
        , 'NetNewsWire'
        , 'node-fetch'
        , 'admantx'
        , 'metadataparser'
        , 'Domains Project'
        , 'SerendeputyBot'
        , 'Moreover'
        , 'DuckDuckGo' 
        , 'monitoring-plugins'
        , 'Selfoss'
        , 'Adsbot'
        , 'acebookexternalhit'
        , 'SpiderLing'
        , 'Cocolyzebot'
        , 'AhrefsBot'
        , 'TTD-Content'
        , 'superfeedr'
        , 'Twingly'
        , 'Google-Apps-Scrip'
        , 'LinkpadBot'
        , 'CensysInspect'
        , 'Reeder'
        , 'tweetedtimes'
        , 'Amazonbot'
        , 'MauiBot'
        , 'Symfony BrowserKit'
        , 'DataForSeoBot'
        , 'GoogleProducer'
        , 'TinEye-bot-live'
        , 'sindresorhus/got'
        , 'CriteoBot'
        , 'Down/5'
        , 'Yahoo Ad monitoring'
        , 'MetaInspector'
        , 'PetalBot'
        , 'MetadataScraper'
        , 'Cloudflare SpeedTest'
        , 'CriteoBot'
        , 'aiohttp'
        , 'AppEngine-Google'
        , 'heritrix'
        , 'sqlmap'
        , 'Buck'
        , 'MJ12bot'
        , 'wp_is_mobile'
        , 'SerendeputyBot'
        , '01h4x.com'
        , '404checker'
        , '404enemy'
        , 'AIBOT'
        , 'ALittle Client'
        , 'ASPSeek'
        , 'Aboundex'
        , 'Acunetix'
        , 'AfD-Verbotsverfahren'
        , 'AiHitBot'
        , 'Aipbot'
        , 'Alexibot'
        , 'AllSubmitter'
        , 'Alligator'
        , 'AlphaBot'
        , 'Anarchie'
        , 'Anarchy'
        , 'Anarchy99'
        , 'Ankit'
        , 'Anthill'
        , 'Apexoo'
        , 'Aspiegel'
        , 'Asterias'
        , 'Atomseobot'
        , 'Attach'
        , 'AwarioRssBot'
        , 'BBBike'
        , 'BDCbot'
        , 'BDFetch'
        , 'BackDoorBot'
        , 'BackStreet'
        , 'BackWeb'
        , 'Backlink-Ceck'
        , 'BacklinkCrawler'
        , 'Badass'
        , 'Bandit'
        , 'Barkrowler'
        , 'BatchFTP'
        , 'Battleztar Bazinga'
        , 'BetaBot'
        , 'Bigfoot'
        , 'Bitacle'
        , 'BlackWidow'
        , 'Black Hole'
        , 'Blackboard'
        , 'Blow'
        , 'BlowFish'
        , 'Boardreader'
        , 'Bolt'
        , 'BotALot'
        , 'Brandprotect'
        , 'Brandwatch'
        , 'Buck'
        , 'Buddy'
        , 'BuiltBotTough'
        , 'BuiltWith'
        , 'Bullseye'
        , 'BunnySlippers'
        , 'BuzzSumo'
        , 'CATExplorador'
        , 'CCBot'
        , 'CODE87'
        , 'CSHttp'
        , 'Calculon'
        , 'CazoodleBot'
        , 'Cegbfeieh'
        , 'CensysInspect'
        , 'CheTeam'
        , 'CheeseBot'
        , 'CherryPicker'
        , 'ChinaClaw'
        , 'Chlooe'
        , 'Citoid'
        , 'Claritybot'
        , 'Cliqzbot'
        , 'Cloud mapping'
        , 'Cocolyzebot'
        , 'Cogentbot'
        , 'Collector'
        , 'Copier'
        , 'CopyRightCheck'
        , 'Copyscape'
        , 'Cosmos'
        , 'Craftbot'
        , 'Crawling at Home Project'
        , 'CrazyWebCrawler'
        , 'Crescent'
        , 'CrunchBot'
        , 'Curious'
        , 'Custo'
        , 'CyotekWebCopy'
        , 'DBLBot'
        , 'DIIbot'
        , 'DSearch'
        , 'DTS Agent'
        , 'DataCha0s'
        , 'DatabaseDriverMysqli'
        , 'Demon'
        , 'Deusu'
        , 'Devil'
        , 'Digincore'
        , 'DigitalPebble'
        , 'Dirbuster'
        , 'Disco'
        , 'Discobot'
        , 'Discoverybot'
        , 'Dispatch'
        , 'DittoSpyder'
        , 'DnBCrawler-Analytics'
        , 'DnyzBot'
        , 'DomCopBot'
        , 'DomainAppender'
        , 'DomainCrawler'
        , 'DomainSigmaCrawler'
        , 'DomainStatsBot'
        , 'Domains Project'
        , 'Dotbot'
        , 'Download Wonder'
        , 'Dragonfly'
        , 'Drip'
        , 'ECCP/1.0'
        , 'EMail Siphon'
        , 'EMail Wolf'
        , 'EasyDL'
        , 'Ebingbong'
        , 'Ecxi'
        , 'EirGrabber'
        , 'EroCrawler'
        , 'Evil'
        , 'Exabot'
        , 'Express WebPictures'
        , 'ExtLinksBot'
        , 'Extractor'
        , 'ExtractorPro'
        , 'Extreme Picture Finder'
        , 'EyeNetIE'
        , 'Ezooms'
        , 'FDM'
        , 'FHscan'
        , 'FemtosearchBot'
        , 'Fimap'
        , 'Firefox/7.0'
        , 'FlashGet'
        , 'Flunky'
        , 'Foobot'
        , 'Freeuploader'
        , 'FrontPage'
        , 'Fuzz'
        , 'FyberSpider'
        , 'Fyrebot'
        , 'G-i-g-a-b-o-t'
        , 'GT::WWW'
        , 'GalaxyBot'
        , 'Genieo'
        , 'GermCrawler'
        , 'GetRight'
        , 'GetWeb'
        , 'Getintent'
        , 'Gigabot'
        , 'Go!Zilla'
        , 'Go-Ahead-Got-It'
        , 'GoZilla'
        , 'Gotit'
        , 'GrabNet'
        , 'Grabber'
        , 'Grafula'
        , 'GrapeFX'
        , 'GrapeshotCrawler'
        , 'GridBot'
        , 'HEADMasterSEO'
        , 'HMView'
        , 'HTMLparser'
        , 'HTTP::Lite'
        , 'HTTrack'
        , 'Haansoft'
        , 'HaosouSpider'
        , 'Harvest'
        , 'Havij'
        , 'Heritrix'
        , 'Hloader'
        , 'HonoluluBot'
        , 'Humanlinks'
        , 'HybridBot'
        , 'IDBTE4M'
        , 'IDBot'
        , 'IRLbot'
        , 'Iblog'
        , 'Id-search'
        , 'IlseBot'
        , 'Image Fetch'
        , 'Image Sucker'
        , 'IndeedBot'
        , 'Indy Library'
        , 'InfoNaviRobot'
        , 'InfoTekies'
        , 'Intelliseek'
        , 'InterGET'
        , 'InternetSeer'
        , 'Internet Ninja'
        , 'Iria'
        , 'Iskanie'
        , 'IstellaBot'
        , 'JOC Web Spider'
        , 'JamesBOT'
        , 'Jbrofuzz'
        , 'JennyBot'
        , 'JetCar'
        , 'Jetty'
        , 'JikeSpider'
        , 'Joomla'
        , 'Jorgee'
        , 'JustView'
        , 'Jyxobot'
        , 'Kenjin Spider'
        , 'Keybot Translation-Search-Machine'
        , 'Keyword Density'
        , 'Kinza'
        , 'Kozmosbot'
        , 'LNSpiderguy'
        , 'LWP::Simple'
        , 'Lanshanbot'
        , 'Larbin'
        , 'Leap'
        , 'LeechFTP'
        , 'LeechGet'
        , 'LexiBot'
        , 'Lftp'
        , 'LibWeb'
        , 'Libwhisker'
        , 'LieBaoFast'
        , 'Lightspeedsystems'
        , 'Likse'
        , 'LinkScan'
        , 'LinkWalker'
        , 'Linkbot'
        , 'LinkextractorPro'
        , 'LinkpadBot'
        , 'LinksManager'
        , 'LinqiaMetadataDownloaderBot'
        , 'LinqiaRSSBot'
        , 'LinqiaScrapeBot'
        , 'Lipperhey'
        , 'Lipperhey Spider'
        , 'Litemage_walker'
        , 'Lmspider'
        , 'Ltx71'
        , 'MFC_Tear_Sample'
        , 'MIDown tool'
        , 'MIIxpc'
        , 'MJ12bot'
        , 'MQQBrowser'
        , 'MSFrontPage'
        , 'MSIECrawler'
        , 'MTRobot'
        , 'Mag-Net'
        , 'Magnet'
        , 'Mail.RU_Bot'
        , 'Majestic-SEO'
        , 'Majestic12'
        , 'Majestic SEO'
        , 'MarkMonitor'
        , 'MarkWatch'
        , 'Mass Downloader'
        , 'Masscan'
        , 'Mata Hari'
        , 'MauiBot'
        , 'Mb2345Browser'
        , 'MeanPath Bot'
        , 'Meanpathbot'
        , 'Mediatoolkitbot'
        , 'MegaIndex.ru'
        , 'Metauri'
        , 'MicroMessenger'
        , 'Microsoft Data Access'
        , 'Microsoft URL Control'
        , 'Minefield'
        , 'Mister PiX'
        , 'Moblie Safari'
        , 'Mojeek'
        , 'Mojolicious'
        , 'MolokaiBot'
        , 'Morfeus Fucking Scanner'
        , 'Mozlila'
        , 'Mr.4x3'
        , 'Msrabot'
        , 'Musobot'
        , 'NICErsPRO'
        , 'NPbot'
        , 'Name Intelligence'
        , 'Nameprotect'
        , 'Navroad'
        , 'NearSite'
        , 'Needle'
        , 'Nessus'
        , 'NetAnts'
        , 'NetLyzer'
        , 'NetMechanic'
        , 'NetSpider'
        , 'NetZIP'
        , 'Net Vampire'
        , 'Netcraft'
        , 'Nettrack'
        , 'Netvibes'
        , 'NextGenSearchBot'
        , 'Nibbler'
        , 'Niki-bot'
        , 'Nikto'
        , 'NimbleCrawler'
        , 'Nimbostratus'
        , 'Ninja'
        , 'Nmap'
        , 'Not'
        , 'Nuclei'
        , 'Nutch'
        , 'Octopus'
        , 'Offline Explorer'
        , 'Offline Navigator'
        , 'OnCrawl'
        , 'OpenLinkProfiler'
        , 'OpenVAS'
        , 'Openfind'
        , 'Openvas'
        , 'OrangeBot'
        , 'OrangeSpider'
        , 'OutclicksBot'
        , 'OutfoxBot'
        , 'PECL::HTTP'
        , 'PHPCrawl'
        , 'POE-Component-Client-HTTP'
        , 'PageAnalyzer'
        , 'PageGrabber'
        , 'PageScorer'
        , 'PageThing.com'
        , 'Page Analyzer'
        , 'Pandalytics'
        , 'Panscient'
        , 'Papa Foto'
        , 'Pavuk'
        , 'PeoplePal'
        , 'Petalbot'
        , 'Pi-Monster'
        , 'Picscout'
        , 'Picsearch'
        , 'PictureFinder'
        , 'Piepmatz'
        , 'Pimonster'
        , 'Pixray'
        , 'PleaseCrawl'
        , 'Pockey'
        , 'ProPowerBot'
        , 'ProWebWalker'
        , 'Probethenet'
        , 'Psbot'
        , 'Pu_iN'
        , 'Pump'
        , 'PxBroker'
        , 'PyCurl'
        , 'QueryN Metasearch'
        , 'Quick-Crawler'
        , 'RSSingBot'
        , 'RankActive'
        , 'RankActiveLinkBot'
        , 'RankFlex'
        , 'RankingBot'
        , 'RankingBot2'
        , 'Rankivabot'
        , 'RankurBot'
        , 'Re-re'
        , 'ReGet'
        , 'RealDownload'
        , 'Reaper'
        , 'RebelMouse'
        , 'Recorder'
        , 'RedesScrapy'
        , 'RepoMonkey'
        , 'Ripper'
        , 'RocketCrawler'
        , 'Rogerbot'
        , 'SBIder'
        , 'SEOkicks'
        , 'SEOkicks-Robot'
        , 'SEOlyticsCrawler'
        , 'SEOprofiler'
        , 'SEOstats'
        , 'SISTRIX'
        , 'SMTBot'
        , 'SalesIntelligent'
        , 'ScanAlert'
        , 'Scanbot'
        , 'ScoutJet'
        , 'Scrapy'
        , 'Screaming'
        , 'ScreenerBot'
        , 'ScrepyBot'
        , 'Searchestate'
        , 'SearchmetricsBot'
        , 'Seekport'
        , 'SemanticJuice'
        , 'Semrush'
        , 'SemrushBot'
        , 'SentiBot'
        , 'SeoSiteCheckup'
        , 'SeobilityBot'
        , 'Seomoz'
        , 'Shodan'
        , 'Siphon'
        , 'SiteCheckerBotCrawler'
        , 'SiteExplorer'
        , 'SiteLockSpider'
        , 'SiteSnagger'
        , 'SiteSucker'
        , 'Site Sucker'
        , 'Sitebeam'
        , 'Siteimprove'
        , 'Sitevigil'
        , 'SlySearch'
        , 'SmartDownload'
        , 'Snake'
        , 'Snapbot'
        , 'Snoopy'
        , 'SocialRankIOBot'
        , 'Sociscraper'
        , 'Sogou web spider'
        , 'Sosospider'
        , 'Sottopop'
        , 'SpaceBison'
        , 'Spammen'
        , 'SpankBot'
        , 'Spanner'
        , 'Spbot'
        , 'Spinn3r'
        , 'SputnikBot'
        , 'Sqlmap'
        , 'Sqlworm'
        , 'Sqworm'
        , 'Steeler'
        , 'Stripper'
        , 'Sucker'
        , 'Sucuri'
        , 'SuperBot'
        , 'SuperHTTP'
        , 'Surfbot'
        , 'SurveyBot'
        , 'Suzuran'
        , 'Swiftbot'
        , 'Szukacz'
        , 'T0PHackTeam'
        , 'T8Abot'
        , 'Teleport'
        , 'TeleportPro'
        , 'Telesoft'
        , 'Telesphoreo'
        , 'Telesphorep'
        , 'TheNomad'
        , 'The Intraformant'
        , 'Thumbor'
        , 'TightTwatBot'
        , 'Titan'
        , 'Toata'
        , 'Toweyabot'
        , 'Tracemyfile'
        , 'Trendiction'
        , 'Trendictionbot'
        , 'True_Robot'
        , 'Turingos'
        , 'Turnitin'
        , 'TurnitinBot'
        , 'TwengaBot'
        , 'Twice'
        , 'Typhoeus'
        , 'URLy.Warning'
        , 'URLy Warning'
        , 'UnisterBot'
        , 'Upflow'
        , 'V-BOT'
        , 'VB Project'
        , 'VCI'
        , 'Vacuum'
        , 'Vagabondo'
        , 'VelenPublicWebCrawler'
        , 'VeriCiteCrawler'
        , 'VidibleScraper'
        , 'Virusdie'
        , 'VoidEYE'
        , 'Voil'
        , 'Voltron'
        , 'WASALive-Bot'
        , 'WBSearchBot'
        , 'WEBDAV'
        , 'WISENutbot'
        , 'WPScan'
        , 'WWW-Collector-E'
        , 'WWW-Mechanize'
        , 'WWW::Mechanize'
        , 'WWWOFFLE'
        , 'Wallpapers'
        , 'Wallpapers/3.0'
        , 'WallpapersHD'
        , 'WeSEE'
        , 'WebAuto'
        , 'WebBandit'
        , 'WebCollage'
        , 'WebCopier'
        , 'WebEnhancer'
        , 'WebFetch'
        , 'WebFuck'
        , 'WebGo IS'
        , 'WebImageCollector'
        , 'WebLeacher'
        , 'WebPix'
        , 'WebReaper'
        , 'WebSauger'
        , 'WebStripper'
        , 'WebSucker'
        , 'WebWhacker'
        , 'WebZIP'
        , 'Web Auto'
        , 'Web Collage'
        , 'Web Enhancer'
        , 'Web Fetch'
        , 'Web Fuck'
        , 'Web Pix'
        , 'Web Sauger'
        , 'Web Sucker'
        , 'Webalta'
        , 'WebmasterWorldForumBot'
        , 'Webshag'
        , 'WebsiteExtractor'
        , 'WebsiteQuester'
        , 'Website Quester'
        , 'Webster'
        , 'Whack'
        , 'Whacker'
        , 'Whatweb'
        , 'Who.is Bot'
        , 'Widow'
        , 'WinHTTrack'
        , 'WiseGuys Robot'
        , 'Wonderbot'
        , 'Woobot'
        , 'Wotbox'
        , 'Wprecon'
        , 'Xaldon WebSpider'
        , 'Xaldon_WebSpider'
        , 'Xenu'
        , 'YoudaoBot'
        , 'Zade'
        , 'Zauba'
        , 'Zermelo'
        , 'Zeus'
        , 'Zitebot'
        , 'ZmEu'
        , 'ZoomBot'
        , 'ZoominfoBot'
        , 'ZumBot'
        , 'ZyBorg'
        , 'adscanner'
        , 'archive.org_bot'
        , 'arquivo-web-crawler'
        , 'arquivo.pt'
        , 'autoemailspider'
        , 'backlink-check'
        , 'cah.io.community'
        , 'check1.exe'
        , 'clark-crawler'
        , 'coccocbot'
        , 'cognitiveseo'
        , 'com.plumanalytics'
        , 'crawl.sogou.com'
        , 'crawler.feedback'
        , 'crawler4j'
        , 'dataforseo.com'
        , 'demandbase-bot'
        , 'domainsproject.org'
        , 'eCatch'
        , 'evc-batch'
        , 'facebookscraper'
        , 'gopher'
        , 'heritrix'
        , 'instabid'
        , 'internetVista monitor'
        , 'ips-agent'
        , 'isitwp.com'
        , 'iubenda-radar'
        , 'linkdexbot'
        , 'lwp-request'
        , 'lwp-trivial'
        , 'magpie-crawler'
        , 'meanpathbot'
        , 'mediawords'
        , 'muhstik-scan'
        , 'netEstate NE Crawler'
        , 'oBot'
        , 'page scorer'
        , 'pcBrowser'
        , 'plumanalytics'
        , 'polaris version'
        , 'probe-image-size'
        , 'ripz'
        , 's1z.ru'
        , 'satoristudio.net'
        , 'scalaj-http'
        , 'scan.lol'
        , 'seobility'
        , 'seocompany.store'
        , 'seoscanners'
        , 'seostar'
        , 'serpstatbot'
        , 'sexsearcher'
        , 'sitechecker.pro'
        , 'siteripz'
        , 'sogouspider'
        , 'sp_auditbot'
        , 'spyfu'
        , 'sysscan'
        , 'tAkeOut'
        , 'trendiction.com'
        , 'trendiction.de'
        , 'ubermetrics-technologies.com'
        , 'voyagerx.com'
        , 'webgains-bot'
        , 'webmeup-crawler'
        , 'webpros.com'
        , 'webprosbot'
        , 'x09Mozilla'
        , 'x22Mozilla'
        , 'xpymep1.exe'
        , 'zauba.io'
        , 'zgrab'
        , 'petalsearch'        
        , 'protopage'
        , 'Miniflux'
        , 'Feeder'
       
        );

 // si lo encuentra devuelve true, si no, false
    foreach($bots as $b)
        {
            if( stripos( $sistema, $b ) !== false ) return true;
        }
    return false;
}

?>
