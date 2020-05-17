# Module Title

Simple graphQl module , demonstrates how to create request with graphQl api and use it 

## Getting Started

http://mymagento.com/graphql

where http://mymagento.com is your domain name

### Prerequisites

Magento 2.3 installation with working graphQl
http://mymagento.com/graphql

### Use google chrome extension chromeiQl

http://mymagento.com/graphql

{
	demoModelData  {
    modelData
  }
}

desired output with dummy data

{
  "data": {
    "demoModelData": {
      "modelData": [
        "string1",
        "string2"
      ]
    }
  }
}

## Mutation
POST requests, changes the state of server
For Mutation have to given Input and Ouput 
Sample request given as below

mutation{
  createDemodata(input:{
    title:"Simple demo",
    description: "Simple graphql demo"
  }){
      title,
      description
  }
}

We can specify here required response data as well means only title or description as well

Sample Response output

{
  "data": {
    "createDemodata": {
      "title": "Simple demo",
      "description": "Simple graphql demo"
    }
  }
}


## Versioning

Magento 2.3.4

## Description
GraphQl provides single endpoint ie www.example.com/graphql as compared to multiple endpoints of REST api
Solves the problem overfecthing and underfetching data.

## Authors

* **Mahendra ** 



