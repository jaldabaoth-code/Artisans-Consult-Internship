<?php

namespace App\Controller\Admin;

use App\Form\PictureType;
use App\Entity\Achievment;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class AchievmentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Achievment::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Réalisation')
            ->setEntityLabelInPlural('Réalisations')
            ->setPageTitle('detail', 'Réalisation')
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', $label = "Titre"),
            TexteditorField::new('description', $label = "Description"),
            DateTimeField::new('date', $label = "Date")->setFormat('d/MM/y'),
            CollectionField::new('pictures', $label = "Images")
                ->setEntryType(PictureType::class)
                ->setFormTypeOption('by_reference', false)
                ->onlyOnForms(),
            CollectionField::new('pictures', $label = "Image")
                ->setTemplatePath('image.html.twig')
                ->onlyOnDetail(),
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Crud::PAGE_INDEX, 'detail')
            ->remove(Crud::PAGE_EDIT, Action::SAVE_AND_CONTINUE);
    }
}
