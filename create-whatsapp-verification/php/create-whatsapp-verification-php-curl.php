<?php
/**
 * Create a WhatsApp Verification via SendTalk.
 *
 * @param  string   $api_key        API key from SendTalk.
 * @param  string   $user_phone     User's phone number to be verified (must start with country code).
 * @param  string   $language_code  Language code for the generated verification message ("en" or "id").
 * @param  integer  $expiry_minutes Optional. The expiry duration in minutes.
 * @param  string   $app_url        Optional. App link/URL to be included in the generated verification message.
 * @return response
 */
function sendTalkCreateWhatsAppVerification($api_key, $user_phone, $language_code, $expiry_minutes, $app_url) {
  $curl = curl_init();
  
  $data = [
    'userPhone'    => $user_phone,
    'languageCode' => $language_code
  ];
  if ($expiry_minutes) {
    $data['expiryMinutes'] = $expiry_minutes;
  }
  if ($app_url) {
    $data['appURL'] = $app_url;
  }

  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://sendtalk-api.taptalk.io/api/v1/verification/create_whatsapp_verification',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => array(
      'API-Key: ' . $api_key,
      'Content-Type: application/json'
    ),
  ));

  $response = curl_exec($curl);

  curl_close($curl);
  return $response;
}
