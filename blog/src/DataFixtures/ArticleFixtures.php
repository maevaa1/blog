<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ArticleFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $article_1 = new Article();

        $article_1
            ->setTitle('My awesome first article')
            ->setSubtitle('Consequat excepteur anim anim sunt.')
            ->setContent('Anim do ea reprehenderit quis minim et excepteur. Esse elit dolore id reprehenderit incididunt occaecat nulla mollit proident commodo labore. Sunt ex nisi est mollit aliquip enim consequat laborum duis ex. Incididunt consequat tempor reprehenderit ad ea eiusmod. Enim nulla laborum id culpa laborum. Eu sunt minim exercitation sunt. Occaecat nulla reprehenderit nostrud proident.

Sunt incididunt amet aute aute. Nostrud laboris sunt sit enim ad eu reprehenderit Lorem magna reprehenderit do veniam. Dolore enim exercitation nulla esse id cupidatat anim in culpa nostrud aliquip et id cillum. Occaecat aliqua nisi ad culpa adipisicing eiusmod minim Lorem id exercitation veniam. Et culpa qui ipsum do irure ullamco nisi exercitation sit laboris cupidatat. Amet sint veniam irure occaecat ipsum.

Minim ex nulla minim sint excepteur proident do aute nulla pariatur commodo elit. Incididunt enim amet fugiat pariatur. Ipsum velit Lorem ea velit do et aliquip sunt. Enim elit ad commodo cillum amet non ea ut dolor ullamco. Amet cupidatat reprehenderit pariatur proident in fugiat veniam sint magna sint dolore.

Eu minim laboris est officia pariatur qui ea excepteur. Velit magna velit qui exercitation ullamco nisi irure elit. Eiusmod proident laborum amet cupidatat reprehenderit veniam Lorem pariatur sint sint est laboris. Cillum consequat velit elit magna esse dolor ex. Non ex ea ad laborum.')
            ->setAuthor($this->getReference(UserFixtures::USER))
        ;

        $article_2 = new Article();

        $article_2
            ->setTitle('My awesome second article')
            ->setSubtitle('Elit aliquip esse reprehenderit nostrud proident nulla qui ex occaecat magna consectetur.')
            ->setContent('Ipsum et veniam magna cupidatat esse officia consequat proident. Deserunt et excepteur elit duis quis irure ipsum irure esse tempor id laborum incididunt veniam. Ipsum aute deserunt quis ut nisi cupidatat. Ea consectetur laboris laboris consequat incididunt ullamco.

Irure mollit enim proident tempor pariatur officia amet fugiat ipsum fugiat ex amet tempor. Est cillum deserunt minim mollit mollit sunt sit amet minim laborum sint quis sunt elit. Et minim fugiat enim labore incididunt ut cupidatat ea. Culpa esse sunt consectetur nulla sint sunt excepteur occaecat aute mollit excepteur. Velit proident ipsum enim minim aliqua eiusmod ea enim.

Aliqua dolor Lorem proident in voluptate veniam. Esse incididunt incididunt ipsum ea do nisi veniam elit. Tempor qui esse sint id mollit cillum dolor et pariatur reprehenderit sint. Qui non quis fugiat nisi cupidatat est irure esse tempor ea eu ullamco. Esse sunt laborum nulla nostrud dolor ullamco laborum elit ex nisi. Sint minim et nisi voluptate culpa Lorem commodo deserunt aliquip amet.

Ullamco anim elit et pariatur ex enim excepteur. Do deserunt officia nisi qui duis qui quis pariatur proident occaecat. Quis sit cillum veniam excepteur do quis aliquip id incididunt ea commodo. Excepteur exercitation magna nostrud sunt ut minim adipisicing. Dolore minim ullamco aliqua aliqua magna eu pariatur ad voluptate voluptate sunt.

Qui reprehenderit exercitation adipisicing dolore. Nisi magna nulla nisi minim incididunt occaecat ea voluptate sunt cupidatat aliqua aute. Nisi ad ut ea cupidatat occaecat ut exercitation. Aute esse qui nisi esse cupidatat consectetur. Consectetur Lorem quis qui ullamco consequat sint amet cupidatat pariatur cupidatat officia amet. Consequat amet occaecat irure ex veniam veniam est proident aliquip excepteur.

Reprehenderit est eu irure exercitation pariatur dolore fugiat minim ea cillum nisi amet occaecat. Voluptate excepteur eu in laborum do excepteur pariatur fugiat ullamco adipisicing sit. Consectetur mollit tempor id labore culpa elit veniam incididunt. Reprehenderit veniam in ipsum deserunt. Ea ipsum ad veniam elit anim laborum reprehenderit qui veniam quis commodo non. Sit incididunt occaecat laboris irure.')
            ->setAuthor($this->getReference(UserFixtures::USER))
        ;


        $article_3 = new Article();

        $article_3
            ->setTitle('My awesome third article')
            ->setSubtitle('Nisi veniam sint proident dolore et eu ullamco.')
            ->setContent('Excepteur ad nostrud dolor laborum non fugiat velit consectetur. Qui nulla exercitation reprehenderit cillum sit cupidatat reprehenderit laborum aliquip. Excepteur fugiat duis in dolore nulla fugiat nostrud consequat incididunt veniam enim velit.

Duis laborum eu laboris veniam labore sunt adipisicing quis. Labore adipisicing proident consectetur ut. Aute tempor non laborum anim aliqua occaecat qui laborum. Occaecat do eiusmod labore aliqua et occaecat officia reprehenderit. Reprehenderit do ipsum officia laborum anim excepteur.

Lorem in fugiat ad ex nisi. Ea anim ea quis consequat voluptate aute cupidatat et. Ullamco Lorem proident commodo consectetur ipsum ipsum adipisicing deserunt consectetur ipsum cillum dolore. In cupidatat elit occaecat in qui laboris. Minim aute irure veniam veniam id. Sit irure ex aliquip qui irure ullamco proident ad ipsum commodo. Cillum Lorem adipisicing non aute cillum aute.')
            ->setAuthor($this->getReference(UserFixtures::USER))
        ;

        $manager->persist($article_1);
        $manager->persist($article_2);
        $manager->persist($article_3);

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            UserFixtures::class,
        ];
    }
}
