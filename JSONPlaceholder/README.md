# JSONPlaceholder
On the website https://jsonplaceholder.typicode.com/, you will find 6 excellent examples of API endpoints for retreiving JSON data.

These consist of the following entities:
* posts
* comments
* albums
* photos
* todos
* users

## Task 1
Create, for each of these entities a new call with AXIOS. These calls should be separated by folder per entity in the following manner:

{entity}/index.js

For each entity, there should be 2 functions. One to get "all" the entities in one call, and one to get entity by id

The naming of these functions does not matter, as long as it is consistent and exported in a module which is callable from another file.

The todo's structure is provided for you. (Without functionality of course)

## Task 2
After creating these functions, create a new index.js. In this file, you will need to use the functions you created earlier. Use this to get all the todos and all the users.

After you have access to all the users in your new function, you will merge them. The output should be a function which outputs an object as follows.

```
{
  "todo": [
    {
      "userId": 1,
      "id": 1,
      "title": "delectus aut autem",
      "completed": false,
      "user": {
        "id": 1,
        "name": "Leanne Graham",
        "username": "Bret",
        "email": "Sincere@april.biz",
        "address": {
          "street": "Kulas Light",
          "suite": "Apt. 556",
          "city": "Gwenborough",
          "zipcode": "92998-3874",
          "geo": {
            "lat": "-37.3159",
            "lng": "81.1496"
          }
        },
        "phone": "1-770-736-8031 x56442",
        "website": "hildegard.org",
        "company": {
          "name": "Romaguera-Crona",
          "catchPhrase": "Multi-layered client-server neural-net",
          "bs": "harness real-time e-markets"
        }
      }
    },
    ...
  ],
  "done": [
    {
      "userId": 1,
      "id": 4,
      "title": "et porro tempora",
      "completed": true,
      "user": {
        "id": 1,
        "name": "Leanne Graham",
        "username": "Bret",
        "email": "Sincere@april.biz",
        "address": {
          "street": "Kulas Light",
          "suite": "Apt. 556",
          "city": "Gwenborough",
          "zipcode": "92998-3874",
          "geo": {
            "lat": "-37.3159",
            "lng": "81.1496"
          }
        },
        "phone": "1-770-736-8031 x56442",
        "website": "hildegard.org",
        "company": {
          "name": "Romaguera-Crona",
          "catchPhrase": "Multi-layered client-server neural-net",
          "bs": "harness real-time e-markets"
        }
      }
    },
    ...
  ]
}
```

The dots should of course be filled by the rest of the actual todo's