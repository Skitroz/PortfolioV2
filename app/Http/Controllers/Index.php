<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Index extends Controller
{
    public function showIndex()
    {
        // Header Menu
        $titrePage = "Accueil - Portfolio";
        $emailHeader = "contact@matheobatelier.fr";
        $menuHeader1 = "Projets";
        $menuHeader2 = "Services";
        $menuHeader3 = "Blog";
        $boutonHeader = "Contact";

        // Header Section
        $titreH1 = "Mathéo BATELIER";
        $titreH3 = "Actuellement en <span class='text-gray-300'>2ème année d'étude</span><br>de développement web à la Normandie Web School";
        $boutonContact = "Contact";

        // Header Main
        $titreH2 = "Mes projets web";
        $lienProjet = "Voir tous";
            // Projet 1
            $langageProjet1 = "php | JavaScript | Tailwind | MySQL";
            $categorieProjet1 = "Dashboard";
            $titreProjet1 = "Annuaire NWS";
            $lienAccesProjet1 = "En savoir plus";
            $descriptionProjet1 = "Projet permettant d'inscrire des élèves souhaitant rejoindre la NWS.";

            // Projet 2
            $langageProjet2 = "php | JavaScript | Tailwind | MySQL";
            $categorieProjet2 = "Statistique";
            $titreProjet2 = "RebelStats";
            $lienAccesProjet2 = "En savoir plus";
            $descriptionProjet2 = "Projet regroupant les statistiques des joueurs sur League Of Legends.";

            // Projet 3
            $langageProjet3 = "WordPress";
            $categorieProjet3 = "Site vitrine";
            $titreProjet3 = "C-Plus Diffusion";
            $lienAccesProjet3 = "En savoir plus";
            $descriptionProjet3 = "Site réalisé pour une entrerpise proposant des aménagements professionnels.";

        // Main
        $titreMain = "Mes compétences";

        return view('index', [
            'titrePage' => $titrePage,
            'emailHeader' => $emailHeader,
            'menuHeader1' => $menuHeader1,
            'menuHeader2' => $menuHeader2,
            'menuHeader3' => $menuHeader3,
            'boutonHeader' => $boutonHeader,
            'boutonContact' => $boutonContact,
            'titreH1' => $titreH1,
            'titreH2' => $titreH2,
            'titreH3' => $titreH3,
            'lienProjet' => $lienProjet,
            'langageProjet1' => $langageProjet1,
            'categorieProjet1' => $categorieProjet1,
            'titreProjet1' => $titreProjet1,
            'lienAccesProjet1' => $lienAccesProjet1,
            'descriptionProjet1' => $descriptionProjet1,
            'langageProjet2' => $langageProjet2,
            'categorieProjet2' => $categorieProjet2,
            'titreProjet2' => $titreProjet2,
            'lienAccesProjet2' => $lienAccesProjet2,
            'descriptionProjet2' => $descriptionProjet2,
            'langageProjet3' => $langageProjet3,
            'categorieProjet3' => $categorieProjet3,
            'titreProjet3' => $titreProjet3,
            'lienAccesProjet3' => $lienAccesProjet3,
            'descriptionProjet3' => $descriptionProjet3,
            // Main
            "titreMain" => $titreMain,
        ]);
    }
}
