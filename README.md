# ElasticSearch Task 


How to run this project.

  - Run Elastic search from command line using this command 
  -      docker run -p 9200:9200 -e "http.host=0.0.0.0" -e "transport.host=127.0.0.1 docker.elastic.co/elasticsearch/elasticsearch:5.5.2 
  - Before Loading datasource you need to set up a mapping for the data using this command 
  -     curl --user elastic:changeme -XPUT 'localhost:9200/shakespeare?pretty' -H 'Content-Type: application/json' -d '{"mappings" : { "_default_" : { "properties" : {    "speaker" : {"type": "keyword" },"play_name" : {"type":"keyword" },"text_entry" : {"type":"text" },"line_id" : { "type" : "integer" },"speech_number" : {"type" : "integer" }   }  } }}'
  -     where elastic:changeme is the deault user of elsticsearch

  - Then download shakespeare data source using this command
  -     curl -XGET https://download.elastic.co/demos/kibana/gettingstarted/shakespeare.json > shakespeare.json
  - Now you ready to load data source and create indexing in elsatic search using this command.
  -     curl --user elastic:changeme -H 'Content-Type: application/x-ndjson' -XPOST 'localhost:9200/shakespeare/_bulk?pretty' --data-binary "@shakespeare.json"
  - take files and put in in your local machine if you are using xampp put them in xampp/htdocs/project_name/
  - you will need to run this command "composer install"
  - open your favorite broweser and hit localhost/projectname/
  - you will find simple search input , type your search and hit Enter.
  - response will contain speaker and text.
