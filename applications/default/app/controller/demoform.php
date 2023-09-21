<?php

namespace app\controller;

class DemoForm extends \AppController {

    static protected function action_upload() {
        $POSTparamName = 'file1';
        $response = new \Response();
        $request = new \Request();
        
        try {
            $fileInfos = $request->getUploadedFileInfos($POSTparamName);
        } catch (\Exception $ex) {
            $response->setFailedMessage("Upload", $ex->getMessage());
        }
        if (!getimagesize($fileInfos["tmp_name"])) {
            $response->setFailedMessage('Upload', "The uploaded file '{$fileInfos['basename']}' is not a picture!");
        } else {
            $response->setSuccessMessage("Upload", "Picture '{$fileInfos['basename']}' uploaded successfully!");
        }
        return $response;
    }
    
    static protected function action_getcountries() {
        $items = array();
        $items[] = array('label' => 'France', 'value' => 'fr');
        $items[] = array('label' => 'Spain', 'value' => 'sp');
        $items[] = array('label' => 'United Kingdom', 'value' => 'uk');
        $items[] = array('label' => 'United States', 'value' => 'usa');
        // JSON Response
        $response = new \Response();
        $response->rows = $items;
        $response->success = TRUE;
        return $response;
    }
    
    static protected function action_getcities() {
        $items = array();
        $items[] = array('label' => 'Paris', 'value' => 1);
        $items[] = array('label' => 'Madrid', 'value' => 2);
        $items[] = array('label' => 'London', 'value' => 3);
        $items[] = array('label' => 'Washington', 'value' => 4);
        // JSON Response
        $response = new \Response();
        $response->rows = $items;
        $response->success = TRUE;
        return $response;
    }

    static protected function action_suggestedlang() {
        // Get keyword to find out
        $request = new \Request();
        $keyword = $request->query;

        // Construct the list of suggestions
        $allLang = self::getAllLanguages();
        $suggestions = array();
        foreach($allLang as $value) {
            if(stristr($value, $keyword)) {
                $suggestions[]['label'] = $value;
            }
        }        
        // JSON Response
        $response = new \Response();
        $response->setResponse($suggestions);
        return $response;
    }
    
    static protected function action_validate() {
        // JSON Response
        $response = new \Response();
        // Data validation
        $validator = new \app\validator\MyValidator();
        if ($validator->validate()) {
            $response->setSuccessMessage('Server-side validation',
                'The form data has been validated successfully.');            
        } else {
            $response->setFailedMessage('Server-side validation',
                $validator->getErrorMessage(), $validator->getErrorVariable());
        }
        // Response returned to the front controller
        return $response;
    }

    static private function getAllLanguages() {
        return array('Abkhaz','Afar','Afrikaans','Akan','Albanian','Amharic',
            'Arabic','Aragonese','Armenian','Assamese','Avaric','Avestan','Aymara',
            'Azerbaijani','Bambara','Bashkir','Basque','Belarusian','Bengali','Bihari',
            'Bislama','Bosnian','Breton','Bulgarian','Burmese','Catalan','Chamorro',
            'Chechen','Chichewa','Chinese','Chuvash','Cornish','Corsican','Cree',
            'Croatian','Czech','Danish','Divehi','Dutch','Dzongkha','English','Esperanto',
            'Estonian','Ewe','Faroese','Fijian','Finnish','French','Fula','Galician',
            'Georgian','German','Greek, Modern','Guaraní','Gujarati','Haitian','Hausa',
            'Hebrew (modern)','Herero','Hindi','Hiri Motu','Hungarian','Interlingua',
            'Indonesian','Interlingue','Irish','Igbo','Inupiaq','Ido','Icelandic',
            'Italian','Inuktitut','Japanese','Javanese','Kalaallisut','Kannada',
            'Kanuri','Kashmiri','Kazakh','Khmer','Kikuyu','Kinyarwanda','Kyrgyz',
            'Komi','Kongo','Korean','Kurdish','Kwanyama','Latin','Luxembourgish',
            'Ganda','Limburgish','Lingala','Lao','Lithuanian','Luba-Katanga','Latvian',
            'Manx','Macedonian','Malagasy','Malay','Malayalam','Maltese','Marathi',
            'Marshallese','Mongolian','Nauru','Navajo','North Ndebele','Nepali',
            'Ndonga','Norwegian Nynorsk','Norwegian','Nuosu','South Ndebele','Occitan',
            'Ojibwe','Old Church Slavonic','Oromo','Oriya','Ossetian','Panjabi',
            'Persian (Farsi)','Polish','Pashto, Pushto','Portuguese','Quechua',
            'Romansh','Kirundi','Romanian','Russian','Sanskrit','Sardinian','Sindhi',
            'Northern Sami','Samoan','Sango','Serbian','Scottish Gaelic','Shona',
            'Sinhala','Slovak','Slovene','Somali','Southern Sotho','South Azerbaijani',
            'Spanish','Sundanese','Swahili','Swati','Swedish','Tamil','Telugu',
            'Tajik','Thai','Tigrinya','Tibetan','Turkmen','Tagalog','Tswana','Tonga',
            'Turkish','Tsonga','Tatar','Twi','Tahitian','Uyghur','Ukrainian','Urdu',
            'Uzbek','Venda','Vietnamese','Volapük','Walloon','Welsh','Wolof',
            'Western Frisian','Xhosa','Yiddish','Yoruba','Zhuang','Zulu');
    }

}
