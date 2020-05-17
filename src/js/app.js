import './cursor.js';
import './carousel.js';
import './secret.js';
import './ie.js';

import 'bootstrap'

import { library, dom } from '@fortawesome/fontawesome-svg-core'
import { faChevronLeft, faChevronRight, faFileDownload, faClock } from '@fortawesome/free-solid-svg-icons'
import { faLinkedinIn, faGithub, faBehance } from '@fortawesome/free-brands-svg-icons'

library.add(faChevronLeft, faChevronRight, faLinkedinIn, faGithub, faFileDownload, faClock, faBehance)

dom.watch();

// Redirection HTTPS si ce n'est pas le cas
if (location.protocol != 'https:')
{
 // location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
}

function seeProject(e){
    e.preventDefault;
}

