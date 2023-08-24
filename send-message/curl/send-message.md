**OTP or Text**

```
curl --location --request POST 'https://sendtalk-api.taptalk.io/api/v1/message/send_whatsapp' \
--header 'API-Key: {{SENDTALK_API_KEY}}' \
--header 'Content-Type: application/json' \
--data-raw '{
    "phone": "{{RECIPIENT_PHONE}}",
    "messageType": "otp|text",
    "body": "Hello world"
}'
```

**Image**

```
curl --location --request POST 'https://sendtalk-api.taptalk.io/api/v1/message/send_whatsapp' \
--header 'API-Key: {{SENDTALK_API_KEY}}' \
--header 'Content-Type: application/json' \
--data-raw '{
    "phone": "{{RECIPIENT_PHONE}}",
    "messageType": "image",
    "body": "https://example.com/image.jpg",
    "filename": "imagejpg",
    "caption": "Check out this image!"
}'
```
