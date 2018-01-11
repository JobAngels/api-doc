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