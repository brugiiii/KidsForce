<?php

add_action('wp_enqueue_scripts', 'enqueue_scripts_and_styles');
add_action('after_setup_theme', 'theme_setup');
add_filter('upload_mimes', 'svg_upload_allow');
add_action('wpcf7_before_send_mail', 'send_message_to_telegram');
add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);
add_action('wp_ajax_display_posts', 'display_posts');
add_action('wp_ajax_nopriv_display_posts', 'display_posts');
add_action('wp_ajax_send_mail', 'send_mail');
add_action('wp_ajax_nopriv_send_mail', 'send_mail');
add_action('customize_register', 'additional_logo_customize_register');

function enqueue_scripts_and_styles()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//code.jquery.com/jquery-1.11.0.min.js');
    wp_register_script('jquery-migrate', '//code.jquery.com/jquery-migrate-1.2.1.min.js');

    wp_enqueue_style('intl-tel-input-style', 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.min.css', array(), '17.0.12');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/dist/css/style.css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-mask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js', array('jquery'), '1.14.11', true);
    wp_enqueue_script('intl-tel-input', 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput-jquery.min.js', array('jquery'), '17.0.12', true);
    wp_enqueue_script('intl-tel-input-utils', 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.min.js', array('jquery'), '17.0.12', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/dist/js/main.bundle.js', array('jquery'), null, true);

    $settings = array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'monday' => translate_and_output('monday'),
        'tuesday' => translate_and_output('tuesday'),
        'wednesday' => translate_and_output('wednesday'),
        'thursday' => translate_and_output('thursday'),
        'friday' => translate_and_output('friday'),
        'template_directory_url' => get_template_directory_uri()
    );

    wp_localize_script('main-js', 'settings', $settings);
}

function theme_setup()
{
    show_admin_bar(false);
    register_nav_menu('menu-header', 'Main menu');

    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

function get_image($name)
{
    echo get_template_directory_uri() . "/assets/images/" . $name;
}

function display_posts()
{
    get_template_part('templates/occupationsList');
}

function translate_and_output($string_key, $group = 'Main Page')
{
    global $strings_to_translate;

    if (function_exists('pll__')) {
        return pll__($strings_to_translate[$string_key], $group);
    } else {
        return $strings_to_translate[$string_key];
    }
}

$strings_to_translate = array(
    'copyright' => 'Copyright &#169;2022',
    'made_by' => 'Design by Recipe',
    'signup' => 'Sign up',
    'name' => 'Name',
    'number' => 'Phone number',
    'submit' => 'Order feedback',
    'monday' => 'Monday',
    'tuesday' => 'Tuesday',
    'wednesday' => 'Wednesday',
    'thursday' => 'Thursday',
    'friday' => 'Friday',
    'schedule' => 'Work schedule:',
    'price' => 'Price',
    'send' => 'Send',
    'read_more' => 'Read more'
);

if (function_exists('pll_register_string')) {
    foreach ($strings_to_translate as $string_key => $string_value) {
        pll_register_string($string_key, $string_value, 'Main Page');
    }
}

function additional_logo_customize_register($wp_customize) {
    $wp_customize->add_setting('additional_logo', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'additional_logo',
            array(
                'label' => __('Additional Logo', 'your_theme_textdomain'),
                'section' => 'title_tagline',
                'settings' => 'additional_logo',
            )
        )
    );
}

function custom_theme_logo() {
    $additional_logo_url = get_theme_mod('additional_logo');
    $site_name = get_bloginfo('name');

    if ($additional_logo_url) {
        echo '<a href="' . esc_url(pll_home_url()) . '" class="custom-logo-link" rel="home" aria-current="page"><img class="custom-logo" alt="' . esc_attr($site_name) . '" src="' . esc_url($additional_logo_url) . '" alt="Additional Logo" decoding="async"></a>';
    }
}

function send_email_message($name, $phone, $title) {
    $to = get_option('admin_email');
    $subject = 'Form Submission';

    // Styling for email message
    $message = '<html><body>';
    $message .= !empty($title) ? '<h2>' . $title . '</h2>' : '';
    $message .= '<p>Контактні дані клієнта:</p>';
    $message .= "<p><strong>Ім'я:</strong> $name</p>";
    $message .= "<p><strong>Номер телефону:</strong> $phone</p>";
    $message .= '</body></html>';

    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: webmaster@example.com',
        'Reply-To: webmaster@example.com',
        'X-Mailer: PHP/' . phpversion()
    );

    // Sending HTML email
    wp_mail($to, $subject, $message, $headers);
}

function send_telegram_message($name, $phone, $title) {
    $telegram_bot_token = '6795917049:AAFP9yZD1luv8pMjzT_CpHJbbr7ND9ScM2c';
    $chat_id = '-4107987368';

    // Додавання заголовка, якщо він є
    $telegram_message = !empty($title) ? '<b>' . $title . '</b>' . PHP_EOL . PHP_EOL : '';

    // Додавання контактних даних клієнта
    $telegram_message .= '<b>' . 'Контактні дані клієнта: ' . '</b>' . PHP_EOL . PHP_EOL;
    $telegram_message .= '<b>' . 'Ім\'я: ' . '</b>' . $name . PHP_EOL;
    $telegram_message .= '<b>' . 'Номер телефону: ' . '</b>' . $phone . PHP_EOL;

    // Відправлення повідомлення у Телеграм за допомогою cURL
    $url = "https://api.telegram.org/bot$telegram_bot_token/sendMessage";
    $data = array('chat_id' => $chat_id, 'text' => $telegram_message, 'parse_mode' => 'HTML');

    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ),
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
}

function send_mail() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = sanitize_text_field($_POST['name']);
        $phone = sanitize_text_field($_POST['phone']);
        $title = sanitize_text_field($_POST['title']);

        send_email_message($name, $phone, $title);
        send_telegram_message($name, $phone, $title);
    }

    wp_die();
}

function svg_upload_allow($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '') {
    $dosvg = version_compare($GLOBALS['wp_version'], '5.1.0', '>=') ? in_array($real_mime, ['image/svg', 'image/svg+xml']) : ('.svg' === strtolower(substr($filename, -4)));

    if ($dosvg) {
        $data = current_user_can('manage_options') ? ['ext' => 'svg', 'type' => 'image/svg+xml'] : ['ext' => false, 'type' => false];
    }

    return $data;
}

