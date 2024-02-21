<?php

namespace App\DataFixtures;

use App\Entity\Member;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MemberFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
    
        $member1 = new Member();
        $member1->setFirstname('Chouiab');
        $member1->setLastname('JANAH');
        $member1->setRole('Product Owner');
        $member1->setImg('../assets/images/team/member1.png');
        $member1->setLink('https://www.linkedin.com/in/cjanah/');
        $member1->setDescription("");
        $manager->persist($member1);

        $member2 = new Member();
        $member2->setFirstname('Joël');
        $member2->setLastname('MAYEMBA');
        $member2->setRole('Scrum Master');
        $member2->setImg('../assets/images/team/member3.png');
        $member2->setLink('https://www.linkedin.com/in/mayemba/');
        $member2->setDescription("");
        $manager->persist($member2);

        $manager->flush();
    }
}
