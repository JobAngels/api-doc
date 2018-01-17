# Group Location

---
**Location attributes:**
- id `(number)` : Unique identifier.
- job_id `(number)` : Identifier of job
- country_key `(string)` : Country of workplace as country code with two-letter (ISO 3166-1 alpha-2).
- street `(string)` : Street of workplace with number.
- city `(string)` : City of workplace.
- postal_code `(string)` : Postal code of workplace.
- region `(string)` : Region of workplace.
- lat `(number)`: Latitude of workplace.
- lng `(number)`: Longitude of workplace.


---
## Colletion [/locations]

### List [GET]

+ Response 200 (application/json)

        [
            {
                  "id": 351,
                  "job_id": 1,
                  "country_key": "SK",
                  "street": "Jakubovo nám. 13",
                  "city": "Bratislava",
                  "postal_code": "811 09",
                  "region": "Bratislavský kraj",
                  "lat": 48.1459258,
                  "lng": 17.1071938  
            },
            {
                  "id": 351,
                  "job_id": 1,
                  "country_key": "SK",
                  "street": "Černyševského 10",
                  "city": "Petržalka",
                  "postal_code": "85104",
                  "region": "Bratislavský kraj",
                  "lat": 48.3804996,
                  "lng": 17.5877285    
            }
        ]

+ Response 403 (application/json)

        {
            "error": "Unauthorized",
            "message" : "The request was valid, but the server is refusing action. The user might not have the necessary permissions for a resource, or may need an account of some sort."
        }