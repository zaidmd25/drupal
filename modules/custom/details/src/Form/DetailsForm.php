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
			$form['candidate_email'] = array(
				'#type' => 'textfield',
				'#title' => t('Candidate email:'),
				'#required' => TRUE,
			);

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