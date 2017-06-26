<main class="container">
        <div>
            <ul class="tabs">
                <li class="tablinks active" onclick="openDistrib(event, 'debian')"><a href="#debian">Debian</a></li>
                <li class="tablinks" onclick="openDistrib(event, 'fedora')"><a href="#fedora">Fedora</a></li>
                <li class="tablinks" onclick="openDistrib(event, 'archlinux')"><a href="#archlinux">Archlinux</a></li>
            </ul>

            <div class="tabs-content">
                <section class="tab-content active" id="debian">
                    <h2>Debian</h2>
                    <figure>
                        <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/debian.svg" alt="Debian">
                        <figcaption>
                            Le projet Debian est une association d'individus qui ont pour cause commune de créer un système d'exploitation libre. Ce système d'exploitation que nous avons créé est appelé Debian. Un système d'exploitation est l'ensemble des programmes et utilitaires de base qui permettent de faire fonctionner votre ordinateur. Au cœur d'un système d'exploitation se trouve le noyau. Le noyau est le programme le plus fondamental sur l'ordinateur, il fait toute la gestion de base des ressources et vous permet de lancer d'autres programmes. Les systèmes Debian utilisent actuellement le noyau Linux ou le noyau FreeBSD. Linux est un logiciel initié par Linus Torvalds et développé par des milliers de programmeurs de par le monde. FreeBSD est un système d'exploitation comprenant un noyau et d'autres logiciels. Cependant, un travail est en cours pour donner d'autres noyaux à Debian, principalement Hurd. Hurd est une collection de serveurs qui fonctionnent au-dessus d'un micronoyau (tel que Mach) pour implémenter différentes fonctionnalités. Hurd est un logiciel libre produit par le projet GNU. Une grande partie des utilitaires de base qui constituent le système d'exploitation vient du projet GNU ; d'où les noms : GNU/Linux, GNU/kFreeBSD et GNU/Hurd. Ces utilitaires sont libres eux aussi. Bien sûr, ce que veulent les gens ce sont des logiciels applicatifs : des logiciels pour les aider à faire ce qu'ils souhaitent faire, depuis l'édition de documents jusqu'à la gestion d'une entreprise en passant par les jeux et la réalisation d'autres logiciels. Debian est fourni avec plus de 51000 paquets (des logiciels précompilés mis dans un format sympathique pour une installation facile sur votre machine), un gestionnaire de paquets (APT) et d’autres utilitaires permettant de gérer des milliers de paquets sur des milliers d’ordinateurs aussi facilement que d’installer une seule application. Tout cela est libre. C'est un peu comme une tour. À la base, le noyau, au-dessus les utilitaires fondamentaux, puis tous les logiciels que vous lancez sur l'ordinateur et au sommet de la tour, Debian — qui organise soigneusement l'ensemble afin que tout puisse fonctionner correctement.
                        </figcaption>
                    </figure>

                    <section>
                        <h3>Version récente de Debian</h3>
                        <ul>
                            <li>Wheezy - V7.0 - 4 mai 2013</li>
                            <li>Jessie - V8.0 - 25 avril 2015</li>
                            <li>Strech - V9.0 - 17 juin 2017</li>
                            <li>Buster - V10.0 - Prochaine version après Strech</li>
                        </ul>
                    </section>

                    <section>
                        <h3>Distribution basé sur Debian</h3>
                        <ul>
                            <li>Unbuntu (Gnome)</li>
                            <li>Kubuntu (KDE)</li>
                            <li>Xubuntu (XFCE)</li>
                            <li>Lubuntu (LXDE)</li>
                        </ul>
                    </section>

                </section>
                <section class="tab-content" id="fedora">
                    <h2>Projet Fedora by Red Hat</h2>
                    <figure>
                        <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/fedora.svg" alt="Fedora">
                        <figcaption>Fedora est un système d’exploitation libre et une distribution GNU/Linux communautaire développée par le projet Fedora et sponsorisée par l’entreprise Red Hat, qui lui fournit des développeurs ainsi que des moyens financiers et logistiques. Fedora est prompte à inclure des nouveautés et peut être considérée comme une vitrine technologique pour le monde du logiciel libre, auquel elle contribue largement via les projets amont tels que le noyau Linux, GNOME, NetworkManager, PackageKit, PulseAudio, Wayland, la célèbre suite de compilateurs GCC et bien d’autres. Tous les six mois une nouvelle version sort ; elle est maintenue treize mois.</figcaption>
                    </figure>
                    <section>
                        <h3>Version récente de Debian</h3>
                        <ul>
                            <li>Fedora 23 - 03 novembre 2015 (n'est plus maintenu depuis le 20 décembre 2016)</li>
                            <li>Fedora 24 - 21 juin 2016</li>
                            <li>Fedora 25 - 22 novembre 2016</li>
                            <li>Fedora 26 - 11 juillet 2017 (prochaine mise à jour importante)</li>
                        </ul>
                    </section>

                    <section>
                        <h3>Distribution basé sur Debian</h3>
                        <ul>
                            <li>Korora</li>
                            <li>Red Hat Enterprise</li>
                            <li>CentOS</li>
                        </ul>
                    </section>
                </section>

                <section class="tab-content" id="archlinux">
                    <h2>ArchLinux</h2>
                    <figure>
                        <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/archlinux.svg" alt="Archlinux">
                        <figcaption>Arch Linux est une distribution légère et rapide dont le concept est de rester la plus simple possible (philosophie KISS). Les paquetages sont optimisés pour les processeurs i686 et la nouvelle génération 64bits. Les dépôts officiels [core], et [extra] sont complétés à la fois par le dépôt de paquets [community] et par le site AUR tous deux gérés par la communauté d’utilisateurs. Notre puissante communauté vient de différents horizons et ses membres qui ont différents niveaux de compétence viennent facilement en aide aux autres. N’hésitez pas à aller voir nos forums , nos wikis et les mailings listes pour plonger dans cette fantastique distribution. Pour une découverte rapide, testez un des livecd basés sur Arch Linux</figcaption>
                    </figure>

                    <section>
                        <h3>Distribution basé sur ArchLinux</h3>
                        <ul>
                            <li>Manjaro Linux</li>
                            <li>Antergos</li>
                            <li>Parabola</li>
                            <li>Chrakra Linux</li>
                        </ul>
                    </section>
                </section>
            </div>
        </div>
    </main>
