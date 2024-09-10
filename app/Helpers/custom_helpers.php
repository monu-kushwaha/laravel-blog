<?php

if (!function_exists('testss')) {
    function testss() {
        // Your custom logic here
        return "Hello, ";
    }
}


if (!function_exists('render_view')) {
    function render_view($page, $data = []) {
        if (!$page) {
            return redirect()->route('404');
        }
        $header = view('template.header')->render();
        $content = view($page, $data)->render();
        $footer = view('template.footer')->render();
        $fullPage = $header . $content . $footer;
        return response($fullPage);
    }
}

if (!function_exists('render_admin')) {
    if (!function_exists('render_admin')) {
        function render_admin($page, $data = [])
        {
            if (!$page) {
                return redirect()->route('404');
            }
            $header = view('admin.template.header')->render();
            $content = view('admin.' . $page, $data)->render();
            $footer = view('admin.template.footer')->render();
            $fullPage = $header . $content . $footer;
            return response($fullPage);
        }
    }
}


