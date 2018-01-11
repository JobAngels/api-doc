FORMAT: 1A
HOST: https://api.jobangels.com

# JobAngels API Documentation v0.1
JobAngels API ponúka základnú správu pracovných ponúk a k ním priradený firemný profil. Umožňuje tiež získavať informácie o uchádzačoch, ktorý sa uchádzajú na danú pozíciu.

# Allowed HTTPs requests:
<pre>
GET    : Get a resource or list of resources
PUT    : To create resource
POST   : To update resource 
DELETE : To delete resource
</pre>

# Description Of Usual Server Responses:
- 200 `OK` - the request was successful (some API calls may return 201 instead).
- 201 `Created` - the request was successful and a resource was created.
- 204 `No Content` - the request was successful but there is no representation to return (i.e. the response is empty).
- 400 `Bad Request` - the request could not be understood or was missing required parameters.
- 401 `Unauthorized` - authentication failed or user doesn't have permissions for requested operation.
- 403 `Forbidden` - access denied.
- 404 `Not Found` - resource was not found.
- 405 `Method Not Allowed` - requested method is not supported for resource.
- 2001 `Already exists` - the request was successful but the creating resourse already exists.
- 2002 `Limited` - the request was successfull but you have limited resource creation.

# Group Company
Represents company details.

---
**Company attributes:**

- id `(number)` : Unique identifier.
- name `(string)` : Company name.
- brand_name `(string)` : Brand name.
- logo `(string)` : Company logo as URL.
- profile_url `(string)` : Company profile as URL on JobAngels.co.
- country_key `(string)` : Unique identifer of country as code with two-letter (ISO 3166-1 alpha-2).
- street `(string)` : Company street with number.
- city `(string)` : Company city.
- postal_code `(string)` : Postal code.
- status `(string)` : Current status of company.
- size `(number)` : Size of company represented as number (Company size).
- business_id `(string)` : Company business identification number in their country (ex. IČO).
- tax_number `(string)` : Tax identification number to identify taxpayers of their national tax affairs.
- vat_number `(string)` : VAT identification number.

**Company statuses:**
<table>
    <tr>
        <td> active </td>
        <td> The company has an active package and company profile is published. </td>    
    </tr>
    <tr>
        <td> unpublished </td>
        <td> The company has an active package but company profile is unpublished. </td> 
    </tr>
    <tr>
        <td> paused </td>
        <td> The company has not active package. </td> 
    </tr>
    <tr>
        <td> blocked </td>
        <td> The company is blocked. </td> 
    </tr>
</table>


**Company sizes:**
<table>
    <tr>
        <td>1</td>
        <td>freelancer</td>
    </tr>
    <tr>
        <td>2</td>
        <td>startup</td>
    </tr>
    <tr>
        <td>3</td>
        <td>small business (less than 15 employees)</td>
    </tr>
    <tr>
        <td>4</td>
        <td>medium business (less than 200 employees)</td>
    </tr>
    <tr>
        <td>5</td>
        <td>large business (more than 200 employees)</td>
    </tr>
    <tr>
        <td>6</td>
        <td>non-profit organization</td>
    </tr>
    <tr>
        <td>7</td>
        <td>educational institution</td>
    </tr>
</table>

---
## Company Colletion [/companies{?business_id,country_key,status,page,limit}]
### List all companies [GET]
Retrive paginated list of companies.

+ Parameters
    + business_id: `0123456789` (string, optional) - Company identification numbers in specified country. (ex. IČO in SR)
    + country_key: SK (string, optional) - Country Code (ISO 3166-1 alpha-2).
    + status (string, optional) - Current status of company. Possible values are active|paused|uncompleted|blocked
    + page (number, optional) - The current page number.
        + Default: 1
    + limit (number, optional) - Maximum of results. Limit can be a number from 1 - 100.
        + Default: 10
        

+ Response 200 (application/json)

        [
            {
                "id": 1,
                "created": "2015-08-05T08:40:51Z",
                "name": "JobAngels.co, s.r.o.",
                "brand_name": "JobAngels & Challengest",
                "business_id": "47944129",
                "country_key": "SK",
                "status": "active"
            },
            {
                "id": 2,
                "created": "2017-08-07T09:32:35Z",
                "name": "Challengest, s.r.o.",
                "brand_name": "Challengest, s.r.o.",
                "business_id": "462422156",
                "country_key": "SK",
                "status": "uncompleted"
            }
        ]

+ Response 403 (application/json)

        {
            "error": "Unauthorized",
            "message" : "The request was valid, but the server is refusing action. The user might not have the necessary permissions for a resource, or may need an account of some sort."
        }

### Create a Company [PUT]
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
            
        
+ Response 2001 (application/json)

        {
            "error": "Already exists.",
            "message" : "Sorry, company with this business_id and country_key already exists."
        }

+ Response 2002 (application/json)

        {
            "error": "Only one.",
            "message" : "Sorry, you can create only one main company profile."
        }


+ Response 401 (application/json)

        {
            "error": "Unauthorized reqest.",
            "message" : "Sorry, your access token is invalid or has been expired."
        }

## Company [/companies/{id}]
A single Company object with all its details

+ Parameters
    + id (required, number, `1`) - Numeric `id` of the Company to perform action with.

### Retrieve a Company [GET] 
+ Response 200 (application/json)
    
        {
            "id": 1,
            "name": "JobAngels.co, s.r.o.",
            "brand_name": "JobAngels & Challengest",
            "logo": "https://jobangels.net/jobangels/image/upload/c_fit,h_76,w_76/v1486575885/05e9e3222762786d18e8da2c97fb6fcf47888b33665978c2ca0c8d4c9abd72d71a27c80b.png",
            "profile_url": "https://jobangels.com/JobAngels&Challengest",
            "country_key": "SK"
            "street": "",
            "city": "",
            "postal_code": "",
            "status": "uncompleted",
            "size": null,
            "business_id": "47944129",
            "tax_id_number": "",
            "vat_number": "",
            "created": "2015-08-05T08:40:51Z"
        }

+ Response 401 (application/json)

        {
            "error": "Unauthorized reqest.",
            "message" : "Sorry, your access token is invalid or has been expired."
        }

### Update a Company [POST]
Update company details

+ Request (application/json)

        {
            "id": 1,
            "street": "Jakubovo námestie 13",
            "city": "Bratislava",
            "postal_code": "811 09",
            "size": 2,
            "business_id": "47944129",
            "tax_id_number": "2024155210",
            "vat_number": "SK2024155210"
        }
        
+ Response 200 (application/json)
    
        {
            "id": 1,
            "name": "JobAngels.co, s.r.o.",
            "brand_name": "JobAngels & Challengest",
            "logo": "https://jobangels.net/jobangels/image/upload/c_fit,h_76,w_76/v1486575885/05e9e3222762786d18e8da2c97fb6fcf47888b33665978c2ca0c8d4c9abd72d71a27c80b.png",
            "profile_url": "https://jobangels.com/JobAngels&Challengest",
            "country_key": "SK"
            "street": "Jakubovo námestie 13",
            "city": "Bratislava",
            "postal_code": "811 09",
            "status": "active",
            "size": 2,
            "business_id": "47944129",
            "tax_id_number": "2024155210",
            "vat_number": "SK2024155210",
            "created": "2015-08-05T08:40:51Z"
        }

+ Response 401 (application/json)

        {
            "error": "Unauthorized reqest.",
            "message" : "Sorry, your access token is invalid or has been expired."
        }


## Company Jobs [/companies/{id}/jobs{?status,page,limit}]
Jobs for company object with simple details

+ Parameters:
    + id (number, required, `1`) - Company identifier as integer.
    + status (string, optional, `published`) - Current status of job.
    + page (number, optional) - The current page number.
        + Default: 1
    + limit (number, optional) - Maximum of results. Limit can be a number from 1 - 100.
        + Default: 10

### Retrive Company Jobs [GET]

+ Response 200 (application/json)

        [
            {
                "id": 15,
                "key": "ab2dh6fe",
                "name": "PHP Programmer",
                "status": "published"
            },
            {
                "id": 248,
                "key": "poklrei7",
                "name": "Sales Manager",
                "status": "closed"
            },
        ]

+ Response 403 (application/json)

        {
            "error": "Unauthorized",
            "message" : "The request was valid, but the server is refusing action. The user might not have the necessary permissions for a resource, or may need an account of some sort."
        }

# Group Job
Represents company details.

---
**Job attributes:**

- id `(number)` : Unique identifier.
- key `(number)` : Unique string identifier (8 characters).
- name `(string)` : Job position name.
- url `(string)` : Job as URL on JobAngels.co.
- cover `(string)` : Job cover as URL in origin size.
- reward `(number)` : Angel reward.
- status `(string)` : Current status of job.
- lang `(string)`: Job language represented as key (two characters: sk, cs, en).
- locations `(object)`: Job locations.
- field_of_work_id `(number)` : Job field of work as ID.


**Job statuses:**
<table>
    <tr>
        <td> draft </td>
        <td> The job is only in draft version and it's not published. </td>    
    </tr>
    <tr>
        <td> published </td>
        <td> The job is published. </td> 
    </tr>
    <tr>
        <td> closed </td>
        <td> The job is closed. </td> 
    </tr>
    <tr>
        <td> blocked </td>
        <td> The job is blocked. </td> 
    </tr>
</table>


**Fields of work:**
<table>
    <tr>
        <td> **id** </td>
        <td> **name** </td>
    </tr>
    <tr>
        <td> 1 </td>
        <td> Client Management & Business Development </td>
    </tr>
    <tr>
        <td> 2 </td>
        <td> IT & Telecommunication </td>
    </tr>
    <tr>
        <td> 3 </td>
        <td> Production & Manufacturing </td>
    </tr>
    <tr>
        <td> 4 </td>
        <td> Marketing & PR </td>
    </tr>
    <tr>
        <td> 5 </td>
        <td> Administrative & Assistant jobs </td>
    </tr>
    <tr>
        <td> 6 </td>
        <td> Audit & Consultancy </td>
    </tr>
    <tr>
        <td> 7 </td>
        <td> Banking & Finance </td>
    </tr>
    <tr>
        <td> 8 </td>
        <td> "Education, Science & Research" </td>
    </tr>
    <tr>
        <td> 9 </td>
        <td> Engineering </td>
    </tr>
    <tr>
        <td> 10</td>
        <td> Creative & Design jobs </td>
    </tr>
    <tr>
        <td> 11</td>
        <td> Agriculture </td>
    </tr>
    <tr>
        <td>12</td>
        <td> Healthcare </td>
    </tr>
    <tr>
        <td>13</td>
        <td> "Logistics, Transportation" </td>
    </tr>
    <tr>
        <td>14</td>
        <td> Economics and Accountancy </td>
    </tr>
    <tr>
        <td>15</td>
        <td> Law </td>
    </tr>
    <tr>
        <td>16</td>
        <td> "Construction, Architecture & Real Estates" </td>
    </tr>
    <tr>
        <td>17</td>
        <td> Automotive </td>
    </tr>
    <tr>
        <td>18</td>
        <td> Electrical and Power Engineering </td>
    </tr>
    <tr>
        <td>19</td>
        <td> Travel & Hospitality jobs </td>
    </tr>
    <tr>
        <td>20</td>
        <td> Customer Support </td>
    </tr>
    <tr>
        <td>21</td>
        <td> Quality Assurance </td>
    </tr>
    <tr>
        <td>22</td>
        <td> Human Resources </td>
    </tr>
    <tr>
        <td>23</td>
        <td> Insurance jobs </td>
    </tr>
    <tr>
        <td>24</td>
        <td> Pharmacy </td>
    </tr>
    <tr>
        <td>25</td>
        <td> Safety & Protection </td>
    </tr>
    <tr>
        <td>26</td>
        <td> Chemical Industry </td>
    </tr>
    <tr>
        <td>27</td>
        <td> Journalism </td>
    </tr>
    <tr>
        <td>28</td>
        <td> Fashion </td>
    </tr>
    <tr>
        <td>29</td>
        <td> Public Sector </td>
    </tr>
    <tr>
        <td>30</td>
        <td> Translation and Interpretation </td>
    </tr>
    <tr>
        <td>31</td>
        <td> Retail jobs </td>
    </tr>
    <tr>
        <td>32</td>
        <td> Game Development </td>
    </tr>
    <tr>
        <td>33</td>
        <td> E-commerce </td>
    </tr>
    <tr>
        <td>34</td>
        <td> Retail </td>
    </tr>
    <tr>
        <td>35</td>
        <td> Services </td>
    </tr>
</table>

---
## Job Colletion [/jobs{?field_of_work,status,page,limit}]

### List all companies [GET]
Retrive paginated list of companies.

+ Parameters
    + field_of_work: 1 (number, optional) - Return jobs only with this field of work
    + status (string, optional) - Current status of job (Job statuses.)
    + page (number, optional) - The current page number.
        + Default: 1
    + limit (number, optional) - Maximum of results. Limit can be a number from 1 - 100.
        + Default: 10
        

+ Response 200 (application/json)

        [
            {
                "id": 15,
                "key": "ab2dh6fe",
                "name": "PHP Programmer",
                "status": "published"
            },
            {
                "id": 248,
                "key": "poklrei7",
                "name": "Sales Manager",
                "status": "closed"
            },
        ]

+ Response 403 (application/json)

        {
            "error": "Unauthorized",
            "message" : "The request was valid, but the server is refusing action. The user might not have the necessary permissions for a resource, or may need an account of some sort."
        }

### Create a Job [PUT]
+ Request (application/json)

        {
            "name": "PHP Programmer"
        }
                
        
+ Response 201 (application/json)

        {
            "id": 15,
            "key": "ab2dh6fe",
            "name": "PHP Programmer",
            "status": "published"
        }
            
        
+ Response 2001 (application/json)

        {
            "error": "Already exists.",
            "message" : "Sorry, company with this business_id and country_key already exists."
        }

+ Response 2002 (application/json)

        {
            "error": "Only one.",
            "message" : "Sorry, you can create only one main company profile."
        }


+ Response 401 (application/json)

        {
            "error": "Unauthorized reqest.",
            "message" : "Sorry, your access token is invalid or has been expired."
        }

## Job [/jobs/{id}]
A single Job object with all its details

+ Parameters
    + id (required, number, `1`) - Numeric `id` of the Company to perform action with.

+ Model (application/json)
        
        {
            "id": 15,
            "key": "ab2dh6fe",
            "name": "PHP Programmer",
            "status": "published",
            "created": "2015-08-05T08:40:51Z"
        }

### Retrieve a Job [GET] 
+ Response 200

    [Job]

+ Response 401 (application/json)

        {
            "error": "Unauthorized reqest.",
            "message" : "Sorry, your access token is invalid or has been expired."
        }

### Update a Job [POST]
Update job details

+ Request (application/json)

        {
            "id": 15,
            "key": "ab2dh6fe",
            "name": "PHP Junior Programmer"
        }
        
+ Response 200 (application/json)
    
        {
            "id": 15,
            "key": "ab2dh6fe",
            "name": "PHP Junior Programmer",
            "status": "published",
            "created": "2015-08-05T08:40:51Z"
        }

+ Response 401 (application/json)

        {
            "error": "Unauthorized reqest.",
            "message" : "Sorry, your access token is invalid or has been expired."
        }

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

# Group Changelog
---

## 0.2 (2018-01-11)
**Add Resources**
- Job resourse - basic


## 0.1 (2018-01-10)
**Add Resources**
- Company resourse - basic

