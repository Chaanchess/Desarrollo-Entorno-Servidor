<?php
class Preferencia{
    private static $init = false;
    public static $timezone;
    public static $language;
    public static $music;
    public static $color;

    public static function init(){
        if(!self::$init){
            $prefs["timezone"]="Europe/Madrid";
            $prefs["language"]="Español";
            $prefs["music"]="On";
            $prefs["color"]="Negro";

            self::$timezone =  $prefs["timezone"];
            self::$language =  $prefs["language"];
            self::$music =  $prefs["music"];
            self::$color =  $prefs["color"];

            self::$init=true;
        }
    }
}
?>