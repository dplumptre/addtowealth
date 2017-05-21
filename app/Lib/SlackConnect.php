<?php

namespace App\Lib;

class SlackConnect
{
    private $url;
    private $dataToPost;

    /**
     * @param $url  String  Webhook URL
     */
    public function __construct($url)
    {
        $this->url = $url;

        $this->dataToPost = array(
            'username' => '___A2W_ Bot',

//            'attachments' => array(
//                // Placeholder array for image attachment
//                array(),
//
//                // Placeholder array for fields
//                array(
//                    'fields' => array(),
//                ),
//            ),
        );
    }

    public function send()
    {
        $dataToPost = array(
            'payload' => json_encode($this->dataToPost),
        );

        // Initialize cURL
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->url);
        curl_setopt($curl, CURLOPT_POST, sizeof($dataToPost));
        curl_setopt($curl, CURLOPT_POSTFIELDS, $dataToPost);
        $result = curl_exec($curl);
        curl_close($curl);
    }

    /**
     * Adds a fields to the message. Fields will be displayed in a table inside the message attachment.
     *
     * @param $title    String  Shown as a bold heading above the value text.
     * @param $value    String  The text value of the field. It may contain standard message markup (see details below). May be multi-line.
     * @param $short    bool    An optional flag indicating whether the value is short enough to be displayed side-by-side with other values.
     */
    public function addField($title, $value, $short = false)
    {
        $arrayToPush = array(
            'title' => $title,
            'value' => $value,
            'short' => $short
        );

        array_push($this->dataToPost['attachments'][1]['fields'], $arrayToPush);
    }

    /**
     * Adds an image attachment to the message.
     * @param $fallback     String  A plain-text summary of the attachment.
     * @param $imageUrl     String  A valid URL to an image file. Supported formats: GIF, JPEG, PNG, and BMP.
     * @param $imageThumb   String  A valid URL to an image file. Supported formats: GIF, JPEG, PNG, and BMP.
     */
    public function setImage($fallback, $imageUrl = '', $imageThumb = '')
    {
        if ($imageThumb === '' && $imageThumb === '') {
            throw new InvalidArgumentException('imageUrl and imageThumb can\'t be both empty.');
        }

        $arrayToPush = array(
            'fallback' => $fallback,
            'image_url' => $imageUrl,
            'thumb_url' => $imageThumb,
        );

        array_push($this->dataToPost['attachments'], $arrayToPush);
    }

    /**
     * Set the main text of the message
     * @param $message  String
     */
    public function setMessage($message)
    {
        $this->dataToPost['text'] = $message;
    }
}