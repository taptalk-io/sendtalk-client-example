```
curl --location --request POST 'https://sendtalk-api.taptalk.io/api/v1/verification/create_whatsapp_verification' \
--header 'API-Key: {{SENDTALK_API_KEY}}' \
--header 'Content-Type: application/json' \
--data-raw '{
    "userPhone": "{{RECIPIENT_PHONE}}",
    "languageCode": "en|id",
    "expiryMinutes": 10,
    "appURL": ""
}'
```