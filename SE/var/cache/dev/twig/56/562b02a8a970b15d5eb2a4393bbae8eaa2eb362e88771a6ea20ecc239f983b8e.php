<?php

/* SEPlatformBundle:Default:cgu.html.twig */
class __TwigTemplate_b04e68559f79fe272bbdd0382058e6c57344c9b8569359ff1d7e832ec0fd57bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SEPlatformBundle::layout.html.twig", "SEPlatformBundle:Default:cgu.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'layout_header2' => array($this, 'block_layout_header2'),
            'layout_body' => array($this, 'block_layout_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SEPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1b7f4ccf3df2a408d7c68373f5986beb3b3dbcdc7692f08d3ee5544c5fba23c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1b7f4ccf3df2a408d7c68373f5986beb3b3dbcdc7692f08d3ee5544c5fba23c->enter($__internal_f1b7f4ccf3df2a408d7c68373f5986beb3b3dbcdc7692f08d3ee5544c5fba23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle:Default:cgu.html.twig"));

        $__internal_7f5c7fe683c3336eed578d52f8deeb9a3546a7c28c2d4514bc240f4c948046cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5c7fe683c3336eed578d52f8deeb9a3546a7c28c2d4514bc240f4c948046cd->enter($__internal_7f5c7fe683c3336eed578d52f8deeb9a3546a7c28c2d4514bc240f4c948046cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SEPlatformBundle:Default:cgu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1b7f4ccf3df2a408d7c68373f5986beb3b3dbcdc7692f08d3ee5544c5fba23c->leave($__internal_f1b7f4ccf3df2a408d7c68373f5986beb3b3dbcdc7692f08d3ee5544c5fba23c_prof);

        
        $__internal_7f5c7fe683c3336eed578d52f8deeb9a3546a7c28c2d4514bc240f4c948046cd->leave($__internal_7f5c7fe683c3336eed578d52f8deeb9a3546a7c28c2d4514bc240f4c948046cd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7fa68a8e91368451b53a96ed964a9e486271a43186063bbb4764c5fa36f6abf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7fa68a8e91368451b53a96ed964a9e486271a43186063bbb4764c5fa36f6abf->enter($__internal_f7fa68a8e91368451b53a96ed964a9e486271a43186063bbb4764c5fa36f6abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a4a2ea789f0bd59895c8c1803aae9ec0df6ec79ad93191fceec06c573b8ad65e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a2ea789f0bd59895c8c1803aae9ec0df6ec79ad93191fceec06c573b8ad65e->enter($__internal_a4a2ea789f0bd59895c8c1803aae9ec0df6ec79ad93191fceec06c573b8ad65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Conditions Générales d'Utilisations - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a4a2ea789f0bd59895c8c1803aae9ec0df6ec79ad93191fceec06c573b8ad65e->leave($__internal_a4a2ea789f0bd59895c8c1803aae9ec0df6ec79ad93191fceec06c573b8ad65e_prof);

        
        $__internal_f7fa68a8e91368451b53a96ed964a9e486271a43186063bbb4764c5fa36f6abf->leave($__internal_f7fa68a8e91368451b53a96ed964a9e486271a43186063bbb4764c5fa36f6abf_prof);

    }

    // line 7
    public function block_layout_header2($context, array $blocks = array())
    {
        $__internal_7d8bbd338b706bbdbc38fce75552d5e443d0755f8893c7d0d819d3dab44c8234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d8bbd338b706bbdbc38fce75552d5e443d0755f8893c7d0d819d3dab44c8234->enter($__internal_7d8bbd338b706bbdbc38fce75552d5e443d0755f8893c7d0d819d3dab44c8234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_header2"));

        $__internal_5a162a56613037c94e31e5f50d8367b2de15cf266ce2de89662a661891d263db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a162a56613037c94e31e5f50d8367b2de15cf266ce2de89662a661891d263db->enter($__internal_5a162a56613037c94e31e5f50d8367b2de15cf266ce2de89662a661891d263db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_header2"));

        // line 8
        echo "<div class=\"col-md-12\">
    <h3 class=\"cat-title\">Conditions Générales d'Utilisations</h3>
</div>
";
        
        $__internal_5a162a56613037c94e31e5f50d8367b2de15cf266ce2de89662a661891d263db->leave($__internal_5a162a56613037c94e31e5f50d8367b2de15cf266ce2de89662a661891d263db_prof);

        
        $__internal_7d8bbd338b706bbdbc38fce75552d5e443d0755f8893c7d0d819d3dab44c8234->leave($__internal_7d8bbd338b706bbdbc38fce75552d5e443d0755f8893c7d0d819d3dab44c8234_prof);

    }

    // line 13
    public function block_layout_body($context, array $blocks = array())
    {
        $__internal_0ed6edc138cad093017985f0a24d97146b8b654235d20d79cc8ea1e015410054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed6edc138cad093017985f0a24d97146b8b654235d20d79cc8ea1e015410054->enter($__internal_0ed6edc138cad093017985f0a24d97146b8b654235d20d79cc8ea1e015410054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_body"));

        $__internal_55d5e5ff2c005005c954e34c5f9dfd4957b7589c82e35fed46dd78a132f88288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d5e5ff2c005005c954e34c5f9dfd4957b7589c82e35fed46dd78a132f88288->enter($__internal_55d5e5ff2c005005c954e34c5f9dfd4957b7589c82e35fed46dd78a132f88288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout_body"));

        // line 14
        echo "
    <div class=\"row\">
         <div id=\"content\" class=\"col-md-12 text-center\">
             <div class='alert alert-danger'>PRIÈRE DE LIRE ATTENTIVEMENT CES CONDITIONS GÉNÉRALES AVANT TOUTE UTILISATION DE CE SITE.</div>
        </div>
    </div>
    <div class=\"row\">
         <div id=\"content\" class=\"col-md-12 text-center\">
            <div class=\"container\" align=\"justify\">
        <div class=\"row\">
          <p>Les présentes conditions (les « <b>Conditions d'utilisation</b> ») régissent
            votre accès et votre utilisation du site web de <b>Service Enchère</b> lié aux présentes Conditions d'utilisation
            (« <b>Site</b> »). En accédant au Site ou en l'utilisant, vous acceptez les présentes Conditions d'utilisation et
             passez un contrat qui vous lie juridiquement à Service Enchère, une société constituée en France (« Service Enchère »).
             N'accédez pas au Site et ne l'utilisez pas si vous ne souhaitez pas être lié par les Conditions d'utilisation.</p>

             <h4>1. DÉFINITIONS</h4>

      <h5>A. Parties</h5>
      <p>Les termes« vous » et « votre »/« vos » vous désignent en tant qu'utilisateur du Site. Un « utilisateur »
        désigne tout individu qui accède au Site, y navigue, le consulte ou utilise le Site de quelque manière que ce soit.
        Les termes « nous », « notre », et« nos » font référence à Service Enchère.</p>

      <h5>B. Contenu</h5>
      <p>Le « Contenu » désigne les textes, les images, les photographies,
        les formats audio et vidéo, les données d'emplacement et toutes les autres formes de données ou de communications.
        « Votre Contenu » désigne le Contenu que vous envoyez ou transmettez, via ou dans le cadre du Site, tel que des évaluations, avis,
        messages et informations que vous affichez ou avez affichés publiquement dans le profil de votre compte. Le « Contenu Utilisateur »
        désigne le Contenu que les utilisateurs envoient ou transmettent, via ou dans le cadre du Site. Le « Contenu Service Enchère »
        désigne le Contenu que nous créons et publions dans le cadre du Site. Le « Contenu Tiers » désigne le Contenu provenant de parties
        autres que Service Enchère ou ses utilisateurs et publié dans le cadre du Site. Le « Contenu du Site » désigne l'ensemble du Contenu publié
        dans le cadre du Site, y compris Votre Contenu, le Contenu Utilisateur, le Contenu Tiers et le Contenu Service Enchère.</p>

      <h4>2. MODIFICATIONS APPORTÉES AUX CONDITIONS D'UTILISATION</h4>

      <p>Nous nous réservons le droit de modifier les Conditions d'utilisation ponctuellement.
        Vous comprenez et convenez que votre accès et votre utilisation du Site sont régis par les Conditions d'utilisation en vigueur au moment
        de votre accès à ou votre utilisation du Site. En cas de modifications importantes apportées aux présentes Conditions d'utilisation,
        nous vous informerons par courriel ou en publiant un avis sur le Site avant la date d’entrée en vigueur des modifications.
        Nous préciserons également en haut de cette page la date des dernières modifications.
        Nous recommandons de consulter régulièrement ces Conditions d'utilisation car vous êtes tenu de vous conformer à
        la version modifiée la plus récente. Toute modification de ce type entrera en vigueur lorsque nous publierons les nouvelles Conditions d'utilisation.
        Vous comprenez et convenez que votre accès suivi au Site ou votre utilisation de ce dernier suite à la date d'entrée en vigueur des modifications
        apportées aux Conditions d'utilisation implique votre acceptation de la modification.</p>

      <h4>3. UTILISATION DU SITE</h4>

      <h5>A. Admissibilité</h5>
      <p>Pour accéder au Site ou l'utiliser, vous devez avoir au moins 18 ans et disposer du pouvoir et de l'autorité nécessaires pour accepter les présentes Conditions d'utilisation.
        Vous ne pouvez accéder à ce Site ou l'utiliser si nous vous avons préalablement banni du Site ou fermé votre compte.</p>

      <h5>B. Permission d'utiliser le Site</h5>
      <p>Nous vous accordons la permission d'utiliser le Site conformément aux restrictions énoncées dans les présentes Conditions d'utilisation.
        Vous utilisez le Site à vos risques et périls, notamment celui de vous trouver exposé à un Contenu injurieux, indécent, erroné,
        choquant ou autrement inadéquat.</p>

      <h5>C. Disponibilité du Site</h5>
      <p>Le Site pourra être modifié, mis à jour, interrompu, suspendu ou arrêté à tout moment sans notification ni responsabilité envers vous.</p>

      <h5>D. Comptes utilisateurs</h5>
      <p>Vous devez créer un compte et fournir certaines informations vous concernant afin d'utiliser certaines des fonctionnalités offertes à travers le Site.
        Vous êtes responsable de la protection de la confidentialité du mot de passe de votre compte.
        Vous êtes également responsable de toutes les activités survenant sur votre compte ou associées à ce dernier.
        Vous consentez à nous avertir immédiatement de toute utilisation non autorisée de votre compte.
        Vous avez la possibilité de clôturer votre compte à tout moment dans le profil de votre compte.
        Nous nous réservons le droit de fermer votre compte à tout moment, pour une raison quelconque ou sans raison.</p>
      <p>Votre compte est exclusivement réservé à votre usage personnel et non commercial.
        Lors de la création de votre compte, nous vous demandons de fournir des informations exhaustives et
        exactes à votre sujet afin de vous donner de la crédibilité en tant que participant au Site.
        Vous n'usurperez l'identité d'aucune personne physique ou morale (par exemple en usurpant l'identité d'un personnage célèbre ou de votre voisin),
         ne créerez de compte pour aucune autre personne que vous-même, ne fournirez aucune adresse électronique dont vous ne seriez pas propriétaire,
         ni ne créerez plusieurs comptes. Si vous utilisez un pseudonyme, veuillez remarquer que les autres pourront quand même vous identifier si,
          par exemple, vous insérez des informations d'identification dans vos avis, utilisez les mêmes informations de compte sur d'autres sites
          ou autorisez d'autres sites à partager les informations vous concernant avec Service Enchère.</p>

      <h5>E. Communications en provenance de Service Enchère et d'autres Utilisateurs</h5>
      <p>En créant un compte, vous acceptez de recevoir certaines communications dans le cadre du Site.
        Par exemple, vous pourrez recevoir des messages ou des demandes d'amis en provenance d'autres Utilisateurs.
         Vous recevrez également notre lettre d'information hebdomadaire concernant les événements survenant dans votre quartier.</p>

      <h4>4. CONTENU</h4>

      <h5>A. Responsabilité à l'égard de Votre Contenu</h5>
      <p>Vous êtes seul responsable de Votre Contenu qui, une fois publié, ne peut pas toujours être retiré.
        Vous assumez tous les risques associés à Votre Contenu, y compris la dépendance de quiconque de sa qualité, son exactitude ou sa fiabilité,
        ou encore toute divulgation par vos soins dans Votre Contenu d'informations permettant de vous identifier.
        Vous déclarez que vous êtes propriétaire de Votre Contenu tel qu'il est décrit dans les présentes lignes, ou que vous êtes en possession
        des autorisations nécessaires pour l'utiliser et pour permettre son utilisation. Vous n'insinuerez pas que Votre Contenu est d'une quelconque
        manière sponsorisé ou approuvé par Service Enchère.</p>
      <p>Vous êtes susceptible d'engager votre responsabilité si, par exemple,
        Votre Contenu contient des éléments erronés, intentionnellement trompeurs ou diffamatoires ;
        s’il contient des noms de personnes ou des éléments permettant de les identifier ;
        s’il contient des informations personnelles sur vous ou sur une autre personne ;
        et  s'il est en violation avec les droits d'un tiers, y compris tous droits d'auteur, marques de commerce, brevets, secrets de fabrique,
        droits moraux, droits à la vie privée, droits de publicité, ou tout autre droit de propriété intellectuelle ou industrielle ;
        s'il contient des éléments illicites, y compris des propos haineux à caractère illégal ou de la pornographie ;
        s'il exploite ou porte autrement préjudice à des personnes mineures ;
        ou encore s'il enfreint ou encourage la violation de toute loi ou règlementation.</p>

      <h5>B. Notre droit d'utilisation de Votre Contenu</h5>
      <p>Il se peut que nous utilisions Votre Contenu de différentes façons, y compris pour le publier, en modifier le format,
        l'incorporer à des publicités ou autres documents, créer des œuvres dérivées de celui-ci,
        le mettre en valeur, le distribuer, et permettre à d'autres d'agir de même sur leurs sites Web et plates-formes médiatiques (« Autres médias »).
        Ainsi, par les présentes conditions, vous nous accordez de façon irrévocable les droits d'utilisation et de modification de Votre Contenu
        à toutes fins, ces droits étant internationaux, perpétuels, non exclusifs, exempts de redevance, pouvant faire l'objet d'une sous-licence,
        cessibles et transférables. Veuillez noter que vous accordez également par les présentes conditions aux utilisateurs du Site et
        de tous les Autres médias le droit irrévocable d'accéder à Votre Contenu dans le cadre de leur utilisation du Site et des Autres médias.
        Enfin, vous renoncez irrévocablement à toute revendication et affirmation à l'encontre de Service Enchère et de ses utilisateurs relatives
        aux droits moraux ou patrimoniaux en ce qui concerne Votre Contenu.
        Par « utilisation », nous entendons l'utilisation, la copie, la présentation et l'affichage publics, la reproduction, la distribution,
        la modification, la traduction, la suppression, l'analyse, la commercialisation et la préparation d'œuvres dérivées de Votre Contenu.</p>

      <h5>C. Propriété</h5>
      <p>Comme convenu entre vous et Service Enchère, vous êtes propriétaire de Votre Contenu.
        Nous sommes propriétaires du Contenu Service Enchère, y compris, sans toutefois s'y limiter, les interfaces visuelles,
        les fonctionnalités interactives, graphiques, conceptions, compilations, y compris,
        sans toutefois s'y limiter, notre compilation de Contenu Utilisateur et autre Contenu du Site,
        codes informatiques, produits, logiciels, agrégats d'évaluations des avis d'utilisateurs,
        et tous les autres éléments et composants du Site à l'exception de Votre Contenu, du Contenu Utilisateur et du Contenu Tiers.
        Nous possédons également les droits d'auteur, marques de commerce, marques de service, noms commerciaux,
        et les autres droits de propriété intellectuelle et industrielle dans le monde entier associés au Contenu Service Enchère et au Site,
        qui sont protégés par les lois relatives aux droits d'auteurs, aux emballages, aux brevets,
        et aux marques de commerce, ainsi que par tous les autres droits et lois en vigueur relatifs à la propriété intellectuelle et industrielle.
        Ainsi, vous ne vous livrerez pas à la modification, à la reproduction, à la distribution, à la création d'œuvres dérivées ou d'adaptation,
        à l'affichage public ou à aucune forme d'exploitation du Contenu Service Enchère, dans son intégralité ou en partie,
        excepté avec notre autorisation écrite. Service Enchère, son logo ainsi que toutes les autres marques exposées sur ce Site
        sont des marques déposées par ou propriété de Service Enchère. Excepté tel qu'énoncé expressément et sans ambiguïté dans les présentes conditions,
        nous ne vous accordons aucun droit exprès ni implicite, et tous les droits dans et envers le Site et le Contenu Service Enchère nous appartiennent.</p>

      <h5>D. Publicité</h5>
      <p>Service Enchère peut afficher publiquement des publicités ou autres informations adjacentes à ou incluses dans Votre Contenu.
        Vous n'avez droit à aucune indemnisation pour ces publicités. L'approche, les modalités et la portée de ces publicités sont sujettes à
        modification sans qu'aucun préavis spécifique ne vous soit donné.</p>

      <h5>E. Autres</h5>
      <p>Le contenu utilisateur ne reflète pas nécessairement les opinions de Service Enchère.
        Nous nous réservons le droit de supprimer, filtrer, modifier ou rétablir le Contenu Utilisateur de temps en temps à notre entière discrétion,
        avec ou sans raison, et sans vous le communiquer.
        Nous ne sommes pas dans l'obligation de sauvegarder Votre Contenu ni de vous en fournir de duplicata,
        et nous ne nous portons aucunement garant de la confidentialité de Votre Contenu.</p>

      <h4>5. RESTRICTIONS</h4>

      <p>Nous ne sommes pas dans l'obligation de faire appliquer les Conditions d'utilisation pour votre compte vis-à-vis d'un autre utilisateur. Bien que nous vous encouragions à nous le communiquer si vous pensez qu'un autre utilisateur a violé les Conditions d'utilisation, nous nous réservons le droit de procéder à une enquête et de prendre les mesures adéquates à notre entière discrétion.</p>

      <h5>A.</h5>
      <p>Vous consentez à ne pas utiliser le Site et à ne pas aider ni permettre à d'autres d'utiliser le Site pour :</p>
      <p>
        </p><ul>
          <li><b>  i.</b> rédiger un avis faux ou diffamatoire, négocier des avis avec d'autres agences ou propriétaires
            de logements ou rédiger un avis pour lequel vous avez été payé directement ou indirectement par l’agence ou le propriétaire du
             logement faisant l'objet de l'avis ;</li>
          <li><b>  ii.</b> mentionner des noms de personnes ou des éléments permettant de les identifier ;</li>
          <li><b>  iii.</b> livrer des informations personnelles sur vous ou sur une autre personne ;</li>
          <li><b>  iv.</b> enfreindre des droits détenus par des tiers, y compris tout abus de confiance, droit d'auteur,
            marque de commerce, brevet, secret de fabrication, droit moral, droit à la vie privée, droit de publicité,
            ou tout autre droit de propriété intellectuelle ou industrielle ;</li>
          <li><b>  v.</b> menacer, traquer, faire du mal à ou harceler les autres, ou encore promouvoir le sectarisme ou la discrimination ;</li>
          <li><b>  vi.</b> promouvoir une activité ou autre opération commerciale ou événement, ou utiliser autrement le Site à des fins commerciales ;</li>
          <li><b>  vii.</b> envoyer des courriels de masse, sondages ou autres messages de masse,
            qu'ils soient de nature commerciale ou non ; être à l'origine de pollupostage par mot-clé, ou tenter de toute autre façon de manipuler
            les résultats de recherche du Site ou le site Web de tout tiers ;</li>
          <li><b>  viii.</b> demander des informations personnelles à des mineurs ou envoyer ou transmettre de la pornographie ;</li>
          <li><b>  ix.</b> livrer du contenu ayant déjà fait l’objet d’actions légale ;</li>
          <li><b>  x.</b> entraîner une action légale envers tout utilisateur du Site ou envers le Site lui-même, sous toute loi applicable ;</li>
          <li><b>  xi.</b> violer les droits de tiers ; ou</li>
          <li><b>  xii.</b> violer toute loi applicable.</li>
        </ul>
      <p></p>

      <h5>B.</h5> Vous consentez également à ne pas faire ce qui suit et à ne pas aider ni permettre à d'autres de :
      <p></p><ul>
        <li><b>  i.</b> enfreindre les Conditions d'utilisation ;</li>
        <li><b>  ii.</b> modifier, adapter, s'approprier, reproduire, distribuer, traduire, créer des œuvres dérivées ou des adaptations,
          afficher en public, vendre, échanger, ou exploiter de quelque manière que ce soit le Site ou
          le Contenu du Site (autre que Votre Contenu), sauf avec l'autorisation expresse de Service Enchère ;</li>
        <li><b>  iii.</b> utiliser des robots, des moteurs de balayage, des applications de recherche/récupération, ou tout autre dispositif automatisé,
          processus ou mode d'accès, récupération, scraping, ou encore indexage de toute portion du Site ou du Contenu du Site ;</li>
        <li><b>  iv.</b> se livrer à la rétro-ingénierie sur n'importe quelle portion du Site ;</li>
        <li><b>  v.</b> supprimer ou modifier tout avis de droits d'auteur, marque de commerce ou autres droits de propriété industrielle
          figurant dans toute portion du Site ou sur tout document imprimé ou copié à partir du Site ;</li>
        <li><b>  vi.</b> enregistrer, traiter ou explorer les données d'autres utilisateurs ;</li>
        <li><b>  vii.</b> accéder, récupérer ou indexer toute portion du Site dans le but de créer ou d'enrichir une base de données
          permettant de rechercher des avis portant sur des logements ;</li>
        <li><b>  viii.</b> modifier le format ou le framing de toute portion du Site ;</li>
        <li><b>  ix.</b> prendre toute mesure imposant ou pouvant imposer, à notre entière discrétion, une charge déraisonnable ou disproportionnée sur
          l'infrastructure technologique de Service Enchère ou procéder autrement à des demandes excessives concernant le Site ;</li>
        <li><b>  x.</b> tenter d'accéder sans autorisation au Site, aux comptes d'utilisateurs,
          aux systèmes informatiques ou aux réseaux connectés au Site via le piratage informatique,
          l'exploitation de mots de passe ou tout autre moyen ;</li>
        <li><b>  xi.</b> utiliser le Site ou tout Contenu du Site pour transmettre des virus informatiques, vers informatique, défauts,
          chevaux de Troie ou autres éléments de nature destructive (collectivement désignés comme des « virus ») ;</li>
        <li><b>  xii.</b> utiliser tout périphérique, logiciel ou sous-programme interférant avec le fonctionnement adéquat du Site,
          ou tenter autrement d'interférer avec le fonctionnement adéquat du Site ;</li>
        <li><b>  xiii.</b> utiliser le Site en vue de porter atteinte à la sécurité de tout réseau informatique,
          de craquer des mots de passe ou des codes de sécurité ; perturber ou interférer avec la sécurité du Site ou du Contenu du Site,
          ou encore y nuire ; ou</li>
        <li><b>  xiv.</b> supprimer, éviter, désactiver, endommager ou interférer de toute autre façon avec des fonctionnalités du Site liées à la
          sécurité, des fonctionnalités empêchant ou restreignant l'utilisation ou la copie du Contenu du Site ou des fonctionnalités
          apportant des limitations à l'utilisation du Site.</li>
      </ul><p></p>
      <p>Les restrictions énoncées ci-dessus s'appliquent dans les limites autorisées par la loi en vigueur.
        Cependant, vous consentez à ne pas les enfreindre (même si cela est admis par la loi en vigueur)
        sans nous fournir un préavis de 30 jours par écrit à l’adresse postale indiquée sur le site de Service Enchère,
        accompagné de toutes les informations que nous sommes raisonnablement susceptibles d'exiger afin de nous permettre de
        vous proposer une solution alternative ou de vous accommoder d'une façon quelconque à notre entière discrétion.</p>

      <h4>6. CONFIDENTIALITE</h4>

      <p>Notez que nous sommes susceptibles de divulguer des informations vous concernant à des tiers si nous avons de bonnes raisons de penser, en toute bonne foi, que cela est nécessaire pour les usages suivants : (i) l'action menée à l'encontre d'activités illégales soupçonnées ; (ii) l'application et le respect de nos Conditions d'utilisation ; (iii) la conformité avec les processus légaux et demandes du gouvernement, tels que les mandats de perquisition, les citations à comparaître, les actes ou statuts, les processus judiciaires, ou tout autre processus légal dont nous serions dûment informés ; ou (iv) la protection de nos droits, de notre réputation et de notre propriété, ou de ceux de nos utilisateurs, parties affiliées ou publiques.

      </p><h4>7. SUGGESTIONS ET AMÉLIORATIONS</h4>

      <p>En nous envoyant vos idées, suggestions, documents ou propositions (« Feedback »), vous acceptez les conditions suivantes : (i) votre Feedback ne contient aucune information confidentielle ou personnelle concernant des tiers, (ii) nous n'avons aucune obligation en matière de confidentialité, qu'elle soit expresse ou suggérée, concernant le Feedback, (iii) nous possédons peut-être déjà des éléments similaires au Feedback en phase d'étude ou de développement, et (iv) vous nous accordez une licence irrévocable, non exclusive, exempte de redevance, perpétuelle et internationale d'utiliser, modifier, publier, distribuer et fournir des sous-licences pour le Feedback et vous renoncez irrévocablement à toute revendication et affirmation à l'encontre de Service Enchère et de ses utilisateurs relatives aux droits moraux ou patrimoniaux figurant dans ce Feedback.</p>

      <h4>8. TIERS</h4>

      <p>Le Site peut contenir des liens vers d'autres sites Web (désignés individuellement comme « Site Tiers »). Nous n'avons aucun contrôle sur les Sites Tiers et ne les approuvons pas. Vous comprenez que nous ne sommes pas responsables de la disponibilité ni du contenu de ces Sites Tiers. Vous utilisez les Sites Tiers à vos risques et périls.</p>

      <h4>9. INDEMNITÉ</h4>

      <p>Vous consentez à indemniser, à défendre et à dégager Service Enchère  ainsi que ses administrateurs, ses directeurs, ses employés, ses agents et représentants de chacun d'entre eux, de toute responsabilité, y compris les coûts, responsabilités et frais judiciaires résultant de toute revendication ou réclamation formulée par un tiers en raison de ou résultant de (i) votre accès au Site ou votre utilisation de ce dernier, (ii) une violation des Conditions d'utilisation de votre part, ou (iii) tout produit ou service acheté ou obtenu par vous par le biais du Site, ou (iv) une violation, de votre part ou de celle d'un tiers utilisant votre compte, des droits de propriété intellectuelle ou autre droit de toute personne ou entité. Service Enchère se réserve le droit d'assumer, à vos frais, la défense et le contrôle exclusifs de tout litige entraînant votre obligation de nous indemniser, et vous consentez à coopérer avec nous dans le cadre de notre défense de ces revendications. Vous convenez de ne pas engager ce litige sans l'accord écrit préalable de Service Enchère. Service Enchère emploiera des efforts raisonnables pour vous avertir de toute revendication, action ou procédure de cette nature dès que nous en prendrons connaissance.</p>

      <h4>10. NON-RESPONSABILITE ET LIMITATION DE RESPONSABILITE</h4>

      <p>Veuillez lire avec attention la présente section car elle limite la responsabilité de Service Enchère à votre égard. Chacune des sous-sections ci-dessous ne s'applique que dans la limite autorisée par la loi en vigueur. rien dans les présentes ne vise à limiter les droits dont vous disposez et ne pouvant être légalement limités. En cas de doutes concernant cette section ou toute autre section des présentes conditions d'utilisation, veuillez consulter un conseiller juridique préalablement à votre accès à ou utilisation du site. en accédant au site ou en l'utilisant, vous déclarez avoir lu et compris les présentes conditions d'utilisation et acceptez ces dernières, y compris la présente section. en acceptant les présentes conditions d'utilisation, vous renoncez à certains droits légaux substantiels.</p>

      <h5>A.</h5> Le site est mis à votre disposition « tel quel », « avec ses défauts » et « en l'état », étant entendu expressément que Service Enchère peut ne pas surveiller, contrôler ou approuver le contenu utilisateur. Ainsi, vous utilisez le site à votre entière discrétion et à vos risques et périls. Service Enchère ne procède à aucune revendication ni ne fait aucune promesse concernant la qualité, l'exactitude ou la fiabilité du site, sa sécurité, ou le contenu du site. Ainsi, Service Enchère ne peut être tenu pour responsable envers vous de toute perte ou tout dommage pouvant découler, par exemple, du mauvais fonctionnement, de l'indisponibilité du site ou de problèmes en matière de sécurité ou en raison de la confiance que vous accordez à la qualité, la précision ou la fiabilité des listes, classements, revues, métriques, logiciel de recommandation, figurant sur, utilisés sur ou rendus disponibles par le biais du site.

      <h5>B.</h5> Service Enchère ne procède à aucune revendication ni ne fait aucune promesse concernant la conduite de tiers mentionnés sur le site ou les utilisateurs du site. de même, Service Enchère ne peut être tenu pour responsables envers vous de toute perte ou tout dommage pouvant découler de leurs actions ou omissions, y compris, par exemple, si un autre utilisateur se rend coupable de l'usage abusif de votre contenu, de votre identité ou de vos renseignements personnels, ou si vous avez une mauvaise expérience de l'un des tiers. Votre achat et utilisation des produits ou services offerts par les tiers par le biais du site restent à votre entière discrétion et à vos propres risques.

      <h5>C.</h5> Service Enchère décline toute garantie, expresse ou tacite. Aucune information orale ou écrite vous étant fournie par un représentant de Service Enchère ne doit être considérée comme une représentation ou une garantie.

      <h5>D.</h5> Les seuls droits et recours dont vous disposez de façon exclusive en cas d'insatisfaction à l'égard du site, des services proposés ou de tout autre grief sont la résiliation et l'interruption de votre accès au site ou de son utilisation.

      <h5>E.</h5> Service Enchère n'endosse aucune responsabilité pour tous (i) dommages indirects, spéciaux, accessoires, punitifs, exemplaires, par abus de confiance, ou consécutifs, (ii) perte de profits, (iii) perte d'exploitation, (iv) perte ou dommage causé à la réputation de Service Enchère ou d'un tiers, ou (v) perte d'informations ou de données.

      <h4>11. JURIDICTION ET COMPÉTENCE</h4>

      <p>Les présentes Conditions, ainsi que toute revendication, cause d'action ou tout litige pouvant survenir entre vous et Service Enchère (une « Revendication ») seront régis par la loi française, indépendamment de toute disposition en matière de conflit des lois. Pour toute revendication de l'une des parties, vous consentez à vous soumettre à la juridiction personnelle et exclusive des tribunaux de Paris, en France.</p>

      <h4>12. RÉSILIATION</h4>

      <h5>A.</h5> Vous pouvez résilier les présentes Conditions d'utilisation à tout moment en fermant votre compte, en interrompant votre utilisation du Site et en communiquant à Service Enchère votre résiliation.

      <h5>B.</h5> Nous pourrons clôturer votre compte, suspendre votre droit d'utiliser certaines portions du Site et/ou vous bannir du Site pour ou sans raison quelconque ou sans raison, et sans préavis ni responsabilité envers vous. Toute mesure de ce type pourrait vous empêcher d'accéder à votre compte, au Site, à Votre Contenu, au Contenu du Site, ou à toutes informations associées.

      <h5>C.</h5> En cas de résiliation des présentes Conditions d'utilisation par vous ou par nous, les Sections 1, 4, 5, 9 à 13 resteront pleinement effectives et applicables, y compris notre droit d'utilisation de Votre Contenu tel qu'énoncé à la Section 4.

      <h4>13. CONDITIONS GÉNÉRALES</h4>

      <h5>A.</h5> Nous nous réservons le droit de modifier, mettre à jour ou interrompre le Site à notre entière discrétion, à tout moment, pour une raison quelconque ou sans raison, et sans préavis ni responsabilité envers vous.

      <h5>B.</h5> Nous sommes susceptibles de vous fournir des notifications, y compris celles ayant trait à la modification des Conditions d'utilisation, par courriel, par courrier ou par des communications à travers le Site.

      <h5>C.</h5> Excepté tel qu'énoncé à la section 10 ci-dessus, rien dans les présentes n'est destiné à conférer de quelconques droits ou recours envers des tiers ni ne sera considéré comme tel.

      <h5>D.</h5> Les Conditions d'utilisation contiennent l'accord intégral entre vous et nous au sujet de l'utilisation du Site, et remplacent tout accord préalable entre vous et nous en la matière. Les parties conviennent qu'aucune valeur ne sera accordée aux interprétations émanant des présentes Conditions d'utilisation sans y être énoncées expressément.

      <h5>E.</h5> Tout manquement de la part de Service Enchère à l'exercice et l'application d'un droit ou d'une disposition des Conditions d'utilisation ne saurait constituer une renonciation à un tel droit ou à une telle disposition. Un manquement quelconque de la part de l'une ou l'autre des parties à l'exercice d'un droit énoncé dans les présentes ne saurait constituer une renonciation à tout autre droit également énoncé dans les présentes.

      <h5>F.</h5> Si toute disposition des Conditions d'utilisation est jugée inexécutable ou non valide, cette disposition sera limitée ou éliminée dans la moindre mesure nécessaire afin que les Conditions d'utilisation demeurent par ailleurs pleinement effectives, en vigueur et applicables.

      <h5>G.</h5> Ni les Conditions d'utilisation, ni aucun des droits ou obligations qui en découlent, ne sont cessibles, transférables et ne peuvent faire l'objet d'une sous-licence de votre part excepté avec l'accord écrit préalable de Service Enchère, mais ils peuvent être cédés ou transférés par nos soins sans restriction. Toute tentative de cession de votre part représente une violation des présentes Conditions d'utilisation et sera considérée nulle et non avenue.

      <h5>H.</h5> Les titres de sections figurant dans ces Conditions d'utilisation sont fournis uniquement à titre informatif et n'ont aucune valeur légale ou contractuelle.
          </div>
        </div>
      </div>
    </div>
";
        
        $__internal_55d5e5ff2c005005c954e34c5f9dfd4957b7589c82e35fed46dd78a132f88288->leave($__internal_55d5e5ff2c005005c954e34c5f9dfd4957b7589c82e35fed46dd78a132f88288_prof);

        
        $__internal_0ed6edc138cad093017985f0a24d97146b8b654235d20d79cc8ea1e015410054->leave($__internal_0ed6edc138cad093017985f0a24d97146b8b654235d20d79cc8ea1e015410054_prof);

    }

    public function getTemplateName()
    {
        return "SEPlatformBundle:Default:cgu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 14,  86 => 13,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SEPlatformBundle::layout.html.twig\" %}

{% block title %}
    Conditions Générales d'Utilisations - {{ parent() }}
{% endblock %}

{% block layout_header2 %}
<div class=\"col-md-12\">
    <h3 class=\"cat-title\">Conditions Générales d'Utilisations</h3>
</div>
{% endblock %}

{% block layout_body %}

    <div class=\"row\">
         <div id=\"content\" class=\"col-md-12 text-center\">
             <div class='alert alert-danger'>PRIÈRE DE LIRE ATTENTIVEMENT CES CONDITIONS GÉNÉRALES AVANT TOUTE UTILISATION DE CE SITE.</div>
        </div>
    </div>
    <div class=\"row\">
         <div id=\"content\" class=\"col-md-12 text-center\">
            <div class=\"container\" align=\"justify\">
        <div class=\"row\">
          <p>Les présentes conditions (les « <b>Conditions d'utilisation</b> ») régissent
            votre accès et votre utilisation du site web de <b>Service Enchère</b> lié aux présentes Conditions d'utilisation
            (« <b>Site</b> »). En accédant au Site ou en l'utilisant, vous acceptez les présentes Conditions d'utilisation et
             passez un contrat qui vous lie juridiquement à Service Enchère, une société constituée en France (« Service Enchère »).
             N'accédez pas au Site et ne l'utilisez pas si vous ne souhaitez pas être lié par les Conditions d'utilisation.</p>

             <h4>1. DÉFINITIONS</h4>

      <h5>A. Parties</h5>
      <p>Les termes« vous » et « votre »/« vos » vous désignent en tant qu'utilisateur du Site. Un « utilisateur »
        désigne tout individu qui accède au Site, y navigue, le consulte ou utilise le Site de quelque manière que ce soit.
        Les termes « nous », « notre », et« nos » font référence à Service Enchère.</p>

      <h5>B. Contenu</h5>
      <p>Le « Contenu » désigne les textes, les images, les photographies,
        les formats audio et vidéo, les données d'emplacement et toutes les autres formes de données ou de communications.
        « Votre Contenu » désigne le Contenu que vous envoyez ou transmettez, via ou dans le cadre du Site, tel que des évaluations, avis,
        messages et informations que vous affichez ou avez affichés publiquement dans le profil de votre compte. Le « Contenu Utilisateur »
        désigne le Contenu que les utilisateurs envoient ou transmettent, via ou dans le cadre du Site. Le « Contenu Service Enchère »
        désigne le Contenu que nous créons et publions dans le cadre du Site. Le « Contenu Tiers » désigne le Contenu provenant de parties
        autres que Service Enchère ou ses utilisateurs et publié dans le cadre du Site. Le « Contenu du Site » désigne l'ensemble du Contenu publié
        dans le cadre du Site, y compris Votre Contenu, le Contenu Utilisateur, le Contenu Tiers et le Contenu Service Enchère.</p>

      <h4>2. MODIFICATIONS APPORTÉES AUX CONDITIONS D'UTILISATION</h4>

      <p>Nous nous réservons le droit de modifier les Conditions d'utilisation ponctuellement.
        Vous comprenez et convenez que votre accès et votre utilisation du Site sont régis par les Conditions d'utilisation en vigueur au moment
        de votre accès à ou votre utilisation du Site. En cas de modifications importantes apportées aux présentes Conditions d'utilisation,
        nous vous informerons par courriel ou en publiant un avis sur le Site avant la date d’entrée en vigueur des modifications.
        Nous préciserons également en haut de cette page la date des dernières modifications.
        Nous recommandons de consulter régulièrement ces Conditions d'utilisation car vous êtes tenu de vous conformer à
        la version modifiée la plus récente. Toute modification de ce type entrera en vigueur lorsque nous publierons les nouvelles Conditions d'utilisation.
        Vous comprenez et convenez que votre accès suivi au Site ou votre utilisation de ce dernier suite à la date d'entrée en vigueur des modifications
        apportées aux Conditions d'utilisation implique votre acceptation de la modification.</p>

      <h4>3. UTILISATION DU SITE</h4>

      <h5>A. Admissibilité</h5>
      <p>Pour accéder au Site ou l'utiliser, vous devez avoir au moins 18 ans et disposer du pouvoir et de l'autorité nécessaires pour accepter les présentes Conditions d'utilisation.
        Vous ne pouvez accéder à ce Site ou l'utiliser si nous vous avons préalablement banni du Site ou fermé votre compte.</p>

      <h5>B. Permission d'utiliser le Site</h5>
      <p>Nous vous accordons la permission d'utiliser le Site conformément aux restrictions énoncées dans les présentes Conditions d'utilisation.
        Vous utilisez le Site à vos risques et périls, notamment celui de vous trouver exposé à un Contenu injurieux, indécent, erroné,
        choquant ou autrement inadéquat.</p>

      <h5>C. Disponibilité du Site</h5>
      <p>Le Site pourra être modifié, mis à jour, interrompu, suspendu ou arrêté à tout moment sans notification ni responsabilité envers vous.</p>

      <h5>D. Comptes utilisateurs</h5>
      <p>Vous devez créer un compte et fournir certaines informations vous concernant afin d'utiliser certaines des fonctionnalités offertes à travers le Site.
        Vous êtes responsable de la protection de la confidentialité du mot de passe de votre compte.
        Vous êtes également responsable de toutes les activités survenant sur votre compte ou associées à ce dernier.
        Vous consentez à nous avertir immédiatement de toute utilisation non autorisée de votre compte.
        Vous avez la possibilité de clôturer votre compte à tout moment dans le profil de votre compte.
        Nous nous réservons le droit de fermer votre compte à tout moment, pour une raison quelconque ou sans raison.</p>
      <p>Votre compte est exclusivement réservé à votre usage personnel et non commercial.
        Lors de la création de votre compte, nous vous demandons de fournir des informations exhaustives et
        exactes à votre sujet afin de vous donner de la crédibilité en tant que participant au Site.
        Vous n'usurperez l'identité d'aucune personne physique ou morale (par exemple en usurpant l'identité d'un personnage célèbre ou de votre voisin),
         ne créerez de compte pour aucune autre personne que vous-même, ne fournirez aucune adresse électronique dont vous ne seriez pas propriétaire,
         ni ne créerez plusieurs comptes. Si vous utilisez un pseudonyme, veuillez remarquer que les autres pourront quand même vous identifier si,
          par exemple, vous insérez des informations d'identification dans vos avis, utilisez les mêmes informations de compte sur d'autres sites
          ou autorisez d'autres sites à partager les informations vous concernant avec Service Enchère.</p>

      <h5>E. Communications en provenance de Service Enchère et d'autres Utilisateurs</h5>
      <p>En créant un compte, vous acceptez de recevoir certaines communications dans le cadre du Site.
        Par exemple, vous pourrez recevoir des messages ou des demandes d'amis en provenance d'autres Utilisateurs.
         Vous recevrez également notre lettre d'information hebdomadaire concernant les événements survenant dans votre quartier.</p>

      <h4>4. CONTENU</h4>

      <h5>A. Responsabilité à l'égard de Votre Contenu</h5>
      <p>Vous êtes seul responsable de Votre Contenu qui, une fois publié, ne peut pas toujours être retiré.
        Vous assumez tous les risques associés à Votre Contenu, y compris la dépendance de quiconque de sa qualité, son exactitude ou sa fiabilité,
        ou encore toute divulgation par vos soins dans Votre Contenu d'informations permettant de vous identifier.
        Vous déclarez que vous êtes propriétaire de Votre Contenu tel qu'il est décrit dans les présentes lignes, ou que vous êtes en possession
        des autorisations nécessaires pour l'utiliser et pour permettre son utilisation. Vous n'insinuerez pas que Votre Contenu est d'une quelconque
        manière sponsorisé ou approuvé par Service Enchère.</p>
      <p>Vous êtes susceptible d'engager votre responsabilité si, par exemple,
        Votre Contenu contient des éléments erronés, intentionnellement trompeurs ou diffamatoires ;
        s’il contient des noms de personnes ou des éléments permettant de les identifier ;
        s’il contient des informations personnelles sur vous ou sur une autre personne ;
        et  s'il est en violation avec les droits d'un tiers, y compris tous droits d'auteur, marques de commerce, brevets, secrets de fabrique,
        droits moraux, droits à la vie privée, droits de publicité, ou tout autre droit de propriété intellectuelle ou industrielle ;
        s'il contient des éléments illicites, y compris des propos haineux à caractère illégal ou de la pornographie ;
        s'il exploite ou porte autrement préjudice à des personnes mineures ;
        ou encore s'il enfreint ou encourage la violation de toute loi ou règlementation.</p>

      <h5>B. Notre droit d'utilisation de Votre Contenu</h5>
      <p>Il se peut que nous utilisions Votre Contenu de différentes façons, y compris pour le publier, en modifier le format,
        l'incorporer à des publicités ou autres documents, créer des œuvres dérivées de celui-ci,
        le mettre en valeur, le distribuer, et permettre à d'autres d'agir de même sur leurs sites Web et plates-formes médiatiques (« Autres médias »).
        Ainsi, par les présentes conditions, vous nous accordez de façon irrévocable les droits d'utilisation et de modification de Votre Contenu
        à toutes fins, ces droits étant internationaux, perpétuels, non exclusifs, exempts de redevance, pouvant faire l'objet d'une sous-licence,
        cessibles et transférables. Veuillez noter que vous accordez également par les présentes conditions aux utilisateurs du Site et
        de tous les Autres médias le droit irrévocable d'accéder à Votre Contenu dans le cadre de leur utilisation du Site et des Autres médias.
        Enfin, vous renoncez irrévocablement à toute revendication et affirmation à l'encontre de Service Enchère et de ses utilisateurs relatives
        aux droits moraux ou patrimoniaux en ce qui concerne Votre Contenu.
        Par « utilisation », nous entendons l'utilisation, la copie, la présentation et l'affichage publics, la reproduction, la distribution,
        la modification, la traduction, la suppression, l'analyse, la commercialisation et la préparation d'œuvres dérivées de Votre Contenu.</p>

      <h5>C. Propriété</h5>
      <p>Comme convenu entre vous et Service Enchère, vous êtes propriétaire de Votre Contenu.
        Nous sommes propriétaires du Contenu Service Enchère, y compris, sans toutefois s'y limiter, les interfaces visuelles,
        les fonctionnalités interactives, graphiques, conceptions, compilations, y compris,
        sans toutefois s'y limiter, notre compilation de Contenu Utilisateur et autre Contenu du Site,
        codes informatiques, produits, logiciels, agrégats d'évaluations des avis d'utilisateurs,
        et tous les autres éléments et composants du Site à l'exception de Votre Contenu, du Contenu Utilisateur et du Contenu Tiers.
        Nous possédons également les droits d'auteur, marques de commerce, marques de service, noms commerciaux,
        et les autres droits de propriété intellectuelle et industrielle dans le monde entier associés au Contenu Service Enchère et au Site,
        qui sont protégés par les lois relatives aux droits d'auteurs, aux emballages, aux brevets,
        et aux marques de commerce, ainsi que par tous les autres droits et lois en vigueur relatifs à la propriété intellectuelle et industrielle.
        Ainsi, vous ne vous livrerez pas à la modification, à la reproduction, à la distribution, à la création d'œuvres dérivées ou d'adaptation,
        à l'affichage public ou à aucune forme d'exploitation du Contenu Service Enchère, dans son intégralité ou en partie,
        excepté avec notre autorisation écrite. Service Enchère, son logo ainsi que toutes les autres marques exposées sur ce Site
        sont des marques déposées par ou propriété de Service Enchère. Excepté tel qu'énoncé expressément et sans ambiguïté dans les présentes conditions,
        nous ne vous accordons aucun droit exprès ni implicite, et tous les droits dans et envers le Site et le Contenu Service Enchère nous appartiennent.</p>

      <h5>D. Publicité</h5>
      <p>Service Enchère peut afficher publiquement des publicités ou autres informations adjacentes à ou incluses dans Votre Contenu.
        Vous n'avez droit à aucune indemnisation pour ces publicités. L'approche, les modalités et la portée de ces publicités sont sujettes à
        modification sans qu'aucun préavis spécifique ne vous soit donné.</p>

      <h5>E. Autres</h5>
      <p>Le contenu utilisateur ne reflète pas nécessairement les opinions de Service Enchère.
        Nous nous réservons le droit de supprimer, filtrer, modifier ou rétablir le Contenu Utilisateur de temps en temps à notre entière discrétion,
        avec ou sans raison, et sans vous le communiquer.
        Nous ne sommes pas dans l'obligation de sauvegarder Votre Contenu ni de vous en fournir de duplicata,
        et nous ne nous portons aucunement garant de la confidentialité de Votre Contenu.</p>

      <h4>5. RESTRICTIONS</h4>

      <p>Nous ne sommes pas dans l'obligation de faire appliquer les Conditions d'utilisation pour votre compte vis-à-vis d'un autre utilisateur. Bien que nous vous encouragions à nous le communiquer si vous pensez qu'un autre utilisateur a violé les Conditions d'utilisation, nous nous réservons le droit de procéder à une enquête et de prendre les mesures adéquates à notre entière discrétion.</p>

      <h5>A.</h5>
      <p>Vous consentez à ne pas utiliser le Site et à ne pas aider ni permettre à d'autres d'utiliser le Site pour :</p>
      <p>
        </p><ul>
          <li><b>  i.</b> rédiger un avis faux ou diffamatoire, négocier des avis avec d'autres agences ou propriétaires
            de logements ou rédiger un avis pour lequel vous avez été payé directement ou indirectement par l’agence ou le propriétaire du
             logement faisant l'objet de l'avis ;</li>
          <li><b>  ii.</b> mentionner des noms de personnes ou des éléments permettant de les identifier ;</li>
          <li><b>  iii.</b> livrer des informations personnelles sur vous ou sur une autre personne ;</li>
          <li><b>  iv.</b> enfreindre des droits détenus par des tiers, y compris tout abus de confiance, droit d'auteur,
            marque de commerce, brevet, secret de fabrication, droit moral, droit à la vie privée, droit de publicité,
            ou tout autre droit de propriété intellectuelle ou industrielle ;</li>
          <li><b>  v.</b> menacer, traquer, faire du mal à ou harceler les autres, ou encore promouvoir le sectarisme ou la discrimination ;</li>
          <li><b>  vi.</b> promouvoir une activité ou autre opération commerciale ou événement, ou utiliser autrement le Site à des fins commerciales ;</li>
          <li><b>  vii.</b> envoyer des courriels de masse, sondages ou autres messages de masse,
            qu'ils soient de nature commerciale ou non ; être à l'origine de pollupostage par mot-clé, ou tenter de toute autre façon de manipuler
            les résultats de recherche du Site ou le site Web de tout tiers ;</li>
          <li><b>  viii.</b> demander des informations personnelles à des mineurs ou envoyer ou transmettre de la pornographie ;</li>
          <li><b>  ix.</b> livrer du contenu ayant déjà fait l’objet d’actions légale ;</li>
          <li><b>  x.</b> entraîner une action légale envers tout utilisateur du Site ou envers le Site lui-même, sous toute loi applicable ;</li>
          <li><b>  xi.</b> violer les droits de tiers ; ou</li>
          <li><b>  xii.</b> violer toute loi applicable.</li>
        </ul>
      <p></p>

      <h5>B.</h5> Vous consentez également à ne pas faire ce qui suit et à ne pas aider ni permettre à d'autres de :
      <p></p><ul>
        <li><b>  i.</b> enfreindre les Conditions d'utilisation ;</li>
        <li><b>  ii.</b> modifier, adapter, s'approprier, reproduire, distribuer, traduire, créer des œuvres dérivées ou des adaptations,
          afficher en public, vendre, échanger, ou exploiter de quelque manière que ce soit le Site ou
          le Contenu du Site (autre que Votre Contenu), sauf avec l'autorisation expresse de Service Enchère ;</li>
        <li><b>  iii.</b> utiliser des robots, des moteurs de balayage, des applications de recherche/récupération, ou tout autre dispositif automatisé,
          processus ou mode d'accès, récupération, scraping, ou encore indexage de toute portion du Site ou du Contenu du Site ;</li>
        <li><b>  iv.</b> se livrer à la rétro-ingénierie sur n'importe quelle portion du Site ;</li>
        <li><b>  v.</b> supprimer ou modifier tout avis de droits d'auteur, marque de commerce ou autres droits de propriété industrielle
          figurant dans toute portion du Site ou sur tout document imprimé ou copié à partir du Site ;</li>
        <li><b>  vi.</b> enregistrer, traiter ou explorer les données d'autres utilisateurs ;</li>
        <li><b>  vii.</b> accéder, récupérer ou indexer toute portion du Site dans le but de créer ou d'enrichir une base de données
          permettant de rechercher des avis portant sur des logements ;</li>
        <li><b>  viii.</b> modifier le format ou le framing de toute portion du Site ;</li>
        <li><b>  ix.</b> prendre toute mesure imposant ou pouvant imposer, à notre entière discrétion, une charge déraisonnable ou disproportionnée sur
          l'infrastructure technologique de Service Enchère ou procéder autrement à des demandes excessives concernant le Site ;</li>
        <li><b>  x.</b> tenter d'accéder sans autorisation au Site, aux comptes d'utilisateurs,
          aux systèmes informatiques ou aux réseaux connectés au Site via le piratage informatique,
          l'exploitation de mots de passe ou tout autre moyen ;</li>
        <li><b>  xi.</b> utiliser le Site ou tout Contenu du Site pour transmettre des virus informatiques, vers informatique, défauts,
          chevaux de Troie ou autres éléments de nature destructive (collectivement désignés comme des « virus ») ;</li>
        <li><b>  xii.</b> utiliser tout périphérique, logiciel ou sous-programme interférant avec le fonctionnement adéquat du Site,
          ou tenter autrement d'interférer avec le fonctionnement adéquat du Site ;</li>
        <li><b>  xiii.</b> utiliser le Site en vue de porter atteinte à la sécurité de tout réseau informatique,
          de craquer des mots de passe ou des codes de sécurité ; perturber ou interférer avec la sécurité du Site ou du Contenu du Site,
          ou encore y nuire ; ou</li>
        <li><b>  xiv.</b> supprimer, éviter, désactiver, endommager ou interférer de toute autre façon avec des fonctionnalités du Site liées à la
          sécurité, des fonctionnalités empêchant ou restreignant l'utilisation ou la copie du Contenu du Site ou des fonctionnalités
          apportant des limitations à l'utilisation du Site.</li>
      </ul><p></p>
      <p>Les restrictions énoncées ci-dessus s'appliquent dans les limites autorisées par la loi en vigueur.
        Cependant, vous consentez à ne pas les enfreindre (même si cela est admis par la loi en vigueur)
        sans nous fournir un préavis de 30 jours par écrit à l’adresse postale indiquée sur le site de Service Enchère,
        accompagné de toutes les informations que nous sommes raisonnablement susceptibles d'exiger afin de nous permettre de
        vous proposer une solution alternative ou de vous accommoder d'une façon quelconque à notre entière discrétion.</p>

      <h4>6. CONFIDENTIALITE</h4>

      <p>Notez que nous sommes susceptibles de divulguer des informations vous concernant à des tiers si nous avons de bonnes raisons de penser, en toute bonne foi, que cela est nécessaire pour les usages suivants : (i) l'action menée à l'encontre d'activités illégales soupçonnées ; (ii) l'application et le respect de nos Conditions d'utilisation ; (iii) la conformité avec les processus légaux et demandes du gouvernement, tels que les mandats de perquisition, les citations à comparaître, les actes ou statuts, les processus judiciaires, ou tout autre processus légal dont nous serions dûment informés ; ou (iv) la protection de nos droits, de notre réputation et de notre propriété, ou de ceux de nos utilisateurs, parties affiliées ou publiques.

      </p><h4>7. SUGGESTIONS ET AMÉLIORATIONS</h4>

      <p>En nous envoyant vos idées, suggestions, documents ou propositions (« Feedback »), vous acceptez les conditions suivantes : (i) votre Feedback ne contient aucune information confidentielle ou personnelle concernant des tiers, (ii) nous n'avons aucune obligation en matière de confidentialité, qu'elle soit expresse ou suggérée, concernant le Feedback, (iii) nous possédons peut-être déjà des éléments similaires au Feedback en phase d'étude ou de développement, et (iv) vous nous accordez une licence irrévocable, non exclusive, exempte de redevance, perpétuelle et internationale d'utiliser, modifier, publier, distribuer et fournir des sous-licences pour le Feedback et vous renoncez irrévocablement à toute revendication et affirmation à l'encontre de Service Enchère et de ses utilisateurs relatives aux droits moraux ou patrimoniaux figurant dans ce Feedback.</p>

      <h4>8. TIERS</h4>

      <p>Le Site peut contenir des liens vers d'autres sites Web (désignés individuellement comme « Site Tiers »). Nous n'avons aucun contrôle sur les Sites Tiers et ne les approuvons pas. Vous comprenez que nous ne sommes pas responsables de la disponibilité ni du contenu de ces Sites Tiers. Vous utilisez les Sites Tiers à vos risques et périls.</p>

      <h4>9. INDEMNITÉ</h4>

      <p>Vous consentez à indemniser, à défendre et à dégager Service Enchère  ainsi que ses administrateurs, ses directeurs, ses employés, ses agents et représentants de chacun d'entre eux, de toute responsabilité, y compris les coûts, responsabilités et frais judiciaires résultant de toute revendication ou réclamation formulée par un tiers en raison de ou résultant de (i) votre accès au Site ou votre utilisation de ce dernier, (ii) une violation des Conditions d'utilisation de votre part, ou (iii) tout produit ou service acheté ou obtenu par vous par le biais du Site, ou (iv) une violation, de votre part ou de celle d'un tiers utilisant votre compte, des droits de propriété intellectuelle ou autre droit de toute personne ou entité. Service Enchère se réserve le droit d'assumer, à vos frais, la défense et le contrôle exclusifs de tout litige entraînant votre obligation de nous indemniser, et vous consentez à coopérer avec nous dans le cadre de notre défense de ces revendications. Vous convenez de ne pas engager ce litige sans l'accord écrit préalable de Service Enchère. Service Enchère emploiera des efforts raisonnables pour vous avertir de toute revendication, action ou procédure de cette nature dès que nous en prendrons connaissance.</p>

      <h4>10. NON-RESPONSABILITE ET LIMITATION DE RESPONSABILITE</h4>

      <p>Veuillez lire avec attention la présente section car elle limite la responsabilité de Service Enchère à votre égard. Chacune des sous-sections ci-dessous ne s'applique que dans la limite autorisée par la loi en vigueur. rien dans les présentes ne vise à limiter les droits dont vous disposez et ne pouvant être légalement limités. En cas de doutes concernant cette section ou toute autre section des présentes conditions d'utilisation, veuillez consulter un conseiller juridique préalablement à votre accès à ou utilisation du site. en accédant au site ou en l'utilisant, vous déclarez avoir lu et compris les présentes conditions d'utilisation et acceptez ces dernières, y compris la présente section. en acceptant les présentes conditions d'utilisation, vous renoncez à certains droits légaux substantiels.</p>

      <h5>A.</h5> Le site est mis à votre disposition « tel quel », « avec ses défauts » et « en l'état », étant entendu expressément que Service Enchère peut ne pas surveiller, contrôler ou approuver le contenu utilisateur. Ainsi, vous utilisez le site à votre entière discrétion et à vos risques et périls. Service Enchère ne procède à aucune revendication ni ne fait aucune promesse concernant la qualité, l'exactitude ou la fiabilité du site, sa sécurité, ou le contenu du site. Ainsi, Service Enchère ne peut être tenu pour responsable envers vous de toute perte ou tout dommage pouvant découler, par exemple, du mauvais fonctionnement, de l'indisponibilité du site ou de problèmes en matière de sécurité ou en raison de la confiance que vous accordez à la qualité, la précision ou la fiabilité des listes, classements, revues, métriques, logiciel de recommandation, figurant sur, utilisés sur ou rendus disponibles par le biais du site.

      <h5>B.</h5> Service Enchère ne procède à aucune revendication ni ne fait aucune promesse concernant la conduite de tiers mentionnés sur le site ou les utilisateurs du site. de même, Service Enchère ne peut être tenu pour responsables envers vous de toute perte ou tout dommage pouvant découler de leurs actions ou omissions, y compris, par exemple, si un autre utilisateur se rend coupable de l'usage abusif de votre contenu, de votre identité ou de vos renseignements personnels, ou si vous avez une mauvaise expérience de l'un des tiers. Votre achat et utilisation des produits ou services offerts par les tiers par le biais du site restent à votre entière discrétion et à vos propres risques.

      <h5>C.</h5> Service Enchère décline toute garantie, expresse ou tacite. Aucune information orale ou écrite vous étant fournie par un représentant de Service Enchère ne doit être considérée comme une représentation ou une garantie.

      <h5>D.</h5> Les seuls droits et recours dont vous disposez de façon exclusive en cas d'insatisfaction à l'égard du site, des services proposés ou de tout autre grief sont la résiliation et l'interruption de votre accès au site ou de son utilisation.

      <h5>E.</h5> Service Enchère n'endosse aucune responsabilité pour tous (i) dommages indirects, spéciaux, accessoires, punitifs, exemplaires, par abus de confiance, ou consécutifs, (ii) perte de profits, (iii) perte d'exploitation, (iv) perte ou dommage causé à la réputation de Service Enchère ou d'un tiers, ou (v) perte d'informations ou de données.

      <h4>11. JURIDICTION ET COMPÉTENCE</h4>

      <p>Les présentes Conditions, ainsi que toute revendication, cause d'action ou tout litige pouvant survenir entre vous et Service Enchère (une « Revendication ») seront régis par la loi française, indépendamment de toute disposition en matière de conflit des lois. Pour toute revendication de l'une des parties, vous consentez à vous soumettre à la juridiction personnelle et exclusive des tribunaux de Paris, en France.</p>

      <h4>12. RÉSILIATION</h4>

      <h5>A.</h5> Vous pouvez résilier les présentes Conditions d'utilisation à tout moment en fermant votre compte, en interrompant votre utilisation du Site et en communiquant à Service Enchère votre résiliation.

      <h5>B.</h5> Nous pourrons clôturer votre compte, suspendre votre droit d'utiliser certaines portions du Site et/ou vous bannir du Site pour ou sans raison quelconque ou sans raison, et sans préavis ni responsabilité envers vous. Toute mesure de ce type pourrait vous empêcher d'accéder à votre compte, au Site, à Votre Contenu, au Contenu du Site, ou à toutes informations associées.

      <h5>C.</h5> En cas de résiliation des présentes Conditions d'utilisation par vous ou par nous, les Sections 1, 4, 5, 9 à 13 resteront pleinement effectives et applicables, y compris notre droit d'utilisation de Votre Contenu tel qu'énoncé à la Section 4.

      <h4>13. CONDITIONS GÉNÉRALES</h4>

      <h5>A.</h5> Nous nous réservons le droit de modifier, mettre à jour ou interrompre le Site à notre entière discrétion, à tout moment, pour une raison quelconque ou sans raison, et sans préavis ni responsabilité envers vous.

      <h5>B.</h5> Nous sommes susceptibles de vous fournir des notifications, y compris celles ayant trait à la modification des Conditions d'utilisation, par courriel, par courrier ou par des communications à travers le Site.

      <h5>C.</h5> Excepté tel qu'énoncé à la section 10 ci-dessus, rien dans les présentes n'est destiné à conférer de quelconques droits ou recours envers des tiers ni ne sera considéré comme tel.

      <h5>D.</h5> Les Conditions d'utilisation contiennent l'accord intégral entre vous et nous au sujet de l'utilisation du Site, et remplacent tout accord préalable entre vous et nous en la matière. Les parties conviennent qu'aucune valeur ne sera accordée aux interprétations émanant des présentes Conditions d'utilisation sans y être énoncées expressément.

      <h5>E.</h5> Tout manquement de la part de Service Enchère à l'exercice et l'application d'un droit ou d'une disposition des Conditions d'utilisation ne saurait constituer une renonciation à un tel droit ou à une telle disposition. Un manquement quelconque de la part de l'une ou l'autre des parties à l'exercice d'un droit énoncé dans les présentes ne saurait constituer une renonciation à tout autre droit également énoncé dans les présentes.

      <h5>F.</h5> Si toute disposition des Conditions d'utilisation est jugée inexécutable ou non valide, cette disposition sera limitée ou éliminée dans la moindre mesure nécessaire afin que les Conditions d'utilisation demeurent par ailleurs pleinement effectives, en vigueur et applicables.

      <h5>G.</h5> Ni les Conditions d'utilisation, ni aucun des droits ou obligations qui en découlent, ne sont cessibles, transférables et ne peuvent faire l'objet d'une sous-licence de votre part excepté avec l'accord écrit préalable de Service Enchère, mais ils peuvent être cédés ou transférés par nos soins sans restriction. Toute tentative de cession de votre part représente une violation des présentes Conditions d'utilisation et sera considérée nulle et non avenue.

      <h5>H.</h5> Les titres de sections figurant dans ces Conditions d'utilisation sont fournis uniquement à titre informatif et n'ont aucune valeur légale ou contractuelle.
          </div>
        </div>
      </div>
    </div>
{% endblock %}
", "SEPlatformBundle:Default:cgu.html.twig", "/Users/bach_tadj/www/onsertvis/SE/src/SE/PlatformBundle/Resources/views/Default/cgu.html.twig");
    }
}
