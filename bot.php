<?php
$botToken     = "TOKEN_BOT_API";
$githubToken  = "TOKEN_GITHUB_API";
$apiBase      = "https://api.telegram.org/bot" . $botToken;
$cacheDir     = __DIR__ . '/cache/';
$usersFile    = __DIR__ . '/users.json';
$sourceUrl    = "https://github.com/BenyVK/GitStats-Bot-Telegram";

if (!is_dir($cacheDir)) mkdir($cacheDir, 0755, true);
if (!file_exists($usersFile)) file_put_contents($usersFile, '{}');

$LANG = [
    'fa' => [
        'welcome'         => "🚀 <b>سلام {name}! به GitStats Pro خوش اومدی!</b>\n\nلطفاً <b>یوزرنیم گیت‌هاب</b> خودت رو بفرست.\n(مثال: torvalds)\n\nبعد از این، هر وقت /start بزنی مستقیم پروفایلت رو می‌بینی! 😎",
        'ask_username'    => "🔎 لطفاً <b>یوزرنیم گیت‌هاب</b> رو ارسال کن:\n(مثال: torvalds)",
        'invalid_user'    => "❌ یوزرنیم نامعتبر! فقط از حروف انگلیسی و اعداد استفاده کن.",
        'not_found'       => "❌ کاربری با نام <b>{username}</b> یافت نشد!\nیوزرنیم رو بررسی کن.",
        'profile_title'   => "👤 <b>پروفایل گیت‌هاب</b>",
        'name'            => "👤 <b>نام:</b>",
        'username_lbl'    => "🆔 <b>یوزرنیم:</b>",
        'bio'             => "📝 <b>بیو:</b>",
        'location'        => "📍 <b>موقعیت:</b>",
        'company'         => "🏢 <b>شرکت:</b>",
        'repos'           => "📦 <b>ریپازیتوری:</b>",
        'followers'       => "👥 <b>دنبال‌کننده:</b>",
        'joined'          => "📅 <b>تاریخ عضویت:</b>",
        'view_on_github'  => "مشاهده در گیت‌هاب",
        'no_bio'          => 'بدون بیوگرافی',
        'unknown'         => 'نامشخص',
        'btn_repos'       => '📂 ریپازیتوری‌ها',
        'btn_langs'       => '💻 زبان‌ها',
        'btn_activity'    => '📈 فعالیت',
        'btn_search'      => '🔄 جستجوی مجدد',
        'btn_profile'     => '👤 پروفایل',
        'btn_source'      => '📦 سورس کد ربات',
        'btn_lang'        => '🌐 زبان',
        'repos_title'     => "📂 <b>ریپازیتوری‌های @{username}</b>",
        'no_repos'        => "❌ هیچ ریپازیتوری عمومی یافت نشد.",
        'no_desc'         => 'بدون توضیحات',
        'view'            => 'مشاهده',
        'langs_title'     => "💻 <b>آمار زبان‌های @{username}</b>",
        'no_langs'        => "❌ هیچ زبانی یافت نشد.",
        'activity_title'  => "📈 <b>آنالیز فعالیت @{username}</b>",
        'total_stars'     => "🌟 <b>مجموع ستاره‌ها:</b>",
        'total_forks'     => "🍴 <b>مجموع فورک‌ها:</b>",
        'total_repos'     => "📦 <b>تعداد ریپازیتوری:</b>",
        'status'          => "🏆 <b>وضعیت:</b>",
        'status_legend'   => "توسعه‌دهنده افسانه‌ای! 🚀",
        'status_active'   => "توسعه‌دهنده فعال! 💻",
        'status_growing'  => "توسعه‌دهنده در حال رشد! 🌱",
        'choose_lang'     => "🌐 <b>زبان مورد نظر را انتخاب کنید:</b>",
        'lang_set'        => "✅ زبان به فارسی تغییر کرد!",
        'separator'       => "━━━━━━━━━━━━━━━━━",
        'photo_caption'   => "🖼 <b>پروفایل @{username}</b>",
    ],
    'en' => [
        'welcome'         => "🚀 <b>Hey {name}! Welcome to GitStats Pro!</b>\n\nSend me a <b>GitHub username</b> to get started.\n(Example: torvalds)\n\nNext time you press /start, you'll jump straight to your profile! 😎",
        'ask_username'    => "🔎 Please send a <b>GitHub username</b>:\n(Example: torvalds)",
        'invalid_user'    => "❌ Invalid username! Use only letters and numbers.",
        'not_found'       => "❌ User <b>{username}</b> not found!\nDouble-check the username.",
        'profile_title'   => "👤 <b>GitHub Profile</b>",
        'name'            => "👤 <b>Name:</b>",
        'username_lbl'    => "🆔 <b>Username:</b>",
        'bio'             => "📝 <b>Bio:</b>",
        'location'        => "📍 <b>Location:</b>",
        'company'         => "🏢 <b>Company:</b>",
        'repos'           => "📦 <b>Repos:</b>",
        'followers'       => "👥 <b>Followers:</b>",
        'joined'          => "📅 <b>Joined:</b>",
        'view_on_github'  => "View on GitHub",
        'no_bio'          => 'No bio',
        'unknown'         => 'Unknown',
        'btn_repos'       => '📂 Repositories',
        'btn_langs'       => '💻 Languages',
        'btn_activity'    => '📈 Activity',
        'btn_search'      => '🔄 New Search',
        'btn_profile'     => '👤 Profile',
        'btn_source'      => '📦 Bot Source Code',
        'btn_lang'        => '🌐 Language',
        'repos_title'     => "📂 <b>Repositories of @{username}</b>",
        'no_repos'        => "❌ No public repositories found.",
        'no_desc'         => 'No description',
        'view'            => 'View',
        'langs_title'     => "💻 <b>Language Stats of @{username}</b>",
        'no_langs'        => "❌ No languages found.",
        'activity_title'  => "📈 <b>Activity Analysis of @{username}</b>",
        'total_stars'     => "🌟 <b>Total Stars:</b>",
        'total_forks'     => "🍴 <b>Total Forks:</b>",
        'total_repos'     => "📦 <b>Total Repos:</b>",
        'status'          => "🏆 <b>Status:</b>",
        'status_legend'   => "Legendary Developer! 🚀",
        'status_active'   => "Active Developer! 💻",
        'status_growing'  => "Growing Developer! 🌱",
        'choose_lang'     => "🌐 <b>Choose your language:</b>",
        'lang_set'        => "✅ Language changed to English!",
        'separator'       => "━━━━━━━━━━━━━━━━━",
        'photo_caption'   => "🖼 <b>Profile of @{username}</b>",
    ],
    'ru' => [
        'welcome'         => "🚀 <b>Привет, {name}! Добро пожаловать в GitStats Pro!</b>\n\nОтправь мне <b>имя пользователя GitHub</b> для начала.\n(Пример: torvalds)\n\nВ следующий раз нажми /start — сразу увидишь свой профиль! 😎",
        'ask_username'    => "🔎 Отправь <b>имя пользователя GitHub</b>:\n(Пример: torvalds)",
        'invalid_user'    => "❌ Неверное имя! Используй только буквы и цифры.",
        'not_found'       => "❌ Пользователь <b>{username}</b> не найден!\nПроверь имя.",
        'profile_title'   => "👤 <b>Профиль GitHub</b>",
        'name'            => "👤 <b>Имя:</b>",
        'username_lbl'    => "🆔 <b>Логин:</b>",
        'bio'             => "📝 <b>Описание:</b>",
        'location'        => "📍 <b>Местоположение:</b>",
        'company'         => "🏢 <b>Компания:</b>",
        'repos'           => "📦 <b>Репозитории:</b>",
        'followers'       => "👥 <b>Подписчики:</b>",
        'joined'          => "📅 <b>Дата регистрации:</b>",
        'view_on_github'  => "Смотреть на GitHub",
        'no_bio'          => 'Нет описания',
        'unknown'         => 'Неизвестно',
        'btn_repos'       => '📂 Репозитории',
        'btn_langs'       => '💻 Языки',
        'btn_activity'    => '📈 Активность',
        'btn_search'      => '🔄 Новый поиск',
        'btn_profile'     => '👤 Профиль',
        'btn_source'      => '📦 Исходный код',
        'btn_lang'        => '🌐 Язык',
        'repos_title'     => "📂 <b>Репозитории @{username}</b>",
        'no_repos'        => "❌ Публичные репозитории не найдены.",
        'no_desc'         => 'Нет описания',
        'view'            => 'Открыть',
        'langs_title'     => "💻 <b>Языки программирования @{username}</b>",
        'no_langs'        => "❌ Языки не найдены.",
        'activity_title'  => "📈 <b>Анализ активности @{username}</b>",
        'total_stars'     => "🌟 <b>Всего звёзд:</b>",
        'total_forks'     => "🍴 <b>Всего форков:</b>",
        'total_repos'     => "📦 <b>Репозиториев:</b>",
        'status'          => "🏆 <b>Статус:</b>",
        'status_legend'   => "Легендарный разработчик! 🚀",
        'status_active'   => "Активный разработчик! 💻",
        'status_growing'  => "Растущий разработчик! 🌱",
        'choose_lang'     => "🌐 <b>Выбери язык:</b>",
        'lang_set'        => "✅ Язык изменён на Русский!",
        'separator'       => "━━━━━━━━━━━━━━━━━",
        'photo_caption'   => "🖼 <b>Профиль @{username}</b>",
    ],
];

function t(string $key, string $lang, array $vars = []): string {
    global $LANG;
    $str = $LANG[$lang][$key] ?? $LANG['en'][$key] ?? $key;
    foreach ($vars as $k => $v) {
        $str = str_replace('{' . $k . '}', $v, $str);
    }
    return $str;
}

function getUserLang(array $userData): string {
    return $userData['lang'] ?? 'fa';
}

$update = json_decode(file_get_contents('php://input'), true);
if (!$update) exit;

if (isset($update['message'])) {
    handleMessage($update['message']);
} elseif (isset($update['callback_query'])) {
    handleCallback($update['callback_query']);
}

function handleMessage(array $message): void {
    $chatId    = $message['chat']['id'];
    $text      = trim($message['text'] ?? '');
    $firstName = htmlspecialchars($message['from']['first_name'] ?? 'Friend');

    $userData = loadUserData($chatId) ?? [];
    $lang     = getUserLang($userData);

    if ($text === '/lang') {
        showLanguagePicker($chatId, $userData);
        return;
    }

    if (strpos($text, '/start') === 0) {
        if (!empty($userData['github_username'])) {
            showUserProfile($chatId, $userData['github_username'], $userData);
        } else {
            $msg = t('welcome', $lang, ['name' => $firstName]);
            $sent = sendHTML($chatId, $msg, getWelcomeKeyboard($lang));
            saveMessageId($chatId, $userData, null, msgId($sent));
        }
        return;
    }

    $username = preg_replace('/[^A-Za-z0-9\-]/', '', $text);
    if (!empty($username)) {
        $userData['github_username'] = $username;
        saveUserData($chatId, $userData);
        showUserProfile($chatId, $username, $userData);
    } else {
        sendHTML($chatId, t('invalid_user', $lang));
    }
}

function handleCallback(array $callback): void {
    $chatId   = $callback['message']['chat']['id'];
    $data     = $callback['data'];
    $userData = loadUserData($chatId) ?? [];
    $lang     = getUserLang($userData);
    $textMsgId = $userData['text_msg_id'] ?? null;

    answerCallback($callback['id']);

    if (strpos($data, 'setlang_') === 0) {
        $newLang = str_replace('setlang_', '', $data);
        if (in_array($newLang, ['fa', 'en', 'ru'])) {
            $userData['lang'] = $newLang;
            saveUserData($chatId, $userData);
            $confirmation = t('lang_set', $newLang);
            if ($textMsgId) {
                editHTML($chatId, $textMsgId, $confirmation, null);
            } else {
                sendHTML($chatId, $confirmation);
            }
            if (!empty($userData['github_username'])) {
                showUserProfile($chatId, $userData['github_username'], $userData);
            }
        }
        return;
    }

    if ($data === 'action_lang') {
        showLanguagePicker($chatId, $userData);
        return;
    }

    if ($data === 'action_search') {
        cleanupPhoto($chatId, $userData);
        $msg = t('ask_username', $lang);
        editHTML($chatId, $textMsgId, $msg, null);
        return;
    }

    if ($data === 'action_home') {
        if (!empty($userData['github_username'])) {
            showUserProfile($chatId, $userData['github_username'], $userData);
        }
        return;
    }

    if (strpos($data, 'repos_') === 0) {
        showUserRepos($chatId, substr($data, 6), $userData);
        return;
    }
    if (strpos($data, 'langs_') === 0) {
        showUserLanguages($chatId, substr($data, 6), $userData);
        return;
    }
    if (strpos($data, 'activity_') === 0) {
        showUserActivity($chatId, substr($data, 9), $userData);
        return;
    }
    if (strpos($data, 'profile_') === 0) {
        showUserProfile($chatId, substr($data, 8), $userData);
        return;
    }
}

function showLanguagePicker(int $chatId, array $userData): void {
    $lang      = getUserLang($userData);
    $textMsgId = $userData['text_msg_id'] ?? null;

    $keyboard = ['inline_keyboard' => [[
        ['text' => '🇮🇷 فارسی',  'callback_data' => 'setlang_fa'],
        ['text' => '🇬🇧 English', 'callback_data' => 'setlang_en'],
        ['text' => '🇷🇺 Русский', 'callback_data' => 'setlang_ru'],
    ]]];

    $msg = t('choose_lang', $lang);

    if ($textMsgId) {
        editHTML($chatId, $textMsgId, $msg, $keyboard);
    } else {
        $sent = sendHTML($chatId, $msg, $keyboard);
        saveMessageId($chatId, $userData, null, msgId($sent));
    }
}

function showUserProfile(int $chatId, string $username, array $userData): void {
    global $sourceUrl;
    $lang = getUserLang($userData);

    $ghData = fetchGitHubData($username);
    if (!$ghData || isset($ghData['message'])) {
        $err = t('not_found', $lang, ['username' => $username]);
        $textMsgId = $userData['text_msg_id'] ?? null;
        if ($textMsgId) {
            editHTML($chatId, $textMsgId, $err, getSearchKeyboard($lang));
        } else {
            $sent = sendHTML($chatId, $err, getSearchKeyboard($lang));
            $userData['text_msg_id'] = msgId($sent);
            saveUserData($chatId, $userData);
        }
        return;
    }

    cleanupAll($chatId, $userData);

    $name     = htmlspecialchars($ghData['name']     ?? $ghData['login']);
    $bio      = htmlspecialchars($ghData['bio']      ?? t('no_bio', $lang));
    $location = htmlspecialchars($ghData['location'] ?? t('unknown', $lang));
    $company  = htmlspecialchars($ghData['company']  ?? t('unknown', $lang));
    $created  = date('Y-m-d', strtotime($ghData['created_at']));
    $url      = $ghData['html_url'];
    $avatar   = $ghData['avatar_url'];
    $sep      = t('separator', $lang);

    $text  = t('profile_title', $lang) . "\n$sep\n";
    $text .= t('name', $lang)         . " $name\n";
    $text .= t('username_lbl', $lang) . " @{$ghData['login']}\n";
    $text .= t('bio', $lang)          . " $bio\n";
    $text .= t('location', $lang)     . " $location | " . t('company', $lang) . " $company\n";
    $text .= "$sep\n";
    $text .= t('repos', $lang)        . " {$ghData['public_repos']} | " . t('followers', $lang) . " {$ghData['followers']}\n";
    $text .= t('joined', $lang)       . " $created\n";
    $text .= "$sep\n";
    $text .= "🔗 <a href='$url'>" . t('view_on_github', $lang) . "</a>";

    $keyboard = ['inline_keyboard' => [
        [
            ['text' => t('btn_repos',    $lang), 'callback_data' => "repos_$username"],
            ['text' => t('btn_langs',    $lang), 'callback_data' => "langs_$username"],
        ],
        [
            ['text' => t('btn_activity', $lang), 'callback_data' => "activity_$username"],
            ['text' => t('btn_search',   $lang), 'callback_data' => 'action_search'],
        ],
        [
            ['text' => t('btn_lang',     $lang), 'callback_data' => 'action_lang'],
            ['text' => t('btn_source',   $lang), 'url' => $sourceUrl],
        ],
    ]];

    $photoResp = sendPhotoHTML($chatId, $avatar, t('photo_caption', $lang, ['username' => $username]));
    $textResp  = sendHTML($chatId, $text, $keyboard);

    $userData['github_username'] = $username;
    $userData['photo_msg_id']    = msgId($photoResp);
    $userData['text_msg_id']     = msgId($textResp);
    unset($userData['state']);
    saveUserData($chatId, $userData);
}

function showUserRepos(int $chatId, string $username, array $userData): void {
    global $sourceUrl;
    $lang      = getUserLang($userData);
    $textMsgId = $userData['text_msg_id'] ?? null;
    $sep       = t('separator', $lang);

    $repos = fetchGitHubData($username, true) ?? [];
    $text  = t('repos_title', $lang, ['username' => $username]) . "\n$sep\n\n";

    if (empty($repos)) {
        $text .= t('no_repos', $lang);
    } else {
        foreach (array_slice($repos, 0, 5) as $repo) {
            $rName = htmlspecialchars($repo['name']);
            $rDesc = htmlspecialchars($repo['description'] ?? t('no_desc', $lang));
            $rLang = $repo['language'] ?? t('unknown', $lang);
            $text .= "📌 <b>$rName</b>\n";
            $text .= "📝 $rDesc\n";
            $text .= "💻 $rLang | ⭐ {$repo['stargazers_count']} | 🍴 {$repo['forks_count']}\n";
            $text .= "🔗 <a href='{$repo['html_url']}'>" . t('view', $lang) . "</a>\n\n";
        }
    }

    editHTML($chatId, $textMsgId, $text, getBackKeyboard($lang, $username, $sourceUrl));
}

function showUserLanguages(int $chatId, string $username, array $userData): void {
    global $sourceUrl;
    $lang      = getUserLang($userData);
    $textMsgId = $userData['text_msg_id'] ?? null;
    $sep       = t('separator', $lang);

    $repos = fetchGitHubData($username, true) ?? [];
    $langs = [];
    foreach ($repos as $repo) {
        if (!empty($repo['language'])) {
            $langs[$repo['language']] = ($langs[$repo['language']] ?? 0) + 1;
        }
    }
    arsort($langs);
    $total = array_sum($langs);

    $text = t('langs_title', $lang, ['username' => $username]) . "\n$sep\n\n";

    if (empty($langs)) {
        $text .= t('no_langs', $lang);
    } else {
        foreach ($langs as $lName => $count) {
            $pct     = round(($count / $total) * 100, 1);
            $filled  = (int) round($pct / 5);
            $bar     = str_repeat('▰', $filled) . str_repeat('▱', 20 - $filled);
            $text   .= "<b>$lName</b>\n$bar $pct% ($count)\n\n";
        }
    }

    editHTML($chatId, $textMsgId, $text, getBackKeyboard($lang, $username, $sourceUrl));
}

function showUserActivity(int $chatId, string $username, array $userData): void {
    global $sourceUrl;
    $lang      = getUserLang($userData);
    $textMsgId = $userData['text_msg_id'] ?? null;
    $sep       = t('separator', $lang);

    $ghData = fetchGitHubData($username)       ?? [];
    $repos  = fetchGitHubData($username, true) ?? [];

    $totalStars = 0;
    $totalForks = 0;
    foreach ($repos as $r) {
        $totalStars += $r['stargazers_count'];
        $totalForks += $r['forks_count'];
    }

    $statusKey = $totalStars > 100 ? 'status_legend'
               : ($totalStars > 10  ? 'status_active' : 'status_growing');

    $text  = t('activity_title', $lang, ['username' => $username]) . "\n$sep\n\n";
    $text .= t('total_stars', $lang) . " $totalStars\n";
    $text .= t('total_forks', $lang) . " $totalForks\n";
    $text .= t('total_repos', $lang) . " {$ghData['public_repos']}\n\n";
    $text .= t('status', $lang)      . " " . t($statusKey, $lang);

    editHTML($chatId, $textMsgId, $text, getBackKeyboard($lang, $username, $sourceUrl));
}


function getBackKeyboard(string $lang, string $username, string $sourceUrl): array {
    return ['inline_keyboard' => [
        [['text' => t('btn_profile', $lang), 'callback_data' => "profile_$username"]],
        [
            ['text' => t('btn_search', $lang), 'callback_data' => 'action_search'],
            ['text' => t('btn_lang',   $lang), 'callback_data' => 'action_lang'],
        ],
        [['text' => t('btn_source', $lang), 'url' => $sourceUrl]],
    ]];
}

function getSearchKeyboard(string $lang): array {
    global $sourceUrl;
    return ['inline_keyboard' => [
        [['text' => t('btn_search', $lang), 'callback_data' => 'action_search']],
        [
            ['text' => t('btn_lang',   $lang), 'callback_data' => 'action_lang'],
            ['text' => t('btn_source', $lang), 'url' => $sourceUrl],
        ],
    ]];
}

function getWelcomeKeyboard(string $lang): array {
    global $sourceUrl;
    return ['inline_keyboard' => [
        [['text' => t('btn_lang',   $lang), 'callback_data' => 'action_lang']],
        [['text' => t('btn_source', $lang), 'url' => $sourceUrl]],
    ]];
}


function loadUserData(int $chatId): ?array {
    global $usersFile;
    $users = json_decode(file_get_contents($usersFile), true) ?? [];
    return $users[(string)$chatId] ?? null;
}

function saveUserData(int $chatId, array $data): void {
    global $usersFile;
    $users = json_decode(file_get_contents($usersFile), true) ?? [];
    $users[(string)$chatId] = $data;
    file_put_contents($usersFile, json_encode($users, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

function saveMessageId(int $chatId, array $userData, ?int $photoId, ?int $textId): void {
    if ($photoId !== null) $userData['photo_msg_id'] = $photoId;
    if ($textId  !== null) $userData['text_msg_id']  = $textId;
    saveUserData($chatId, $userData);
}

function fetchGitHubData(string $username, bool $getRepos = false): ?array {
    global $cacheDir, $githubToken;
    $type      = $getRepos ? 'repos' : 'user';
    $cacheFile = $cacheDir . md5($username) . "_$type.json";

    if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < 3600) {
        return json_decode(file_get_contents($cacheFile), true);
    }

    $url = $getRepos
        ? "https://api.github.com/users/$username/repos?sort=updated&per_page=30"
        : "https://api.github.com/users/$username";

    $headers = [
        'User-Agent: GitStats-Telegram-Bot/2.0',
        'Accept: application/vnd.github.v3+json',
    ];
    if ($githubToken) {
        $headers[] = "Authorization: Bearer $githubToken";
    }

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER     => $headers,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TIMEOUT        => 10,
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode === 200 && $response) {
        file_put_contents($cacheFile, $response);
        return json_decode($response, true);
    }
    return null;
}


function requestAPI(string $method, array $data): string {
    global $apiBase;
    $ch = curl_init($apiBase . '/' . $method);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => json_encode($data),
        CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TIMEOUT        => 10,
    ]);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result ?: '{}';
}

function msgId(string $response): ?int {
    $d = json_decode($response, true);
    return $d['result']['message_id'] ?? null;
}

function sendHTML(int $chatId, string $text, ?array $keyboard = null): string {
    $data = [
        'chat_id'                  => $chatId,
        'text'                     => $text,
        'parse_mode'               => 'HTML',
        'disable_web_page_preview' => true,
    ];
    if ($keyboard) $data['reply_markup'] = json_encode($keyboard);
    return requestAPI('sendMessage', $data);
}

function editHTML(int $chatId, ?int $msgId, string $text, ?array $keyboard): void {
    if (!$msgId) return;
    $data = [
        'chat_id'                  => $chatId,
        'message_id'               => $msgId,
        'text'                     => $text,
        'parse_mode'               => 'HTML',
        'disable_web_page_preview' => true,
    ];
    if ($keyboard) $data['reply_markup'] = json_encode($keyboard);
    requestAPI('editMessageText', $data);
}

function sendPhotoHTML(int $chatId, string $photoUrl, string $caption): string {
    return requestAPI('sendPhoto', [
        'chat_id'    => $chatId,
        'photo'      => $photoUrl,
        'caption'    => $caption,
        'parse_mode' => 'HTML',
    ]);
}

function answerCallback(string $callbackId): void {
    requestAPI('answerCallbackQuery', ['callback_query_id' => $callbackId]);
}

function deleteMessage(int $chatId, ?int $msgId): void {
    if (!$msgId) return;
    requestAPI('deleteMessage', ['chat_id' => $chatId, 'message_id' => $msgId]);
}

function cleanupPhoto(int $chatId, array $userData): void {
    if (!empty($userData['photo_msg_id'])) {
        deleteMessage($chatId, $userData['photo_msg_id']);
    }
}

function cleanupAll(int $chatId, array $userData): void {
    cleanupPhoto($chatId, $userData);
    if (!empty($userData['text_msg_id'])) {
        deleteMessage($chatId, $userData['text_msg_id']);
    }
}
