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
            "name": "PHP Programmers",
            "status": "published",
            "created": "2015-08-05T08:40:51Z"
        }

### Retrieve a Job [GET] 
+ Response 200

        [Job][]

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