<?php

if (!function_exists("active_submenu")) {
    function active_submenu($menuItems = [])
    {
        return (in_array(request()->path(), $menuItems)) ? "active" : "";
    }
}
