<?php

/**
 * This script can be set as the destination of links that are supposed to
 * open the visitors e-mail client. Hardcoding mailto-links into the website
 * makes them an easy target for spam bots. This technique hides the addresses
 * behind a regular link to /scripts/email.php?address=<destination>
 * 
 * Just pick one of the predefined addresses by their identifier, e. g.
 * 
 *              [Send mail](/scripts/email.php?address=kontakt)
 * 
 * will open the e-mail client with the kontakt@iwi-hka.de address filled in.
 */

if(isset($_GET['address'])) {
    switch ($_GET['address']) {
        case 'kontakt':
            $location = 'mailto:kontakt@iwi-hka.de';
            break;
        case 'sponsoring':
            $location = 'mailto:sponsoring@iwi-hka.de';
            break;
        case 'vorkurs':
            $location = 'mailto:vorkurs@iwi-hka.de';
            break;
        case 'vorstand':
            $location = 'mailto:vorstand@iwi-hka.de';
            break;
        case 'finanzen':
            $location = 'mailto:finanzen@iwi-hka.de';
            break;
        case 'admin':
            $location = 'mailto:admin@iwi-hka.de';
            break;
        case 'socialmedia':
            $location = 'mailto:socialmedia@iwi-hka.de';
            break;
        case 'labornacht':
            $location = 'mailto:labornacht@iwi-hka.de';
            break;
        case 'kaminabend':
            $location = 'mailto:kaminabend@iwi-hka.de';
        default:
            $location = "https://iwi-hka.de";
            break;
    }
}

header("Location: " . $location);
