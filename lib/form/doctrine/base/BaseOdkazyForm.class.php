<?php

/**
 * Odkazy form base class.
 *
 * @method Odkazy getObject() Returns the current form's model object
 *
 * @package    dunaverde
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseOdkazyForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'poradi'     => new sfWidgetFormInputText(),
      'name'       => new sfWidgetFormInputText(),
      'link'       => new sfWidgetFormInputText(),
      'publikovat' => new sfWidgetFormInputCheckbox(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'poradi'     => new sfValidatorInteger(array('required' => false)),
      'name'       => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'link'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'publikovat' => new sfValidatorBoolean(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Odkazy', 'column' => array('name')))
    );

    $this->widgetSchema->setNameFormat('odkazy[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Odkazy';
  }

}
