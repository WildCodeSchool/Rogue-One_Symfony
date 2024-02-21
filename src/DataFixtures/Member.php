<?php

namespace App\DataFixtures;

use App\Entity\Member;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MemberFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Créer et ajouter des membres
        $member1 = new Member();
        $member1->setFirstname('Chouiab');
        $member1->setLastname('JANAH');
        $member1->setRole('Product Owner');
        $member1->setImg('../assets/images/team/member1.png');
        $member1->setLink('https://www.linkedin.com/in/cjanah/');
        $member1->setDescription("Bonjour, je suis Janah Chouaib, un passionné de développement web âgé de 25 ans.
        Mon enthousiasme pour l'informatique et la programmation me pousse constamment à explorer de nouveaux horizons. 
        Je trouve un équilibre entre ma passion pour le code et mes autres centres d'intérêt tels que les voyages, 
        le sport et les jeux vidéo. Voyager me permet de découvrir des cultures diverses, 
        tandis que le sport me procure l'énergie nécessaire pour relever les défis du développement web. 
        Les jeux vidéo sont une source de détente et de plaisir dans mon quotidien. 
        Je suis avide d'apprentissage et je considère chaque obstacle comme une opportunité d'acquérir de nouvelles compétences. 
        Ma persévérance, mon courage et ma patience sont les moteurs qui me permettent 
        d'atteindre mes objectifs dans le monde du développement web.");
        $manager->persist($member1);

        $member2 = new Member();
        $member2->setFirstname('Joël');
        $member2->setLastname('MAYEMBA');
        $member2->setRole('Scrum Master');
        $member2->setImg('../assets/images/team/member3.png');
        $member2->setLink('https://www.linkedin.com/in/mayemba/');
        $member2->setDescription("Je suis Joël, un développeur web passionné par la 
        création d'expériences en ligne mémorables et fluides. 
        Avec trois années d'expérience solide dans le domaine du développement web, 
        j'ai développé une expertise pointue dans la conception, le développement et la maintenance de sites web dynamiques et réactifs. 
        Mon objectif est de combiner mon savoir-faire technique avec ma créativité pour offrir des solutions web innovantes et engageantes.");
        $manager->persist($member2);

        // Enregistrer les modifications dans la base de données
        $manager->flush();
    }
}
