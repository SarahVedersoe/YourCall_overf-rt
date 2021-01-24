<?php
/*
* Plugin Name: fold-ud-menu-plugin
* Description: Fold ud menu til produktside
* Plugin URI: https://sarahvedersoe.dk/your-call/fold-ud-menu
* Version: 0.0.1
* Author: Sarah Louise Vedersøe
* Author URI: https://sarahvedersoe.dk/your-call/fold-ud-menu
* License: GPL2
*/

# Fold ud menu til produkter plugin
function fold_ud_menu()
{
    $content = '';
    $content .= '<section id="Produktydelser">';
    $content .= '<div id="ydelser1">';
    $content .= '<div class="retning">';
    $content .= '<button id="button1"> - Magasiner - </button>';
    $content .= '<div id="first">';
    $content .= '<p> Fortæl historien og inspirer kunden. Vi leverer journalisten, du leverer historien, sammen leverer vi resultater.</p>';
    $content .= '</div>';
    $content .= '</div>';
    $content .= '<div class="retning">';
    $content .= '<button id="button2"> - Brochure - </button>';
    $content .= '<div id="Brochure">';
    $content .= '<p> Informer og inspirer målgruppen gennem grafiske illustrationer og billeder i sammenspil med korte og fængende tekster. Vi sørger for, at det hele spiller fra start til slut. Det eneste du skal gøre er at godkende det færdige produkt.</p>';
    $content .= '</div> ';
    $content .= '</div> ';
    $content .= '<div class="retning">';
    $content .= '<button id="button3"> - Årsbøger - </button>';
    $content .= '<div id="Årsbøger">';
    $content .= '<p> Vi samler det bedste content gennem hele året. Alt fra de bedste historier og  
Vi lover dig et inspirerende værk, der signalerer overskud og giver din målgruppe et dybdegående indblik i, hvad du leverer og står for. Det kan være en samling af dette års resultater, inspiration eller noget helt tredje.</p>';
    $content .= '</div>';
    $content .= '</div>';
    $content .= '</div>';
    $content .= '<div id="ydelser2">';
    $content .= '<div class="retning">';
    $content .= '<button id="button4"> - Flipbook - </button>';
    $content .= '<div id="Flipbook">';
    $content .= '<p> Du fortæller den gode historie til din målgruppe i et online magasin. Det kan bruges til mange ting. F.eks. kan du sende det ud i nyhedsbreve eller benytte det på dine andre online kanaler. Det bestemmer du – fuldt og fast.</p>';
    $content .= '</div>';
    $content .= '</div>';
    $content .= '<div class="retning">';
    $content .= '<button id="button5"> - Flyers - </button>';
    $content .= '<div id="Flyers">';
    $content .= '<p> Handy handout med et lækkert design. Nemt og bekvemt. Oplagt til messer og anden promotion hvor kunden skal ”tage dig med hjem”.</p>';
    $content .= '</div>';
    $content .= '</div>';
    $content .= '<div class="retning">';
    $content .= '<button id="button6"> - Webindhold - </button>';
    $content .= '<div id="Webindhold">';
    $content .= '<p> Måske du har et ønske om at der skal lidt flere artikler til jeres egen hjemmeside. Vi kan også hjælpe med enkeltstående artikler, eller med en hyppighed, som du bestemmer.</p>';
    $content .= '</div>';
    $content .= '</div>';
    $content .= '</div>';
    $content .= '</section>';
    
    return $content;
  
}

# Første parameter er et selvvalgt navn for en unik short_code. Andet parameter er navnet på funktionen fold-ud-menuen er bygget op om.
add_shortcode('vis_fold_ud_menu','fold_ud_menu');


add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');


function register_styles_and_scripts_for_plugin()

{
    wp_enqueue_style('CustomFont','https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    
    wp_enqueue_style('CustomStylesheet', plugins_url('fold-ud-menu/css/style.css'));
    
    wp_deregister_script('jquery');
    
    wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
    
    wp_enqueue_script('CustomScript', plugins_url('fold-ud-menu/js/script.js'),array('jquery'), null, true);
    
}


