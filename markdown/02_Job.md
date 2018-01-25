# Group Job

**Job attributes:**

- id `(number)` : Unique identifier.
- key `(number)` : Unique string identifier (8 characters).
- name `(string)` : Job position name.
- url `(string)` : Job as URL on JobAngels.co.
- cover `(string)` : Job cover as URL in origin size.
- reward `(object)` : Reward for possible hiring (total, angel, currency).
- salary `(object)` : Salary as range (min, max, currency). Showing only if salary is not hidden.
- status `(string)` : Current status of job.
- lang `(string)`: Job language represented as key (two characters: sk, cs, en).
- locations `(object)`: Job locations.
- field_of_work `(object)` : Job field of work as object (id, name).


**Job statuses:**
<table>
    <tr>
        <th> draft </th>
        <th> The job is only in draft version and it's not published. </th>    
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
        <th> id </th>
        <th> name </th>
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
        <td> Education, Science & Research </td>
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
        <td> Construction, Architecture & Real Estates </td>
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


## Colletion [/jobs{?fields,field_of_work,status,page,limit}]

### List [GET]

+ Parameters
    + field_of_work: 1 (number, optional) - Return jobs only with this field of work
    + status (string, optional) - Current status of job (Job statuses.)
    + page (number, optional) - The current page number.
        + Default: 1
    + limit (number, optional) - Maximum of results. Limit can be a number from 1 - 100.
        + Default: 10
        

+ Response 200 (application/json)

        {
            "success": true,
            "data": [
                {
                    "id": 15,
                    "key": "ab2dh6fe",
                    "name": "PHP Programmer",
                    "company_id": 1,
                    "url": "https://jobangels.com/ab2dh6fe/PHP-Programmer",
                    "reward": {
                        total: 1200,
                        angel: 600,
                        currency: "EUR"
                    },
                    "salary": {
                        min: 1200,
                        max: 2500,
                        currency: "EUR"
                    },
                    "status": "published"
                },
                {
                    "id": 248,
                    "key": "poklrei7",
                    "name": "Sales Manager - Praha",
                    "company_id": 2,
                    "url": "https://jobangels.com/poklrei7/Sales-Manager-Praha",
                    "reward": {
                        total: 450,
                        angel: 225,
                        currency: "EUR"
                    },
                    "salary": {
                        min: 25000,
                        max: 35000,
                        currency: "CZK"
                    },
                    "status": "closed"
                }
            ],
            "page": 1,
            "perPage": 2,
            "itemCount": 513,
            "prevPage": null,
            "nextPage": "/jobs?page=2"
        }

+ Response 403 (application/json)

        {
            "success": false
            "errors": [
                {
                    "code": 403,
                    "message" : "The request was valid, but the server is refusing action. The user might not have the necessary permissions for a resource, or may need an account of some sort."
                }
            ]
        }

## Job [/jobs/{id}]

+ Parameters
    + id (required, number, `1`) - Numeric `id` of the job to perform action with.


### Detail of job [GET] 

+ Response 200

        {
            "success": true,
            "data": {
                "id": 15,
                "key": "ab2dh6fe",
                "name": "PHP Programmers",
                "url": "https://jobangels.com/ab2dh6fe/PHP-Programmer",
                "cover": "https://jobangels.net/jobangels/image/upload/c_crop,h_1732,w_3694,x_0,y_240/c_fill,h_450,w_960/4bc9372c0583fa97fd062eda271c98dc0c442185c9791b13c11cf063788f21cfd30e84f5.jpg",
                "company_id": 1,
                "lang": "sk",
                "reward": {
                    total: 1200,
                    angel: 600,
                    currency: "EUR"
                },
                "salary": {
                    min: 1200,
                    max: 2500,
                    currency: "EUR"
                },
                "status": "published",
                "locations":[
                    {
                          "id": 351,
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
                          "country_key": "SK",
                          "street": "Černyševského 10",
                          "city": "Petržalka",
                          "postal_code": "85104",
                          "region": "Bratislavský kraj",
                          "lat": 48.3804996,
                          "lng": 17.5877285    
                    }
                ],
                "field_of_work": {
                    "id": 2,
                    "name": "IT & Telecommunication"
                }
            }
        }

+ Response 401 (application/json)

        {
            "success": false
            "errors": [
                {
                    "code": 401,
                    "message" : "Sorry, your access token is invalid or has been expired."
                }
            ]
        }

### Update job [PUT]

+ Request (application/json)

        {
            "name": "PHP Junior Programmer",
            "reward": {
                total: 2000
            }
        }
        
+ Response 200 (application/json)
    
        {
            "success": true,
            "data": {
                "id": 15,
                "key": "ab2dh6fe",
                "name": "PHP Junior Programmer",
                "url": "https://jobangels.com/ab2dh6fe/PHP-Programmer",
                "cover": "https://jobangels.net/jobangels/image/upload/c_crop,h_1732,w_3694,x_0,y_240/c_fill,h_450,w_960/4bc9372c0583fa97fd062eda271c98dc0c442185c9791b13c11cf063788f21cfd30e84f5.jpg",
                "company_id": 1,
                "lang": "sk",
                "reward": {
                    total: 2000,
                    angel: 1000,
                    currency: "EUR"
                },
                "salary": {
                    min: 1200,
                    max: 2500,
                    currency: "EUR"
                },
                "status": "published",
                "locations":[
                    {
                          "id": 351,
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
                          "country_key": "SK",
                          "street": "Černyševského 10",
                          "city": "Petržalka",
                          "postal_code": "85104",
                          "region": "Bratislavský kraj",
                          "lat": 48.3804996,
                          "lng": 17.5877285    
                    }
                ],
                "field_of_work": {
                    "id": 2,
                    "name": "IT & Telecommunication"
                }
            }
        }

+ Response 401 (application/json)

        {
            "success": false
            "errors": [
                {
                    "code": 401,
                    "message" : "Sorry, your access token is invalid or has been expired."
                }
            ]
        }



## Job Applications Collection [/jobs/{id}/applications{?status,page,limit}]

+ Parameters
    + id (number, required, `15`) - Job identifier as integer.
    + status (string, optional) - Status of application (new, viewed, hired, rejected, released).
    + page (number, optional) - The current page number.
        + Default: 1
    + limit (number, optional) - Maximum of results. Limit can be a number from 1 - 100.
        + Default: 10


### List of job applications [GET]

+ Response 200 (application/json)

        [
            "success": true,
            "data": [
                {
                    "id": 1512,
                    "fname": "Peter",
                    "sname": "K.",
                    "application_date": "2018-01-11T08:40:51.620Z",
                    "status": "new"
                },
                {
                    "id": 248,
                    "fname": "Jaroslav",
                    "sname": "Novotný",
                    "application_date": "2018-01-14T18:34:17.186Z",
                    "viewed_date": "2018-01-15T09:03:52.152Z",
                    "status": "viewed"
                }
            ],
            "page": 1,
            "perPage": 2,
            "itemCount": 7,
            "prevPage": null,
            "nextPage": "/jobs/1/applications?page=2"


+ Response 403 (application/json)

        {
            "success": false
            "errors": [
                {
                    "code": 403,
                    "message" : "The request was valid, but the server is refusing action. The user might not have the necessary permissions for a resource, or may need an account of some sort."
                }
            ]
        }

## Job Application [/jobs/{id}/applications/{application_id}]




## Job Locations Collection [/jobs/{id}/locations{?status,page,limit}]

+ Parameters
    + id (number, required, `15`) - Company identifier as integer.
    + status (string, optional) - Status of application (new, viewed, hired, rejected, released).
    + page (number, optional) - The current page number.
        + Default: 1
    + limit (number, optional) - Maximum of results. Limit can be a number from 1 - 100.
        + Default: 10

### Retrive List of job locations [GET]

+ Response 200 (application/json)

        {
            "success": true,
            "data": [
                {
                      "id": 351,
                      "job_id": 15,
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
                      "job_id": 15,
                      "country_key": "SK",
                      "street": "Černyševského 10",
                      "city": "Petržalka",
                      "postal_code": "85104",
                      "region": "Bratislavský kraj",
                      "lat": 48.3804996,
                      "lng": 17.5877285    
                }
            ],
            "page": 1,
            "perPage": 2,
            "itemCount": 7,
            "prevPage": null,
            "nextPage": "/jobs/1/locations?page=2"
        }

+ Response 403 (application/json)

        {
            "success": false,
            "errors": [
                {
                    "code": 403,
                    "message" : "The request was valid, but the server is refusing action. The user might not have the necessary permissions for a resource, or may need an account of some sort."
                }
            ]
        }

### Create new job location [POST]

+ Request (application/json)

        {
            "address": "Jakubovo nám. 13, Bratislava"
        }

   
+ Response 201 (application/json)

        {
            "success": true,
            "data" :{
                "id": 153,
                "country_key": "SK",
                "street": "Jakubovo námestie 13",
                "city": "Bratislava",
                "postal_code": "811 09",
                "region": "Bratislavský kraj",
                "lat": 48.1459258,
                "lng": 17.1071938 
            }
        }


+ Response 401 (application/json)

        {
            "success": false,
            "errors": [
                {
                    "code": 401,
                    "message" : "Sorry, your access token is invalid or has been expired."
                }
            ]
        }

+ Response 403 (application/json)

        {
            "success": false
            "errors": [
                {
                    "code": 403,
                    "message" : "The request was valid, but the server is refusing action. The user might not have the necessary permissions for a resource, or may need an account of some sort."
                }
            ]
        }

## Job Location [/jobs/{id}/locations/{location_id}]

### Update Job Location [PUT]

+ Request (application/json)

        {
            "address": "Černyševského 10, Bratislava"
        }

   
+ Response 201 (application/json)

        {
            "success": true,
            "data" :{
                "id": 153,
                "country_key": "SK",
                "street": "Černyševského 10",
                "city": "Petržalka",
                "postal_code": "85105",
                "region": "Bratislavský kraj",
                "lat": 48.1459258,
                "lng": 17.1071938 
            }
        }


+ Response 401 (application/json)

        {
            "success": false,
            "errors": [
                {
                    "code": 401,
                    "message" : "Sorry, your access token is invalid or has been expired."
                }
            ]
        }

+ Response 403 (application/json)

        {
            "success": false
            "errors": [
                {
                    "code": 403,
                    "message" : "The request was valid, but the server is refusing action. The user might not have the necessary permissions for a resource, or may need an account of some sort."
                }
            ]
        }

### Delete Job Location [DELETE]
   
+ Response 204 (application/json)

+ Response 401 (application/json)

        {
            "success": false,
            "errors": [
                {
                    "code": 401,
                    "message" : "Sorry, your access token is invalid or has been expired."
                }
            ]
        }

+ Response 403 (application/json)

        {
            "success": false
            "errors": [
                {
                    "code": 403,
                    "message" : "The request was valid, but the server is refusing action. The user might not have the necessary permissions for a resource, or may need an account of some sort."
                }
            ]
        }
