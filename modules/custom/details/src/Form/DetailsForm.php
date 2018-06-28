<?php

namespace Drupal\details\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\FormBuilderInterface;

class DetailsForm extends FormBase{
  /**
   * {@inheritdoc}
   */
		public function getFormId() {
			return 'details_form';
		}

		public function buildForm(array $form, FormStateInterface $form_state) {

			$form['candidate_firstname'] = array(
				'#type' => 'textfield',
				'#title' => t('Candidate FirstName:'),
				'#required' => TRUE,
			);

			$form['candidate_lastname'] = array(
				'#type' => 'textfield',
				'#title' => t('Candidate LastName:'),
				'#required' => TRUE,
			);
			$form['candidate_address'] = array(
				'#type' => 'textfield',
				'#title' => t('Candidate Address:'),
				'#required' => TRUE,
			);

			$form['actions']['#type'] = 'actions';
			$form['actions']['submit'] = [
				'#type' => 'submit',
				'#value' => t('Save'),
				'#button_type' => 'primary',
			];

			return $form;
		}

		public function submitForm(array &$form, FormStateInterface $form_state) {

			foreach ($form_state->getValues() as $key => $value) {
				drupal_set_message($key . ': ' . $value);
			}

		}
	  // public function hello(){
	  // 	return array(
	  // 		'#title' => 'hello world',
	  // 		'#markup' => 'This is some content'
	  // 	);
}