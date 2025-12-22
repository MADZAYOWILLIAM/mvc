<?php


class Redirect
{
    public static function to($location)
    {
        if (is_string($location)) {
            // Ensure a proper 302 redirect and stop execution immediately
            $url = rtrim(baseUrl(), '/') . '/' . ltrim($location, '/');
            header('Location: ' . $url, true, 302);
            // stop further output so the redirect always takes effect
            exit;
        }
    }

    public function back()
    {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
