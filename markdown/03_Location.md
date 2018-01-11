# Group Location
Represents company details.

---
**Location attributes:**
- id `(number)` : Unique identifier.
- country_key `(string)` : Country of workplace as country code with two-letter (ISO 3166-1 alpha-2).
- street `(string)` : Street of workplace with number.
- city `(string)` : Company of workplace city.
- postal_code `(string)` : Postal code.

---
## Location Colletion [/location]

### Create a Location [PUT]
+ Request (application/json)

        {
            "name": "JobAngels.co, s.r.o.",
            "business_id": "47944129",
            "country_key": "SK"
        }
                
        
+ Response 201 (application/json)

        {
            "id": 1
            "name": "JobAngels.co, s.r.o.",
            "business_id": "47944129",
            "country_key": "SK"
        }

+ Response 401 (application/json)

        {
            "error": "Unauthorized reqest.",
            "message" : "Sorry, your access token is invalid or has been expired."
        }