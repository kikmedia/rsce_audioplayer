<?php

return array(
	'label' => array(
		'en' => array('Audio Player', 'Creates an audio player with playlists'),
		'de' => array('Audio Player', 'Erzeugt einen Audioplayer mit Playlist'),
	),
	'types' => array('content'),
	'standardFields' => array('cssID', 'columns', 'headline'),
	'fields' => array(

				'titleImage' => array(
					'label' => array(
						'en' => array('Cover picture', ''),
						'de' => array('Coverbild', ''),
					),
					'inputType' => 'fileTree',
					'eval' => array(
						'fieldType' => 'radio',
						'filesOnly' => true,
						'extensions' => \Config::get('validImageTypes'),
					),
	),


		'boxes' => array(
			'label' => array(
				'en' => array('Elements', ''),
				'de' => array('Elemente', ''),
			),
			'elementLabel' => 'Song %s',
			'inputType' => 'list',
			'fields' => array(
				'image' => array(
					'label' => array(
						'en' => array('Cover', ''),
						'de' => array('Cover', ''),
					),
					'inputType' => 'fileTree',
					'eval' => array(
						'fieldType' => 'radio',
						'filesOnly' => true,
						'extensions' => \Config::get('validImageTypes'),
					),
				),
				'audio_url' => array(
					'label' => array(
						'en' => array('Audio file', ''),
						'de' => array('Audiodatei', ''),
					),
					'inputType' => 'fileTree',
					'eval' => array(
						'fieldType' => 'radio',
						'filesOnly' => true,
						'extensions' => 'mp3',
					),
				),				
				'text' => array(
					'label' => array(
						'en' => array('Description', ''),
						'de' => array('Beschreibung', ''),
					),
					'inputType' => 'text',
				),
			),
		),
	),
);
