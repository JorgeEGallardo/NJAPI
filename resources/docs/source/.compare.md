---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://adarawellness.site/API/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_ba2b9b1d4e2d2cd69d7dae58626b8155 -->
## api/patientsAll
> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/api/patientsAll" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/patientsAll"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/patientsAll`


<!-- END_ba2b9b1d4e2d2cd69d7dae58626b8155 -->

<!-- START_c7413dfdcc6f7c2fcc380ee36b7b0f9a -->
## api/patientsLogin
> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/api/patientsLogin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/patientsLogin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/patientsLogin`


<!-- END_c7413dfdcc6f7c2fcc380ee36b7b0f9a -->

<!-- START_cdf5e02e9b913556f9304546d59e6c56 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/api/patients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/patients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/patients`


<!-- END_cdf5e02e9b913556f9304546d59e6c56 -->

<!-- START_d1d8340624b42ea8e015ce0a4d36342d -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/api/patients/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/patients/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/patients/create`


<!-- END_d1d8340624b42ea8e015ce0a4d36342d -->

<!-- START_9595666a103e105bb3f677f002653307 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://adarawellness.site/API/api/patients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/patients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/patients`


<!-- END_9595666a103e105bb3f677f002653307 -->

<!-- START_e21961238df73c8544f00766ed069000 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/api/patients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/patients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/patients/{patient}`


<!-- END_e21961238df73c8544f00766ed069000 -->

<!-- START_f79420b3006c6726b672d145d298b8a5 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/api/patients/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/patients/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/patients/{patient}/edit`


<!-- END_f79420b3006c6726b672d145d298b8a5 -->

<!-- START_7b1b54123a6d30586c3e445437e73fd5 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://adarawellness.site/API/api/patients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/patients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/patients/{patient}`

`PATCH api/patients/{patient}`


<!-- END_7b1b54123a6d30586c3e445437e73fd5 -->

<!-- START_91030317441de3d43a948f7948db4fe7 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://adarawellness.site/API/api/patients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/patients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/patients/{patient}`


<!-- END_91030317441de3d43a948f7948db4fe7 -->

<!-- START_39a10437236ed321e99b31d8fa4bb00e -->
## api/menuGet/{id}
> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/api/menuGet/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/menuGet/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/menuGet/{id}`


<!-- END_39a10437236ed321e99b31d8fa4bb00e -->

<!-- START_b6fb3955d79ab3295f59ba15c6099c51 -->
## api/menuDestroy/{id}
> Example request:

```bash
curl -X DELETE \
    "http://adarawellness.site/API/api/menuDestroy/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/menuDestroy/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/menuDestroy/{id}`


<!-- END_b6fb3955d79ab3295f59ba15c6099c51 -->

<!-- START_ea3c0f5dd4c5998fe9b798257f78f850 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/api/menu" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/menu"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/menu`


<!-- END_ea3c0f5dd4c5998fe9b798257f78f850 -->

<!-- START_ed97e8bc9cc67a90905e9878dd01494f -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/api/menu/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/menu/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/menu/create`


<!-- END_ed97e8bc9cc67a90905e9878dd01494f -->

<!-- START_351afbf68cdc889ba190421734e7eb10 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://adarawellness.site/API/api/menu" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/menu"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/menu`


<!-- END_351afbf68cdc889ba190421734e7eb10 -->

<!-- START_65d9dd4de943cdcbf510b2ed973f7a4c -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/api/menu/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/menu/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/menu/{menu}`


<!-- END_65d9dd4de943cdcbf510b2ed973f7a4c -->

<!-- START_3029d3edd03f0a003dea5998577ffd23 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/api/menu/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/menu/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/menu/{menu}/edit`


<!-- END_3029d3edd03f0a003dea5998577ffd23 -->

<!-- START_f53dba6cfb54b3d5fce826d2ec183d0e -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://adarawellness.site/API/api/menu/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/menu/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/menu/{menu}`

`PATCH api/menu/{menu}`


<!-- END_f53dba6cfb54b3d5fce826d2ec183d0e -->

<!-- START_5e4d0fa5178d3208821b11d9f6304860 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://adarawellness.site/API/api/menu/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/menu/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/menu/{menu}`


<!-- END_5e4d0fa5178d3208821b11d9f6304860 -->

<!-- START_96f51d2d5988169524b9b37093a7dac8 -->
## api/routinesAll
> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/api/routinesAll" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/routinesAll"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/routinesAll`


<!-- END_96f51d2d5988169524b9b37093a7dac8 -->

<!-- START_01918ce4fe1c3532aea96c9f0c62301a -->
## api/routinesLunes/{id}
> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/api/routinesLunes/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/routinesLunes/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/routinesLunes/{id}`


<!-- END_01918ce4fe1c3532aea96c9f0c62301a -->

<!-- START_9e03450dbf1e94ea95eace855efc3135 -->
## api/routinesMartes/{id}
> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/api/routinesMartes/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/routinesMartes/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/routinesMartes/{id}`


<!-- END_9e03450dbf1e94ea95eace855efc3135 -->

<!-- START_f4e63ea777f52ea49acc21fe979e32f3 -->
## api/routinesMiercoles/{id}
> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/api/routinesMiercoles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/routinesMiercoles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/routinesMiercoles/{id}`


<!-- END_f4e63ea777f52ea49acc21fe979e32f3 -->

<!-- START_f23011c2ff3562d38ec834cfb994a35c -->
## api/routinesJueves/{id}
> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/api/routinesJueves/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/routinesJueves/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/routinesJueves/{id}`


<!-- END_f23011c2ff3562d38ec834cfb994a35c -->

<!-- START_4b7235f6f9e14a920bf8faaa2db81e11 -->
## api/routinesViernes/{id}
> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/api/routinesViernes/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/routinesViernes/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/routinesViernes/{id}`


<!-- END_4b7235f6f9e14a920bf8faaa2db81e11 -->

<!-- START_405cdc56f8b0c1f709d00fc55ff04038 -->
## api/routinesSabado/{id}
> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/api/routinesSabado/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/routinesSabado/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/routinesSabado/{id}`


<!-- END_405cdc56f8b0c1f709d00fc55ff04038 -->

<!-- START_998afab6df52ad99b2ce646da7e881c0 -->
## api/routinesDomingo/{id}
> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/api/routinesDomingo/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/routinesDomingo/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/routinesDomingo/{id}`


<!-- END_998afab6df52ad99b2ce646da7e881c0 -->

<!-- START_51bf77b8e3ca41fe9f6224b1f19d20d7 -->
## api/documents/{id}
> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/api/documents/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/documents/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/documents/{id}`


<!-- END_51bf77b8e3ca41fe9f6224b1f19d20d7 -->

<!-- START_ae02407eec1b67e407606bd05b39f9d7 -->
## api/images/{id}
> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/api/images/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/images/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/images/{id}`


<!-- END_ae02407eec1b67e407606bd05b39f9d7 -->

<!-- START_31a08a5793ae1271d0e5668f724686d1 -->
## api/routines/{id}
> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/api/routines/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/api/routines/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/routines/{id}`


<!-- END_31a08a5793ae1271d0e5668f724686d1 -->

<!-- START_b02cca667ec87279205fe3b9282553cb -->
## patientsAll
> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/patientsAll" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/patientsAll"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET patientsAll`


<!-- END_b02cca667ec87279205fe3b9282553cb -->

<!-- START_4d98ceb5895c90ccd8dc6b25f5cbfbb3 -->
## patientsLogin
> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/patientsLogin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/patientsLogin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET patientsLogin`


<!-- END_4d98ceb5895c90ccd8dc6b25f5cbfbb3 -->

<!-- START_3b8aa393c70749e5ee650c3aa85850d3 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/patients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/patients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET patients`


<!-- END_3b8aa393c70749e5ee650c3aa85850d3 -->

<!-- START_1dc24064976726738a0eb620a38d2ec3 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/patients/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/patients/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET patients/create`


<!-- END_1dc24064976726738a0eb620a38d2ec3 -->

<!-- START_b44a6f256a52859d517180ca4bdecee7 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://adarawellness.site/API/patients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/patients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST patients`


<!-- END_b44a6f256a52859d517180ca4bdecee7 -->

<!-- START_2219d9ea499b5f43086e5d0014b58f78 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/patients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/patients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET patients/{patient}`


<!-- END_2219d9ea499b5f43086e5d0014b58f78 -->

<!-- START_acc24fc2b8d2d886b6fc89354ca784bd -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/patients/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/patients/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET patients/{patient}/edit`


<!-- END_acc24fc2b8d2d886b6fc89354ca784bd -->

<!-- START_cd7f4e6549330969c9bdd75a4d61b9f7 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://adarawellness.site/API/patients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/patients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT patients/{patient}`

`PATCH patients/{patient}`


<!-- END_cd7f4e6549330969c9bdd75a4d61b9f7 -->

<!-- START_cdca394843cb69779981a896be9ca3a4 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://adarawellness.site/API/patients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/patients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE patients/{patient}`


<!-- END_cdca394843cb69779981a896be9ca3a4 -->

<!-- START_416318edbadbf13343a67fad9a568d07 -->
## menuGet/{id}
> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/menuGet/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/menuGet/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET menuGet/{id}`


<!-- END_416318edbadbf13343a67fad9a568d07 -->

<!-- START_cf22812c0a034a4c27ed0ade5acde702 -->
## menuDestroy/{id}
> Example request:

```bash
curl -X DELETE \
    "http://adarawellness.site/API/menuDestroy/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/menuDestroy/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE menuDestroy/{id}`


<!-- END_cf22812c0a034a4c27ed0ade5acde702 -->

<!-- START_b7d2db06cc1dde3c5c7f05d72412964e -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/menu" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/menu"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET menu`


<!-- END_b7d2db06cc1dde3c5c7f05d72412964e -->

<!-- START_5991509e29141136c560d067b0abb348 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/menu/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/menu/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET menu/create`


<!-- END_5991509e29141136c560d067b0abb348 -->

<!-- START_f4218d4a606d6fd5c6c7a808af22ea2a -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://adarawellness.site/API/menu" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/menu"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST menu`


<!-- END_f4218d4a606d6fd5c6c7a808af22ea2a -->

<!-- START_a2c8a00ef3f3e513b8da42d14ae27d75 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/menu/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/menu/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET menu/{menu}`


<!-- END_a2c8a00ef3f3e513b8da42d14ae27d75 -->

<!-- START_7e81d6d3bd9b47003d03604313856445 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/menu/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/menu/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET menu/{menu}/edit`


<!-- END_7e81d6d3bd9b47003d03604313856445 -->

<!-- START_f42b4043e00c5b34a0a020c64aa9da81 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://adarawellness.site/API/menu/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/menu/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT menu/{menu}`

`PATCH menu/{menu}`


<!-- END_f42b4043e00c5b34a0a020c64aa9da81 -->

<!-- START_74084cbb414f0c2d891d089715c42e8f -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://adarawellness.site/API/menu/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/menu/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE menu/{menu}`


<!-- END_74084cbb414f0c2d891d089715c42e8f -->

<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://adarawellness.site/API/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "http://adarawellness.site/API/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST \
    "http://adarawellness.site/API/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://adarawellness.site/API/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://adarawellness.site/API/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_cb859c8e84c35d7133b6a6c8eac253f8 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://adarawellness.site/API/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://adarawellness.site/API/home"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET home`


<!-- END_cb859c8e84c35d7133b6a6c8eac253f8 -->


