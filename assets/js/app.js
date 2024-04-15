// Importation des styles SCSS
import './scss/app.scss';

// Importation des bibliothèques Bootstrap et Bootstrap Switch Button
import 'bootstrap';
import 'bootstrap-switch-button';
import 'bootstrap-switch-button/css/bootstrap-switch-button.min.css';

// Importation du contrôleur HomeController
import HomeController from './home_controller';

// Initialisation de Stimulus
import { Application } from 'stimulus';

const application = Application.start();
application.register('home', HomeController); // Enregistrement du contrôleur HomeController
