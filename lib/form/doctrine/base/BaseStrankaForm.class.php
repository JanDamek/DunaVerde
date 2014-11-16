<?php

/**
 * Stranka form base class.
 *
 * @method Stranka getObject() Returns the current form's model object
 *
 * @package    dunaverde
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseStrankaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'name'              => new sfWidgetFormInputText(),
      'link_h1'           => new sfWidgetFormInputText(),
      'title_seo'         => new sfWidgetFormInputText(),
      'keywords'          => new sfWidgetFormInputText(),
      'description'       => new sfWidgetFormInputText(),
      'title_str'         => new sfWidgetFormInputText(),
      'top_img'           => new sfWidgetFormInputText(),
      'top_img_title'     => new sfWidgetFormInputText(),
      'top_img_alt'       => new sfWidgetFormInputText(),
      'popis_levy'        => new sfWidgetFormTextarea(),
      'popis_pravy'       => new sfWidgetFormTextarea(),
      'region'            => new sfWidgetFormInputText(),
      'vzdalenost'        => new sfWidgetFormInputText(),
      'img1'              => new sfWidgetFormInputText(),
      'img1_title'        => new sfWidgetFormInputText(),
      'img1_alt'          => new sfWidgetFormInputText(),
      'img2'              => new sfWidgetFormInputText(),
      'img2_title'        => new sfWidgetFormInputText(),
      'img2_alt'          => new sfWidgetFormInputText(),
      'img3'              => new sfWidgetFormInputText(),
      'img3_title'        => new sfWidgetFormInputText(),
      'img3_alt'          => new sfWidgetFormInputText(),
      'img4'              => new sfWidgetFormInputText(),
      'img4_title'        => new sfWidgetFormInputText(),
      'img4_alt'          => new sfWidgetFormInputText(),
      'promo1_title'      => new sfWidgetFormInputText(),
      'promo1_img'        => new sfWidgetFormInputText(),
      'promo1_img_title'  => new sfWidgetFormInputText(),
      'promo1_img_alt'    => new sfWidgetFormInputText(),
      'promo1_gallery_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gallery1'), 'add_empty' => true)),
      'promo1_star'       => new sfWidgetFormInputText(),
      'promo1_popis'      => new sfWidgetFormTextarea(),
      'promo1_cena'       => new sfWidgetFormInputText(),
      'promo1_link'       => new sfWidgetFormInputText(),
      'promo2_title'      => new sfWidgetFormInputText(),
      'promo2_img'        => new sfWidgetFormInputText(),
      'promo2_img_title'  => new sfWidgetFormInputText(),
      'promo2_img_alt'    => new sfWidgetFormInputText(),
      'promo2_gallery_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gallery2'), 'add_empty' => true)),
      'promo2_star'       => new sfWidgetFormInputText(),
      'promo2_popis'      => new sfWidgetFormTextarea(),
      'promo2_cena'       => new sfWidgetFormInputText(),
      'promo2_link'       => new sfWidgetFormInputText(),
      'promo3_title'      => new sfWidgetFormInputText(),
      'promo3_img'        => new sfWidgetFormInputText(),
      'promo3_img_title'  => new sfWidgetFormInputText(),
      'promo3_img_alt'    => new sfWidgetFormInputText(),
      'promo3_gallery_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gallery3'), 'add_empty' => true)),
      'promo3_star'       => new sfWidgetFormInputText(),
      'promo3_popis'      => new sfWidgetFormTextarea(),
      'promo3_cena'       => new sfWidgetFormInputText(),
      'promo3_link'       => new sfWidgetFormInputText(),
      'promo4_title'      => new sfWidgetFormInputText(),
      'promo4_img'        => new sfWidgetFormInputText(),
      'promo4_img_title'  => new sfWidgetFormInputText(),
      'promo4_img_alt'    => new sfWidgetFormInputText(),
      'promo4_gallery_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gallery4'), 'add_empty' => true)),
      'promo4_star'       => new sfWidgetFormInputText(),
      'promo4_popis'      => new sfWidgetFormTextarea(),
      'promo4_cena'       => new sfWidgetFormInputText(),
      'promo4_link'       => new sfWidgetFormInputText(),
      'baner1_img'        => new sfWidgetFormInputText(),
      'baner1_img_title'  => new sfWidgetFormInputText(),
      'baner1_img_alt'    => new sfWidgetFormInputText(),
      'baner1_link'       => new sfWidgetFormInputText(),
      'baner2_img'        => new sfWidgetFormInputText(),
      'baner2_img_title'  => new sfWidgetFormInputText(),
      'baner2_img_alt'    => new sfWidgetFormInputText(),
      'baner2_link'       => new sfWidgetFormInputText(),
      'baner3_img'        => new sfWidgetFormInputText(),
      'baner3_img_title'  => new sfWidgetFormInputText(),
      'baner3_img_alt'    => new sfWidgetFormInputText(),
      'baner3_link'       => new sfWidgetFormInputText(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
      'slug'              => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'              => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'link_h1'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'title_seo'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'keywords'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'title_str'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'top_img'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'top_img_title'     => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'top_img_alt'       => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'popis_levy'        => new sfValidatorString(array('required' => false)),
      'popis_pravy'       => new sfValidatorString(array('required' => false)),
      'region'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'vzdalenost'        => new sfValidatorInteger(array('required' => false)),
      'img1'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'img1_title'        => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'img1_alt'          => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'img2'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'img2_title'        => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'img2_alt'          => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'img3'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'img3_title'        => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'img3_alt'          => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'img4'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'img4_title'        => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'img4_alt'          => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'promo1_title'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'promo1_img'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'promo1_img_title'  => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'promo1_img_alt'    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'promo1_gallery_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Gallery1'), 'required' => false)),
      'promo1_star'       => new sfValidatorInteger(array('required' => false)),
      'promo1_popis'      => new sfValidatorString(array('required' => false)),
      'promo1_cena'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'promo1_link'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'promo2_title'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'promo2_img'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'promo2_img_title'  => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'promo2_img_alt'    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'promo2_gallery_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Gallery2'), 'required' => false)),
      'promo2_star'       => new sfValidatorInteger(array('required' => false)),
      'promo2_popis'      => new sfValidatorString(array('required' => false)),
      'promo2_cena'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'promo2_link'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'promo3_title'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'promo3_img'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'promo3_img_title'  => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'promo3_img_alt'    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'promo3_gallery_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Gallery3'), 'required' => false)),
      'promo3_star'       => new sfValidatorInteger(array('required' => false)),
      'promo3_popis'      => new sfValidatorString(array('required' => false)),
      'promo3_cena'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'promo3_link'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'promo4_title'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'promo4_img'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'promo4_img_title'  => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'promo4_img_alt'    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'promo4_gallery_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Gallery4'), 'required' => false)),
      'promo4_star'       => new sfValidatorInteger(array('required' => false)),
      'promo4_popis'      => new sfValidatorString(array('required' => false)),
      'promo4_cena'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'promo4_link'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'baner1_img'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'baner1_img_title'  => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'baner1_img_alt'    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'baner1_link'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'baner2_img'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'baner2_img_title'  => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'baner2_img_alt'    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'baner2_link'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'baner3_img'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'baner3_img_title'  => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'baner3_img_alt'    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'baner3_link'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
      'slug'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'Stranka', 'column' => array('name'))),
        new sfValidatorDoctrineUnique(array('model' => 'Stranka', 'column' => array('slug'))),
      ))
    );

    $this->widgetSchema->setNameFormat('stranka[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Stranka';
  }

}
